<?php

namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\helper\AvailabilityType;
use Keepa\helper\CSVType;
use Keepa\helper\KeepaTime;
use Keepa\objects\AmazonLocale;

class AvailTypeTest extends abstractTest
{
    public function testAmazon()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertEquals(1, count($response->products));
        self::assertEquals(AvailabilityType::NOW, $response->products[0]->availabilityAmazon); //first price for Amazon is 1372!
    }
}