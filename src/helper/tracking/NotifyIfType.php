<?php
namespace Keepa\helper\tracking;

/**
 * Amazon Locale Domain Enum
 */
class NotifyIfType
{
    const UNKNOWN = -1;
    const OUT_OF_STOCK = 0;
    const BACK_IN_STOCK = 1;

    /**
     * @var $code int
     */
    public $code;

    public function __construct($code)
    {
        $this->code = $code;
    }
}
