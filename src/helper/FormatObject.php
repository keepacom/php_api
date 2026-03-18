<?php
namespace Keepa\helper;

class FormatObject
{
    /**
     * The ASIN of the format.
     * @var string|null
     */
    public $asin = null;

    /**
     * The type of format, which can be one of the following: Kindle, Paperback, Hardcover, Audiobook, or Spiral-bound.
     * @var string|null
     */
    public $format = null;
}
