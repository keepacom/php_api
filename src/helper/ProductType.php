<?php
namespace Keepa\helper;

/**
 * Amazon Locale Domain Enum
 */
class ProductType
{
    const STANDARD = 0;
    const DOWNLOADABLE = 1;
    const EBOOK = 2;
    const UNACCESSIBLE = 3;
    const INVALID = 4;
    const VARIATION_PARENT = 5;

    /**
     * @var $code int
     */
    public $code;

    public function __construct($code)
    {
        $this->code = $code;
    }
}
