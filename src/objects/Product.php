<?php
namespace Keepa\objects;

use Keepa\helper\CategoryTreeEntry;
use Keepa\KeepaAPI;

class Product
{

    /**
     * The ASIN of the product
     * @var string
     */
    public $asin = null;

    /**
     * The domainId of the products Amazon locale
     * {@link AmazonLocale}
     * @var int
     */
    public $domainId = 0;

    /**
     * The ASIN of the parent product (if the product has variations, otherwise null)
     * @var string|null $parentAsin
     */
    public $parentAsin = null;

    /**
     * The history of the parentAsin field. This array follows the format: [Keepa time in minutes, previous parent ASIN, ...].<br>
     * The included timestamp indicates when the previously associated parent ASIN ceased to be valid.<br>
     * For the current parent ASIN, use the parentAsin field.<br><br>
     * To convert a Keepa minute timestamp into an uncompressed, Unix epoch time timestamp, use the {@link KeepaTime#keepaMinuteToUnixInMillis(int)} method.<br>
     * null if the parentAsin field never changed.
     * @var string[]|null
     */
    public $parentAsinHistory = null;

    /**
     * Comma separated list of variation ASINs of the product (if asin is parentAsin, otherwise null)
     * @var string|null
     */
    public $variationCSV = null;

    /**
     * Comma separated list of image names of the product. Full Amazon image path:<br>
     * https://m.media-amazon.com/images/I/_image name_
     * @var string|null
     */
    public $imagesCSV = null;

    /**
     * Array of category node ids
     * @var int[]|null
     */
    public $categories = null;

    /**
     * Category node id of the products' root category. 0 if no root category known
     * @var int|null
     */
    public $rootCategory = 0;

    /**
     * Name of the manufacturer
     * @var string|null
     */
    public $manufacturer = null;

    /**
     * Title of the product. Caution: may contain HTML markup in rare cases.
     * @var string|null
     */
    public $title = null;

    /**
     * States the time we have started tracking this product, in Keepa Time minutes.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $trackingSince = 0;


    /**
     * States the time the item was first listed on Amazon, in Keepa Time minutes.<br>
     * It is updated in conjunction with the offers request, but always accessible.<br>
     * This timestamp is only available for some products. If not available the field has the value 0.
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $listedSince = 0;

    /**
     * An item's brand. null if not available.
     * @var string|null
     */
    public $brand = null;

    /**
     * The item's productGroup. null if not available.
     * @var string|null
     */
    public $productGroup = null;

    /**
     * The item's partNumber. null if not available.
     * @var string|null
     */
    public $partNumber = null;

    /**
     * The item's model. null if not available.
     * @var string|null
     */
    public $model = null;

    /**
     * The item's color. null if not available.
     * @var string|null
     */
    public $color = null;

    /**
     * The item's size. null if not available.
     * @var string|null
     */
    public $size = null;

    /**
     * The item's edition. null if not available.
     * @var string|null
     */
    public $edition = null;

    /**
     * The item's format. null if not available.
     * @var string|null
     */
    public $format = null;

    /**
     * The item’s author. null if not available.
     * @deprecated use the field contributors instead
     * @var string|null
     */
    public $author = null;

    /**
     * Represents the category tree as an ordered array of CategoryTreeEntry objects.
     * @var string|null
     */
    public $binding = null;

    /**
     * Represents the category tree as an ordered array of CategoryTreeEntry objects.
     * @var \Keepa\helper\CategoryTreeEntry[]|null
     */
    public $categoryTree = null;

    /**
     * The number of items of this product. -1 if not available.
     * @var int
     */
    public $numberOfItems = -1;

    /**
     * The number of pages of this product. -1 if not available.
     * @var int
     */
    public $numberOfPages = -1;

    /**
     * The item’s publication date in one of the following three formats:<br>
     * YYYY or YYYYMM or YYYYMMDD (Y= year, M = month, D = day)<br>
     * -1 if not available.<br><br>
     * Examples:<br>
     * 1978 = the year 1978<br>
     * 200301 = January 2003<br>
     * 20150409 = April 9th, 2015
     * @var int
     */
    public $publicationDate = -1;

