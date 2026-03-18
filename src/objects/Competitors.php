<?php
namespace Keepa\objects;

class Competitors
{
    /**
     * The sellerId of the competitor, in lowercase.
     * @var string|null
     */
    public $sellerId = null;

    /**
     * The percentage of listings this competitor shares with the seller.
     * @var int|null
     */
    public $percent = null;
}
