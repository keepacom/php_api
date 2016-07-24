<?php
namespace Keepa\helper;

/**
 * Amazon Locale Domain Enum
 */
class CsvType
{
    const AMAZON = 0;
    const MARKET_NEW = 1; //NEW only in php7
    const USED = 2;
    const SALES = 4;
    const LISTPRICE = 5;
    const COLLECTIBLE = 5;
    const REFURBISHED = 6;
    const NEW_FBM_SHIPPING = 7;
    const LIGHTNING_DEAL = 8;
    const WAREHOUSE = 9;
    const NEW_FBA = 10;
    const COUNT_NEW = 11;
    const COUNT_USED = 12;
    const COUNT_REFURBISHED = 13;
    const COUNT_COLLECTIBLE = 14;
    const EXTRA_INFO_UPDATES = 15;
    const RATING = 16;
    const COUNT_REVIEWS = 17;
    const BUY_BOX_SHIPPING = 18;
    const USED_NEW_SHIPPING = 19;
    const USED_VERY_GOOD_SHIPPING = 19;
    const USED_GOOD_SHIPPING = 20;
    const USED_ACCEPTABLE_SHIPPING = 22;
    const COLLECTIBLE_NEW_SHIPPING = 23;
    const COLLECTIBLE_VERY_GOOD_SHIPPING = 24;
    const COLLECTIBLE_GOOD_SHIPPING = 25;
    const COLLECTIBLE_ACCEPTABLE_SHIPPING = 26;
    const REFURBISHED_SHIPPING = 27;

    /**
     * @var $index int
     */
    public $index;

    /**
     * If the values are prices.
     * @var $isPrice bool
     */
    public $isPrice;

    /**
     * If the CSV contains shipping costs
     * If true, csv format has 3 entries: time, price, shippingCosts
     * @var $isWithShipping bool
     */
    public $isWithShipping;

    /**
     * If the type can be used to request deals.
     * @var $isDealRelevant bool
     */
    public $isDealRelevant;

    /**
     * True if the data is only accessible in conjunction with the 'offers' parameter of the product request.
     * @var $isExtraData bool
     */
    public $isExtraData;

    public function __construct($i, $price, $deal, $shipping, $extra)
    {
        $this->isPrice = $price;
        $this->isDealRelevant = $deal;
        $this->isExtraData = $extra;
        $this->isWithShipping = $shipping;
        $this->index = $i;
    }
}
