<?php
namespace Keepa\tests;

use Keepa\KeepaAPI;
use PHPUnit\Framework\TestCase;

abstract class abstractTest extends TestCase
{
    /* @var $api \Keepa\KeepaAPI */
    protected $api = null;

    protected function setUp()
    {
        $apiKey = getenv("apikey");
        self::assertNotNull($apiKey);

        $this->api = new KeepaAPI($apiKey);
    }

    protected function tearDown()
    {

    }
}