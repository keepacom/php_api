<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class TopSellerRequestTest extends AbstractTest
{
    public function testBasic()
    {
        $request = Request::getTopSellerRequest(AmazonLocale::DE);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellerIdList);
        self::assertGreaterThan(0, count($response->sellerIdList));
    }

    public function testSellerIdFormat()
    {
        $request = Request::getTopSellerRequest(AmazonLocale::DE);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellerIdList);
        foreach ($response->sellerIdList as $sellerId) {
            self::assertIsString($sellerId);
            self::assertGreaterThan(0, strlen($sellerId));
        }
    }

    public function testUSLocale()
    {
        $request = Request::getTopSellerRequest(AmazonLocale::US);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->sellerIdList);
        self::assertGreaterThan(0, count($response->sellerIdList));
    }
}
