<?php

namespace Keepa\API;

interface HttpClientInterface
{
    /**
     * HttpClientInterface constructor
     */
    public function __construct();

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url);

    /**
     * @param string $agent
     * @return $this
     */
    public function setUserAgent($agent);

    /**
     * @param array $data
     * @return string
     */
    public function setPostData($data);

    /**
     * Execute the request
     * @return void
     */
    public function get();

    /**
     * @return int response code
     */
    public function getResponseCode();

    /**
     * @return string body
     */
    public function getBody();

    /**
     * Cleaning-up
     */
    public function __destruct();
}