    /**
     * The item’s release date in one of the following three formats:<br>
     * YYYY or YYYYMM or YYYYMMDD (Y= year, M = month, D = day)<br>
     * -1 if not available.<br><br>
     * Examples:<br>
     * 1978 = the year 1978<br>
     * 200301 = January 2003<br>
     * 20150409 = April 9th, 2015
     * @var int
     */
    public $releaseDate = -1;

    /**
     * An item can have one or more languages. Each language entry has a name and a type.
     * Some also have an audio format. null if not available.<br><br>
     * Examples:<br>
     * [ [ “English”, “Published” ], [ “English”, “Original Language” ] ]<br>
     * With audio format:<br>
     * [ [ “Englisch”, “Originalsprache”, “DTS-HD 2.0” ], [ “Deutsch”, null, “DTS-HD 2.0” ] ]
     * @var mixed|null
     */
    public $languages = null;


    /**
     * The contributors of the item. A contributor can be an author, actor, director, etc. Each contributor entry has a name and a role type.<br><br>
     * Example:<br>
     * [ [ “Vin Diesel”, “actor” ] ]
     * @var mixed|null
     */
    public $contributors = null;


    /**
     * A list of the product features / bullet points. null if not available.
     * An entry can contain HTML markup in rare cases. We currently limit each entry to a maximum of 1000 characters
     * (if the feature is longer it will be cut off). This limitation may change in the future without prior notice.
     * @var string[]|null
     */
    public $features = null;

    /**
     * A description of the product. null if not available. Most description contain HTML markup.<br>
     * We limit the product description to a maximum of 2000 characters (if the description is<br>
     * longer it will be cut off). This limitation may change in the future without prior notice.
     * @var string|null
     */
    public $description = null;

    /**
     * The package's height in millimeter. 0 or -1 if not available.
     * @var int
     */
    public $packageHeight = -1;

    /**
     * The package's length in millimeter. 0 or -1 if not available.
     * @var int
     */
    public $packageLength = -1;

    /**
     * The package's width in millimeter. 0 or -1 if not available.
     * @var int
     */
    public $packageWidth = -1;

    /**
     * The package's weight in gram. 0 or -1 if not available.
     * @var int
     */
    public $packageWeight = -1;

    /**
     * Quantity of items in a package. 0 or -1 if not available.
     * @var int
     * @deprecated
     */
    public $packageQuantity = -1;

    /**
     * The item's height in millimeter. 0 or -1 if not available.
     * @var int
     */
    public $itemHeight = -1;

    /**
     * The item's length in millimeter. 0 or -1 if not available.
     * @var int
     */
    public $itemLength = -1;

    /**
     * The item's width in millimeter. 0 or -1 if not available.
     * @var int
     */
    public $itemWidth = -1;

    /**
     * The item's weight in gram. 0 or -1 if not available.
     * @var int
     */
    public $itemWeight = -1;

    /**
     * Contains the lowest priced matching eBay listing Ids.
     * Always contains two entries, the first one is the listing id of the lowest priced listing in new condition,
     * the second in used condition. null or 0 if not available.<br>
     * Example: [ 273344490183, 0
     * @var integer[]|null
     */
    public $ebayListingIds = null;

    /**
     * Indicates if the item is considered to be for adults only.
     * @var bool
     */
    public $isAdultProduct = false;

    /**
     * Whether or not the product is eligible for trade-in.
     * @var bool
     */
    public $isEligibleForTradeIn = false;


    /**
     * @deprecated use the field referralFeePercentage instead
     * @var int|null
     */
    public $referralFeePercent = null;

    /**
     * The variable closing fee. Fees are integers of the respective Amazon locale’s smallest currency unit (e.g. euro cents or yen). null if not available.
     * Example: 81
     * @var int|null
     */
    public $variableClosingFee = null;

    /**
     * The product listing URL slug.
     * Example: Ring-Video-Doorbell-Satin-Nickel-2020-Release
     * @var string|null
     */
    public $urlSlug = null;


    /**
     * The ingredient list of the product. undefined if not available.
     * Example: Purified Carbonated Water, Natural Flavors
     * @var string|null
     */
    public $ingredients = null;

    /**
     * True if this product is an Amazon Haul product. undefined otherwise.
     * Example: true
     * @var bool|null
     */
    public $isHaul;

    /**
     * The referral fee percent is determined by either the current price or, in the absence of a current offer, the previous one. If neither of these prices is available for reference, the fee percent is calculated based on a standard sales price of 100.00. *null* if not available.
     * Example: 12
     * @var double|null
     */
    public $referralFeePercentage = null;

