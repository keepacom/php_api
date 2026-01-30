<?php
namespace Keepa\API;


/**
 * Required by the Browsing Deals request.
 * The queryJSON contains all request parameters. It must be URL encoded if the GET format is used. To quickly get a valid queryJSON there is a link on the deals page26 below the filters that generates this JSON for the current selection.
 */
class DealRequest
{

    /**
     * Most deal queries have more than 150 results (which is the maximum page size). To browse all deals found by a query (which is cached for 120 seconds) you iterate the page parameter and keep all other parameters identical. You start with page 0 and stop when the response contains less than 150 results.
     * @var $page integer
     */
    public $page;

    /**
     * The domainId of the products Amazon locale {@link AmazonLocale}
     * @var $domainId integer
     */
    public $domainId;

    /**
     * Determines the type of the deal. Even though it is an integer array, it can contain only one entry. Multiple types per query are not yet supported.
     * Uses {@link Product.CSVType} coding. Only those applicable with {@link Product.CSVType#isDealRelevant} set to true.
     * @var $priceTypes integer[]
     */
    public $priceTypes;

    /**
     * Our deals are devided in different sets, determined by the time interval in which the product changed. The shorter the interval, the more recent the change; which is good for big price drops but bad for slow incremental drops that accumulate over a longer period.
     * For most deals the shorter intervals can be considered as subsets of the longer intervals. To find more deals use the longer intervals.<br>
     * <p>Possible values:
     * <ul>
     * <li>0 - day: the last 24 hours</li>
     * <li>1 - week: the last 24 * 7 hours</li>
     * <li>2 - month: the last 24 * 31 hours</li>
     * <li>3 - 90 days: the last 24 * 90 hours</li>
     * </ul></p>
     *
     * @var $dateRange integer
     */
    public $dateRange;

    /**
     * Limit the range of the absolute difference between the current value and the one at the beginning of the chosen dateRange interval.<br>
     * Example: [0,999] (= no minimum difference, maximum difference of $9.99).
     *
     * @var $deltaRange integer[]
     */
    public $deltaRange;

    /**
     * Used to exclude products that are listed in these categories. If it is a sub category the product must be directly listed in this category. It will not exclude products in child categories of the specified ones, unless it is a root category.
     * Array with category node ids14.
     */
    public $excludeCategories;

    /**
     * Used to only include products that are listed in these categories. If it is a sub category the product must be directly listed in this category. It will not include products in child categories of the specified ones, unless it is a root category. Array with category node ids14.
     */
    public $includeCategories;

    /**
     * Same as deltaRange, but given in percent instead of absolute values. Minimum percent is 10, for Sales Rank it is 80.<br>
     * Example: [30,80] (= between 30% and 80%).
     */
    public $deltaPercentRange;

    /**
     * Limit the range of the current value of the price type.<br>
     * Example: [105,50000] (= minimum price $1.05, maximum price $500, or a rank between 105 and 50000).
     */
    public $currentRange;

    /**
     * Only include products for which the specified price type is at its lowest value (since we started tracking it). If true, "isRisers" must be false.
     */
    public $isLowest;

    /**
     * Select deals by a keywords based product title search. The search is case-insensitive and supports multiple keywords which, if specified and separated by a space, must all match.<br>
     * Examples:
     * "samsung galaxy" matches all products which have the character sequences "samsung" AND "galaxy" within their title
     */
    public $titleSearch;

    /**
     * Only include products if the selected price type is the lowest of all New offers (applicable to Amazon and Marketplace New). Not applicable if "isRisers" is true.
     */
    public $isLowestOffer;

    /**
     * Only include products which were out of stock within the last 24 hours and can now be ordered.
     */
    public $isBackInStock;

    /**
     * Only include products which were available to order within the last 24 hours and now out of stock.
     */
    public $isOutOfStock;

    /**
     * Switch to enable the range options.
     */
    public $isRangeEnabled;

    /**
     * Excludes all products that are listed as adult items.
     */
    public $filterErotic;

