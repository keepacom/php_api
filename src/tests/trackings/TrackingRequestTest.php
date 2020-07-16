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


    public function testTrackingWebHook()
    {
        $request = Request::getTrackingWebhookRequest("https://keepa.com/hook");

        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
    }

}