    /**
     * States the last time we have updated the monthlySold field, in Keepa Time minutes. Undefined if the monthlySold has no value.
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int|null
     */
    public $lastSoldUpdate = null;

    /**
     * How often this product was bought in the past month. This field represents the bought past month metric found on Amazon search result pages. It is not an estimate. Undefined if it has no value. Most ASINs do not have this value set. The value is variation specific.
     * Example: 1000 - the ASIN was bought at least 1000 times in the past month.
     * @var int|null
     */
    public $monthlySold = null;

    /**
     * Contains historical values of the monthlySold field. Undefined if it has no value.
     * Format: [ keepaTime, monthlySold, … ]
     * @var int[]|null
     */
    public $monthlySoldHistory = null;

    /**
     * Whether or not the product is eligible for super saver shipping by Amazon (not FBA).
     * @var bool
     */
    public $isEligibleForSuperSaverShipping = false;

    /**
     * States the last time we have updated the information for this product, in Keepa Time minutes.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $lastUpdate = 0;

    /**
     * States the last time we have registered a price change (any price kind), in Keepa Time minutes.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $lastPriceChange = 0; // minutes Keepa Epoch


    /**
     * States the last time we have updated the eBay prices for this product, in Keepa Time minutes.<br>
     * If no matching products were found the integer is negative.
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $lastEbayUpdate = 0;

    /**
     * The most recent update of the stock data for this product’s offers, in Keepa Time minutes.<br>
     * Has the value 0 unless the stock parameter was used and stock data was collected at least once.
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $lastStockUpdate = 0;


    /**
     * Availability of the Amazon offer {@link Product.AvailabilityType}.
     * @var int
     */
    public $availabilityAmazon = -1;

    /**
     * Contains subcategory rank histories. Each key represents the categoryId of the rank with the history in the corresponding value.
     * @var array|null
     */
    public $salesRanks = null;

    /**
     * The category node id of the main sales rank. -1 if not available.
     * @var int
     */
    public $salesRankReference = -1;

    /**
     * The category node id history of the main sales rank (format: timestamp, categoryId, […]).  null if not available.
     * @var int[]|null
     */
    public $salesRankReferenceHistory = null;

    /**
     * If the product is listed in the launchpad
     * @var boolean|null
     */
    public $launchpad = false;

    /**
     * Rental details
     * @var string|null
     */
    public $rentalDetails = false;

    /**
     * Rental details
     * @var \Keepa\helper\RentalObject|null
     */
    public $rentalPrices = false;

    /**
     * Rental seller id
     * @var string|null
     */
    public $rentalSellerId = null;

    /**
     * Amazon offer shipping delay. Integer array with 2 entries, indicating min and max shipping delay in hours.
     * @var int[]|null
     */
    public $availabilityAmazonDelay = null;

    /**
     * Audience rating. The rating suggests the age for which the media is appropriate.
     * Example: PG-13 (Parents Strongly Cautioned)
     * @var string|null
     */
    public $audienceRating = null;


    /**
     * Unit Count information
     * @var \Keepa\helper\UnitCountObject|null
     */
    public $unitCount;

    /**
     * States the last time we have updated the product rating and review count, in Keepa Time minutes.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $lastRatingUpdate = 0;

    /**
     * Keepa product type {@link Product.ProductType}. Must always be evaluated first.
     * @var int
     */
    public $productType = 0;

    /**
     * The item’s type. null if not available.
     * @var string|null
     */
    public $type = null;

    /**
     * Whether or not the product has reviews.
     * @var bool
     */
    public $hasReviews = false;

    /**
     * Optional field. Only set if the <i>stats</i> parameter was used in the Product Request. Contains statistic values.
     * @var \Keepa\objects\Stats|null
     */
    public $stats = null;

    /**
     * Optional field. Only set if the <i>offers</i> parameter was used in the Product Request.
     * @var \Keepa\objects\Offer[]|null
     */
    public $offers = null;


