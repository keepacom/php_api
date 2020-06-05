<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\helper\CSVType;
use Keepa\helper\KeepaTime;
use Keepa\objects\AmazonLocale;

class CsvTypeTest extends AbstractTest
{
    public function testAmazon()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertEquals(1, count($response->products));
        self::assertEquals(1372, $response->products[0]->csv[CSVType::AMAZON][1]); //first price for Amazon is 1372!
    }

    public function testNew()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertEquals(1, count($response->products));
        self::assertEquals(1372, $response->products[0]->csv[CSVType::MARKET_NEW][1]); //first price for Amazon is 1372!
    }

    public function testUsed()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertEquals(1, count($response->products));
        self::assertEquals(1372, $response->products[0]->csv[CSVType::USED][1]); //first price for Amazon is 1372!
    }
}