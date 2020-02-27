<?php

namespace Keepa\objects;

/**
 * About:
 * A best sellers ASIN list of a specific category.
 * <p>
 * Returned by:
 * Request Best Sellers
 */
class LightningDeal
{

    /**
     * The domainId of the products Amazon locale <br>
     * {@link AmazonLocale}
     * @var int
     */
    public $domainId;

    /**
     * The ASIN of the product
     * @var int
     */
    public $lastUpdate;

    /**
     * The ASIN of the product
     * @var string
     */
    public $asin;

    /**
     * Title of the product. Caution: may contain HTML markup in rare cases.
     * @var string
     */
    public $title;

    /**
     * The name of seller offering this deal.
     * @var string|null
     */
    public $sellerName;

    /**
     * The seller id of the merchant offering this deal.
     * @var string|null
     */
    public $sellerId;

    /**
     *  A unique ID for this deal.
     * @var string
     */
    public $dealId;

    /**
     * The discounted price of this deal. Available once the deal has started. -1 if the deal’s state is upcoming. The price is an integer of the respective Amazon locale’s smallest currency unit (e.g. euro cents or yen).
     * @var int
     */
    public $dealPrice;

    /**
     * The regular price of this product. Available once the deal has started. -1 if the deal’s state is upcoming. The price is an integer of the respective Amazon locale’s smallest currency unit (e.g. euro cents or yen).
     * @var int
     */
    public $currentPrice;


    /**
     * The name of the primary image of the product. null if not available.
     * @var string|null
     */
    public $image;

    /**
     * Whether or not the deal is Prime eligible.
     * @var boolean
     */
    public $isPrimeEligible;

    /**
     * Whether or not the deal is fulfilled by Amazon.
     * @var boolean
     */
    public $isFulfilledByAmazon;

    /**
     * Whether or not the price is restricted by MAP (Minimum Advertised Price).
     * @var boolean
     */
    public $isMAP;

    /**
     * The rating of the product. A rating is an integer from 0 to 50 (e.g. 45 = 4.5 stars).
     * @var int
     */
    public $rating;

    /**
     * The product’s review count.
     * @var int
     */
    public $totalReviews;

    /**
     * The state of the deal.
     * @var string
     */
    public $dealState;

    /**
     * The start time of this lighting deal, in Keepa Time minutes. Note that due to the delay in our data collection the deal price might not be available immediately once the deal has started on Amazon.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $startTime;

    /**
     * The end time of this lighting deal, in Keepa Time minutes.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $endTime;

    /**
     * The percentage claimed of the lighting deal. Since lightning deals have limited stock, this number may change fast on Amazon, but due to the delay of our data collection the provided value may be outdated.
     * @var int
     */
    public $percentClaimed;

    /**
     * The provided discount of this deal, according to Amazon. May be in reference to the list price, not the current price.
     * @var int
     */
    public $percentOff;

    /**
     * The provided discount of this deal, according to Amazon. May be in reference to the list price, not the current price.
     * @var \Keepa\helper\VariationAttributeObject[]|null
     */
    public $variation;


}
