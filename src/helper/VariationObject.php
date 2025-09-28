<?php
namespace Keepa\helper;

class VariationObject
{
    /**
     *
     * @var string|null
     */
    public $asin = null;

    /**
     *
     * @var \Keepa\helper\VariationAttributeObject[]|null
     */
    public $attributes = null;

    /**
     * This variation ASIN's swatch image
     * @var string|null
     **/
    public $image = null;
}