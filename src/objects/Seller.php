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

    /*public enum MerchantCsvType {
        RATING(0, false),
        RATING_COUNT(1, false);

        //If the values are prices.
        public final boolean isPrice;

        public final int index;
        public static final MerchantCsvType[] values = MerchantCsvType.values();

        MerchantCsvType(int i, boolean price) {
            index = i;
            isPrice = price;
        }

        public static MerchantCsvType getCSVTypeFromIndex(int index) {
            for (MerchantCsvType type : MerchantCsvType.values) {
                if (type.index == index) return type;
            }
            return RATING;
        }
    }

    @Override
    public String toString() {
        return gson.toJson(this);
    }*/
}
