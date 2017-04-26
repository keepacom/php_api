<?php
namespace Keepa\helper\tracking;

/**
 * Amazon Locale Domain Enum
 */
class TrackingNotificationCauseWrapper
{

    private static $instance = null;

    public static function getCSVTypeFromIndex($index)
    {
        if (self::$instance == null) {
            self::$instance = [];

            /**
             * EXPIRED
             */
            self::$instance[TrackingNotificationCause::EXPIRED] = 0;

            /**
             * DESIRED_PRICE
             */
            self::$instance[TrackingNotificationCause::DESIRED_PRICE] = 1;

            /**
             * PRICE_CHANGE_AFTER_DESIRED_PRICE
             */
            self::$instance[TrackingNotificationCause::PRICE_CHANGE_AFTER_DESIRED_PRICE] = 2;

            /**
             * OUT_STOCK
             */
            self::$instance[TrackingNotificationCause::OUT_STOCK] = 3;

            /**
             * IN_STOCK
             */
            self::$instance[TrackingNotificationCause::IN_STOCK] = 4;

            /**
             * DESIRED_PRICE_AGAIN
             */
            self::$instance[TrackingNotificationCause::DESIRED_PRICE_AGAIN] = 5;
        }

        if (isset(self::$instance[$index])) return self::$instance[$index];
        return self::$instance[TrackingNotificationCause::UNKNOWN];
    }
}
