<?php
namespace Keepa\helper\tracking;

use Keepa\helper\ProductType;

/**
 * NotificationTypeWrapper Enum
 */
class NotificationTypeWrapper
{

    private static $instance = null;

    public static function getCSVTypeFromIndex($index)
    {
        if (self::$instance == null) {
            self::$instance = [];

            /**
             * EMAIL
             */
            self::$instance[NotificationType::EMAIL] = 0;

            /**
             * TWITTER
             */
            self::$instance[NotificationType::TWITTER] = 1;

            /**
             * FACEBOOK_NOTIFICATION
             */
            self::$instance[NotificationType::FACEBOOK_NOTIFICATION] = 2;

            /**
             * BROWSER
             */
            self::$instance[NotificationType::BROWSER] = 3;

            /**
             * FACEBOOK_MESSENGER_BOT
             */
            self::$instance[NotificationType::FACEBOOK_MESSENGER_BOT] = 4;

            /**
             * API
             */
            self::$instance[NotificationType::API] = 5;

            /**
             * MOBILE_APP
             */
            self::$instance[NotificationType::MOBILE_APP] = 6;

            /**
             * DUMMY
             */
            self::$instance[NotificationType::DUMMY] = 7;
        }

        if (isset(self::$instance[$index])) return self::$instance[$index];
        return self::$instance[NotificationType::UNKNOWN];
    }
}
