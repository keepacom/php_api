<?php

namespace Keepa\helper;

/**
 * Amazon Locale Domain Enum
 */
class AvailabilityType
{
    const NO_OFFER = -1;
    const NOW = 0;
    const PREORDERABLE = 1;
    const UNKNOWN = 2;

    /**
     * Amazon offer is currently not in stock but will be in the future - back-order
     */
    const BACKORDERABLE = 3;

    /**
     * Amazon offer availability is delay. Check availabilityAmazonDelay field for details.
     */
    const DELAYED = 4;

    public function __construct($i, $price, $deal, $shipping, $extra)
    {
        $this->isPrice = $price;
        $this->isDealRelevant = $deal;
        $this->isExtraData = $extra;
        $this->isWithShipping = $shipping;
        $this->index = $i;
    }
}
