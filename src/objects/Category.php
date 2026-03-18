<?php

namespace Keepa\objects;

final class Category
{

    /**
     * Integer value for the Amazon locale this category belongs to.
     * {@link AmazonLocale}
     * @var int
     */
    public $domainId;

    /**
     * The category node id used by Amazon. Represents the identifier of the category. Also part of the Product object's categories and rootCategory fields. Always a positive Long value.
     * @var int
     */
    public $catId;

    /**
     * The name of the category.
     * @var string
     */
    public $name;

    /**
     * The context free category name.
     * @var string|null
     */
    public $contextFreeName;

    /**
     * The websiteDisplayGroup - available for most root categories.
     * @var string|null
     */
    public $websiteDisplayGroup;

    /**
     * List of all sub categories. null or [] (empty array) if the category has no sub categories.
     * @var int[]|null
     */
    public $children;

    /**
     * The parent category's Id. Always a positive Long value. If it is 0 the category is a root category and has no parent category.
     * @var int|null
     */
    public $parent;

    /**
     * The highest (root category) sales rank we have observed of a product that is listed in this category. Note: Estimate, as the value is from the Keepa product database and not retrieved from Amazon.
     * @var int|null
     */
    public $highestRank;

    /**
     * The lowest(root category) sales rank we have observed for a product listed in this category. Note: Estimate, as the value is from the Keepa product database and not retrieved from Amazon.
     * @var int|null
     */
    public $lowestRank;

    /**
     * Number of products that are listed in this category. Note: Estimate, as the value is from the Keepa product database and not retrieved from Amazon.
     * @var int|null
     */
    public $productCount;


    /**
     * Determines if this category functions as a standard browse node, rather than serving promotional purposes (for example, 'Specialty Stores').
     * @var bool|null
     */
    public $isBrowseNode;

    /**
     * Average current buy box price of all products in this category.
     * @var int|null
     */
    public $avgBuyBox = null;

    /**
     * Average 90 day buy box price.
     * @var int|null
     */
    public $avgBuyBox90 = null;

    /**
     * Average 365 day buy box price.
     * @var int|null
     */
    public $avgBuyBox365 = null;

    /**
     * Average 30 day buy box deviation (standard deviation).
     * @var int|null
     */
    public $avgBuyBoxDeviation = null;

    /**
     * Average number of reviews.
     * @var int|null
     */
    public $avgReviewCount = null;

    /**
     * Average rating, multiplied by 10 (e.g. 45 = 4.5 stars).
     * @var int|null
     */
    public $avgRating = null;

    /**
     * Percentage of products fulfilled by Amazon (FBA).
     * @var float|null
     */
    public $isFBAPercent = null;

    /**
     * Percentage of products sold directly by Amazon.
     * @var float|null
     */
    public $soldByAmazonPercent = null;

    /**
     * Percentage of products that have an active coupon.
     * @var float|null
     */
    public $hasCouponPercent = null;

    /**
     * Average number of new offers.
     * @var float|null
     */
    public $avgOfferCountNew = null;

    /**
     * Average number of used offers.
     * @var float|null
     */
    public $avgOfferCountUsed = null;

    /**
     * Number of distinct sellers with at least one active offer.
     * @var int|null
     */
    public $sellerCount = null;

    /**
     * Number of distinct brands present in this category.
     * @var int|null
     */
    public $brandCount = null;
}