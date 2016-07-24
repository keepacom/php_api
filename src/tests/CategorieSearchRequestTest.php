<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class CategorieSearchRequestTest extends abstractTest
{
    public function testBasic()
    {
        $request = Request::getCategorySearchRequest(AmazonLocale::US, "test", false);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->categories);
        self::assertGreaterThan(0, count($response->categories));
    }

    public function testParent()
    {
        $request = Request::getCategorySearchRequest(AmazonLocale::US, "test", true);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->categoryParents);
        self::assertGreaterThan(0, count($response->categoryParents));
    }
}