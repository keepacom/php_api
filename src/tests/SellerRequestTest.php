<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class SellerRequestTest extends AbstractTest
{
    const LOCALE = AmazonLocale::DE;
    const SELLER_ID = "A8KICS1PHF7ZO";

    public function testBasic()
    {
        $request = Request::getSellerRequest(self::LOCALE, [self::SELLER_ID]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
    }

    public function testFBA()
    {
        $request = Request::getSellerRequest(self::LOCALE, [self::SELLER_ID]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertTrue($response->sellers[self::SELLER_ID]->hasFBA);
    }

    public function testAsinList()
    {
        $request = Request::getSellerRequest(self::LOCALE, [self::SELLER_ID], true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
        self::assertGreaterThan(0, count($response->sellers[self::SELLER_ID]->asinList));
    }

    public function testAsinListLastSeen()
    {
        $request = Request::getSellerRequest(self::LOCALE, [self::SELLER_ID], true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
        self::assertGreaterThan(0, count($response->sellers[self::SELLER_ID]->asinListLastSeen));
    }

    public function testStoreFrontAsins()
    {
        $request = Request::getSellerRequest(self::LOCALE, [self::SELLER_ID], true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
        self::assertGreaterThan(0, count($response->sellers[self::SELLER_ID]->totalStorefrontAsins));
        self::assertNotNull($response->sellers[self::SELLER_ID]->shipsFromChina);
    }
}