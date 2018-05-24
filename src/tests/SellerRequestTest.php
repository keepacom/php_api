<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class SellerRequestTest extends abstractTest
{
    const SELLER_ID = "A2L77EE7U53NWQ";

    public function testBasic()
    {
        $request = Request::getSellerRequest(AmazonLocale::US, [self::SELLER_ID]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
    }

    public function testFBA()
    {
        $request = Request::getSellerRequest(AmazonLocale::US, [self::SELLER_ID]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertTrue($response->sellers['A2L77EE7U53NWQ']->hasFBA);
    }

    public function testAsinList()
    {
        $request = Request::getSellerRequest(AmazonLocale::US, [self::SELLER_ID], true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
        self::assertGreaterThan(0, count($response->sellers['A2L77EE7U53NWQ']->asinList));
    }

    public function testAsinListLastSeen()
    {
        $request = Request::getSellerRequest(AmazonLocale::US, [self::SELLER_ID], true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
        self::assertGreaterThan(0, count($response->sellers['A2L77EE7U53NWQ']->asinListLastSeen));
    }

    public function testStoreFrontAsins()
    {
        $request = Request::getSellerRequest(AmazonLocale::US, [self::SELLER_ID], true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
        self::assertGreaterThan(0, count($response->sellers['A2L77EE7U53NWQ']->totalStorefrontAsins));
    }
}