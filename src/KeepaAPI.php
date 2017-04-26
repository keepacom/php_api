<?php
namespace Keepa;

use JsonMapper;
use Keepa\API\Request;
use Keepa\API\Response;
use Keepa\API\ResponseStatus;

class KeepaAPI
{
    const MAX_DELAY = 60000;

    private $accessKey = null;
    private $userAgent = null;
    private $serializer = null;

    public function __construct($accessKey)
    {
        $this->accessKey = $accessKey;
        $this->userAgent = "KEEPA-PHP Framework-" . "1.12.4";
        $this->serializer = new JsonMapper();

        if (PHP_INT_SIZE != 8)
            throw new \Exception("This Framework works only on x64 Platforms/PHP!");
    }

    /**
     * Issue a request to the Keepa Price Data API.
     * If your tokens are depleted, this method will fail.
     *
     * @param r Request the API Request {@link Request}
     * @return Response for {@link Response}
     * @throws \Exception
     */
    public function sendRequest(Request $r)
    {
        $url = "https://api.keepa.com/" . $r->path . "/?key=" . $this->accessKey . "&" . $r->query();
        //$url = "https://api.keepa.com/product/?key=" . $this->accessKey . "&" . "domain=3&asin=B016XONOAO,B016XONOAO";

        $response = new Response($r);

        // create curl resource
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->userAgent);
        curl_setopt($ch, CURLOPT_ENCODING, "gzip");

        if ($r->postData != null) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $r->postData);
        }

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


        $responseTime = microtime(true);

        // $output contains the output string
        $output = curl_exec($ch);

        if ($output === false)
            throw new \Exception(curl_error($ch));

        $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($responseCode == 200) {
            try {
                $jo = json_decode($output);
                if ($jo === false)
                    throw new \Exception("Failed to parse JSON");

                $response = $this->serializer->map($jo, new Response($r));
                //$response = $this->serializer->deserialize($output, 'Keepa\API\Response', 'json');
                $response->status = ResponseStatus::OK;
            } catch (\Exception $e) {
                $response->status = ResponseStatus::REQUEST_FAILED;
                throw $e;
            }
        } else {
            try {
                $jo = json_decode($output);
                if ($jo === false)
                    throw new \Exception("Failed to parse JSON");
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
        curl_close($ch);
        $response->url = $url;
        $response->requestTime = intval((microtime(true) - $responseTime) * 1000);

        return $response;
    }


    /**
     * Issue a request to the Keepa Price Data API.
     * If your API contigent is depleted, this method will retry the request as soon as there are new tokens available. May take minutes.
     * Will fail it the request failed too many times.
     *
     * @param r Request the API Request {@link Request}
     * @return
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
            switch ($result->status == ResponseStatus::OK) {
                case ResponseStatus::OK:
                    return $result;
                case ResponseStatus::FAIL:
                case ResponseStatus::NOT_ENOUGH_TOKEN:
                    $lastResponse = $result;
                    $retry++;
                    $delay = min(2 * $expoDelay + 100, self::MAX_DELAY);
                    continue;
                default:
                    return $result;
            }
        }
    }
}