    /**
     * Determines the sort order of the retrieved deals. To invert the sort order use negative values.
     * <p>Possible sort by values:
     * <ul>
     * <li>1 - deal age. Newest deals first, not invertible.</li>
     * <li>2 - absolute delta. (the difference between the current value and the one at the beginning of the chosen dateRange interval). Sort order is highest delta to lowest.</li>
     * <li>3 - sales rank. Sort order is lowest rank o highest.</li>
     * <li>4 - percentage delta (the percentage difference between the current value and the one at the beginning of the chosen dateRange interval). Sort order is highest percent to lowest.</li>
     * </ul></p>
     */
    public $sortType;

    /**
     * Limit the Sales Rank range of the product. Identical to currentRange if price type is set to Sales Rank. If you want to keep the upper bound open, you can specify -1 (which will translate to the maximum signed integer value).<br>
     * <p>Important note: Once this range option is used all products with no Sales Rank will be excluded. Set it to null to not use it.</p>
     * Examples:<br>
     * [0,5000] (= only products which have a sales rank between 0 and 5000)<br>
     * [5000,-1] (= higher than 5000)
     */
    public $salesRankRange;

    /**
     * Switch to enable the filter options.
     */
    public $isFilterEnabled;

    /**
     * Limit the range of the absolute difference between the current value and previous one.<br>
     * Example: [100,500] (= last change between one $1 and $5)
     */
    public $deltaLastRange;

    /**
     * If true excludes all products with no reviews. If false the filter is inactive.
     */
    public $hasReviews;

    /**
     * Include only products flagged as Prime Exclusive.
     * <p>Example: {@code true}</p>
     *
     * @var bool|null
     */
    public $isPrimeExclusive;

    /**
     * Include only products that currently have an offer sold and fulfilled by Amazon.
     * <p>Example: {@code true}</p>
     *
     * @var bool|null
     */
    public $mustHaveAmazonOffer;

    /**
     * Include only products that currently have no offer sold and fulfilled by Amazon.
     * <p>Example: {@code true}</p>
     *
     * @var bool|null
     */
    public $mustNotHaveAmazonOffer;

    /**
     * Minimum product rating to include.
     * <ul>
     *   <li>Integer from 0 to 50 (e.g., 45 = 4.5 stars)</li>
     *   <li>Use -1 to disable the filter</li>
     * </ul>
     * <p>Example: {@code 20} // ≥ 2.0 stars</p>
     *
     * @var int|null
     */
    public $minRating;

    /**
     * Include only Amazon Warehouse deals that match these condition codes.
     * <p>Use integer-coded conditions such as:
     * 1 = New, 2 = Used - Like New, 3 = Used - Very Good, 24 = Used - Good, 5 = Used - Acceptable.</p>
     * <p>Example: {@code [1, 2]}</p>
     * <p>Note: API expects integers; choose a numeric type that fits your model.</p>
     *
     * @var int[]|null
     */
    public $warehouseConditions;

    /**
     * If multiple variations match, return only a single (random) variation.
     * <p>Example: {@code true}</p>
     *
     * @var bool|null
     */
    public $singleVariation;

    /**
     * Include only products made of the specified materials (e.g., "cotton").
     * <p>Example: {@code ["cotton", "polyester"]}</p>
     *
     * @var string[]|null
     */
    public $material;

    /**
     * Include only products matching the specified type (e.g., "shirt", "dress").
     * <p>Example: {@code ["shirt"]}</p>
     *
     * @var string[]|null
     */
    public $type;

    /**
     * Include only products from the specified manufacturer.
     * <p>Example: {@code ["Sony"]}</p>
     *
     * @var string[]
     */
    public $manufacturer;

    /**
     * Include only products from the specified brand.
     * <p>Example: {@code ["Apple", "Samsung"]}</p>
     *
     * @var string[]|null
     */
    public $brand;

    /**
     * Include only products in the specified Amazon product group (e.g., "home", "book").
     * <p>Example: {@code ["book"]}</p>
     *
     * @var string[]|null
     */
    public $productGroup;

