<?php

namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class LightingDealTest extends abstractTest
{
    public function testRun()
    {
        $request = Request::getLightningDealRequest(AmazonLocale::DE);
        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->lightningDeals);
        self::assertGreaterThan(0, count($response->lightningDeals));
    }

}