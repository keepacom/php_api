<?php
namespace Keepa\helper;

/**
 * VideoCreatorType
 */
class VideoCreatorType
{
    const MAIN = 0;
    const CUSTOMER = 1;
    const SELLER = 2;
    const INFLUENCER = 3;
    const VENDOR = 4;
    const THIRD_PARTY = 5;
    const AMAZON = 6;
    const MERCHANT = 7;
    const BRAND = 8;

    /**
     * @var $type int
     */
    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }
}
