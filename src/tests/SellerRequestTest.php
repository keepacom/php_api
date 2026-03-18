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

    public function testRecentFeedback()
    {
        $seller = "ALYY2EOZQ7QUK";
        $request = Request::getSellerRequest(self::LOCALE, [$seller], true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
        self::assertGreaterThan(0, count($response->sellers[$seller]->totalStorefrontAsins));
        self::assertNotNull($response->sellers[$seller]->recentFeedback);
    }

    public function testTotalStorefrontAsinsCSV()
    {
        $request = Request::getSellerRequest(self::LOCALE, [self::SELLER_ID], true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        self::assertEquals(1, count($response->sellers));
        self::assertNotNull($response->sellers[self::SELLER_ID]->totalStorefrontAsinsCSV);
        self::assertGreaterThan(0, count($response->sellers[self::SELLER_ID]->totalStorefrontAsinsCSV));
    }

    public function testBuyBoxOwnershipRates()
    {
        $request = Request::getSellerRequest(self::LOCALE, [self::SELLER_ID]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        $seller = $response->sellers[self::SELLER_ID];
        self::assertNotNull($seller->buyBoxNewOwnershipRate);
        self::assertNotNull($seller->buyBoxUsedOwnershipRate);
    }

    public function testAvgBuyBoxCompetitors()
    {
        $request = Request::getSellerRequest(self::LOCALE, [self::SELLER_ID]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        $seller = $response->sellers[self::SELLER_ID];
        self::assertNotNull($seller->avgBuyBoxCompetitors);
    }

    public function testCompetitors()
    {
        $request = Request::getSellerRequest(self::LOCALE, [self::SELLER_ID]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellers);
        $seller = $response->sellers[self::SELLER_ID];
        self::assertNotNull($seller->competitors);
        self::assertGreaterThan(0, count($seller->competitors));
        self::assertNotNull($seller->competitors[0]->sellerId);
        self::assertNotNull($seller->competitors[0]->percent);
    }
}