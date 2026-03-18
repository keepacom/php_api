<?php
namespace Keepa\tests;

use Keepa\API\Request;
use Keepa\objects\AmazonLocale;

class ProductSearchRequestPageTest extends AbstractTest
{
    public function testBasic()
    {
        $request = Request::getProductSearchRequestPage(AmazonLocale::DE, "test", false, 0);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertGreaterThan(0, count($response->products));
    }

    public function testStats()
    {
        $request = Request::getProductSearchRequestPage(AmazonLocale::DE, "test", 90, 0);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertNotNull($response->products[0]->stats);
        self::assertGreaterThan(0, count($response->products));
    }

    public function testPage1()
    {
        $request = Request::getProductSearchRequestPage(AmazonLocale::DE, "test", false, 1);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->products);
        self::assertGreaterThan(0, count($response->products));
    }

    public function testPaginationDiffers()
    {
        $requestPage0 = Request::getProductSearchRequestPage(AmazonLocale::DE, "laptop", false, 0);
        $responsePage0 = $this->api->sendRequestWithRetry($requestPage0);
        self::assertEquals($responsePage0->status, "OK");
        self::assertNotNull($responsePage0->products);

        $requestPage1 = Request::getProductSearchRequestPage(AmazonLocale::DE, "laptop", false, 1);
        $responsePage1 = $this->api->sendRequestWithRetry($requestPage1);
        self::assertEquals($responsePage1->status, "OK");
        self::assertNotNull($responsePage1->products);

        $asinsPage0 = array_map(fn($p) => $p->asin, $responsePage0->products);
        $asinsPage1 = array_map(fn($p) => $p->asin, $responsePage1->products);

        $overlap = array_intersect($asinsPage0, $asinsPage1);
        self::assertLessThan(count($asinsPage0), count($overlap));
    }
}
