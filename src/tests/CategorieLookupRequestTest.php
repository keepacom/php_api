<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class CategorieLookupRequestTest extends abstractTest
{
    public function testBasic()
    {
        $request = Request::getCategoryLookupRequest(AmazonLocale::US, false, "3109924011");

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->categories);
        self::assertEquals(1, count($response->categories));
    }

    public function testParent()
    {
        $request = Request::getCategoryLookupRequest(AmazonLocale::US, true, "3109924011");

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->categoryParents);
        self::assertGreaterThan(0, count($response->categoryParents));
    }
}