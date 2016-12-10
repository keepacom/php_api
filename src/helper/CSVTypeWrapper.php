<?php
namespace Keepa\helper;

use Keepa\helper\CSVType;

/**
 * Amazon Locale Domain Enum
 */
class CSVTypeWrapper
{

    private static $instance = null;

    public static function getCSVTypeFromIndex($index)
    {
        if (self::$instance == null) {
            self::$instance = [];
            /**
             * Amazon price history
             */
            self::$instance[CSVType::AMAZON] = new CSVType(0, true, true, false, false);

            /**
             * Marketplace/3rd party New price history - Amazon is considered to be part of the marketplace as well,
             * so if Amazon has the overall lowest new (!) price, the marketplace new price in the corresponding time interval
             * will be identical to the Amazon price (except if there is only one marketplace offer).
             * Shipping and Handling costs not included!
             */
            self::$instance[CSVType::MARKET_NEW] = new CSVType(1, true, true, false, false);

            /**
             * Marketplace/3rd party Used price history
             */
            self::$instance[CSVType::USED] = new CSVType(2, true, true, false, false);

            /**
             * Sales Rank history. Not every product has a Sales Rank.
             */
            self::$instance[CSVType::SALES] = new CSVType(3, false, true, false, false);

            /**
             * List Price history
             */
            self::$instance[CSVType::LISTPRICE] = new CSVType(4, true, false, false, false);

            /**
             * Collectible Price history
             */
            self::$instance[CSVType::COLLECTIBLE] = new CSVType(5, true, true, false, false);

            /**
             * Refurbished Price history
             */
            self::$instance[CSVType::REFURBISHED] = new CSVType(6, true, true, false, false);

            /**
             * 3rd party (not including Amazon) New price history including shipping costs, only fulfilled by merchant (FBM).
             */
            self::$instance[CSVType::NEW_FBM_SHIPPING] = new CSVType(7, true, true, true, true);

            /**
             * 3rd party (not including Amazon) New price history including shipping costs, only fulfilled by merchant (FBM).
             */
            self::$instance[CSVType::LIGHTNING_DEAL] = new CSVType(8, true, true, false, false);

            /**
             * Amazon Warehouse Deals price history. Mostly of used condition, rarely new.
             */
            self::$instance[CSVType::WAREHOUSE] = new CSVType(9, true, true, false, true);

            /**
             * Price history of the lowest 3rd party (not including Amazon/Warehouse) New offer that is fulfilled by Amazon
             */
            self::$instance[CSVType::NEW_FBA] = new CSVType(10, true, true, false, true);

            /**
             * New offer count history
             */
            self::$instance[CSVType::COUNT_NEW] = new CSVType(11, false, false, false, false);

            /**
             * Used offer count history
             */
            self::$instance[CSVType::COUNT_USED] = new CSVType(12, false, false, false, false);

            /**
             * Refurbished offer count history
             */
            self::$instance[CSVType::COUNT_REFURBISHED] = new CSVType(13, false, false, false, false);

            /**
             * Collectible offer count history
             */
            self::$instance[CSVType::COUNT_COLLECTIBLE] = new CSVType(14, false, false, false, false);

            /**
             * History of past updates to all offers-parameter related data: offers, buyBoxSellerIdHistory, isSNS, isRedirectASIN and the csv types
             * NEW_SHIPPING, WAREHOUSE, FBA, BUY_BOX_SHIPPING, USED_*_SHIPPING, COLLECTIBLE_*_SHIPPING and REFURBISHED_SHIPPING.
             * As updates to those fields are infrequent it is important to know when our system updated them.
             * The absolute value indicates the amount of offers fetched at the given time.
             * If the value is positive it means all available offers were fetched. It's negative if there were more offers than fetched.
             */
            self::$instance[CSVType::EXTRA_INFO_UPDATES] = new CSVType(15, false, false, false, true);

            /**
             * The product's rating history. A rating is an integer from 0 to 50 (e.g. 45 = 4.5 stars)
             */
            self::$instance[CSVType::RATING] = new CSVType(16, false, false, false, true);

            /**
             * The product's review count history.
             */
            self::$instance[CSVType::COUNT_REVIEWS] = new CSVType(17, false, false, false, true);

            /**
             * The price history of the buy box. If no offer qualified for the buy box the price has the value -1. Including shipping costs.
             */
            self::$instance[CSVType::BUY_BOX_SHIPPING] = new CSVType(18, true, false, true, true);

            /**
             * "Used - Like New" price history including shipping costs.
             */
            self::$instance[CSVType::USED_NEW_SHIPPING] = new CSVType(19, true, true, true, true);

            /**
             * "Used - Very Good" price history including shipping costs.
             */
            self::$instance[CSVType::USED_VERY_GOOD_SHIPPING] = new CSVType(20, true, true, true, true);

            /**
             * "Used - Good" price history including shipping costs.
             */
            self::$instance[CSVType::USED_GOOD_SHIPPING] = new CSVType(21, true, true, true, true);

            /**
             * "Used - Acceptable" price history including shipping costs.
             */
            self::$instance[CSVType::USED_ACCEPTABLE_SHIPPING] = new CSVType(22, true, true, true, true);

            /**
             * "Collectible - Like New" price history including shipping costs.
             */
            self::$instance[CSVType::COLLECTIBLE_NEW_SHIPPING] = new CSVType(23, true, true, true, true);

            /**
             * "Collectible - Very Good" price history including shipping costs.
             */
            self::$instance[CSVType::COLLECTIBLE_VERY_GOOD_SHIPPING] = new CSVType(24, true, true, true, true);

            /**
             * "Collectible - Good" price history including shipping costs.
             */
            self::$instance[CSVType::COLLECTIBLE_GOOD_SHIPPING] = new CSVType(25, true, true, true, true);

            /**
             * "Collectible - Acceptable" price history including shipping costs.
             */
            self::$instance[CSVType::COLLECTIBLE_ACCEPTABLE_SHIPPING] = new CSVType(26, true, true, true, true);

            /**
             * Refurbished price history including shipping costs.
             */
            self::$instance[CSVType::REFURBISHED_SHIPPING] = new CSVType(27, true, true, true, true);
        }

        if (isset(self::$instance[$index])) return self::$instance[$index];
        return self::$instance[CSVType::AMAZON];
    }
}
