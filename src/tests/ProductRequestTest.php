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
        $fr = new ProductFinderRequest();
        $fr->avg1_AMAZON_gte = 100;
        $fr->avg1_AMAZON_lte = 10000;
        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::DE, $fr));
        self::assertEquals($finderResp->status, "OK");

        $response = null;
        foreach ($finderResp->asinList as $asin) {
            $r = $this->api->sendRequestWithRetry(
                Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, [$asin])
            );
            if ($r->status === "OK" && !empty($r->products[0]->frequentlyBoughtTogether)) {
                $response = $r;
                break;
            }
        }
        self::assertNotNull($response, "No product with frequentlyBoughtTogether found");
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
        $fr = new ProductFinderRequest();
        $fr->fbaFees_gte = 1;
        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::US, $fr));
        self::assertEquals($finderResp->status, "OK");
        self::assertGreaterThan(0, count($finderResp->asinList));

        $response = null;
        foreach ($finderResp->asinList as $asin) {
            $r = $this->api->sendRequestWithRetry(
                Request::getProductRequest(AmazonLocale::US, 0, null, null, 0, true, [$asin])
            );
            if ($r->status === "OK" && !empty($r->products)
                && !empty($r->products[0]->fbaFees)
                && $r->products[0]->fbaFees->pickAndPackFee !== null) {
                $response = $r;
                break;
            }
        }
        self::assertNotNull($response, "No product with complete fbaFees found");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->fbaFees);
        self::assertNotNull($response->products[0]->fbaFees->pickAndPackFee);
    }

    /**
     * @throws \Exception
     */
    public function testOffersOrder()
    {
        $fr = new ProductFinderRequest();
        $fr->count_NEW_gte = 3;
        $fr->avg1_NEW_gte = 100;
        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::US, $fr));
        self::assertEquals($finderResp->status, "OK");

        $response = null;
        foreach ($finderResp->asinList as $asin) {
            $r = $this->api->sendRequestWithRetry(
                Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, [$asin])
            );
            if ($r->status === "OK" && !empty($r->products) && $r->products[0]->liveOffersOrder !== null) {
                $response = $r;
                break;
            }
        }
        self::assertNotNull($response, "No product with liveOffersOrder found");
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
        $fr = new ProductFinderRequest();
        $fr->numberOfPages_gte = 1;
        $request = Request::getFinderRequest(AmazonLocale::US, $fr);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertGreaterThan(0, count($response->asinList));

        $request = Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, [$response->asinList[0]]);

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
        $fr = new ProductFinderRequest();
        $fr->avg1_AMAZON_gte = 100;
        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::DE, $fr));
        self::assertEquals($finderResp->status, "OK");

        $response = null;
        foreach ($finderResp->asinList as $asin) {
            $r = $this->api->sendRequestWithRetry(
                Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, true, [$asin])
            );
            if ($r->status === "OK" && !empty($r->products) && !empty($r->products[0]->ebayListingIds)) {
                $response = $r;
                break;
            }
        }
        self::assertNotNull($response, "No product with ebayListingIds found");
        self::assertGreaterThan(0, count((array)$response->products[0]->ebayListingIds));
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
        $fr = new ProductFinderRequest();
        $fr->couponOneTimeAbsolute_gte = 1;

        $request = Request::getFinderRequest(AmazonLocale::DE, $fr);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertGreaterThan(0, count($response->asinList));

        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, [$response->asinList[0]]);

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
        $fr = new ProductFinderRequest();
        $fr->avg1_RENT_gte = 0;
        $fr->isHighest_RENT = true;

        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::US, $fr));
        self::assertEquals($finderResp->status, "OK");
        self::assertGreaterThan(0, count($finderResp->asinList));

        // Batch-fetch all finder ASINs to find a product with historical rent data
        $batchResp = $this->api->sendRequestWithRetry(
            Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, $finderResp->asinList)
        );
        self::assertEquals($batchResp->status, "OK");

        $asin = null;
        foreach ($batchResp->products ?? [] as $product) {
            if (!empty($product->csv[CSVType::RENT])) {
                $asin = $product->asin;
                break;
            }
        }
        self::assertNotNull($asin, "No product with rental CSV data found");

        $response = $this->api->sendRequestWithRetry(
            Request::getProductRequest(AmazonLocale::US, 20, null, null, 0, true, [$asin])
        );
        self::assertEquals($response->status, "OK");
        self::assertGreaterThan(0, count($response->products));

        foreach ($response->products as $product) {
            self::assertGreaterThan(0, count($product->csv[CSVType::RENT]));
            if ($product->rentalPrices !== null) {
                self::assertNotNull($product->rentalPrices);
            }
            if ($product->rentalDetails !== null) {
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
        $fr = new ProductFinderRequest();
        $fr->availabilityAmazon = 4;

        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::DE, $fr));
        self::assertEquals($finderResp->status, "OK");
        self::assertGreaterThan(0, count($finderResp->asinList));

        $response = null;
        foreach ($finderResp->asinList as $asin) {
            $r = $this->api->sendRequestWithRetry(
                Request::getProductRequest(AmazonLocale::DE, 20, null, null, 0, true, [$asin])
            );
            if ($r->status === "OK" && !empty($r->products) && $r->products[0]->availabilityAmazonDelay !== null) {
                $response = $r;
                break;
            }
        }
        self::assertNotNull($response, "No product with availabilityAmazonDelay found");
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
        $fr = new ProductFinderRequest();
        $fr->buyBoxStatsSellerCount90_gte = 2;
        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::DE, $fr));
        self::assertEquals($finderResp->status, "OK");
        self::assertGreaterThan(0, count($finderResp->asinList));

        $response = $this->api->sendRequestWithRetry(
            Request::getDetailedProductRequest(AmazonLocale::DE, 20, "2015-12-31", "2026-01-01", 1, true, true, true, true, true, true, 365, [$finderResp->asinList[0]])
        );
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, count($response->products[0]->stats->buyBoxStats));
    }


    public function testBuyBoxUsedStats()
    {
        $request = Request::getProductRequest(AmazonLocale::US, 20, "2015-12-31", "2023-01-01", 1, true,["B0BDHWDR12"],["stats" => 180,"buybox" => 1]);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertEquals(1, count($response->products));
        self::assertGreaterThan(0, count($response->products[0]->stats->buyBoxStats));
        self::assertNotNull($response->products[0]->stats->buyBoxUsedStats);
        self::assertNotNull($response->products[0]->stats->buyBoxUsedCondition);

    }

    /**
     * @throws \Exception
     */
    public function testImages()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->images);
        self::assertGreaterThan(0, count($response->products[0]->images));
        self::assertNotNull($response->products[0]->images[0]->l);
    }

    /**
     * @throws \Exception
     */
    public function testCouponHistory()
    {
        $fr = new ProductFinderRequest();
        $fr->couponOneTimeAbsolute_gte = 1;

        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::DE, $fr));
        self::assertEquals($finderResp->status, "OK");
        self::assertGreaterThan(0, count($finderResp->asinList));

        $response = null;
        foreach ($finderResp->asinList as $asin) {
            $r = $this->api->sendRequestWithRetry(
                Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, [$asin])
            );
            if ($r->status === "OK" && !empty($r->products) && !empty($r->products[0]->couponHistory)) {
                $response = $r;
                break;
            }
        }
        self::assertNotNull($response, "No product with couponHistory found");
        self::assertNotNull($response->products[0]->couponHistory);
        self::assertGreaterThan(0, count($response->products[0]->couponHistory));
    }

    /**
     * @throws \Exception
     */
    public function testWebsiteDisplayGroup()
    {
        $fr = new ProductFinderRequest();
        $fr->avg1_AMAZON_gte = 100;
        $fr->avg1_AMAZON_lte = 10000;

        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::DE, $fr));
        self::assertEquals($finderResp->status, "OK");

        $response = null;
        foreach ($finderResp->asinList as $asin) {
            $r = $this->api->sendRequestWithRetry(
                Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, [$asin])
            );
            if ($r->status === "OK" && !empty($r->products) && !empty($r->products[0]->websiteDisplayGroup)) {
                $response = $r;
                break;
            }
        }
        self::assertNotNull($response, "No product with websiteDisplayGroup found");
        self::assertNotNull($response->products[0]->websiteDisplayGroup);
        self::assertNotNull($response->products[0]->websiteDisplayGroupName);
    }

    /**
     * @throws \Exception
     */
    public function testFormats()
    {
        $fr = new ProductFinderRequest();
        $fr->numberOfPages_gte = 1;

        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::US, $fr));
        self::assertEquals($finderResp->status, "OK");

        $response = null;
        foreach ($finderResp->asinList as $asin) {
            $r = $this->api->sendRequestWithRetry(
                Request::getProductRequest(AmazonLocale::US, 0, null, null, 0, true, [$asin])
            );
            if ($r->status === "OK" && !empty($r->products) && !empty($r->products[0]->formats)) {
                $response = $r;
                break;
            }
        }
        self::assertNotNull($response, "No book product with formats found");
        self::assertNotNull($response->products[0]->formats);
        self::assertGreaterThan(0, count($response->products[0]->formats));
        self::assertNotNull($response->products[0]->formats[0]->asin);
        self::assertNotNull($response->products[0]->formats[0]->format);
    }

    /**
     * @throws \Exception
     */
    public function testBuyBoxSavingBasis()
    {
        $fr = new ProductFinderRequest();
        $fr->avg1_AMAZON_gte = 100;
        $fr->avg1_AMAZON_lte = 50000;

        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::DE, $fr));
        self::assertEquals($finderResp->status, "OK");

        $response = null;
        foreach ($finderResp->asinList as $asin) {
            $r = $this->api->sendRequestWithRetry(
                Request::getProductRequest(AmazonLocale::DE, 20, "2015-12-31", "2026-01-01", 0, true, [$asin], ["buybox" => 1])
            );
            if ($r->status === "OK" && !empty($r->products)
                && !empty($r->products[0]->stats)
                && $r->products[0]->stats->buyBoxSavingBasisType !== null) {
                $response = $r;
                break;
            }
        }
        self::assertNotNull($response, "No product with buyBoxSavingBasisType found");
        self::assertNotNull($response->products[0]->stats->buyBoxSavingBasisType);
        self::assertNotNull($response->products[0]->stats->buyBoxSavingPercentage);
    }

    /**
     * @throws \Exception
     */
    public function testSalesRankDrops365()
    {
        $fr = new ProductFinderRequest();
        $fr->salesRankDrops360_gte = 1;

        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::DE, $fr));
        self::assertEquals($finderResp->status, "OK");
        self::assertGreaterThan(0, count($finderResp->asinList));

        $response = $this->api->sendRequestWithRetry(
            Request::getProductRequest(AmazonLocale::DE, 0, "2015-12-31", "2026-01-01", 0, true, [$finderResp->asinList[0]])
        );
        self::assertEquals($response->status, "OK");
        self::assertEquals(1, count($response->products));
        self::assertNotNull($response->products[0]->stats);
        self::assertGreaterThan(0, $response->products[0]->stats->salesRankDrops365);
    }

    /**
     * @throws \Exception
     */
    public function testStatusCode()
    {
        $request = Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, false, ['B001G73S50']);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->statusCode);
        self::assertGreaterThan(0, $response->statusCode);
    }
}