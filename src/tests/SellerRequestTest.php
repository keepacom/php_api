<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class SellerRequestTest extends abstractTest
{
    public function testBasic()
    {
        $request = Request::getSellerRequest(AmazonLocale::US, ["A2L77EE7U53NWQ"]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
    }
}