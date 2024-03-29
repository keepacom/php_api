<?php
namespace Keepa\objects;

/**
 * About:
 * A Deal object represents a product that has recently changed (usually in price or sales rank). It contains a summary of the product and information about the changes.
 * <p>
 * Returned by:
 * The Deal object is returned by the Browsing Deals request.
 */
class Deal
{

    /**
     * The ASIN of the product
     * @var string|null
     */
    public $asin = null;

    /**
     * Title of the product. Caution: may contain HTML markup in rare cases.
     * @var string|null
     */
    public $title = null;

    /**
     * Contains the absolute difference between the current value and the one at the beginning of the respective date range interval.
     * The value 0 means it did not change or could not be calculated. First dimension uses the Date Range indexing, second the Price Type indexing.
     * <p>First dimension uses {@link Product.CSVType}, second domension {@link DealInterval}</p>
     * $var mixed|null int[][]
     */
    public $delta = null; // delta to average. negativ = gestiegen!, positiv = gesunken, 0 = gleich geblieben / nicht berechenbar!

    /**
     * Same as {@link #delta}, but given in percent instead of absolute values.
     * <p>First dimension uses {@link Product.CSVType}, second domension {@link DealInterval}</p>
     * @var mixed|null int[][]
     */
    public $deltaPercent = null; // positiv = gesunken, negativ = gestiegen, 0 = gleich geblieben / nicht berechenbar!

    /**
     * Contains the absolute difference of the current and the previous price / rank. The value 0 means it did not change or could not be calculated.
     * <p>Uses {@link Product.CSVType} indexing</p>
     * @var int[]|null
     */
    public $deltaLast = null; // differenz zum vorherigen wert, negativ = gesunken, ..., 0 = gleich geblieben / nicht berechenbar!

    /**
     * Contains the weighted averages in the respective date range and price type.<br>
     * <b>Note:</b> The day interval (index 0) is actually the average of the last 48 hours, not 24 hours. This is due to the way our deals work.
     * <p>First dimension uses {@link Product.CSVType}, second domension {@link DealInterval}</p>
     * @var mixed|null int[][]
     */
    public $avg = null; // durchschnittspreis des letzten 3 monats (ggf. kleineres interval)

    /**
     * Contains the prices / ranks of the product of the time we last updated it. Uses the Price Type indexing.
     * The price is an integer of the respective Amazon locale's smallest currency unit (e.g. euro cents or yen).
     * If no offer was available in the given interval (e.g. out of stock) the price has the value -1.
     * Shipping and Handling costs are not included. Amazon is considered to be part of the marketplace, so if
     * Amazon has the overall lowest new price, the marketplace new price in the corresponding time interval will
     * be identical to the Amazon price (except if there is only one marketplace offer).
     * <p>Uses {@link Product.CSVType} indexing</p>
     * @var mixed|null int[]
     */
    public $current = null;

    /**
     * Category node id {@link Category#catId} of the product's root category. 0 or 9223372036854775807 if no root category known
     * @var int
     */
    public $rootCat = 0;

    /**
     * States the time this deal was found, in Keepa Time minutes.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $creationDate = 0;

    /**
     * The name of the main product image of the product. Make sure you own the rights to use the image.<br>
     * Each entry represents the integer of a US-ASCII (ISO646-US) coded character. Easiest way to convert it to a String in Javascript would be var imageName = String.fromCharCode.apply("", productObject.image);.<br>
     * Example: [54,49,107,51,76,97,121,55,74,85,76,46,106,112,103], which equals "61k3Lay7JUL.jpg".<br>
     * Full Amazon image path: https://m.media-amazon.com/images/I/_image name_
     * @var int[]|null
     */
    public $image = null;

    /**
     * Array of Amazon category node ids {@link Category#catId} this product is listed in. Can be empty.<br>
     * Example: [569604]
     * @var int[]|null
     */
    public $categories = null;

    /**
     * States the last time we have updated the information for this deal, in Keepa Time minutes.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int|null
     */
    public $lastUpdate = 0;

    /**
     * States the time this lightning deal is scheduled to end, in Keepa Time minutes. Only applicable to lightning deals. 0 otherwise. <br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int|null
     */
    public $lightningEnd = 0;

    /**
     * Limit to products with a minimum rating (A rating is an integer from 0 to 50 (e.g. 45 = 4.5 stars)).
     * If -1 the filter is inactive.
     * Example: 20 (= min. rating of 2 stars)
     * @var int|null
     */
    public $minRating = -1;

    /**
     * The {@link OfferCondition} condition of the cheapest warehouse deal of this product. Integer value:
     * <br>0 - Unknown: We were unable to determine the condition or this is not a warehouse deal in our data
     * <br>2 - Used - Like New
     * <br>3 - Used - Very Good
     * <br>4 - Used - Good
     * <br>5 - Used - Acceptable
     * @var int|null
     */
    public $warehouseCondition;

    /**
     * The offer comment of the cheapest warehouse deal of this product. null if no warehouse deal found in our data.
     * @var string|null
     */
    public $warehouseConditionComment;


    /**
     * The timestamp indicating the starting point from which the <i>current</i> value has been in effect, in Keepa Time minutes.
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int[]|null
     */
    public $currentSince;


    /**
     * Available deal ranges.
     */
    /*public enum DealInterval {
        DAY,
        WEEK,
        MONTH,
        _90_DAYS;
        public static final DealInterval[] values = DealInterval.values();
    }

    @Override
    public String toString() {
        return gson.toJson(this);
    }*/
}
