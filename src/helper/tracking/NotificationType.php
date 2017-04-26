<?php
namespace Keepa\helper\tracking;

/**
 * NotificationType Enum
 */
class NotificationType
{
    const SIZE = 8;
    const UNKNOWN = -1;
    const EMAIL = 0;
    const TWITTER = 1;
    const FACEBOOK_NOTIFICATION = 3;
    const BROWSER = 3;
    const FACEBOOK_MESSENGER_BOT = 4;
    const API = 5;
    const MOBILE_APP = 6;
    const DUMMY = 7;

    /**
     * @var $code int
     */
    public $code;

    public function __construct($code)
    {
        $this->code = $code;
    }
}
