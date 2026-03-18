<?php
namespace Keepa\objects;

/**
 * Represents a price alert
 */
class Notification
{
    /**
     * The notified product ASIN.
     * @var string|null
     */
    public $asin = null;

    /**
     * Title of the product. Caution: may contain HTML markup in rare cases.
     * @var string|null
     */
    public $title = null;

    /**
     * The main image name of the product. Full Amazon image path:
     * https://m.media-amazon.com/images/I/_image name_
     * @var string|null
     */
    public $image = null;

    /**
     * Creation date of the notification in Keepa Time minutes.
     * @var int
     */
    public $createDate = 0;

    /**
     * The main Amazon locale of the tracking which determines the currency used for all prices of this notification.
     * Integer value for the Amazon locale {@link AmazonLocale}
     * @var int
     */
    public $domainId = 0;

    /**
     * The Amazon locale which triggered the notification.
     * Integer value for the Amazon locale {@link AmazonLocale}
     * @var int
     */
    public $notificationDomainId = 0;

    /**
     * The CsvType which triggered the notification.
     * @var int
     */
    public $csvType = 0;

    /**
     * The TrackingNotificationCause of the notification.
     * @var int
     */
    public $trackingNotificationCause = 0;

    /**
     * Contains the prices / values of the product of the time this notification was created.
     * Uses CsvType indexing.
     * The price is an integer of the respective Amazon locale's smallest currency unit (e.g. euro cents or yen).
     * If no offer was available in the given interval (e.g. out of stock) the price has the value -1.
     * @var int[]|null
     */
    public $currentPrices = null;

    /**
     * States through which notification channels this notification was delivered.
     * @var bool[]|null
     */
    public $sentNotificationVia = null;

    /**
     * The meta data of the tracking.
     * @var string|null
     */
    public $metaData = null;
}
