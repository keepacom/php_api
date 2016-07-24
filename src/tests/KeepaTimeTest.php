<?php
namespace Keepa\tests;

use Keepa\helper\KeepaTime;

class KeepaTimeTest extends abstractTest
{
    public function testKeepaHours()
    {
        $nowHours = KeepaTime::nowHours();
        $nowMillis = KeepaTime::keepaHourToUnixInMillis($nowHours);
        $nowHoursCheck = KeepaTime::unixInMillisToKeepaHour($nowMillis);
        self::assertEquals($nowHours, $nowHoursCheck);
    }

    public function testKeepaMinutes()
    {
        $nowMinutes = KeepaTime::nowMinutes();
        $nowMillis = KeepaTime::keepaMinuteToUnixInMillis($nowMinutes);
        $nowMinutesCheck = KeepaTime::unixInMillisToKeepaMinutes($nowMillis);
        self::assertEquals($nowMinutes, $nowMinutesCheck);
    }
}