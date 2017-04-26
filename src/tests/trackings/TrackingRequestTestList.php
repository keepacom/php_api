<?php
namespace Keepa\tests\trackings;

use Keepa\API\Request;
use Keepa\API\TrackingRequest;
use Keepa\helper\CSVType;
use Keepa\helper\KeepaTime;
use Keepa\helper\tracking\NotificationType;
use Keepa\helper\tracking\NotifyIfType;
use Keepa\helper\tracking\NotifyIfTypeWrapper;
use Keepa\objects\AmazonLocale;
use Keepa\objects\tracking\TrackingNotifyIf;
use Keepa\objects\tracking\TrackingThresholdValue;
use Keepa\tests\abstractTest;

class TrackingRequestList extends AbstractTrackingTest
{
    public function testList()
    {
        $request = Request::getTrackingListRequest(false);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->trackings);
        self::assertEquals(1, count($response->trackings));
    }

    public function testMultipleAsin()
    {
        $this->addTracking("0321125215");

        $request = Request::getTrackingListRequest(true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->asinList);
        self::assertEquals(2, count($response->asinList));
    }

    public function testListAsinOnly()
    {
        $request = Request::getTrackingListRequest(true);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->asinList);
        self::assertEquals(1, count($response->asinList));
    }

    public function testRemoveList()
    {
        $request = Request::getTrackingListRequest(true);
        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->asinList);
        self::assertEquals(1, count($response->asinList));

        $this->addTracking("0321125215");

        $request = Request::getTrackingListRequest(true);
        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->asinList);
        self::assertEquals(2, count($response->asinList));

        $request = Request::getTrackingRemoveRequest("0321125215");
        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");

        $request = Request::getTrackingListRequest(true);
        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->asinList);
        self::assertEquals(1, count($response->asinList));

    }


    public function testGetTracking()
    {
        $request = Request::getTrackingGetRequest("B001G73S50");
        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->trackings);
        self::assertEquals(1, count($response->trackings));
        self::assertEquals("B001G73S50", $response->trackings[0]->asin);
    }


}