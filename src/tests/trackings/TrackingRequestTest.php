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
use Keepa\tests\AbstractTest;

class TrackingRequestTest extends AbstractTrackingTest
{
    public function testTrackingNotification()
    {
        $request = Request::getTrackingNotificationRequest(0, false);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
    }

    public function testTrackingNotificationResponseField()
    {
        $request = Request::getTrackingNotificationRequest(0, false);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
        // notifications field must exist in Response (may be null if no notifications available)
        self::assertTrue(property_exists($response, 'notifications'));
    }

    public function testNotificationObjectStructure()
    {
        $request = Request::getTrackingNotificationRequest(0, false);

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");

        if (!empty($response->notifications)) {
            $notification = $response->notifications[0];
            self::assertTrue(property_exists($notification, 'asin'));
            self::assertTrue(property_exists($notification, 'title'));
            self::assertTrue(property_exists($notification, 'image'));
            self::assertTrue(property_exists($notification, 'createDate'));
            self::assertTrue(property_exists($notification, 'domainId'));
            self::assertTrue(property_exists($notification, 'csvType'));
            self::assertTrue(property_exists($notification, 'trackingNotificationCause'));
            self::assertTrue(property_exists($notification, 'currentPrices'));
            self::assertTrue(property_exists($notification, 'metaData'));
        } else {
            self::markTestSkipped("No notifications available to verify structure");
        }
    }


    public function testTrackingWebHook()
    {
        $request = Request::getTrackingWebhookRequest("https://keepa.com/hook");

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
    }

}