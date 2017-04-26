<?php
namespace Keepa\objects;

/**
 * About:
 * A Deal object represents a product that has recently changed (usually in price or sales rank). It contains a summary of the product and information about the changes.
 * <p>
 * Returned by:
 * The Deal object is returned by the Browsing Deals request.
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
