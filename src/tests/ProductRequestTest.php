<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\helper\CSVType;
use Keepa\helper\CSVTypeWrapper;
use Keepa\helper\HazardousMaterialType;
use Keepa\helper\ProductAnalyzer;
use Keepa\objects\AmazonLocale;

class ProductRequestTest extends abstractTest
{
    public function testRun()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertEquals(1, count($response->products));
    }

    public function testStats()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, "2015-12-31", "2018-01-01", 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->stats);
        self::assertEquals(1, count($response->products));
    }

    public function testStatsLightingDeals()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, "2015-12-31", "2018-01-01", 0, false, ['B00B84Y4F4']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->stats);
        self::assertNotNull($response->products[0]->stats->lightningDealInfo);
    }

    public function testOffers()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->offers);
        self::assertEquals(1, count($response->products));
    }

    public function testNullCategory()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 0, null, null, 0, false, ['B00EA0XEMC']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNull($response->categories);
        self::assertEquals(1, count($response->products));
    }

    public function testRatingRequest()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, ['B00F8JDCO4'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->csv[CSVType::RATING]);
        self::assertNotNull($response->products[0]->csv[CSVType::COUNT_REVIEWS]);
    }

    public function testFrequentlyBoughtTogether()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, ['B00F8JDCO4'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->frequentlyBoughtTogether);
        self::assertGreaterThan(0, count($response->products[0]->frequentlyBoughtTogether));
    }

    public function testDescription()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, ['B00F8JDCO4'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products[0]->description);
    }

    public function testFeatures()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 1, true, ['B00F8JDCO4'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products[0]->features);
        self::assertGreaterThan(0, count($response->products[0]->features));
    }

    public function testHazardousMaterialType()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 0, null, null, 1, true, ['B00EAN1APM'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products[0]->hazardousMaterialType);
        self::assertEquals(HazardousMaterialType::ORM_D_Class, $response->products[0]->hazardousMaterialType);
    }

    public function testRent()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 1, true, ['1616195479'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, count($response->products[0]->csv[CSVType::RENT]));
    }

    public function testMap()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 1, true, ['B008CZCS2S'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertTrue($response->products[0]->newPriceIsMAP);
    }

    public function testPromotions()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 0, null, null, 1, true, ['B00V84EH6A'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, count($response->products[0]->promotions));
        self::assertNotNull($response->products[0]->promotions[0]->benefitDescription);
        self::assertNotNull($response->products[0]->promotions[0]->eligibilityRequirementDescription);
        self::assertNotNull($response->products[0]->promotions[0]->promotionId);
        self::assertNotNull($response->products[0]->promotions[0]->type);
    }

    public function testOffersOrder()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 1, true, ['B00V84EH6A'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, count($response->products[0]->promotions));
        self::assertNotNull($response->products[0]->liveOffersOrder);
    }
}