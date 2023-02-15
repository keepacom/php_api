<?php

namespace Keepa\API;

class CurlClient implements HttpClientInterface
{
    /**
     * @var resource
     */
    protected $ch;

    /**
     * @var array
     */
    protected $postData = [];

    /**
     * @var mixed
     */
    protected $body;

    /**
     * @inheritDoc
     */
    public function __construct()
    {
        $this->ch = curl_init();
        $this->setOpt(CURLOPT_ENCODING, 'gzip');
        $this->setOpt(CURLOPT_RETURNTRANSFER, true);

        $disableVerify = getenv("DISABLE_SSL_VERIFY");
        if ($disableVerify != null && boolval($disableVerify) == true) {
            $this->setOpt(CURLOPT_SSL_VERIFYHOST, false);
            $this->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        }
    }

    /**
     * @inheritDoc
     */
    public function setUrl($url)
    {
        $this->setOpt(CURLOPT_URL, $url);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setUserAgent($agent)
    {
        $this->setOpt(CURLOPT_USERAGENT, $agent);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setPostData($data)
    {
        $this->postData = $data;
        $this->setOpt(CURLOPT_POST, true);
        $this->setOpt(CURLOPT_POSTFIELDS, $this->postData);
        return $this;
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function get()
    {
        $this->body = curl_exec($this->ch);
        if($this->body === false)
            throw new \Exception(curl_error($this->ch));
    }

    /**
     * @inheritDoc
     */
    public function getResponseCode()
    {
        return curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
    }

    /**
     * @inheritDoc
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @inheritDoc
     */
    public function __destruct()
    {
        curl_close($this->ch);
    }

    /**
     * @param $key
     * @param $value
     */
    protected function setOpt($key, $value)
    {
        curl_setopt($this->ch, $key, $value);
    }


}