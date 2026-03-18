<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class CategorieLookupRequestTest extends AbstractTest
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

    public function testCategoryStats()
    {
        // Use a well-known category with products: "Computers & Accessories" on DE
        $request = Request::getCategoryLookupRequest(AmazonLocale::DE, false, "528966011");

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->categories);
        $category = reset($response->categories);
        self::assertNotNull($category->avgBuyBox);
        self::assertNotNull($category->avgBuyBox90);
        self::assertNotNull($category->avgBuyBox365);
        self::assertNotNull($category->avgReviewCount);
        self::assertNotNull($category->avgRating);
        self::assertNotNull($category->sellerCount);
        self::assertNotNull($category->brandCount);
    }

    public function testCategoryPercentageFields()
    {
        $request = Request::getCategoryLookupRequest(AmazonLocale::DE, false, "528966011");

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->categories);
        $category = reset($response->categories);
        self::assertNotNull($category->isFBAPercent);
        self::assertNotNull($category->soldByAmazonPercent);
        self::assertNotNull($category->avgOfferCountNew);
        self::assertNotNull($category->avgOfferCountUsed);
    }
}