<?php
namespace Keepa\API;

use Keepa\objects\tracking\TrackingNotifyIf;
use Keepa\objects\tracking\TrackingThresholdValue;

/**
 * About:
 * Determines through which channels we will send notifications.<br>Must be a boolean array with the length of the NotificationType enum.
 * Uses NotificationType indexing {@link NotificationType}. True means the channel will be used.<br>
 * Our Tracking API currently only supports notifications through push webhooks or API pull request. Other channels will follow soon.<br><br>
 * Example: Only notify via API: [ false, false, false, false, false, true, false ]<br>
 */
class TrackingRequest
{
    /**
     * The ASIN of the product
     * @var string
     */
    public $asin = null;

    /**
     * The time to live in hours until the tracking expires and is deleted.
     * When setting the value through the _Add Tracking_ request it is in relation to the time of request. Possible values:<br>
     * <blockquote>any positive integer: time to live in hours<br>
     * 0: never expires<br>
     * any negative integer:<br>
     * <blockquote>tracking already exists: keep the original `ttl`<br>tracking is new: use the absolute value as `ttl`</blockquote>
     * </blockquote>
     * @var int $ttl
     */
    public $ttl = 24 * 365 * 2;


    /**
     * Trigger a notification if tracking expires or is removed by the system (e.g. product deprecated)
     * @var bool $expireNotify
     */
    public $expireNotify = false;

    /**
     * Whether or not all desired prices are in the currency of the mainDomainId. If false they will be converted.
     * @var bool $expireNotify
     */
    public $desiredPricesInMainCurrency = true;

    /**
     * The main Amazon locale of this tracking determines the currency used for all desired prices. <br>
     * Integer value for the Amazon locale {@link AmazonLocale}
     * @var byte $mainDomainId
     */
    public $mainDomainId = 0;


    /**
     * Contains all settings for price or value related tracking criteria
     * @var TrackingThresholdValue[] $thresholdValues
     */
    public $thresholdValues = null;

    /**
     * Contains specific, meta tracking criteria, like out of stock.
     * @var TrackingNotifyIf[] $notifyIf
     */
    public $notifyIf = null;

    /**
     * Determines through which channels we will send notifications.<br>
     * Uses NotificationType indexing {@link Tracking.NotificationType}. True means the channel will be used.
     * @var bool[] $notificationType
     */
    public $notificationType = null;

    /**
     * A tracking specific rearm timer.<br>
     * -1 = use default notification timer of the user account (changeable via the website settings)
     * 0 = never notify a desired price more than once
     * larger than 0 = rearm the desired price after x minutes.
     * @var int $individualNotificationInterval
     */
    public $individualNotificationInterval = -1;

    /**
     * The update interval, in hours. Determines how often our system will trigger a product update. A setting of 1
     * hour will not trigger an update exactly every 60 minutes, but as close to that as it is efficient for our system.
     * Throughout a day it will be updated 24 times, but the updates are not perfectly distributed.<br>
     * Possible values: Any integer <b>between</b> 0 and 25. Default is 1.
     * @var int $updateInterval
     */
    public $updateInterval = 1;

    /**
     * Meta data of this tracking (max length is 500 characters). You can use this to store any string with this tracking.
     * @var string $metaData
     */
    public $metaData = null;

}
