<?php

namespace Keepa\objects;

/**
 * About:
 * A best sellers ASIN list of a specific category.
 * <p>
 * Returned by:
 * Request Best Sellers
 */
class MerchantBrandStatistics
{

    /**
     * the brand (in all lower-case)
     * @var string
     */
    public $brand;

    /**
     * the number of products this merchant sells with this brand
     * @var int
     */
    public $productCount;

    /**
     * the 30 day average sales rank of these products
     * @var int
     */
    public $avg30SalesRank;

    /**
     * how many of these products have an Amazon offer
     * @var string
     */
    public $productCountWithAmazonOffer;

}
