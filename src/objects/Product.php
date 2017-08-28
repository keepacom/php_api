<?php
namespace Keepa\objects;

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
     * The ASIN of the parent product (if asin has variations, otherwise null)
     * @var string|null $parentAsin
     */
    public $parentAsin = null;

    /**
     * Comma separated list of variation ASINs of the product (if asin is parentAsin, otherwise null)
     * @var string|null
     */
    public $variationCSV = null;

    /**
     * The UPC of the product. Caution: leading zeros are truncated.
     * @var string
     */
    public $upc = 0;

    /**
     * The EAN of the product. Caution: leading zeros are truncated.
     * @var string
     */
    public $ean = 0;

    /**
     * The manufacturer’s part number.
     * @var string|null
     */
    public $mpn = null;

    /**
     * Comma separated list of image names of the product. Full Amazon image path:<br>
     * https://images-na.ssl-images-amazon.com/images/I/_image name_
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
     * An item's brand. null if not available.
     * @var string|null
     */
    public $brand = null;

    /**
     * The item's label. null if not available.
     * @var string|null
     */
    public $label = null;

    /**
     * The item's department. null if not available.
     * @var string|null
     */
    public $department = null;

    /**
     * The item's publisher. null if not available.
     * @var string|null
     */
    public $publisher = null;

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
     * The item's studio. null if not available.
     * @var string|null
     */
    public $studio = null;

    /**
     * The item's genre. null if not available.
     * @var string|null
     */
    public $genre = null;

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
     * The item's platform. null if not available.
     * @var string|null
     */
    public $platform = null;

    /**
     * The item's format. null if not available.
     * @var string|null
     */
    public $format = null;

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
     */
    public $packageQuantity = -1;

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
     * Whether or not the product has reviews.
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
     * Keepa product type {@link Product.ProductType}. Must always be evaluated first.
     * @var int
     */
    public $productType = 0;

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
     * Contains a history of sellerIds that held the Buy Box in the format Keepa time minutes, sellerId, [...].<br>
     * If no seller qualified for the Buy Box the sellerId "-1" is used. If it was hold by an unknown seller (a brand new one) the sellerId is "-2".<br>
     * Example: ["2860926","ATVPDKIKX0DER", …]
     * <p>Use {@link KeepaTime#keepaMinuteToUnixInMillis(String)} (long)} to get an uncompressed timestamp (Unix epoch time).</p>
     * @var string[]|null
     */
    public $buyBoxSellerIdHistory = null;

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
     * Amazon internal product type categorization.
     * @var string|null
     */
    public $type = null;

    /**
     * Amazon internal product type categorization.
     * @var string[]|null
     */
    public $frequentlyBoughtTogether = null;
}