<?php

namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\helper\AvailabilityType;
use Keepa\helper\CSVType;
use Keepa\helper\KeepaTime;
use Keepa\objects\AmazonLocale;
use Keepa\objects\ProductFinderRequest;

class AvailTypeTest extends AbstractTest
{
    public function testAmazon()
    {
        // find product
        $fr = new ProductFinderRequest();
        $fr->availabilityAmazon[] = AvailabilityType::NOW;

        $request = Request::getFinderRequest(AmazonLocale::DE, $fr);
        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertGreaterThan(0, count($response->asinList));

        // test product
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, [$response->asinList[0]]);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertEquals(1, count($response->products));
        self::assertEquals(AvailabilityType::NOW, $response->products[0]->availabilityAmazon); //first price for Amazon is 1372!
    }
}