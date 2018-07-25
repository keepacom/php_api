<?php

namespace Keepa\helper;

/**
 * Amazon Locale Domain Enum
 */
class AvailabilityType
{
    const NO_OFFER = -1;
    const NOW = 0;
    const FUTURE = 1;
    const UNKNOWN = 2;
    const OTHER = 3;

    public function __construct($i, $price, $deal, $shipping, $extra)
    {
        $this->isPrice = $price;
        $this->isDealRelevant = $deal;
        $this->isExtraData = $extra;
        $this->isWithShipping = $shipping;
        $this->index = $i;
    }
}