    /**
     * Optional field. Only set if the offers parameter was used in the Product Request.<br>
     * Contains an ordered array of index positions in the offers array for all Marketplace Offer Objects114 retrieved for this call.<br>
     * The sequence of integers reflects the ordering of the offers on the Amazon offer page (for all conditions).<br>
     * Since the offers field contains historical offers as well as current offers, one can use this array to <br>
     * look up all offers that are currently listed on Amazon in the correct order. <br><br>
     * Example:<br> [ 3, 5, 2, 18, 15 ] - The offer with the array index 3 of the offers field is currently the first <br>
     *     one listed on the offer listings page on Amazon, followed by the offer with the index 5, and so on.<br><br>
     * Example with duplicates:<br> [ 3, 5, 2, 18, 5 ] - The second offer, as listed on Amazon, is a lower priced duplicate <br>
     *     of the 6th offer on Amazon. The lower priced one is included in the offers field at index 5.
     *
     * Optional field.
     * @var int[]|null
     */
    public $liveOffersOrder = null;

    /**
     * Optional field. Only set if the offers parameter was used in the Product Request.<br>
     * Contains a history of sellerIds that held the Buy Box in the format Keepa time minutes, sellerId, [...].<br>
     * If no seller qualified for the Buy Box the sellerId "-1" is used. If it was hold by an unknown seller (a brand new one) the sellerId is "-2".<br>
     * Example: ["2860926","ATVPDKIKX0DER", …]
     * <p>Use {@link KeepaTime#keepaMinuteToUnixInMillis(String)} (long)} to get an uncompressed timestamp (Unix epoch time).</p>
     * @var string[]|null
     */
    public $buyBoxSellerIdHistory = null;

    /**
     * Optional field. Only set if the offers or buybox parameter was used in the Product Request.
     * A history of the used buy box winners, containing the sellerIds 159, offer sub-condition and FBA status in the format:
     * Keepa time minutes, seller id, condition, isFBA, […].
     * If no seller qualified for the used buy box the sellerId "" (empty String) is used.
     *
     * condition can have the following values:
     * “2” - Used - Like New, “3” - Used - Very Good, “4” - Used - Good, “5” - Used - Acceptable
     * isFBA is either “1” - offer is FBA or “0” - offer is merchant fulfilled.
     * Example: [“2860926”, “ATVPDKIKX0DER”, “4”, “1”, …]
     * <p>Use {@link KeepaTime#keepaMinuteToUnixInMillis(String)} (long)} to get an uncompressed timestamp (Unix epoch time).</p>
     * @var string[]|null
     */
    public $buyBoxUsedHistory = null;


    /**
     * Only valid if the offers parameter was used in the Product Request.
     * Boolean indicating if the ASIN will be redirected to another one on Amazon
     * (example: the ASIN has the color black variation, which is not available any more
     * and is redirected on Amazon to the color red).
     * @var bool
     */
    public $isRedirectASIN = false;

    /**
     * Only valid if the offers parameter was used in the Product Request. Boolean indicating if the product's Buy Box is available for subscribe and save.
     * @var bool
     */
    public $isSNS = false;

    /**
     * Suggested Lower Price for the Buy Box, if the buy box is suppressed.
     * @var int|null
     */
    public $suggestedLowerPrice = null;


    /**
     * Competitive Price Threshold (CPT) for the Buy Box, if the buy box is suppressed.
     * @var int|null
     */
    public $competitivePriceThreshold = null;

    /**
     * If buyBoxEligibleOfferCounts is available, it represents an array of integers, each entry indicating the total number of offers eligible for the Buy Box across specified offer conditions and fulfillment channels. This array contains eight elements, indexed as follows:<br>
     * 0: New FBA<br>
     * 1: New FBM<br>
     * 2: Used FBA<br>
     * 3: Used FBM<br>
     * 4: Collectible FBA<br>
     * 5: Collectible FBM<br>
     * 6: Refurbished FBA<br>
     * 7: Refurbished FBM<br>
     * @var int[]|null
     */
    public $buyBoxEligibleOfferCounts = null;

	/**
     * The hazardous material type of this product, if applicable.
     * @var \Keepa\helper\HazardousMaterial[]|null
     * /
     */
	public $hazardousMaterials = null;



    /**
     * Only valid if the offers parameter was used in the Product Request. Boolean indicating if the system was able to retrieve fresh offer information.
     * @var bool
     */
    public $offersSuccessful = false;

