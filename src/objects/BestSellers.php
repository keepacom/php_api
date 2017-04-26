<?php
namespace Keepa\objects;

/**
 * About:
 * A best sellers ASIN list of a specific category.
 * <p>
 * Returned by:
 * Request Best Sellers
 */
class BestSellers
{

    /**
     * Integer value for the Amazon locale this category belongs to.
     * {@link AmazonLocale}
     */
    public $domainId;

    /**
     * The category node id used by Amazon. Represents the identifier of the category. Also part of the Product object's categories and rootCategory fields. Always a positive Long value.
     * @var int
     */
    public $categoryId;

    /**
     * An ASIN list. The list starts with the best selling product (lowest sales rank).
     * @var string[]
     */
    public $asinList;

}
