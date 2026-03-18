<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;
use Keepa\objects\ProductFinderRequest;

class BestSellerRequestTest extends AbstractTest
{
    private function findCategoryWithBestSellers(): string
    {
        $fr = new ProductFinderRequest();
        $fr->avg1_SALES_gte = 1;
        $fr->avg1_SALES_lte = 10000;
        $finderResp = $this->api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::US, $fr));
        self::assertEquals($finderResp->status, "OK");

        $prodResp = $this->api->sendRequestWithRetry(
            Request::getProductRequest(AmazonLocale::US, 0, null, null, 0, false, [$finderResp->asinList[0]])
        );
        self::assertEquals($prodResp->status, "OK");

        foreach ((array)$prodResp->products[0]->salesRanks as $catId => $hist) {
            $bsResp = $this->api->sendRequestWithRetry(
                Request::getBestSellerRequest(AmazonLocale::US, (string)$catId)
            );
            if ($bsResp->status === "OK" && !empty($bsResp->bestSellersList->asinList) && count($bsResp->bestSellersList->asinList) > 1) {
                return (string)$catId;
            }
        }
        self::fail("No category with bestsellers found");
    }

    public function testBasic()
    {
        $categoryId = $this->findCategoryWithBestSellers();
        $request = Request::getBestSellerRequest(AmazonLocale::US, $categoryId);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->bestSellersList);
        self::assertGreaterThan(1, count($response->bestSellersList->asinList));
    }

    public function testLastUpdate()
    {
        $categoryId = $this->findCategoryWithBestSellers();
        $request = Request::getBestSellerRequest(AmazonLocale::US, $categoryId);

        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->bestSellersList->lastUpdate);
    }

}