<?php
namespace Keepa\objects\tracking;

/**
 * About:
 * Represents a desired price - a {@link Product.CsvType} of a specific {@link AmazonLocale} to be monitored
 */
class TrackingThresholdValue
{
    /**
     * The history of threshold values (or desired prices). Only for existing tracking!<br>
     * Format: [{@link KeepaTime}, value]
     * @var int[] $thresholdValueCSV
     */
    public $thresholdValueCSV;


    /**
     * The threshold value (or desired price). Only for creating a tracking!
     * @var int $thresholdValue
     */
    public $thresholdValue;

    /**
     * The domainId of the products Amazon locale
     * {@link AmazonLocale}
     * @var int
     */
    public $domain;

    /**
     * Integer value of the {@link Product.CsvType} for this threshold value
     * @var int $csvType
     */
    public $csvType;

    /**
     * Whether or not this tracking threshold value tracks value drops (true) or value increases (false)
     * @var bool $isDrop
     */
    public $isDrop;

    /**
     * not yet available.
     * @var int|null $minDeltaAbsolute
     */
    public $inDeltaAbsolute;

    /**
     * not yet available.
     * @var int|null $minDeltaPercentage
     */
    public $minDeltaPercentage;

    /**
     * not yet available.
     * @var bool|null $deltasAreBetweenNotifications
     */
    public $deltasAreBetweenNotifications;
}