    /**
     * Integer[][] - two dimensional price history array.<br>
     * First dimension: {@link Product.CSVType}<br>
     * Second dimension:<br>
     * Each array has the format timestamp, price, […]. To get an uncompressed timestamp use {@link KeepaTime#keepaMinuteToUnixInMillis(int)}.<br>
     * Example: "csv[0]": [411180,4900, ... ]<br>
     * timestamp: 411180 => 1318510800000<br>
     * price: 4900 => $ 49.00 (if domainId is 5, Japan, then price: 4900 => ¥ 4900)<br>
     * A price of '-1' means that there was no offer at the given timestamp (e.g. out of stock).
     * @var mixed|null
     */
    public $csv = null;

    /**
     * One or two “Frequently Bought Together” ASINs. null if not available. Field is updated when the offers parameter was used.
     * @var string[]|null
     */
    public $frequentlyBoughtTogether = null;

    /**
     * True if this product is an Amazon Merch on Demand product
     * @var bool|null
     */
    public $isMerchOnDemand = null;

    /**
     * Indicates if the item is heat sensitive (e.g. meltable).
     * @var bool|null
     */
    public $isHeatSensitive = null;

    /**
     * Indicates the return rate of this product.<br>
     * - `null` if the return rate is unavailable or average.<br>
     * - `1` for a low return rate.<br>
     * - `2` for a high return rate.
     * @var int|null
     */
    public $returnRate = null;

    /**
     * Contains current promotions for this product. Only Amazon US promotions by Amazon (not 3rd party) are collected. In rare cases data can be incomplete.
     * @var \Keepa\helper\PromotionObject[]|null
     */
    public $promotions = null;

    /**
     * Contains the dimension attributes for up to 50 variations of this product. Only available on parent ASINs.
     * @var \Keepa\helper\VariationObject[]|null
     */
    public $variations = null;


    /**
     * Contains coupon details if any are available for the product. null if not available.
     * Integer array with always two entries: The first entry is the discount of a one time coupon, the second is a subscribe and save coupon.
     * Entry value is either 0 if no coupon of that type is offered, positive for an absolute discount or negative for a percentage discount.
     * The coupons field is always accessible, but only updated if the offers parameter was used in the Product Request.
     * <p>Example:<br>
     *        [ 200, -15 ] - Both coupon types available: $2 one time discount or 15% for subscribe and save.<br>
     *      [ -7, 0 ] - Only one time coupon type is available offering a 7% discount.
     * </p>
     * @var int[]|null
     */
    public $coupon = null;

    /**
     * Whether or not the current new price is MAP restricted. Can be used to differentiate out of stock vs. MAP restricted prices (as in both cases the current price is -1).
     * @var bool|null
     */
    public $newPriceIsMAP = null;


    /**
     * FBA fees for this product. If FBA fee information has not yet been collected for this product the field will be null.
     * @var \Keepa\helper\FBAFeesObject|null
     */
    public $fbaFees = null;

    /**
     * A list of UPC assigned to this product. The first index is the primary UPC. null if not available.
     * @var string[]|null
     */
    public $upcList = null;

    /**
     * A list of EAN assigned to this product. The first index is the primary EAN. null if not available.
     * @var string[]|null
     */
    public $eanList = null;


    /**
     * The scent of the product. Describes the fragrance associated with the product.
     * <p>Example: "Lavender"</p>
     * @var string|null
     */
    public $scent = null;

    /**
     * A brief description of the product.
     * <p>Example: "A soothing lavender-scented candle."</p>
     * @var string|null
     */
    public $shortDescription = null;

    /**
     * Active ingredients present in the product.
     * <p>Example: "Lavender essential oil, Soy wax"</p>
     * @var string|null
     */
    public $activeIngredients = null;

    /**
     * Special ingredients used in the product that may have unique properties.
     * <p>Example: "Beeswax blend, Natural dyes"</p>
     * @var string|null
     */
    public $specialIngredients = null;

    /**
     * The form or physical state of the item.
     * <p>Example: "Liquid", "Solid", "Gel"</p>
     * @var string|null
     */
    public $itemForm = null;

    /**
     * Keywords describing the type or category of the item.
     * <p>Example: "body-lotions"</p>
     * @var string|null
     */
    public $itemTypeKeyword = null;

    /**
     * Recommended uses for the product to guide customers.
     * <p>Example: "Aromatherapy, Home Decoration"</p>
     * @var string|null
     */
    public $recommendedUsesForProduct = null;

