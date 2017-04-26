<?php
namespace Keepa\objects\tracking;

/**
 * About:
 * Determines through which channels we will send notifications.<br>Must be a boolean array with the length of the NotificationType enum.
 * Uses NotificationType indexing {@link NotificationType}. True means the channel will be used.<br>
 * Our Tracking API currently only supports notifications through push webhooks or API pull request. Other channels will follow soon.<br><br>
 * Example: Only notify via API: [ false, false, false, false, false, true, false ]<br>
 */
class TrackingNotifyIf
{
    /**
     * The domainId of the products Amazon locale
     * {@link AmazonLocale}
     * @var int
     */
    public $domain;

    /**
     * The {@link Product.CsvType} for this threshold value
     * @var mixed|null
     */
    public $csvType;

    /**
     * The {@link NotifyIfType}
     * @var mixed|null
     */
    public $notifyIfType;
}
