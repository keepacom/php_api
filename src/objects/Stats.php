<?php
namespace Keepa\objects;

/**
 * Contains statistic values.
 * Only set if the stats parameter was used in the Product Request. Part of the {@link Product}
 */
class Stats
{

    /**
     * Contains the prices / ranks of the product of the time we last updated it.
     * <p>Uses {@link Product.CSVType} indexing.</p>
     * The price is an integer of the respective Amazon locale's smallest currency unit (e.g. euro cents or yen).
     * If no offer was available in the given interval (e.g. out of stock) the price has the value -1.
     * @var int[]|null
     */
    public $current = null;

    /**
     * Contains the weighted mean for the interval specified in the product request's stats parameter.<br>
     * <p>Uses {@link Product.CSVType} indexing.</p>
     * If no offer was available in the given interval or there is insufficient data it has the value -1.
     * @var int[]|null
     */
    public $avg = null;

    /**
     * Contains the weighted mean for the last 30 days.<br>
     * <p>Uses {@link Product.CSVType} indexing.</p>
     * If no offer was available in the given interval or there is insufficient data it has the value -1.
     * @var int[]|null
     */
    public $avg30 = null;


    /**
     * Contains the weighted mean for the last 90 days.<br>
     * <p>Uses {@link Product.CSVType} indexing.</p>
     * If no offer was available in the given interval or there is insufficient data it has the value -1.
     * @var int[]|null
     */
    public $avg90 = null;

    /**
     * Contains the weighted mean for the last 180 days.<br>
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * If no offer was available in the given interval or there is insufficient data it has the value -1.
     * @var int[]|null
     */
    public $avg180 = null;

    /**
     * Contains the prices registered at the start of the interval specified in the product request's stats parameter.<br>
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * If no offer was available in the given interval or there is insufficient data it has the value -1.
     * @var int[]|null
     */
    public $atIntervalStart = null;

    /**
     * Contains the lowest prices registered for this product. <br>
     * First dimension uses {@link Product.CSVType} indexing <br>
     * Second dimension is either null, if there is no data available for the price type, or
     * an array of the size 2 with the first value being the time of the extreme point (in Keepa time minutes) and the second one the respective extreme value.
     * <br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var mixed int[][]
     */
    public $min = null;

    /**
     * Contains the lowest prices registered in the interval specified in the product request's stats parameter.<br>
     * First dimension uses {@link Product.CSVType} indexing <br>
     * Second dimension is either null, if there is no data available for the price type, or
     * an array of the size 2 with the first value being the time of the extreme point (in Keepa time minutes) and the second one the respective extreme value.
     * <br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var mixed int[][]
     */
    public $minInInterval = null;

    /**
     * Contains the highest prices registered for this product. <br>
     * First dimension uses {@link Product.CSVType} indexing <br>
     * Second dimension is either null, if there is no data available for the price type, or
     * an array of the size 2 with the first value being the time of the extreme point (in Keepa time minutes) and the second one the respective extreme value.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var mixed int[][]
     */
    public $max = null;

    /**
     * Contains the highest prices registered in the interval specified in the product request's stats parameter.<br>
     * First dimension uses {@link Product.CSVType} indexing <br>
     * Second dimension is either null, if there is no data available for the price type, or
     * an array of the size 2 with the first value being the time of the extreme point (in Keepa time minutes) and the second one the respective extreme value.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var mixed int[][]
     */
    public $maxInInterval = null;

    /**
     * Contains the out of stock percentage in the interval specified in the product request's stats parameter.<br>
     * <p>Uses {@link Product.CSVType} indexing.</p>
     * It has the value -1 if there is insufficient data or the CSVType  is not a price.<br>
     * <p>Examples: 0 = never was out of stock, 100 = was out of stock 100% of the time, 25 = was out of stock 25% of the time</p>
     * @var mixed int[][]
     */
    public $outOfStockPercentageInInterval = null;

    /**
     * Contains the 90 day out of stock percentage<br>
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * It has the value -1 if there is insufficient data or the CsvType is not a price.<br>
     * <p>Examples: 0 = never was out of stock, 100 = was out of stock 100% of the time, 25 = was out of stock 25% of the time</p>
     * @var int[]|null
     */
    public $outOfStockPercentage90 = null;

    /**
     * Contains the 30 day out of stock percentage<br>
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * It has the value -1 if there is insufficient data or the CsvType is not a price.<br>
     * <p>Examples: 0 = never was out of stock, 100 = was out of stock 100% of the time, 25 = was out of stock 25% of the time</p>
     * @var int[]|null
     */
    public $outOfStockPercentage30 = null;