    /**
     * The pattern or design featured on the product.
     * <p>Example: "Striped", "Floral"</p>
     * @var string|null
     */
    public $pattern = null;

    /**
     * The store name of the item's brand. null if not available.
     * <p>Example: Hot Wheels</p>
     * @var string|null
     */
    public $brandStoreName = null;

    /**
     * The brand store URL path. null if not available. To get the full URL, prepend the Amazon domain of the respective locale (e.g. https//www.amazon.com).
     * <p>Example: /stores/LEGO/page/017EF856-965D-4B56-A171-EA61CAFF45DD</p>
     * @var string|null
     */
    public $brandStoreUrl = null;

    /**
     * The brand store Name from the URL path. null if not available.
     * <p>Example: LEGO (from the URL: /stores/LEGO/page/017EF856-965D-4B56-A171-EA61CAFF45DD)</p>
     * @var string|null
     */
    public $brandStoreUrlName = null;

    /**
     * Provides metadata for videos associated with the product.
     *
     * <p>The {@code videos} parameter is mandatory for access. Each object in the array represents
     * the metadata for a single video. Metadata can be retrieved for all image carousel videos
     * and up to 10 community videos from the product listing's Videos section. To request live
     * data for this field, the {@code offers} parameter must also be included. Returns {@code null}
     * if unavailable.</p>
     *
     * <p>Example:</p>
     * <pre>
     * "videos": [{
     *     "title": "Compressed Air Duster",
     *     "image": "31XBcVI7oTL.jpg",
     *     "duration": 36,
     *     "creator": "Seller",
     *     "name": "Innovation",
     *     "url": "https://m.media-amazon.com/images/S/vse-vms-transcoding-artifact-us-east-1-prd/d8d8f97e-aa42-42d2-aa4c-6ab1b006edb5/default.jobtemplate.hls.m3u8"
     * }]
     * </pre>
     * @var \Keepa\helper\VideoObject[]|null
     */
    public $videos = null;

    /**
     * Provides A+ Content of this product.
     *
     * <p>The {@code aplus} parameter is mandatory for access. To request live
     * data for this field, the {@code offers} parameter must also be included. Returns {@code null}
     * if unavailable.</p>
     * @var \Keepa\helper\APlusObject[]|null
     */
    public $aPlus = null;


    /**
     * Specific uses for the product, providing detailed applications.
     * <p>Example: {"Relaxation", "Decoration"}</p>
     * @var string[]|null
     */
    public $specificUsesForProduct = null;

    /**
     * The highest business discount percentage, if available.
     * <p>Example: 14</p>
     * @var int|null
     */
    public $businessDiscount = null;

    /**
     * KeepaTime timestamp of the last business discount percentage update.
     * @var int|null
     */
    public $lastBusinessDiscountUpdate = null;

    /**
     * Safety warnings associated with the product to inform users of potential hazards.
     * <p>Example: "Keep away from open flames."</p>
     * @var string|null
     */
    public $safetyWarning = null;

    /**
     * Benefits of using the product, highlighting its advantages.
     * <p>Example: "Promotes relaxation and stress relief."</p>
     * @var string|null
     */
    public $productBenefit = null;

    /**
     * Indicates whether batteries are required for the product to function.
     * <p>Example: true or false</p>
     * @var bool|null
     */
    public $batteriesRequired = null;

    /**
     * Indicates whether batteries are included with the product upon purchase.
     * <p>Example: true or false</p>
     * @var bool|null
     */
    public $batteriesIncluded = null;

    /**
     * Keywords describing the target audience for the product.
     * <p>Example: "Adults, Gift for Her"</p>
     * @var string|null
     */
    public $targetAudienceKeyword = null;

    /**
     * The style of the product, which may influence its aesthetic appeal.
     * <p>Example: "Modern", "Vintage"</p>
     * @var string|null
     */
    public $style = null;

    /**
     * Components included with the product, detailing what is provided upon purchase.
     * <p>Example: "Candle, Wick, Box"</p>
     * @var string|null
     */
    public $includedComponents = null;

    /**
     * Material of the product, specifying the primary substances used in its construction.
     * <p>Example: "Soy Wax, Cotton"</p>
     * @var string|null
     */
    public $material = null;
}