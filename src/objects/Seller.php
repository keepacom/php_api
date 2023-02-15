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
    public $trackedSince = null;

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
    public $lastUpdate = null;

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
     * The business address. Each entry of the array contains one address line.
     * The last entry contains the 2 letter country code. null if not available.
     * Example: [123 Main Street, New York, NY, 10001, US]
     * @var string[]|null
     */
    public $address = null;

	/**
     * Contains up to 5 of the most recent customer feedbacks.
     * Each feedback object in the array contains the following fields
     * @var FeedbackObject[]|null
     */
	public $recentFeedback;

	/**
     * States the time of our last rating data update of this seller, in Keepa Time minutes.
     * <p>Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).</p>
     * @var int
     */
	public $lastRatingUpdate;

	/**
     * Contains the neutral percentage ratings for the last 30 days, 90 days, 365 days and lifetime, in that order.
     * A neutral rating is a 3 star rating.
     * Example: [1, 1, 1, 2]
     * @var int[]|null
     */
	public $neutralRating = null;

	/**
     * Contains the negative percentage ratings for the last 30 days, 90 days, 365 days and lifetime, in that order.
     * A negative rating is a 1 or 2 star rating.
     * Example: [3, 1, 1, 3]
     * @var int[]|null
     */
	public $negativeRating = null;

	/**
     * Contains the positive percentage ratings for the last 30 days, 90 days, 365 days and lifetime, in that order.
     * A positive rating is a 4 or 5 star rating.
     * Example: [96, 98, 98, 95]
     * @var int[]|null
     */
    public $positiveRating = null;

	/**
     * Contains the rating counts for the last 30 days, 90 days, 365 days and lifetime, in that order.
     * Example: [3, 10, 98, 321]
     * @var int[]|null
     */
	public $ratingCount = null;

	/**
     * The customer services address. Each entry of the array contains one address line.
     * The last entry contains the 2 letter country code. null if not available.
     * Example: [123 Main Street, New York, NY, 10001, US]
     * @var string[]|null
     */
	public $customerServicesAddress;

	/**
     * The Trade Register Number. null if not available.
     * Example: HRB 123 456
     * @var string|null
     */
	public $tradeNumber;

	/**
     * The VAT number. null if not available.
     * Example: DE123456789
     *
     * @var string|null
     */
	public $vatID;

	/**
     * The phone number. null if not available.
     * Example: 800 1234 567
     * @var string|null
     */
	public $phoneNumber;

	/**
     * The business type. null if not available.
     * Example: Unternehmen in Privatbesitz
     * @var string|null
     */
	public $stringbusinessType;

	/**
     * The share capital. null if not available.
     * Example: 25000
     * @var string|null
     */
	public $shareCapital;

	/**
     * The name of the business representative. null if not available.
     * Example: Max Mustermann
     * @var $string|null
     */
	public $representative;


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
