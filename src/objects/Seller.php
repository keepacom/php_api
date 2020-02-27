<?php
namespace Keepa\objects;

/**
 * About:
 * The seller object provides information about a Amazon marketplace seller.
 * Returned by:
 * The seller object is returned by the following request:
 * Request Seller Information
 */
class Seller
{

    /**
     * States the time we have started tracking this seller, in Keepa Time minutes.
     * <p>Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).</p>
     * @var int|null
     */
    public $trackedSince = null; // keepa minutes

    /**
     * The domainId of the products Amazon locale
     * {@link AmazonLocale}
     * @var int
     */
    public $domainId = null;

    /**
     * The seller id of the merchant.
     * <p>
     * Example: A2L77EE7U53NWQ (Amazon.com Warehouse Deals)
     * @var string
     */
    public $sellerId = null;

    /**
     * The name of seller.
     * <p>
     * Example: Amazon Warehouse Deals
     * @var string|null
     */
    public $sellerName = null;

    /**
     * Two dimensional history array that contains history data for this seller. First dimension index:
     * <p>{@link MerchantCsvType}</p>
     * 0 - RATING: The merchant's rating in percent, Integer from 0 to 100.
     * 1 - RATING_COUNT: The merchant's total rating count, Integer.
     * @var mixed int[][]
     */
    public $csv = null;

    /**
     * States the time of our last update of this seller, in Keepa Time minutes.
     * <br>Example: 2711319
     * @var int|null
     */
    public $lastUpdate = null; // keepa minutes

    /**
     * Indicating whether or not our system identified that this seller attempts to scam users.
     * @var bool|null
     */
    public $isScammer = null;

    /**
     * Indicating whether or not the offer ships from China.
     * @var bool|null
     */
    public $shipsFromChina = null;

    /**
     * Boolean value indicating whether or not the seller currently has FBA listings.<br>
     * This value is usually correct, but could be set to false even if the seller has FBA listings, since we are not always aware of all<br>
     * seller listings. This can especially be the case with sellers with only a few listings consisting of slow-selling products.
     * @var bool|null
     */
    public $hasFBA = null;

    /**
     * Only available if the <i>storefront</i> parameter was used and only updated if the <i>update</i> parameter was utilized.<br><br>
     * String array containing up to 100,000 storefront ASINs, sorted by freshest first. The corresponding <br>
     * time stamps can be found in the <i>asinListLastSeen</i> field.<br>
     * Example: ["B00M0QVG3W", "B00M4KCH2A"]
     * @var string[]|null
     */
    public $asinList;

    /**
     *  Only available if the <i>storefront</i> parameter was used and only updated if the <i>update</i> parameter was utilized.<br><br>
     *  Contains the last time (in Keepa Time minutes) we were able to verify each ASIN in the _asinList_ field.<br>
     *  <i>asinList</i> and <i>asinListLastSeen</i> share the same indexation, so the corresponding time stamp<br>
     *  for `asinList[10]` would be `asinListLastSeen[10]`.
     *  <p>Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).</p>
     *  <br>
     *  Example: [2711319, 2711311]
     * @var int[]|null
     */
    public $asinListLastSeen;

    /**
     *    Only available if the <i>storefront</i> parameter was used and only updated if the <i>update</i> parameter was utilized.<br><br>
     *  Contains the total amount of listings of this seller. Includes historical data<br>
     *  <i>asinList</i> and <i>asinListLastSeen</i> share the same indexation, so the corresponding time stamp<br>
     *  for `asinList[10]` would be `asinListLastSeen[10]`. Has the format: Keepa Time minutes, count, ...
     *  <p>Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).</p>
     *  <br>
     *  Example: [2711319, 1200, 2711719, 1187]
     * @var int[]|null
     */
    public $totalStorefrontAsins = null;


    /**
     * Statistics about the primary categories of this seller. Based on our often incomplete and outdated product offers data.
     * @var MerchantCategoryStatistics[]|null
     */
    public $sellerCategoryStatistics = null;

    /**
     * Statistics about the primary brands of this seller. Based on our often incomplete and outdated product offers data.
     * @var MerchantBrandStatistics[]|null
     */
    public $sellerBrandStatistics = null;


    /**
     *
     * @var int
     */
    public $currentRating = null;

    /**
     *
     * @var int
     */
    public $currentRatingCount = null;

    /**
     *
     * @var int
     */
    public $ratingsLast30Days = null;

}
