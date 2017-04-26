<?php
namespace Keepa\tests;

use Keepa\KeepaAPI;
use PHPUnit\Framework\TestCase;

abstract class abstractTest extends TestCase
{
    /* @var $api \Keepa\KeepaAPI */
    public $api = null;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $apiKey = getenv("apikey");
        self::assertNotNull($apiKey);

        $this->api = new KeepaAPI($apiKey);
    }

    protected function tearDown()
    {

    }
}