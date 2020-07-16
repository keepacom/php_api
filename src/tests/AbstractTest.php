<?php
namespace Keepa\tests;

use Keepa\KeepaAPI;
use PHPUnit\Framework\TestCase;

abstract class AbstractTest extends TestCase
{
    /* @var $api \Keepa\KeepaAPI */
    public $api = null;

    protected function setUp(): void
    {
        if($this->api == null) {
            $apiKey = getenv("KEEPA_APIKEY");
            if($apiKey == null || strlen($apiKey) < 5)
            {
                echo "No Keepa API-Key for testing provided".PHP_EOL;
                exit(254);
            }

            $this->api = new KeepaAPI($apiKey);

            $success = $this->api->ping();
            if($success == false)
            {
                echo "Keepa API-Key seems wrong..".PHP_EOL;
                exit(253);
            }
        }
    }
}