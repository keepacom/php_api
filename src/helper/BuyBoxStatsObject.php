<?php
namespace Keepa\helper;

class BuyBoxStatsObject {

    /**
     * avg. price of the Buy Box offer of this seller
     * @var float
     */
    public $percentageWon = null;

    /**
     * avg. price of the Buy Box offer of this seller
     * @var int
     */
    public $avgPrice = null;

    /**
     * avg. "New" offer count during the time the seller held the Buy Box
     * @var int
     */
    public $avgNewOfferCount = null;

    /**
     * whether or not this offer is fulfilled by Amazon (but not sold by Amazon)
     * @var bool
     */
    public $isFBA = null;

    /**
     * last time the seller won the buy box
     * @var int
     */
    public $lastSeen = null;
}