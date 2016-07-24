<?php
namespace Keepa\tests;

use Keepa\API\DealRequest;
use Keepa\API\Request;

class DealRequestTest extends abstractTest
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
}