    /**
     * Can be used to identify past, upcoming and current lightning deal offers.
     * Has the format [startDate, endDate] (if not null, always array length 2). *null* if the product never had a lightning deal. Both timestamps are in UTC and Keepa time minutes.
     * If there is a upcoming lightning deal, only startDate is be set (endDate has value -1)
     * If there is a current lightning deal, both startDate and endDate will be set. startDate will be older than the current time, but endDate will be a future date.
     * If there is only a past deal, both startDate and endDate will be set but be the past.
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var mixed|null
     */
    public $lightningDealInfo = null;


    /**
     * the total count of offers this product has (all conditions combined). The offer count per condition can be found in the current field.
     * @var int
     */
    public $totalOfferCount = -2;

    /**
     * the last time the offers information was updated. Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $lastOffersUpdate = -1;

    /**
     * Contains the total stock available per item condition (of the retrieved offers) for 3rd party FBA
     * (fulfillment by Amazon, Warehouse Deals included) or FBM (fulfillment by merchant) offers. Uses the {@link Offer.OfferCondition} indexing.
     * @var int[]|null
     */
    public $stockPerCondition3rdFBA = null;

    /**
     * Contains the total stock available per item condition (of the retrieved offers) for 3rd party FBM
     * (fulfillment by Amazon, Warehouse Deals included) or FBM (fulfillment by merchant) offers. Uses the {@link Offer.OfferCondition} indexing.
     * @var int[]|null
     */
    public $stockPerConditionFBM = null;

    /**
     * Only set when the offers parameter was used. The stock of Amazon, if Amazon has an offer. Max. reported stock is 10. Otherwise -2.
     * @var int
     */
    public $stockAmazon = -2;

    /**
     * Only set when the offers parameter was used. The stock of buy box offer. Max. reported stock is 10. If the boy box is empty/unqualified: -2.
     * @var int
     */
    public $stockBuyBox = -2;

    /**
     * Only set when the offers parameter was used. The count of actually retrieved offers for this request.
     * @var int
     */
    public $retrievedOfferCount = -2;

    /**
     * Only set when the offers parameter was used. The buy box price, if existent. Otherwise -2.
     * @var int
     */
    public $buyBoxPrice = -2;

    /**
     * Only set when the offers parameter was used. The buy box shipping cost, if existent. Otherwise -2.
     * @var int
     */
    public $buyBoxShipping = -2;

    /**
     * Only set when the offers parameter was used. Whether or not a seller won the buy box. If there are only sellers with bad offers none qualifies for the buy box.
     * @var  bool|null
     */
    public $buyBoxIsUnqualified = null;

    /**
     * Only set when the offers parameter was used. Whether or not the buy box is listed as being shippable.
     * @var bool|null
     */
    public $buyBoxIsShippable = null;

    /**
     * Only set when the offers parameter was used. If the buy box is a pre-order.
     * @var bool|null
     */
    public $buyBoxIsPreorder = null;

    /**
     * Only set when the offers parameter was used. Whether or not the buy box is fulfilled by Amazon.
     * @var bool|null
     */
    public $buyBoxIsFBA = null;

    /**
     * Only set when the offers parameter was used. Whether or not the buy box offer is in used condition.
     * @var bool|null
     */
    public $buyBoxIsUsed = null;

    /**
     * Only set when the offers parameter was used. If Amazon is the seller in the buy box.
     * @var bool|null
     */
    public $buyBoxIsAmazon = null;

    /**
     * Only set when the offers parameter was used. If the buy box price is hidden on Amazon due to MAP restrictions (minimum advertised price).
     * @var bool|null
     */
    public $buyBoxIsMAP = null;

    /**
     * Only set when the offers parameter was used. If the product is an add-on item (add-on Items ship with orders that include $25 or more of items shipped by Amazon).
     * @var bool|null
     */
    public $isAddonItem = null;

    /**
     * Only set when the offers parameter was used. Contains the seller ids (if any) of the lowest priced live FBA offer(s). Multiple entries if multiple offers share the same price.
     * @var string[]|null
     */
    public $sellerIdsLowestFBA = null;

    /**
     * Only set when the offers parameter was used. Contains the seller ids (if any) of the lowest priced live FBM offer(s). Multiple entries if multiple offers share the same price.
     * @var string[]|null
     */
    public $sellerIdsLowestFBM = null;

    /**
     * Only set when the offers parameter was used. Count of retrieved live FBA offers.
     * @var int|null
     */
    public $offerCountFBA = -2;

    /**
     * Only set when the offers parameter was used. Count of retrieved live FBM offers.
     * @var int|null
     */
    public $offerCountFBM = -2;
}
