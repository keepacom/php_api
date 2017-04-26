<?php
namespace Keepa\helper\tracking;

/**
 * TrackingThresholdValue Enum
 */
class TrackingNotificationCause
{
    const UNKNOWN = -1;
    const EXPIRED = 0;
    const DESIRED_PRICE = 1;
    const PRICE_CHANGE = 2;
    const PRICE_CHANGE_AFTER_DESIRED_PRICE = 3;
    const OUT_STOCK = 4;
    const IN_STOCK = 5;
    const DESIRED_PRICE_AGAIN = 5;

    /**
     * @var $code int
     */
    public $code;

    public function __construct($code)
    {
        $this->code = $code;
    }
}
