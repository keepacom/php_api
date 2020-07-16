<?php
namespace Keepa\tests;

use Keepa\API\DealRequest;
use Keepa\API\Request;

class DealRequestTest extends AbstractTest
{
    public function testRun()
    {
        $dealRequest = new DealRequest();
        $dealRequest->page = 0;
        $dealRequest->domainId = 1;
        $dealRequest->excludeCategories = [1064954, 11091801];
        $dealRequest->includeCategories = [16310101];
        $dealRequest->priceTypes = [0];
        $dealRequest->deltaRange = [0, 10000];
        $dealRequest->deltaPercentRange = [20, 100];
        $dealRequest->deltaLastRange = null;
        $dealRequest->salesRankRange = [0, 40000];
        $dealRequest->currentRange = [500, 40000];
        $dealRequest->isLowest = false;
        $dealRequest->isHighest = false;
        $dealRequest->isLowestOffer = false;
        $dealRequest->isRisers = false;
        $dealRequest->isBackInStock = false;
        $dealRequest->isOutOfStock = false;
        $dealRequest->titleSearch = null;
        $dealRequest->isRangeEnabled = true;
        $dealRequest->isFilterEnabled = false;
        $dealRequest->filterErotic = true;
        $dealRequest->hasReviews = true;
        $dealRequest->sortType = 4;
        $dealRequest->dateRange = 1;

        $request = Request::getDealsRequest($dealRequest);
        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->deals);
    }

    public function testMinRating()
    {
        $dealRequest = new DealRequest();
        $dealRequest->page = 0;
        $dealRequest->domainId = 1;
        $dealRequest->excludeCategories = [1064954, 11091801];
        $dealRequest->includeCategories = [16310101];
        $dealRequest->priceTypes = [0];
        $dealRequest->deltaRange = [0, 10000];
        $dealRequest->deltaPercentRange = [20, 100];
        $dealRequest->deltaLastRange = null;
        $dealRequest->salesRankRange = [0, 40000];
        $dealRequest->currentRange = [500, 40000];
        $dealRequest->isLowest = false;
        $dealRequest->isHighest = false;
        $dealRequest->isLowestOffer = false;
        $dealRequest->isRisers = false;
        $dealRequest->isBackInStock = false;
        $dealRequest->isOutOfStock = false;
        $dealRequest->titleSearch = null;
        $dealRequest->isRangeEnabled = true;
        $dealRequest->isFilterEnabled = false;
        $dealRequest->filterErotic = true;
        $dealRequest->hasReviews = true;
        $dealRequest->sortType = 4;
        $dealRequest->dateRange = 1;

        $responses = [];
        for ($i = 0; $i < 5; $i++) {
            $dr = clone($dealRequest);
            $dr->minRating = $i * 10;
            $request = Request::getDealsRequest($dr);
            $responses[$i] = $this->api->sendRequestWithRetry($request);
            self::assertEquals($responses[$i]->status, "OK");
        }

        for ($i = 4; $i >= 1; $i--) {
            $k = $i;
            $lt = array_sum($responses[$k]->deals->categoryCount) <= array_sum($responses[--$k]->deals->categoryCount);
            self::assertTrue($lt);
        }


    }

    public function testDealCategories()
    {
        $dealRequest = new DealRequest();
        $dealRequest->page = 0;
        $dealRequest->domainId = 1;
        $dealRequest->excludeCategories = [1064954, 11091801];
        $dealRequest->includeCategories = [16310101];
        $dealRequest->priceTypes = [0];
        $dealRequest->deltaRange = [0, 10000];
        $dealRequest->deltaPercentRange = [20, 100];
        $dealRequest->deltaLastRange = null;
        $dealRequest->salesRankRange = [0, 40000];
        $dealRequest->currentRange = [500, 40000];
        $dealRequest->isLowest = false;
        $dealRequest->isHighest = false;
        $dealRequest->isLowestOffer = false;
        $dealRequest->isRisers = false;
        $dealRequest->isBackInStock = false;
        $dealRequest->isOutOfStock = false;
        $dealRequest->titleSearch = null;
        $dealRequest->isRangeEnabled = true;
        $dealRequest->isFilterEnabled = false;
        $dealRequest->filterErotic = true;
        $dealRequest->hasReviews = true;
        $dealRequest->sortType = 4;
        $dealRequest->dateRange = 1;

        $request = Request::getDealsRequest($dealRequest);
        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->deals);
        self::assertGreaterThan(1, $response->deals->dr[0]->categories);

    }
}