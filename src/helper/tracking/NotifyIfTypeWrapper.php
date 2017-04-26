<?php
namespace Keepa\helper\tracking;

use Keepa\helper\ProductType;

/**
 * Amazon Locale Domain Enum
 */
class NotifyIfTypeWrapper
{

    private static $instance = null;

    public static function getCSVTypeFromIndex($index)
    {
        if (self::$instance == null) {
            self::$instance = [];

            /**
             * OUT_OF_STOCK
             */
            self::$instance[NotifyIfType::OUT_OF_STOCK] = 0;

            /**
             * BACK_IN_STOCK
             */
            self::$instance[NotifyIfType::BACK_IN_STOCK] = 1;
        }

        if (isset(self::$instance[$index])) return self::$instance[$index];
        return self::$instance[NotifyIfType::UNKNOWN];
    }
}
