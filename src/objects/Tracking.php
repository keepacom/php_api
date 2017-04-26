<?php
namespace Keepa\objects;

/**
 * Contains statistic values.
 * Only set if the stats parameter was used in the Product Request. Part of the {@link Product}
 */
class Tracking
{
    /**
     * The tracked product ASIN
     * @var string $asin
     */
    public $asin = null;

    /**
     * Creation date of the tracking in {@link KeepaTime} minutes
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int $createDate
     */
    public $createDate;


    /**
     * The time to live in hours until the tracking expires and is deleted. When setting the value through the _Add Tracking_ request it is in relation to the time of request,
     * when retrieving the tracking object it is relative to the `createDate`. Possible values:<br>
     * <blockquote>any positive integer: time to live in hours<br>
     * 0: never expires<br>
     * any negative integer (only when setting the value):<br>
     * <blockquote>tracking already exists: keep the original `ttl`<br>tracking is new: use the absolute value as `ttl`</blockquote>
     * </blockquote>
     * @var int $ttl
     */
    public $ttl;

    /**
     * Trigger a notification if tracking expires or is removed by the system (e.g. product deprecated)
     * @var bool $expireNotify
     */
    public $expireNotify;

    /**
     * The main Amazon locale of this tracking determines the currency used for all desired prices. <br>
     * Integer value for the Amazon locale {@link AmazonLocale}
     * @var int $mainDomainId
     */
    public $mainDomainId;

    /**
     * Contains all settings for price or value related tracking criteria
     * @var \Keepa\objects\tracking\TrackingThresholdValue[]
     */
    public $thresholdValues;

    /**
     * Contains specific, meta tracking criteria, like out of stock.
     * @var \Keepa\objects\tracking\TrackingNotifyIf[]
     */
    public $notifyIf;


    /**
     * Determines through which channels we will send notifications.<br>Must be a boolean array with the length of the NotificationType enum.
     * Uses NotificationType indexing {@link NotificationType}. True means the channel will be used.<br>
     * Our Tracking API currently only supports notifications through push webhooks or API pull request. Other channels will follow soon.<br><br>
     * Example: Only notify via API: [ false, false, false, false, false, true, false ]<br>
     *   <code>
     *     boolean[] notificationType = new boolean[Tracking.NotificationType.values.length];<br>
     *     notificationType[Tracking.NotificationType.API.ordinal()] = true;
     *   </code>
     * @var bool[] $notificationType
     */
    public $notificationType;

    /**
     * A history of past notifications of this tracking. Each past notification consists of 5 entries, in the format:<br>
     * [{@link AmazonLocale}, {@link Product.CsvType}, {@link NotificationType}, {@link TrackingNotificationCause}, {@link KeepaTime}]
     * @var int[]|null $notificationCSV
     */
    public $notificationCSV;


    /**
     * A tracking specific rearm timer.<br>
     * -1 = use default notification timer of the user account (changeable via the website settings)
     * 0 = never notify a desired price more than once
     * larger than 0 = rearm the desired price after x minutes.
     * @var int $individualNotificationInterval
     */
    public $individualNotificationInterval;

    /**
     * Whether or not the tracking is active. A tracking is automatically deactivated if the corresponding API account is no longer sufficiently paid for.
     * @var bool $isActive
     */
    public $isActive;

    /**
     * The update interval, in hours. Determines how often our system will trigger a product update. A setting of 1 hour will not trigger an update exactly every 60 minutes, but as close to that as it is efficient for our system. Throughout a day it will be updated 24 times, but the updates are not perfectly distributed.
     * @var int $updateInterval ;
     */
    public $updateInterval;

    /**
     * The meta data of this tracking (max length is 500 characters). Used to assign some text to this tracking, like a user reference or a memo.
     * @var string $metaData
     */
    public $metaData;
}
