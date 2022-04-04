<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\helper\AvailabilityType;
use Keepa\helper\CSVType;
use Keepa\objects\AmazonLocale;
use Keepa\objects\ProductFinderRequest;

class ProductRequestTest extends AbstractTest
{
    /**
     * @throws \Exception
     */
    public function testRun()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertEquals(1, count($response->products));
    }

    /**
     * @throws \Exception
     */
    public function testStats()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, "2015-12-31", "2018-01-01", 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->stats);
        self::assertEquals(1, count($response->products));
    }

    /**
     * @throws \Exception
     */
    public function testStatsLightingDeals()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, "2015-12-31", "2018-01-01", 0, false, ['B00B84Y4F4']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->stats);
        self::assertNotNull($response->products[0]->stats->lightningDealInfo);
    }

    /**
     * @throws \Exception
     */
    public function testOffers()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->offers);
        self::assertEquals(1, count($response->products));
    }

    /**
     * @throws \Exception
     */
    public function testIsFBA()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->offers);
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->offers[0]->isFBA);
    }

    /**
     * @throws \Exception
     */
    public function testIsCustomizeable()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->offers);
        self::assertEquals(1, count($response->products));
        self::assertNull($response->products[0]->offers[0]->isCustomizeable);
    }

    /**
     * @throws \Exception
     */
    public function testNullCategory()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 0, null, null, 0, false, ['B00EA0XEMC']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNull($response->categories);
        self::assertEquals(1, count($response->products));
    }

    /**
     * @throws \Exception
     */
    public function testRatingRequest()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, ['B00F8JDCO4'], ["rating" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->csv[CSVType::RATING]);
        self::assertNotNull($response->products[0]->csv[CSVType::COUNT_REVIEWS]);
    }

    /**
     * @throws \Exception
     */
    public function testFrequentlyBoughtTogether()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, ['B00F8JDCO4']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->frequentlyBoughtTogether);
        self::assertGreaterThan(0, count($response->products[0]->frequentlyBoughtTogether));
    }

    /**
     * @throws \Exception
     */
    public function testDescription()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, ['B00F8JDCO4']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products[0]->description);
    }

    /**
     * @throws \Exception
     */
    public function testFeatures()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, ['B00F8JDCO4']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products[0]->features);
        self::assertGreaterThan(0, count($response->products[0]->features));
    }

    /**
     * @throws \Exception
     */
    public function testRent()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['1616195479']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, count($response->products[0]->csv[CSVType::RENT]));
    }

    /**
     * @throws \Exception
     */
    public function testMap()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['B008CZCS2S']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->newPriceIsMAP);
    }


    /**
     * @throws \Exception
     */
    public function testVariations()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, ['B00OJ732J6']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->variations);
        self::assertGreaterThan(0, $response->products[0]->variations);
        self::assertNotNull($response->products[0]->variations[0]->asin);
        self::assertNotNull($response->products[0]->variations[0]->attributes);
        self::assertNotNull($response->products[0]->variations[0]->attributes[0]->dimension);
    }

    /**
     * @throws \Exception
     */
    public function testFBAFees()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 0, null, null, 0, true, ['B00V84EH6A']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->fbaFees);
        self::assertNotNull($response->products[0]->fbaFees->pickAndPackFee);
        self::assertNotNull($response->products[0]->fbaFees->pickAndPackFeeTax);
        self::assertNotNull($response->products[0]->fbaFees->storageFee);
        self::assertNotNull($response->products[0]->fbaFees->storageFeeTax);
    }

    /**
     * @throws \Exception
     */
    public function testOffersOrder()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['B00V84EH6A']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products);
        self::assertGreaterThan(0, count($response->products));
        self::assertNotNull($response->products[0]->liveOffersOrder);
    }

    /**
     * @throws \Exception
     */
    public function testAuthor()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['3551354022']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->author);
    }

    /**
     * @throws \Exception
     */
    public function testBinding()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['3551354022']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->binding);
    }

    /**
     * @throws \Exception
     */
    public function testNumberOfItems()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['B00V84EH6A']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, $response->products[0]->numberOfItems);
    }

    /**
     * @throws \Exception
     */
    public function testNumberOfPages()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['3551354022']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, $response->products[0]->numberOfPages);
    }

    /**
     * @throws \Exception
     */
    public function testPublicationDate()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['3551354022']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, $response->products[0]->publicationDate);
    }

    /**
     * @throws \Exception
     */
    public function testReleaseDate()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['B071QY1WLY']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, $response->products[0]->releaseDate);
    }

    /**
     * @throws \Exception
     */
    public function testLanguages()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['3551354022']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->languages);
        self::assertGreaterThan(0, count($response->products[0]->languages));
    }

    /**
     * @throws \Exception
     */
    public function testEbayListing()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, true, ['0007151667']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->languages);
        self::assertGreaterThan(0, $response->products[0]->ebayListingIds);
    }

    /**
     * @throws \Exception
     */
    public function testEbayLastUpdate()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, true, ['0007151667']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->languages);
        self::assertNotEquals(0, $response->products[0]->lastEbayUpdate);
    }

    /**
     * @throws \Exception
     */
    public function testOfferRatingUpdate()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, ['3551354022']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->languages);
        self::assertGreaterThan(0, $response->products[0]->lastRatingUpdate);
    }


    /**
     * @throws \Exception
     */
    public function testCoupons()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, ['B00FLP2D68']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products);
        self::assertGreaterThan(0, count($response->products));
        self::assertNotNull($response->products[0]->coupon);
        self::assertGreaterThan(0, count($response->products[0]->coupon));
    }


    /**
     * @throws \Exception
     */
    public function testCategoryTree()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNull($response->categories);
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->categoryTree);
        self::assertGreaterThan(0, count($response->products[0]->categoryTree));
    }

    /**
     * @throws \Exception
     */
    public function testFinder()
    {
        $fr = new ProductFinderRequest();
        $fr->avg1_AMAZON_gte = 1;

        $request = Request::getFinderRequest(AmazonLocale::DE, $fr);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertGreaterThan(0, count($response->asinList));
    }

    /**
     * @throws \Exception
     */
    public function testItemDimensions()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, true, ['B00V84EH6A']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, $response->products[0]->itemWidth);
        self::assertGreaterThan(0, $response->products[0]->itemHeight);
        self::assertGreaterThan(0, $response->products[0]->itemLength);
        self::assertGreaterThan(0, $response->products[0]->itemWeight);
    }


    /**
     * @throws \Exception
     */
    public function testSalesRanks()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, true, ['B07HB4TJH1']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->salesRanks);
        foreach($response->products[0]->salesRanks as $caId => $historie)
        {
            self::assertGreaterThan(0, $caId);
            self::assertGreaterThan(0, count($historie));
        }
    }


    /**
     * @throws \Exception
     */

    public function testRental()
    {
        // find product
        $fr = new ProductFinderRequest();
        $fr->avg1_RENT_gte = 0;
        $fr->isHighest_RENT = true;

        $request = Request::getFinderRequest(AmazonLocale::US, $fr);
        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertGreaterThan(0, count($response->asinList));

        // test product
        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, $response->asinList);
        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertGreaterThan(0, count($response->products));

        for ($i = 0; $i < count($response->products);$i++) {
            $product = $response->products[$i];
            self::assertGreaterThan(0, count($product->csv[CSVType::RENT]));
            self::assertNotNull($product->rentalDetails);

            self::assertNotNull($product->rentalPrices);

            if ($product->rentalDetails) {
                self::assertNotNull($product->rentalDetails);
                self::assertNotNull($product->rentalSellerId);
            }
        }
    }

    /**
     * @throws \Exception
     */
    /*public function testLaunchpad() {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, true, ['B0963X9XLB']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertTrue($response->products[0]->launchpad);
    }*/

    /**
     * @throws \Exception
     */
    public function testAmazonDelay()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, true, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->availabilityAmazonDelay);
    }

    /**
     * @throws \Exception
     */
    public function testDetailedProductRequest()
    {
        $request = Request::getDetailedProductRequest(AmazonLocale::DE, 20, null, null, 1, true,true,true,true,true,true,365,['B07GSBJ7F3']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
    }


    /**
     * @throws \Exception
     */
    public function testBuyBoxStats()
    {

        $request = Request::getDetailedProductRequest(AmazonLocale::DE, 20, "2015-12-31", "2022-01-01", 1, true,true,true,true,true,true,365,['B097F5K5RY']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, count($response->products[0]->stats->buyBoxStats));
    }
}