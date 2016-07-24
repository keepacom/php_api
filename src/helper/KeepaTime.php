<?php
namespace Keepa\helper;

class KeepaTime
{
    const keepaStartHour = 359400;
    const keepaStartMinute = 21564000;

    public static function nowHours()
    {
        return self::unixInMillisToKeepaHour(microtime(true) * 1000);
    }

    public static function nowMinutes()
    {
        return self::unixInMillisToKeepaMinutes(microtime(true) * 1000);
    }

    public static function unixInMillisToKeepaMinutes($unix)
    {
        return (int)((floor($unix / (60 * 1000))) - self::keepaStartMinute);
    }

    public static function unixInMillisToKeepaHour($unix)
    {
        return (int)((floor($unix / (60 * 60 * 1000))) - self::keepaStartHour);
    }

    public static function keepaHourToUnixInMillis($hour)
    {
        return $hour * 60 * 60 * 1000 + self::keepaStartHour * 60 * 60 * 1000;
    }

    public static function keepaMinuteToUnixInMillis($minute)
    {
        return $minute * 60 * 1000 + self::keepaStartMinute * 60 * 1000;
    }
}

