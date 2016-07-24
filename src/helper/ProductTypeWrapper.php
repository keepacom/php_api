<?php
namespace Keepa\helper;

use Keepa\helper\ProductType;

/**
 * Amazon Locale Domain Enum
 */
class ProductTypeWrapper
{

    private static $instance = null;

    public static function getCSVTypeFromIndex($index)
    {
        if (self::$instance == null) {
            self::$instance = [];

            /**
             * standard product - everything accessible
             */
            self::$instance[ProductType::STANDARD] = 0;

            /**
             * downloadable product – no marketplace price data
             */
            self::$instance[ProductType::DOWNLOADABLE] = 1;

            /**
             * ebook – no price data and sales rank accessible
             */
            self::$instance[ProductType::EBOOK] = 2;

            /**
             * no data accessible (hidden prices due to MAP - minimum advertised price)
             */
            self::$instance[ProductType::UNACCESSIBLE] = 3;

            /**
             * no data available due to invalid or deprecated asin, or other issues
             */
            self::$instance[ProductType::INVALID] = 4;

            /**
             * Product is a parent ASIN. No product data accessible, variationCSV is set
             */
            self::$instance[ProductType::VARIATION_PARENT] = 5;
        }

        if (isset(self::$instance[$index])) return self::$instance[$index];
        return self::$instance[ProductType::STANDARD];
    }
}
