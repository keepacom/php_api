<?php
namespace Keepa;

use JsonMapper;
use Keepa\API\CurlClient;
use Keepa\API\HttpClientInterface;
use Keepa\API\Request;
use Keepa\API\Response;
use Keepa\API\ResponseStatus;
use Keepa\objects\AmazonLocale;

class KeepaAPI
{
    const MAX_DELAY = 60000;

    private $accessKey = null;
    private $userAgent = null;
    private $serializer = null;
    private $httpClient = null;
    private static $VERSION = "2.0.3";

    public function __construct($accessKey)
    {
        $this->accessKey = $accessKey;
        $this->userAgent = "KEEPA-PHP Framework-" . self::$VERSION . " | " . phpversion();
        $this->serializer = new JsonMapper();

        if (PHP_INT_SIZE != 8)
            throw new \Exception("This Framework works only on x64 Platforms/PHP!");
    }

    /**
     * Issue a request to the Keepa Price Data API.
     * If your tokens are depleted, this method will fail.
     *
     * @param Request $r
     * @return Response|object
     * @throws \Exception
     */
    public function sendRequest(Request $r)
    {
        $url = "https://api.keepa.com/" . $r->path . "/?key=" . $this->accessKey . "&" . $r->query();

        $debugRequests = getenv("DEBUG_REQUESTS");
        if ($debugRequests != null && boolval($debugRequests) == true) {
            echo $url . PHP_EOL;
        }

        /* @var Response */
        $response = new Response($r);

        // create client
        $client = $this->getHttpClient()
            ->setUrl($url)
            ->setUserAgent($this->userAgent);

        if ($r->postData != null) {
            $client->setPostData($r->postData);
        }

        $responseTime = microtime(true);

        $client->get();

        // $output contains the output string
        $output = $client->getBody();

        $responseCode = $client->getResponseCode();
        if ($responseCode == 200) {
            try {
                $jo = json_decode($output);
                if ($jo == null || $jo === false)
                    throw new \Exception("Failed to parse JSON");

                $response = $this->serializer->map($jo, new Response($r));
                //$response = $this->serializer->deserialize($output, 'Keepa\API\Response', 'json');
                $response->status = ResponseStatus::OK;
            } catch (\Exception $e) {
                $response->status = ResponseStatus::REQUEST_FAILED;
                throw $e;
            }
        } else if($responseCode == 503) // backend down, retry again..
        {
            $response->status = ResponseStatus::FAIL;
        } else {
            try {
                $jo = json_decode($output);
                if ($jo == null || $jo === false)
                    throw new \Exception("Failed to parse JSON (" . $responseCode . "): " . $jo);

                $response = $this->serializer->map($jo, new Response($r));

                switch ($responseCode) {
                    case 400:
                        $response->status = ResponseStatus::REQUEST_REJECTED;
                        break;
                    case 402:
                        $response->status = ResponseStatus::PAYMENT_REQUIRED;
                        break;
                    case 405:
                        $response->status = ResponseStatus::METHOD_NOT_ALLOWED;
                        break;
                    case 429:
                        $response->status = ResponseStatus::NOT_ENOUGH_TOKEN;
                        break;
                    default:
                        $response->error = $output;
                        $response->status = ResponseStatus::REQUEST_FAILED;
                        break;
                }

                return $response;
            } catch (\Exception $e) {
                $response->status = ResponseStatus::REQUEST_FAILED;
                throw $e;
            }
        }


        // close curl resource to free up system resources
        $response->url = $url;
        $response->requestTime = intval((microtime(true) - $responseTime) * 1000);

        return $response;
    }


    /**
     * Issue a request to the Keepa Price Data API.
     * If your API contigent is depleted, this method will retry the request as soon as there are new tokens available. May take minutes.
     * Will fail it the request failed too many times.
     *
     * @param Request $r
     * @return Response
     * @throws \Exception
     */
    public function sendRequestWithRetry(Request $r)
    {
        $retry = 0;
        $delay = 0;
        $expoDelay = 0;

        /* @var Response */
        $lastResponse = null;

        while (true) {
            if ($lastResponse != null && $lastResponse->status == ResponseStatus::NOT_ENOUGH_TOKEN && $lastResponse->refillIn > 0) {
                $delay = $lastResponse->refillIn + 100;
            }
            if ($retry > 0)
                usleep($delay * 1000);

            $result = $this->sendRequest($r);
            switch ($result->status) {
                case ResponseStatus::OK:
                    return $result;
                case ResponseStatus::FAIL:
                case ResponseStatus::NOT_ENOUGH_TOKEN:
                    $lastResponse = $result;
                    $retry++;
                    $delay = min(2 * $expoDelay + 100, self::MAX_DELAY);
                    continue 2;
                default:
                    return $result;
            }
        }
    }

    public function setHttpClient($client)
    {
        $this->httpClient = $client;
    }

    /**
     * Returns a suitable HttpClient
     * @return HttpClientInterface
     */
    protected function getHttpClient()
    {
        if(!$this->httpClient){
            $this->httpClient = new CurlClient;
        }

        return $this->httpClient;
    }

    /**
     * check if the provided token is valid
     * @return bool
     */
    public function ping()
    {
        $request = Request::getTokenStatusRequest();
        $response = $this->sendRequestWithRetry($request);
        if($response->status == "OK")
            return true;
        else
            return false;
    }
}
