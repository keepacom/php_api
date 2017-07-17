<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\helper\CSVType;
use Keepa\objects\AmazonLocale;

class ProductRequestTest extends abstractTest
{
    public function testRun()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertEquals(1, count($response->products));
    }

    public function testStats()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, "2015-12-31", "2018-01-01", 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->stats);
        self::assertEquals(1, count($response->products));
    }

    public function testOffers()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->offers);
        self::assertEquals(1, count($response->products));
    }

    public function testNullCategory()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 0, null, null, 0, false, ['B00EA0XEMC']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNull($response->categories);
        self::assertEquals(1, count($response->products));
    }

    public function testRatingRequest()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, ['B00F8JDCO4'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->csv[CSVType::RATING]);
        self::assertNotNull($response->products[0]->csv[CSVType::COUNT_REVIEWS]);
    }
}