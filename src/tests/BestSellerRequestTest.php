<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class BestSellerRequestTest extends abstractTest
{
    public function testBasic()
    {
        $request = Request::getBestSellerRequest(AmazonLocale::US, "281052");

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->bestSellersList);
        self::assertGreaterThan(1, count($response->bestSellersList->asinList));
    }

    public function testLastUpdate()
    {
        $request = Request::getBestSellerRequest(AmazonLocale::US, "281052");

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->bestSellersList->lastUpdate);
    }

}