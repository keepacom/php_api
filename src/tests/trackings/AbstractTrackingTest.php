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

abstract class AbstractTrackingTest extends abstractTest
{
    function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }

    public function setUp()
    {
        $this->addTracking("B001G73S50");
    }

    protected function addTracking($asin)
    {
        /* @var TrackingRequest $trackingRequest */
        $trackingRequest = new TrackingRequest();
        $trackingRequest->asin = $asin;
        $trackingRequest->ttl = 24 * 365 * 2;
        $trackingRequest->expireNotify = true;
        $trackingRequest->desiredPricesInMainCurrency = true;
        $trackingRequest->mainDomainId = AmazonLocale::DE;
        $trackingRequest->updateInterval = 1;
        $trackingRequest->metaData = "Unit-Test";

        $trackingRequest->thresholdValues = [new TrackingThresholdValue()];
        $trackingRequest->thresholdValues[0]->thresholdValue = 5000;
        $trackingRequest->thresholdValues[0]->domain = AmazonLocale::DE;
        $trackingRequest->thresholdValues[0]->isDrop = true;
        $trackingRequest->thresholdValues[0]->csvType = CSVType::AMAZON;

        $trackingRequest->notifyIf = [new TrackingNotifyIf()];
        $trackingRequest->notifyIf[0]->domain = AmazonLocale::DE;
        $trackingRequest->notifyIf[0]->csvType = AmazonLocale::DE;
        $trackingRequest->notifyIf[0]->notifyIfType = NotifyIfType::BACK_IN_STOCK;

        $trackingRequest->notificationType = array_fill(0, NotificationType::SIZE, false);
        $trackingRequest->notificationType[NotificationType::API] = true;

        $trackingRequest->individualNotificationInterval = 0;

        $request = Request::getTrackingAddRequest($trackingRequest);
        $response = $this->api->sendRequestWithRetry($request);

        self::assertEquals($response->status, "OK");
        self::assertNotNull($response->trackings);
    }

    protected function tearDown()
    {
        $request = Request::getTrackingRemoveAllRequest();
        $response = $this->api->sendRequestWithRetry($request);
        self::assertEquals($response->status, "OK");
    }
}