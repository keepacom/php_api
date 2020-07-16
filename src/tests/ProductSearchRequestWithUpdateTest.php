<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class ProductSearchRequestWithUpdateTest extends AbstractTest
{
    public function testBasic()
    {
        $request = Request::getProductSearchRequestWithUpdate(AmazonLocale::DE, "test", false, 1, false);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertGreaterThan(0, count($response->products));
    }

    public function testStats()
    {
        $request = Request::getProductSearchRequestWithUpdate(AmazonLocale::DE, "test", true, 1, false);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->stats);
        self::assertGreaterThan(0, count($response->products));
    }

    public function testHistory()
    {
        $request = Request::getProductSearchRequestWithUpdate(AmazonLocale::DE, "test", true, 0, true);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->csv);
        self::assertGreaterThan(0, count($response->products));
    }
}