    /**
     * Include only products matching the specified model identifier.
     * <p>Example: {@code ["A2179"]}</p>
     *
     * @var string[]|null
     */
    public $model;

    /**
     * Include only products matching the specified color attribute.
     * <p>Example: {@code ["black", "navy"]}</p>
     *
     * @var string[]|null
     */
    public $color;

    /**
     * Include only products matching the specified size (e.g., "small", "one size").
     * <p>Example: {@code ["M", "L"]}</p>
     *
     * @var string[]|null
     */
    public $size;

    /**
     * Include only products with the specified unit type (e.g., "count", "ounce").
     * <p>Example: {@code ["count"]}</p>
     *
     * @var string[]|null
     */
    public $unitType;

    /**
     * Include only products with the specified scent (e.g., "lavender", "citrus").
     * <p>Example: {@code ["lavender"]}</p>
     *
     * @var string[]|null
     */
    public $scent;

    /**
     * Include only products matching the specified item form (e.g., "liquid", "sheet").
     * <p>Example: {@code ["liquid"]}</p>
     *
     * @var string[]|null
     */
    public $itemForm;

    /**
     * Include only products matching the specified pattern (e.g., "striped", "solid").
     * <p>Example: {@code ["striped"]}</p>
     *
     * @var string[]|null
     */
    public $pattern;

    /**
     * Include only products matching the specified style attribute (e.g., "modern", "vintage").
     * <p>Example: {@code ["modern"]}</p>
     *
     * @var string[]|null
     */
    public $style;

    /**
     * Include only products matching the specified item type keyword (custom search term).
     * <p>Example: {@code ["books", "prints"]}</p>
     *
     * @var string[]|null
     */
    public $itemTypeKeyword;

    /**
     * Include only products targeting the specified audience (e.g., "kids", "professional").
     * <p>Example: {@code ["kids"]}</p>
     *
     * @var string[]|null
     */
    public $targetAudienceKeyword;

    /**
     * Include only products matching the specified edition (e.g., "first edition", "standard edition").
     * <p>Example: {@code ["first edition"]}</p>
     *
     * @var string[]|null
     */
    public $edition;

    /**
     * Include only products in the specified format (e.g., "kindle ebook", "import", "dvd").
     * <p>Example: {@code ["paperback"]}</p>
     *
     * @var string[]|null
     */
    public $format;

    /**
     * Include only products by the specified author (applicable to books, music, etc.).
     * <p>Example: {@code ["Neil Gaiman"]}</p>
     *
     * @var string[]|null
     */
    public $author;

    /**
     * Include only products with the specified binding type (e.g., "paperback").
     * <p>Example: {@code ["hardcover"]}</p>
     *
     * @var string[]|null
     */
    public $binding;

    /**
     * Include only products available in the specified languages (use language names).
     * <p>Example: {@code ["English", "German"]}</p>
     *
     * @var string[]|null
     */
    public $languages;

    /**
     * Include only products sold under the specified Brand Store name on Amazon.
     * <p>Example: {@code ["Amazon Basics"]}</p>
     *
     * @var string[]|null
     */
    public $brandStoreName;

    /**
     * Include only products sold under the specified URL-friendly Brand Store identifier.
     * <p>Example: {@code ["amazonbasics"]}</p>
     *
     * @var string[]|null
     */
    public $brandStoreUrlName;

    /**
     * Include only products in the specified website display group.
     * <p>Example: {@code ["fashion_display_on_website"]}</p>
     *
     * @var string[]|null
     */
    public $websiteDisplayGroup;

    /**
     * Include only products in the specified website display group name (user-friendly label).
     * <p>Example: {@code ["Fashion"]}</p>
     *
     * @var string[]|null
     */
    public $websiteDisplayGroupName;

    /**
     * Include only products belonging to the specified sales rank display group
     * (e.g., "fashion_display_on_website").
     * <p>Example: {@code ["fashion_display_on_website"]}</p>
     *
     * @var string[]|null
     */
    public $salesRankDisplayGroup;
}
