<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class ProductSearchRequestTest extends AbstractTest
{
    public function testBasic()
    {
        $request = Request::getProductSearchRequest(AmazonLocale::DE, "test", false);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertGreaterThan(0, count($response->products));
    }

    public function testStats()
    {
        $request = Request::getProductSearchRequest(AmazonLocale::DE, "test", true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->stats);
        self::assertGreaterThan(0, count($response->products));
    }
}