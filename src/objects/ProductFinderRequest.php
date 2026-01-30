<?php

namespace Keepa\objects;

/**
 * Query object for finder Request
 */
class ProductFinderRequest
{

    /* @var string[] $author */
    public $author;

    /* @var byte[] $availabilityAmazon */
    public $availabilityAmazon;

    /* @var int $avg180_AMAZON_lte */
    public $avg180_AMAZON_lte;

    /* @var int $avg180_AMAZON_gte */
    public $avg180_AMAZON_gte;

    /* @var int $avg180_BUY_BOX_SHIPPING_lte */
    public $avg180_BUY_BOX_SHIPPING_lte;

    /* @var int $avg180_BUY_BOX_SHIPPING_gte */
    public $avg180_BUY_BOX_SHIPPING_gte;

    /* @var int $avg180_COLLECTIBLE_lte */
    public $avg180_COLLECTIBLE_lte;

    /* @var int $avg180_COLLECTIBLE_gte */
    public $avg180_COLLECTIBLE_gte;

    /* @var int $avg180_COUNT_COLLECTIBLE_lte */
    public $avg180_COUNT_COLLECTIBLE_lte;

    /* @var int $avg180_COUNT_COLLECTIBLE_gte */
    public $avg180_COUNT_COLLECTIBLE_gte;

    /* @var int $avg180_COUNT_NEW_lte */
    public $avg180_COUNT_NEW_lte;

    /* @var int $avg180_COUNT_NEW_gte */
    public $avg180_COUNT_NEW_gte;

    /* @var int $avg180_COUNT_REFURBISHED_lte */
    public $avg180_COUNT_REFURBISHED_lte;

    /* @var int $avg180_COUNT_REFURBISHED_gte */
    public $avg180_COUNT_REFURBISHED_gte;

    /* @var int $avg180_COUNT_REVIEWS_lte */
    public $avg180_COUNT_REVIEWS_lte;

    /* @var int $avg180_COUNT_REVIEWS_gte */
    public $avg180_COUNT_REVIEWS_gte;

    /* @var int $avg180_COUNT_USED_lte */
    public $avg180_COUNT_USED_lte;

    /* @var int $avg180_COUNT_USED_gte */
    public $avg180_COUNT_USED_gte;

    /* @var int $avg180_EBAY_NEW_SHIPPING_lte */
    public $avg180_EBAY_NEW_SHIPPING_lte;

    /* @var int $avg180_EBAY_NEW_SHIPPING_gte */
    public $avg180_EBAY_NEW_SHIPPING_gte;

    /* @var int $avg180_EBAY_USED_SHIPPING_lte */
    public $avg180_EBAY_USED_SHIPPING_lte;

    /* @var int $avg180_EBAY_USED_SHIPPING_gte */
    public $avg180_EBAY_USED_SHIPPING_gte;

    /* @var int $avg180_LIGHTNING_DEAL_lte */
    public $avg180_LIGHTNING_DEAL_lte;

    /* @var int $avg180_LIGHTNING_DEAL_gte */
    public $avg180_LIGHTNING_DEAL_gte;

    /* @var int $avg180_LISTPRICE_lte */
    public $avg180_LISTPRICE_lte;

    /* @var int $avg180_LISTPRICE_gte */
    public $avg180_LISTPRICE_gte;

    /* @var int $avg180_NEW_lte */
    public $avg180_NEW_lte;

    /* @var int $avg180_NEW_gte */
    public $avg180_NEW_gte;

    /* @var int $avg180_NEW_FBA_lte */
    public $avg180_NEW_FBA_lte;

    /* @var int $avg180_NEW_FBA_gte */
    public $avg180_NEW_FBA_gte;

    /* @var int $avg180_NEW_FBM_SHIPPING_lte */
    public $avg180_NEW_FBM_SHIPPING_lte;

    /* @var int $avg180_NEW_FBM_SHIPPING_gte */
    public $avg180_NEW_FBM_SHIPPING_gte;

    /* @var int $avg180_RATING_lte */
    public $avg180_RATING_lte;

    /* @var int $avg180_RATING_gte */
    public $avg180_RATING_gte;

    /* @var int $avg180_REFURBISHED_lte */
    public $avg180_REFURBISHED_lte;

    /* @var int $avg180_REFURBISHED_gte */
    public $avg180_REFURBISHED_gte;

    /* @var int $avg180_REFURBISHED_SHIPPING_lte */
    public $avg180_REFURBISHED_SHIPPING_lte;

    /* @var int $avg180_REFURBISHED_SHIPPING_gte */
    public $avg180_REFURBISHED_SHIPPING_gte;

    /* @var int $avg180_RENT_lte */
    public $avg180_RENT_lte;

    /* @var int $avg180_RENT_gte */
    public $avg180_RENT_gte;

    /* @var int $avg180_SALES_lte */
    public $avg180_SALES_lte;

    /* @var int $avg180_SALES_gte */
    public $avg180_SALES_gte;

    /* @var int $avg180_TRADE_IN_lte */
    public $avg180_TRADE_IN_lte;

    /* @var int $avg180_TRADE_IN_gte */
    public $avg180_TRADE_IN_gte;

    /* @var int $avg180_USED_lte */
    public $avg180_USED_lte;

    /* @var int $avg180_USED_gte */
    public $avg180_USED_gte;

    /* @var int $avg180_USED_ACCEPTABLE_SHIPPING_lte */
    public $avg180_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $avg180_USED_ACCEPTABLE_SHIPPING_gte */
    public $avg180_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $avg180_USED_GOOD_SHIPPING_lte */
    public $avg180_USED_GOOD_SHIPPING_lte;

    /* @var int $avg180_USED_GOOD_SHIPPING_gte */
    public $avg180_USED_GOOD_SHIPPING_gte;

    /* @var int $avg180_USED_NEW_SHIPPING_lte */
    public $avg180_USED_NEW_SHIPPING_lte;

    /* @var int $avg180_USED_NEW_SHIPPING_gte */
    public $avg180_USED_NEW_SHIPPING_gte;

    /* @var int $avg180_USED_VERY_GOOD_SHIPPING_lte */
    public $avg180_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $avg180_USED_VERY_GOOD_SHIPPING_gte */
    public $avg180_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $avg180_WAREHOUSE_lte */
    public $avg180_WAREHOUSE_lte;

    /* @var int $avg180_WAREHOUSE_gte */
    public $avg180_WAREHOUSE_gte;

    /* @var int $avg1_AMAZON_lte */
    public $avg1_AMAZON_lte;

    /* @var int $avg1_AMAZON_gte */
    public $avg1_AMAZON_gte;

    /* @var int $avg1_BUY_BOX_SHIPPING_lte */
    public $avg1_BUY_BOX_SHIPPING_lte;

    /* @var int $avg1_BUY_BOX_SHIPPING_gte */
    public $avg1_BUY_BOX_SHIPPING_gte;

    /* @var int $avg1_COLLECTIBLE_lte */
    public $avg1_COLLECTIBLE_lte;

    /* @var int $avg1_COLLECTIBLE_gte */
    public $avg1_COLLECTIBLE_gte;

    /* @var int $avg1_COUNT_COLLECTIBLE_lte */
    public $avg1_COUNT_COLLECTIBLE_lte;

    /* @var int $avg1_COUNT_COLLECTIBLE_gte */
    public $avg1_COUNT_COLLECTIBLE_gte;

    /* @var int $avg1_COUNT_NEW_lte */
    public $avg1_COUNT_NEW_lte;

    /* @var int $avg1_COUNT_NEW_gte */
    public $avg1_COUNT_NEW_gte;

    /* @var int $avg1_COUNT_REFURBISHED_lte */
    public $avg1_COUNT_REFURBISHED_lte;

    /* @var int $avg1_COUNT_REFURBISHED_gte */
    public $avg1_COUNT_REFURBISHED_gte;

    /* @var int $avg1_COUNT_REVIEWS_lte */
    public $avg1_COUNT_REVIEWS_lte;

    /* @var int $avg1_COUNT_REVIEWS_gte */
    public $avg1_COUNT_REVIEWS_gte;

    /* @var int $avg1_COUNT_USED_lte */
    public $avg1_COUNT_USED_lte;

    /* @var int $avg1_COUNT_USED_gte */
    public $avg1_COUNT_USED_gte;

    /* @var int $avg1_EBAY_NEW_SHIPPING_lte */
    public $avg1_EBAY_NEW_SHIPPING_lte;

    /* @var int $avg1_EBAY_NEW_SHIPPING_gte */
    public $avg1_EBAY_NEW_SHIPPING_gte;

    /* @var int $avg1_EBAY_USED_SHIPPING_lte */
    public $avg1_EBAY_USED_SHIPPING_lte;

    /* @var int $avg1_EBAY_USED_SHIPPING_gte */
    public $avg1_EBAY_USED_SHIPPING_gte;

    /* @var int $avg1_LIGHTNING_DEAL_lte */
    public $avg1_LIGHTNING_DEAL_lte;

    /* @var int $avg1_LIGHTNING_DEAL_gte */
    public $avg1_LIGHTNING_DEAL_gte;

    /* @var int $avg1_LISTPRICE_lte */
    public $avg1_LISTPRICE_lte;

    /* @var int $avg1_LISTPRICE_gte */
    public $avg1_LISTPRICE_gte;

    /* @var int $avg1_NEW_lte */
    public $avg1_NEW_lte;

    /* @var int $avg1_NEW_gte */
    public $avg1_NEW_gte;

    /* @var int $avg1_NEW_FBA_lte */
    public $avg1_NEW_FBA_lte;

    /* @var int $avg1_NEW_FBA_gte */
    public $avg1_NEW_FBA_gte;

    /* @var int $avg1_NEW_FBM_SHIPPING_lte */
    public $avg1_NEW_FBM_SHIPPING_lte;

    /* @var int $avg1_NEW_FBM_SHIPPING_gte */
    public $avg1_NEW_FBM_SHIPPING_gte;

    /* @var int $avg1_RATING_lte */
    public $avg1_RATING_lte;

    /* @var int $avg1_RATING_gte */
    public $avg1_RATING_gte;

    /* @var int $avg1_REFURBISHED_lte */
    public $avg1_REFURBISHED_lte;

    /* @var int $avg1_REFURBISHED_gte */
    public $avg1_REFURBISHED_gte;

    /* @var int $avg1_REFURBISHED_SHIPPING_lte */
    public $avg1_REFURBISHED_SHIPPING_lte;

    /* @var int $avg1_REFURBISHED_SHIPPING_gte */
    public $avg1_REFURBISHED_SHIPPING_gte;

    /* @var int $avg1_RENT_lte */
    public $avg1_RENT_lte;

    /* @var int $avg1_RENT_gte */
    public $avg1_RENT_gte;

    /* @var int $avg1_SALES_lte */
    public $avg1_SALES_lte;

    /* @var int $avg1_SALES_gte */
    public $avg1_SALES_gte;

    /* @var int $avg1_TRADE_IN_lte */
    public $avg1_TRADE_IN_lte;

    /* @var int $avg1_TRADE_IN_gte */
    public $avg1_TRADE_IN_gte;

    /* @var int $avg1_USED_lte */
    public $avg1_USED_lte;

    /* @var int $avg1_USED_gte */
    public $avg1_USED_gte;

    /* @var int $avg1_USED_ACCEPTABLE_SHIPPING_lte */
    public $avg1_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $avg1_USED_ACCEPTABLE_SHIPPING_gte */
    public $avg1_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $avg1_USED_GOOD_SHIPPING_lte */
    public $avg1_USED_GOOD_SHIPPING_lte;

    /* @var int $avg1_USED_GOOD_SHIPPING_gte */
    public $avg1_USED_GOOD_SHIPPING_gte;

    /* @var int $avg1_USED_NEW_SHIPPING_lte */
    public $avg1_USED_NEW_SHIPPING_lte;

    /* @var int $avg1_USED_NEW_SHIPPING_gte */
    public $avg1_USED_NEW_SHIPPING_gte;

    /* @var int $avg1_USED_VERY_GOOD_SHIPPING_lte */
    public $avg1_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $avg1_USED_VERY_GOOD_SHIPPING_gte */
    public $avg1_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $avg1_WAREHOUSE_lte */
    public $avg1_WAREHOUSE_lte;

    /* @var int $avg1_WAREHOUSE_gte */
    public $avg1_WAREHOUSE_gte;

    /* @var int $avg30_AMAZON_lte */
    public $avg30_AMAZON_lte;

    /* @var int $avg30_AMAZON_gte */
    public $avg30_AMAZON_gte;

    /* @var int $avg30_BUY_BOX_SHIPPING_lte */
    public $avg30_BUY_BOX_SHIPPING_lte;

    /* @var int $avg30_BUY_BOX_SHIPPING_gte */
    public $avg30_BUY_BOX_SHIPPING_gte;

    /* @var int $avg30_COLLECTIBLE_lte */
    public $avg30_COLLECTIBLE_lte;

    /* @var int $avg30_COLLECTIBLE_gte */
    public $avg30_COLLECTIBLE_gte;

    /* @var int $avg30_COUNT_COLLECTIBLE_lte */
    public $avg30_COUNT_COLLECTIBLE_lte;

    /* @var int $avg30_COUNT_COLLECTIBLE_gte */
    public $avg30_COUNT_COLLECTIBLE_gte;

    /* @var int $avg30_COUNT_NEW_lte */
    public $avg30_COUNT_NEW_lte;

    /* @var int $avg30_COUNT_NEW_gte */
    public $avg30_COUNT_NEW_gte;

    /* @var int $avg30_COUNT_REFURBISHED_lte */
    public $avg30_COUNT_REFURBISHED_lte;

    /* @var int $avg30_COUNT_REFURBISHED_gte */
    public $avg30_COUNT_REFURBISHED_gte;

    /* @var int $avg30_COUNT_REVIEWS_lte */
    public $avg30_COUNT_REVIEWS_lte;

    /* @var int $avg30_COUNT_REVIEWS_gte */
    public $avg30_COUNT_REVIEWS_gte;

    /* @var int $avg30_COUNT_USED_lte */
    public $avg30_COUNT_USED_lte;

    /* @var int $avg30_COUNT_USED_gte */
    public $avg30_COUNT_USED_gte;

    /* @var int $avg30_EBAY_NEW_SHIPPING_lte */
    public $avg30_EBAY_NEW_SHIPPING_lte;

    /* @var int $avg30_EBAY_NEW_SHIPPING_gte */
    public $avg30_EBAY_NEW_SHIPPING_gte;

    /* @var int $avg30_EBAY_USED_SHIPPING_lte */
    public $avg30_EBAY_USED_SHIPPING_lte;

    /* @var int $avg30_EBAY_USED_SHIPPING_gte */
    public $avg30_EBAY_USED_SHIPPING_gte;

    /* @var int $avg30_LIGHTNING_DEAL_lte */
    public $avg30_LIGHTNING_DEAL_lte;

    /* @var int $avg30_LIGHTNING_DEAL_gte */
    public $avg30_LIGHTNING_DEAL_gte;

    /* @var int $avg30_LISTPRICE_lte */
    public $avg30_LISTPRICE_lte;

    /* @var int $avg30_LISTPRICE_gte */
    public $avg30_LISTPRICE_gte;

    /* @var int $avg30_NEW_lte */
    public $avg30_NEW_lte;

    /* @var int $avg30_NEW_gte */
    public $avg30_NEW_gte;

    /* @var int $avg30_NEW_FBA_lte */
    public $avg30_NEW_FBA_lte;

    /* @var int $avg30_NEW_FBA_gte */
    public $avg30_NEW_FBA_gte;

    /* @var int $avg30_NEW_FBM_SHIPPING_lte */
    public $avg30_NEW_FBM_SHIPPING_lte;

    /* @var int $avg30_NEW_FBM_SHIPPING_gte */
    public $avg30_NEW_FBM_SHIPPING_gte;

    /* @var int $avg30_RATING_lte */
    public $avg30_RATING_lte;

    /* @var int $avg30_RATING_gte */
    public $avg30_RATING_gte;

    /* @var int $avg30_REFURBISHED_lte */
    public $avg30_REFURBISHED_lte;

    /* @var int $avg30_REFURBISHED_gte */
    public $avg30_REFURBISHED_gte;

    /* @var int $avg30_REFURBISHED_SHIPPING_lte */
    public $avg30_REFURBISHED_SHIPPING_lte;

    /* @var int $avg30_REFURBISHED_SHIPPING_gte */
    public $avg30_REFURBISHED_SHIPPING_gte;

    /* @var int $avg30_RENT_lte */
    public $avg30_RENT_lte;

    /* @var int $avg30_RENT_gte */
    public $avg30_RENT_gte;

    /* @var int $avg30_SALES_lte */
    public $avg30_SALES_lte;

    /* @var int $avg30_SALES_gte */
    public $avg30_SALES_gte;

    /* @var int $avg30_TRADE_IN_lte */
    public $avg30_TRADE_IN_lte;

    /* @var int $avg30_TRADE_IN_gte */
    public $avg30_TRADE_IN_gte;

    /* @var int $avg30_USED_lte */
    public $avg30_USED_lte;

    /* @var int $avg30_USED_gte */
    public $avg30_USED_gte;

    /* @var int $avg30_USED_ACCEPTABLE_SHIPPING_lte */
    public $avg30_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $avg30_USED_ACCEPTABLE_SHIPPING_gte */
    public $avg30_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $avg30_USED_GOOD_SHIPPING_lte */
    public $avg30_USED_GOOD_SHIPPING_lte;

    /* @var int $avg30_USED_GOOD_SHIPPING_gte */
    public $avg30_USED_GOOD_SHIPPING_gte;

    /* @var int $avg30_USED_NEW_SHIPPING_lte */
    public $avg30_USED_NEW_SHIPPING_lte;

    /* @var int $avg30_USED_NEW_SHIPPING_gte */
    public $avg30_USED_NEW_SHIPPING_gte;

    /* @var int $avg30_USED_VERY_GOOD_SHIPPING_lte */
    public $avg30_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $avg30_USED_VERY_GOOD_SHIPPING_gte */
    public $avg30_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $avg30_WAREHOUSE_lte */
    public $avg30_WAREHOUSE_lte;

    /* @var int $avg30_WAREHOUSE_gte */
    public $avg30_WAREHOUSE_gte;

    /* @var int $avg7_AMAZON_lte */
    public $avg7_AMAZON_lte;

    /* @var int $avg7_AMAZON_gte */
    public $avg7_AMAZON_gte;

    /* @var int $avg7_BUY_BOX_SHIPPING_lte */
    public $avg7_BUY_BOX_SHIPPING_lte;

    /* @var int $avg7_BUY_BOX_SHIPPING_gte */
    public $avg7_BUY_BOX_SHIPPING_gte;

    /* @var int $avg7_COLLECTIBLE_lte */
    public $avg7_COLLECTIBLE_lte;

    /* @var int $avg7_COLLECTIBLE_gte */
    public $avg7_COLLECTIBLE_gte;

    /* @var int $avg7_COUNT_COLLECTIBLE_lte */
    public $avg7_COUNT_COLLECTIBLE_lte;

    /* @var int $avg7_COUNT_COLLECTIBLE_gte */
    public $avg7_COUNT_COLLECTIBLE_gte;

    /* @var int $avg7_COUNT_NEW_lte */
    public $avg7_COUNT_NEW_lte;

    /* @var int $avg7_COUNT_NEW_gte */
    public $avg7_COUNT_NEW_gte;

    /* @var int $avg7_COUNT_REFURBISHED_lte */
    public $avg7_COUNT_REFURBISHED_lte;

    /* @var int $avg7_COUNT_REFURBISHED_gte */
    public $avg7_COUNT_REFURBISHED_gte;

    /* @var int $avg7_COUNT_REVIEWS_lte */
    public $avg7_COUNT_REVIEWS_lte;

    /* @var int $avg7_COUNT_REVIEWS_gte */
    public $avg7_COUNT_REVIEWS_gte;

    /* @var int $avg7_COUNT_USED_lte */
    public $avg7_COUNT_USED_lte;

    /* @var int $avg7_COUNT_USED_gte */
    public $avg7_COUNT_USED_gte;

    /* @var int $avg7_EBAY_NEW_SHIPPING_lte */
    public $avg7_EBAY_NEW_SHIPPING_lte;

    /* @var int $avg7_EBAY_NEW_SHIPPING_gte */
    public $avg7_EBAY_NEW_SHIPPING_gte;

    /* @var int $avg7_EBAY_USED_SHIPPING_lte */
    public $avg7_EBAY_USED_SHIPPING_lte;

    /* @var int $avg7_EBAY_USED_SHIPPING_gte */
    public $avg7_EBAY_USED_SHIPPING_gte;

    /* @var int $avg7_LIGHTNING_DEAL_lte */
    public $avg7_LIGHTNING_DEAL_lte;

    /* @var int $avg7_LIGHTNING_DEAL_gte */
    public $avg7_LIGHTNING_DEAL_gte;

    /* @var int $avg7_LISTPRICE_lte */
    public $avg7_LISTPRICE_lte;

    /* @var int $avg7_LISTPRICE_gte */
    public $avg7_LISTPRICE_gte;

    /* @var int $avg7_NEW_lte */
    public $avg7_NEW_lte;

    /* @var int $avg7_NEW_gte */
    public $avg7_NEW_gte;

    /* @var int $avg7_NEW_FBA_lte */
    public $avg7_NEW_FBA_lte;

    /* @var int $avg7_NEW_FBA_gte */
    public $avg7_NEW_FBA_gte;

    /* @var int $avg7_NEW_FBM_SHIPPING_lte */
    public $avg7_NEW_FBM_SHIPPING_lte;

    /* @var int $avg7_NEW_FBM_SHIPPING_gte */
    public $avg7_NEW_FBM_SHIPPING_gte;

    /* @var int $avg7_RATING_lte */
    public $avg7_RATING_lte;

    /* @var int $avg7_RATING_gte */
    public $avg7_RATING_gte;

    /* @var int $avg7_REFURBISHED_lte */
    public $avg7_REFURBISHED_lte;

    /* @var int $avg7_REFURBISHED_gte */
    public $avg7_REFURBISHED_gte;

    /* @var int $avg7_REFURBISHED_SHIPPING_lte */
    public $avg7_REFURBISHED_SHIPPING_lte;

    /* @var int $avg7_REFURBISHED_SHIPPING_gte */
    public $avg7_REFURBISHED_SHIPPING_gte;

    /* @var int $avg7_RENT_lte */
    public $avg7_RENT_lte;

    /* @var int $avg7_RENT_gte */
    public $avg7_RENT_gte;

    /* @var int $avg7_SALES_lte */
    public $avg7_SALES_lte;

    /* @var int $avg7_SALES_gte */
    public $avg7_SALES_gte;

    /* @var int $avg7_TRADE_IN_lte */
    public $avg7_TRADE_IN_lte;

    /* @var int $avg7_TRADE_IN_gte */
    public $avg7_TRADE_IN_gte;

    /* @var int $avg7_USED_lte */
    public $avg7_USED_lte;

    /* @var int $avg7_USED_gte */
    public $avg7_USED_gte;

    /* @var int $avg7_USED_ACCEPTABLE_SHIPPING_lte */
    public $avg7_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $avg7_USED_ACCEPTABLE_SHIPPING_gte */
    public $avg7_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $avg7_USED_GOOD_SHIPPING_lte */
    public $avg7_USED_GOOD_SHIPPING_lte;

    /* @var int $avg7_USED_GOOD_SHIPPING_gte */
    public $avg7_USED_GOOD_SHIPPING_gte;

    /* @var int $avg7_USED_NEW_SHIPPING_lte */
    public $avg7_USED_NEW_SHIPPING_lte;

    /* @var int $avg7_USED_NEW_SHIPPING_gte */
    public $avg7_USED_NEW_SHIPPING_gte;

    /* @var int $avg7_USED_VERY_GOOD_SHIPPING_lte */
    public $avg7_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $avg7_USED_VERY_GOOD_SHIPPING_gte */
    public $avg7_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $avg7_WAREHOUSE_lte */
    public $avg7_WAREHOUSE_lte;

    /* @var int $avg7_WAREHOUSE_gte */
    public $avg7_WAREHOUSE_gte;

    /* @var int $avg90_AMAZON_lte */
    public $avg90_AMAZON_lte;

    /* @var int $avg90_AMAZON_gte */
    public $avg90_AMAZON_gte;

    /* @var int $avg90_BUY_BOX_SHIPPING_lte */
    public $avg90_BUY_BOX_SHIPPING_lte;

    /* @var int $avg90_BUY_BOX_SHIPPING_gte */
    public $avg90_BUY_BOX_SHIPPING_gte;

    /* @var int $avg90_COLLECTIBLE_lte */
    public $avg90_COLLECTIBLE_lte;

    /* @var int $avg90_COLLECTIBLE_gte */
    public $avg90_COLLECTIBLE_gte;

    /* @var int $avg90_COUNT_COLLECTIBLE_lte */
    public $avg90_COUNT_COLLECTIBLE_lte;

    /* @var int $avg90_COUNT_COLLECTIBLE_gte */
    public $avg90_COUNT_COLLECTIBLE_gte;

    /* @var int $avg90_COUNT_NEW_lte */
    public $avg90_COUNT_NEW_lte;

    /* @var int $avg90_COUNT_NEW_gte */
    public $avg90_COUNT_NEW_gte;

    /* @var int $avg90_COUNT_REFURBISHED_lte */
    public $avg90_COUNT_REFURBISHED_lte;

    /* @var int $avg90_COUNT_REFURBISHED_gte */
    public $avg90_COUNT_REFURBISHED_gte;

    /* @var int $avg90_COUNT_REVIEWS_lte */
    public $avg90_COUNT_REVIEWS_lte;

    /* @var int $avg90_COUNT_REVIEWS_gte */
    public $avg90_COUNT_REVIEWS_gte;

    /* @var int $avg90_COUNT_USED_lte */
    public $avg90_COUNT_USED_lte;

    /* @var int $avg90_COUNT_USED_gte */
    public $avg90_COUNT_USED_gte;

    /* @var int $avg90_EBAY_NEW_SHIPPING_lte */
    public $avg90_EBAY_NEW_SHIPPING_lte;

    /* @var int $avg90_EBAY_NEW_SHIPPING_gte */
    public $avg90_EBAY_NEW_SHIPPING_gte;

    /* @var int $avg90_EBAY_USED_SHIPPING_lte */
    public $avg90_EBAY_USED_SHIPPING_lte;

    /* @var int $avg90_EBAY_USED_SHIPPING_gte */
    public $avg90_EBAY_USED_SHIPPING_gte;

    /* @var int $avg90_LIGHTNING_DEAL_lte */
    public $avg90_LIGHTNING_DEAL_lte;

    /* @var int $avg90_LIGHTNING_DEAL_gte */
    public $avg90_LIGHTNING_DEAL_gte;

    /* @var int $avg90_LISTPRICE_lte */
    public $avg90_LISTPRICE_lte;

    /* @var int $avg90_LISTPRICE_gte */
    public $avg90_LISTPRICE_gte;

    /* @var int $avg90_NEW_lte */
    public $avg90_NEW_lte;

    /* @var int $avg90_NEW_gte */
    public $avg90_NEW_gte;

    /* @var int $avg90_NEW_FBA_lte */
    public $avg90_NEW_FBA_lte;

    /* @var int $avg90_NEW_FBA_gte */
    public $avg90_NEW_FBA_gte;

    /* @var int $avg90_NEW_FBM_SHIPPING_lte */
    public $avg90_NEW_FBM_SHIPPING_lte;

    /* @var int $avg90_NEW_FBM_SHIPPING_gte */
    public $avg90_NEW_FBM_SHIPPING_gte;

    /* @var int $avg90_RATING_lte */
    public $avg90_RATING_lte;

    /* @var int $avg90_RATING_gte */
    public $avg90_RATING_gte;

    /* @var int $avg90_REFURBISHED_lte */
    public $avg90_REFURBISHED_lte;

    /* @var int $avg90_REFURBISHED_gte */
    public $avg90_REFURBISHED_gte;

    /* @var int $avg90_REFURBISHED_SHIPPING_lte */
    public $avg90_REFURBISHED_SHIPPING_lte;

    /* @var int $avg90_REFURBISHED_SHIPPING_gte */
    public $avg90_REFURBISHED_SHIPPING_gte;

    /* @var int $avg90_RENT_lte */
    public $avg90_RENT_lte;

    /* @var int $avg90_RENT_gte */
    public $avg90_RENT_gte;

    /* @var int $avg90_SALES_lte */
    public $avg90_SALES_lte;

    /* @var int $avg90_SALES_gte */
    public $avg90_SALES_gte;

    /* @var int $avg90_TRADE_IN_lte */
    public $avg90_TRADE_IN_lte;

    /* @var int $avg90_TRADE_IN_gte */
    public $avg90_TRADE_IN_gte;

    /* @var int $avg90_USED_lte */
    public $avg90_USED_lte;

    /* @var int $avg90_USED_gte */
    public $avg90_USED_gte;

    /* @var int $avg90_USED_ACCEPTABLE_SHIPPING_lte */
    public $avg90_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $avg90_USED_ACCEPTABLE_SHIPPING_gte */
    public $avg90_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $avg90_USED_GOOD_SHIPPING_lte */
    public $avg90_USED_GOOD_SHIPPING_lte;

    /* @var int $avg90_USED_GOOD_SHIPPING_gte */
    public $avg90_USED_GOOD_SHIPPING_gte;

    /* @var int $avg90_USED_NEW_SHIPPING_lte */
    public $avg90_USED_NEW_SHIPPING_lte;

    /* @var int $avg90_USED_NEW_SHIPPING_gte */
    public $avg90_USED_NEW_SHIPPING_gte;

    /* @var int $avg90_USED_VERY_GOOD_SHIPPING_lte */
    public $avg90_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $avg90_USED_VERY_GOOD_SHIPPING_gte */
    public $avg90_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $avg90_WAREHOUSE_lte */
    public $avg90_WAREHOUSE_lte;

    /* @var int $avg90_WAREHOUSE_gte */
    public $avg90_WAREHOUSE_gte;

    /* @var bool $backInStock_AMAZON */
    public $backInStock_AMAZON;

    /* @var bool $backInStock_BUY_BOX_SHIPPING */
    public $backInStock_BUY_BOX_SHIPPING;

    /* @var bool $backInStock_COLLECTIBLE */
    public $backInStock_COLLECTIBLE;

    /* @var bool $backInStock_COUNT_COLLECTIBLE */
    public $backInStock_COUNT_COLLECTIBLE;

    /* @var bool $backInStock_COUNT_NEW */
    public $backInStock_COUNT_NEW;

    /* @var bool $backInStock_COUNT_REFURBISHED */
    public $backInStock_COUNT_REFURBISHED;

    /* @var bool $backInStock_COUNT_REVIEWS */
    public $backInStock_COUNT_REVIEWS;

    /* @var bool $backInStock_COUNT_USED */
    public $backInStock_COUNT_USED;

    /* @var bool $backInStock_EBAY_NEW_SHIPPING */
    public $backInStock_EBAY_NEW_SHIPPING;

    /* @var bool $backInStock_EBAY_USED_SHIPPING */
    public $backInStock_EBAY_USED_SHIPPING;

    /* @var bool $backInStock_LIGHTNING_DEAL */
    public $backInStock_LIGHTNING_DEAL;

    /* @var bool $backInStock_LISTPRICE */
    public $backInStock_LISTPRICE;

    /* @var bool $backInStock_NEW */
    public $backInStock_NEW;

    /* @var bool $backInStock_NEW_FBA */
    public $backInStock_NEW_FBA;

    /* @var bool $backInStock_NEW_FBM_SHIPPING */
    public $backInStock_NEW_FBM_SHIPPING;

    /* @var bool $backInStock_RATING */
    public $backInStock_RATING;

    /* @var bool $backInStock_REFURBISHED */
    public $backInStock_REFURBISHED;

    /* @var bool $backInStock_REFURBISHED_SHIPPING */
    public $backInStock_REFURBISHED_SHIPPING;

    /* @var bool $backInStock_RENT */
    public $backInStock_RENT;

    /* @var bool $backInStock_SALES */
    public $backInStock_SALES;

    /* @var bool $backInStock_TRADE_IN */
    public $backInStock_TRADE_IN;

    /* @var bool $backInStock_USED */
    public $backInStock_USED;

    /* @var bool $backInStock_USED_ACCEPTABLE_SHIPPING */
    public $backInStock_USED_ACCEPTABLE_SHIPPING;

    /* @var bool $backInStock_USED_GOOD_SHIPPING */
    public $backInStock_USED_GOOD_SHIPPING;

    /* @var bool $backInStock_USED_NEW_SHIPPING */
    public $backInStock_USED_NEW_SHIPPING;

    /* @var bool $backInStock_USED_VERY_GOOD_SHIPPING */
    public $backInStock_USED_VERY_GOOD_SHIPPING;

    /* @var bool $backInStock_WAREHOUSE */
    public $backInStock_WAREHOUSE;

    /* @var string[] $binding */
    public $binding;

    /* @var string[] $brand */
    public $brand;

    /* @var string[] $dealType */
    public $dealType;

    /* @var string[] $buyBoxSellerId */
    public $buyBoxSellerId;

    /* @var long[] $categories_include */
    public $categories_include;

    /* @var long[] $categories_exclude */
    public $categories_exclude;

    /* @var string[] $color */
    public $color;

    /* @var string $historicalParentASIN */
    public $historicalParentASIN;

    /* @var int $couponOneTimeAbsolute_lte */
    public $couponOneTimeAbsolute_lte;

    /* @var int $couponOneTimeAbsolute_gte */
    public $couponOneTimeAbsolute_gte;

    /* @var int $couponOneTimePercent_lte */
    public $couponOneTimePercent_lte;

    /* @var int $couponOneTimePercent_gte */
    public $couponOneTimePercent_gte;

    /* @var int $couponSNSAbsolute_lte */
    public $couponSNSAbsolute_lte;

    /* @var int $couponSNSAbsolute_gte */
    public $couponSNSAbsolute_gte;

    /* @var int $couponSNSPercent_lte */
    public $couponSNSPercent_lte;

    /* @var int $couponSNSPercent_gte */
    public $couponSNSPercent_gte;

    /* @var int $current_AMAZON_lte */
    public $current_AMAZON_lte;

    /* @var int $current_AMAZON_gte */
    public $current_AMAZON_gte;

    /* @var int $current_BUY_BOX_SHIPPING_lte */
    public $current_BUY_BOX_SHIPPING_lte;

    /* @var int $current_BUY_BOX_SHIPPING_gte */
    public $current_BUY_BOX_SHIPPING_gte;

    /* @var int $current_COLLECTIBLE_lte */
    public $current_COLLECTIBLE_lte;

    /* @var int $current_COLLECTIBLE_gte */
    public $current_COLLECTIBLE_gte;

    /* @var int $current_COUNT_COLLECTIBLE_lte */
    public $current_COUNT_COLLECTIBLE_lte;

    /* @var int $current_COUNT_COLLECTIBLE_gte */
    public $current_COUNT_COLLECTIBLE_gte;

    /* @var int $current_COUNT_NEW_lte */
    public $current_COUNT_NEW_lte;

    /* @var int $current_COUNT_NEW_gte */
    public $current_COUNT_NEW_gte;

    /* @var int $current_COUNT_REFURBISHED_lte */
    public $current_COUNT_REFURBISHED_lte;

    /* @var int $current_COUNT_REFURBISHED_gte */
    public $current_COUNT_REFURBISHED_gte;

    /* @var int $current_COUNT_REVIEWS_lte */
    public $current_COUNT_REVIEWS_lte;

    /* @var int $current_COUNT_REVIEWS_gte */
    public $current_COUNT_REVIEWS_gte;

    /* @var int $current_COUNT_USED_lte */
    public $current_COUNT_USED_lte;

    /* @var int $current_COUNT_USED_gte */
    public $current_COUNT_USED_gte;

    /* @var int $current_EBAY_NEW_SHIPPING_lte */
    public $current_EBAY_NEW_SHIPPING_lte;

    /* @var int $current_EBAY_NEW_SHIPPING_gte */
    public $current_EBAY_NEW_SHIPPING_gte;

    /* @var int $current_EBAY_USED_SHIPPING_lte */
    public $current_EBAY_USED_SHIPPING_lte;

    /* @var int $current_EBAY_USED_SHIPPING_gte */
    public $current_EBAY_USED_SHIPPING_gte;

    /* @var int $current_LIGHTNING_DEAL_lte */
    public $current_LIGHTNING_DEAL_lte;

    /* @var int $current_LIGHTNING_DEAL_gte */
    public $current_LIGHTNING_DEAL_gte;

    /* @var int $current_LISTPRICE_lte */
    public $current_LISTPRICE_lte;

    /* @var int $current_LISTPRICE_gte */
    public $current_LISTPRICE_gte;

    /* @var int $current_NEW_lte */
    public $current_NEW_lte;

    /* @var int $current_NEW_gte */
    public $current_NEW_gte;

    /* @var int $current_NEW_FBA_lte */
    public $current_NEW_FBA_lte;

    /* @var int $current_NEW_FBA_gte */
    public $current_NEW_FBA_gte;

    /* @var int $current_NEW_FBM_SHIPPING_lte */
    public $current_NEW_FBM_SHIPPING_lte;

    /* @var int $current_NEW_FBM_SHIPPING_gte */
    public $current_NEW_FBM_SHIPPING_gte;

    /* @var int $current_RATING_lte */
    public $current_RATING_lte;

    /* @var int $current_RATING_gte */
    public $current_RATING_gte;

    /* @var int $current_REFURBISHED_lte */
    public $current_REFURBISHED_lte;

    /* @var int $current_REFURBISHED_gte */
    public $current_REFURBISHED_gte;

    /* @var int $current_REFURBISHED_SHIPPING_lte */
    public $current_REFURBISHED_SHIPPING_lte;

    /* @var int $current_REFURBISHED_SHIPPING_gte */
    public $current_REFURBISHED_SHIPPING_gte;

    /* @var int $current_RENT_lte */
    public $current_RENT_lte;

    /* @var int $current_RENT_gte */
    public $current_RENT_gte;

    /* @var int $current_SALES_lte */
    public $current_SALES_lte;

    /* @var int $current_SALES_gte */
    public $current_SALES_gte;

    /* @var int $current_TRADE_IN_lte */
    public $current_TRADE_IN_lte;

    /* @var int $current_TRADE_IN_gte */
    public $current_TRADE_IN_gte;

    /* @var int $current_USED_lte */
    public $current_USED_lte;

    /* @var int $current_USED_gte */
    public $current_USED_gte;

    /* @var int $current_USED_ACCEPTABLE_SHIPPING_lte */
    public $current_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $current_USED_ACCEPTABLE_SHIPPING_gte */
    public $current_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $current_USED_GOOD_SHIPPING_lte */
    public $current_USED_GOOD_SHIPPING_lte;

    /* @var int $current_USED_GOOD_SHIPPING_gte */
    public $current_USED_GOOD_SHIPPING_gte;

    /* @var int $current_USED_NEW_SHIPPING_lte */
    public $current_USED_NEW_SHIPPING_lte;

    /* @var int $current_USED_NEW_SHIPPING_gte */
    public $current_USED_NEW_SHIPPING_gte;

    /* @var int $current_USED_VERY_GOOD_SHIPPING_lte */
    public $current_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $current_USED_VERY_GOOD_SHIPPING_gte */
    public $current_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $current_WAREHOUSE_lte */
    public $current_WAREHOUSE_lte;

    /* @var int $current_WAREHOUSE_gte */
    public $current_WAREHOUSE_gte;

    /* @var int $delta1_AMAZON_lte */
    public $delta1_AMAZON_lte;

    /* @var int $delta1_AMAZON_gte */
    public $delta1_AMAZON_gte;

    /* @var int $delta1_BUY_BOX_SHIPPING_lte */
    public $delta1_BUY_BOX_SHIPPING_lte;

    /* @var int $delta1_BUY_BOX_SHIPPING_gte */
    public $delta1_BUY_BOX_SHIPPING_gte;

    /* @var int $delta1_COLLECTIBLE_lte */
    public $delta1_COLLECTIBLE_lte;

    /* @var int $delta1_COLLECTIBLE_gte */
    public $delta1_COLLECTIBLE_gte;

    /* @var int $delta1_COUNT_COLLECTIBLE_lte */
    public $delta1_COUNT_COLLECTIBLE_lte;

    /* @var int $delta1_COUNT_COLLECTIBLE_gte */
    public $delta1_COUNT_COLLECTIBLE_gte;

    /* @var int $delta1_COUNT_NEW_lte */
    public $delta1_COUNT_NEW_lte;

    /* @var int $delta1_COUNT_NEW_gte */
    public $delta1_COUNT_NEW_gte;

    /* @var int $delta1_COUNT_REFURBISHED_lte */
    public $delta1_COUNT_REFURBISHED_lte;

    /* @var int $delta1_COUNT_REFURBISHED_gte */
    public $delta1_COUNT_REFURBISHED_gte;

    /* @var int $delta1_COUNT_REVIEWS_lte */
    public $delta1_COUNT_REVIEWS_lte;

    /* @var int $delta1_COUNT_REVIEWS_gte */
    public $delta1_COUNT_REVIEWS_gte;

    /* @var int $delta1_COUNT_USED_lte */
    public $delta1_COUNT_USED_lte;

    /* @var int $delta1_COUNT_USED_gte */
    public $delta1_COUNT_USED_gte;

    /* @var int $delta1_EBAY_NEW_SHIPPING_lte */
    public $delta1_EBAY_NEW_SHIPPING_lte;

    /* @var int $delta1_EBAY_NEW_SHIPPING_gte */
    public $delta1_EBAY_NEW_SHIPPING_gte;

    /* @var int $delta1_EBAY_USED_SHIPPING_lte */
    public $delta1_EBAY_USED_SHIPPING_lte;

    /* @var int $delta1_EBAY_USED_SHIPPING_gte */
    public $delta1_EBAY_USED_SHIPPING_gte;

    /* @var int $delta1_LIGHTNING_DEAL_lte */
    public $delta1_LIGHTNING_DEAL_lte;

    /* @var int $delta1_LIGHTNING_DEAL_gte */
    public $delta1_LIGHTNING_DEAL_gte;

    /* @var int $delta1_LISTPRICE_lte */
    public $delta1_LISTPRICE_lte;

    /* @var int $delta1_LISTPRICE_gte */
    public $delta1_LISTPRICE_gte;

    /* @var int $delta1_NEW_lte */
    public $delta1_NEW_lte;

    /* @var int $delta1_NEW_gte */
    public $delta1_NEW_gte;

    /* @var int $delta1_NEW_FBA_lte */
    public $delta1_NEW_FBA_lte;

    /* @var int $delta1_NEW_FBA_gte */
    public $delta1_NEW_FBA_gte;

    /* @var int $delta1_NEW_FBM_SHIPPING_lte */
    public $delta1_NEW_FBM_SHIPPING_lte;

    /* @var int $delta1_NEW_FBM_SHIPPING_gte */
    public $delta1_NEW_FBM_SHIPPING_gte;

    /* @var int $delta1_RATING_lte */
    public $delta1_RATING_lte;

    /* @var int $delta1_RATING_gte */
    public $delta1_RATING_gte;

    /* @var int $delta1_REFURBISHED_lte */
    public $delta1_REFURBISHED_lte;

    /* @var int $delta1_REFURBISHED_gte */
    public $delta1_REFURBISHED_gte;

    /* @var int $delta1_REFURBISHED_SHIPPING_lte */
    public $delta1_REFURBISHED_SHIPPING_lte;

    /* @var int $delta1_REFURBISHED_SHIPPING_gte */
    public $delta1_REFURBISHED_SHIPPING_gte;

    /* @var int $delta1_RENT_lte */
    public $delta1_RENT_lte;

    /* @var int $delta1_RENT_gte */
    public $delta1_RENT_gte;

    /* @var int $delta1_SALES_lte */
    public $delta1_SALES_lte;

    /* @var int $delta1_SALES_gte */
    public $delta1_SALES_gte;

    /* @var int $delta1_TRADE_IN_lte */
    public $delta1_TRADE_IN_lte;

    /* @var int $delta1_TRADE_IN_gte */
    public $delta1_TRADE_IN_gte;

    /* @var int $delta1_USED_lte */
    public $delta1_USED_lte;

    /* @var int $delta1_USED_gte */
    public $delta1_USED_gte;

    /* @var int $delta1_USED_ACCEPTABLE_SHIPPING_lte */
    public $delta1_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $delta1_USED_ACCEPTABLE_SHIPPING_gte */
    public $delta1_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $delta1_USED_GOOD_SHIPPING_lte */
    public $delta1_USED_GOOD_SHIPPING_lte;

    /* @var int $delta1_USED_GOOD_SHIPPING_gte */
    public $delta1_USED_GOOD_SHIPPING_gte;

    /* @var int $delta1_USED_NEW_SHIPPING_lte */
    public $delta1_USED_NEW_SHIPPING_lte;

    /* @var int $delta1_USED_NEW_SHIPPING_gte */
    public $delta1_USED_NEW_SHIPPING_gte;

    /* @var int $delta1_USED_VERY_GOOD_SHIPPING_lte */
    public $delta1_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $delta1_USED_VERY_GOOD_SHIPPING_gte */
    public $delta1_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $delta1_WAREHOUSE_lte */
    public $delta1_WAREHOUSE_lte;

    /* @var int $delta1_WAREHOUSE_gte */
    public $delta1_WAREHOUSE_gte;

    /* @var int $delta30_AMAZON_lte */
    public $delta30_AMAZON_lte;

    /* @var int $delta30_AMAZON_gte */
    public $delta30_AMAZON_gte;

    /* @var int $delta30_BUY_BOX_SHIPPING_lte */
    public $delta30_BUY_BOX_SHIPPING_lte;

    /* @var int $delta30_BUY_BOX_SHIPPING_gte */
    public $delta30_BUY_BOX_SHIPPING_gte;

    /* @var int $delta30_COLLECTIBLE_lte */
    public $delta30_COLLECTIBLE_lte;

    /* @var int $delta30_COLLECTIBLE_gte */
    public $delta30_COLLECTIBLE_gte;

    /* @var int $delta30_COUNT_COLLECTIBLE_lte */
    public $delta30_COUNT_COLLECTIBLE_lte;

    /* @var int $delta30_COUNT_COLLECTIBLE_gte */
    public $delta30_COUNT_COLLECTIBLE_gte;

    /* @var int $delta30_COUNT_NEW_lte */
    public $delta30_COUNT_NEW_lte;

    /* @var int $delta30_COUNT_NEW_gte */
    public $delta30_COUNT_NEW_gte;

    /* @var int $delta30_COUNT_REFURBISHED_lte */
    public $delta30_COUNT_REFURBISHED_lte;

    /* @var int $delta30_COUNT_REFURBISHED_gte */
    public $delta30_COUNT_REFURBISHED_gte;

    /* @var int $delta30_COUNT_REVIEWS_lte */
    public $delta30_COUNT_REVIEWS_lte;

    /* @var int $delta30_COUNT_REVIEWS_gte */
    public $delta30_COUNT_REVIEWS_gte;

    /* @var int $delta30_COUNT_USED_lte */
    public $delta30_COUNT_USED_lte;

    /* @var int $delta30_COUNT_USED_gte */
    public $delta30_COUNT_USED_gte;

    /* @var int $delta30_EBAY_NEW_SHIPPING_lte */
    public $delta30_EBAY_NEW_SHIPPING_lte;

    /* @var int $delta30_EBAY_NEW_SHIPPING_gte */
    public $delta30_EBAY_NEW_SHIPPING_gte;

    /* @var int $delta30_EBAY_USED_SHIPPING_lte */
    public $delta30_EBAY_USED_SHIPPING_lte;

    /* @var int $delta30_EBAY_USED_SHIPPING_gte */
    public $delta30_EBAY_USED_SHIPPING_gte;

    /* @var int $delta30_LIGHTNING_DEAL_lte */
    public $delta30_LIGHTNING_DEAL_lte;

    /* @var int $delta30_LIGHTNING_DEAL_gte */
    public $delta30_LIGHTNING_DEAL_gte;

    /* @var int $delta30_LISTPRICE_lte */
    public $delta30_LISTPRICE_lte;

    /* @var int $delta30_LISTPRICE_gte */
    public $delta30_LISTPRICE_gte;

    /* @var int $delta30_NEW_lte */
    public $delta30_NEW_lte;

    /* @var int $delta30_NEW_gte */
    public $delta30_NEW_gte;

    /* @var int $delta30_NEW_FBA_lte */
    public $delta30_NEW_FBA_lte;

    /* @var int $delta30_NEW_FBA_gte */
    public $delta30_NEW_FBA_gte;

    /* @var int $delta30_NEW_FBM_SHIPPING_lte */
    public $delta30_NEW_FBM_SHIPPING_lte;

    /* @var int $delta30_NEW_FBM_SHIPPING_gte */
    public $delta30_NEW_FBM_SHIPPING_gte;

    /* @var int $delta30_RATING_lte */
    public $delta30_RATING_lte;

    /* @var int $delta30_RATING_gte */
    public $delta30_RATING_gte;

    /* @var int $delta30_REFURBISHED_lte */
    public $delta30_REFURBISHED_lte;

    /* @var int $delta30_REFURBISHED_gte */
    public $delta30_REFURBISHED_gte;

    /* @var int $delta30_REFURBISHED_SHIPPING_lte */
    public $delta30_REFURBISHED_SHIPPING_lte;

    /* @var int $delta30_REFURBISHED_SHIPPING_gte */
    public $delta30_REFURBISHED_SHIPPING_gte;

    /* @var int $delta30_RENT_lte */
    public $delta30_RENT_lte;

    /* @var int $delta30_RENT_gte */
    public $delta30_RENT_gte;

    /* @var int $delta30_SALES_lte */
    public $delta30_SALES_lte;

    /* @var int $delta30_SALES_gte */
    public $delta30_SALES_gte;

    /* @var int $delta30_TRADE_IN_lte */
    public $delta30_TRADE_IN_lte;

    /* @var int $delta30_TRADE_IN_gte */
    public $delta30_TRADE_IN_gte;

    /* @var int $delta30_USED_lte */
    public $delta30_USED_lte;

    /* @var int $delta30_USED_gte */
    public $delta30_USED_gte;

    /* @var int $delta30_USED_ACCEPTABLE_SHIPPING_lte */
    public $delta30_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $delta30_USED_ACCEPTABLE_SHIPPING_gte */
    public $delta30_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $delta30_USED_GOOD_SHIPPING_lte */
    public $delta30_USED_GOOD_SHIPPING_lte;

    /* @var int $delta30_USED_GOOD_SHIPPING_gte */
    public $delta30_USED_GOOD_SHIPPING_gte;

    /* @var int $delta30_USED_NEW_SHIPPING_lte */
    public $delta30_USED_NEW_SHIPPING_lte;

    /* @var int $delta30_USED_NEW_SHIPPING_gte */
    public $delta30_USED_NEW_SHIPPING_gte;

    /* @var int $delta30_USED_VERY_GOOD_SHIPPING_lte */
    public $delta30_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $delta30_USED_VERY_GOOD_SHIPPING_gte */
    public $delta30_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $delta30_WAREHOUSE_lte */
    public $delta30_WAREHOUSE_lte;

    /* @var int $delta30_WAREHOUSE_gte */
    public $delta30_WAREHOUSE_gte;

    /* @var int $delta7_AMAZON_lte */
    public $delta7_AMAZON_lte;

    /* @var int $delta7_AMAZON_gte */
    public $delta7_AMAZON_gte;

    /* @var int $delta7_BUY_BOX_SHIPPING_lte */
    public $delta7_BUY_BOX_SHIPPING_lte;

    /* @var int $delta7_BUY_BOX_SHIPPING_gte */
    public $delta7_BUY_BOX_SHIPPING_gte;

    /* @var int $delta7_COLLECTIBLE_lte */
    public $delta7_COLLECTIBLE_lte;

    /* @var int $delta7_COLLECTIBLE_gte */
    public $delta7_COLLECTIBLE_gte;

    /* @var int $delta7_COUNT_COLLECTIBLE_lte */
    public $delta7_COUNT_COLLECTIBLE_lte;

    /* @var int $delta7_COUNT_COLLECTIBLE_gte */
    public $delta7_COUNT_COLLECTIBLE_gte;

    /* @var int $delta7_COUNT_NEW_lte */
    public $delta7_COUNT_NEW_lte;

    /* @var int $delta7_COUNT_NEW_gte */
    public $delta7_COUNT_NEW_gte;

    /* @var int $delta7_COUNT_REFURBISHED_lte */
    public $delta7_COUNT_REFURBISHED_lte;

    /* @var int $delta7_COUNT_REFURBISHED_gte */
    public $delta7_COUNT_REFURBISHED_gte;

    /* @var int $delta7_COUNT_REVIEWS_lte */
    public $delta7_COUNT_REVIEWS_lte;

    /* @var int $delta7_COUNT_REVIEWS_gte */
    public $delta7_COUNT_REVIEWS_gte;

    /* @var int $delta7_COUNT_USED_lte */
    public $delta7_COUNT_USED_lte;

    /* @var int $delta7_COUNT_USED_gte */
    public $delta7_COUNT_USED_gte;

    /* @var int $delta7_EBAY_NEW_SHIPPING_lte */
    public $delta7_EBAY_NEW_SHIPPING_lte;

    /* @var int $delta7_EBAY_NEW_SHIPPING_gte */
    public $delta7_EBAY_NEW_SHIPPING_gte;

    /* @var int $delta7_EBAY_USED_SHIPPING_lte */
    public $delta7_EBAY_USED_SHIPPING_lte;

    /* @var int $delta7_EBAY_USED_SHIPPING_gte */
    public $delta7_EBAY_USED_SHIPPING_gte;

    /* @var int $delta7_LIGHTNING_DEAL_lte */
    public $delta7_LIGHTNING_DEAL_lte;

    /* @var int $delta7_LIGHTNING_DEAL_gte */
    public $delta7_LIGHTNING_DEAL_gte;

    /* @var int $delta7_LISTPRICE_lte */
    public $delta7_LISTPRICE_lte;

    /* @var int $delta7_LISTPRICE_gte */
    public $delta7_LISTPRICE_gte;

    /* @var int $delta7_NEW_lte */
    public $delta7_NEW_lte;

    /* @var int $delta7_NEW_gte */
    public $delta7_NEW_gte;

    /* @var int $delta7_NEW_FBA_lte */
    public $delta7_NEW_FBA_lte;

    /* @var int $delta7_NEW_FBA_gte */
    public $delta7_NEW_FBA_gte;

    /* @var int $delta7_NEW_FBM_SHIPPING_lte */
    public $delta7_NEW_FBM_SHIPPING_lte;

    /* @var int $delta7_NEW_FBM_SHIPPING_gte */
    public $delta7_NEW_FBM_SHIPPING_gte;

    /* @var int $delta7_RATING_lte */
    public $delta7_RATING_lte;

    /* @var int $delta7_RATING_gte */
    public $delta7_RATING_gte;

    /* @var int $delta7_REFURBISHED_lte */
    public $delta7_REFURBISHED_lte;

    /* @var int $delta7_REFURBISHED_gte */
    public $delta7_REFURBISHED_gte;

    /* @var int $delta7_REFURBISHED_SHIPPING_lte */
    public $delta7_REFURBISHED_SHIPPING_lte;

    /* @var int $delta7_REFURBISHED_SHIPPING_gte */
    public $delta7_REFURBISHED_SHIPPING_gte;

    /* @var int $delta7_RENT_lte */
    public $delta7_RENT_lte;

    /* @var int $delta7_RENT_gte */
    public $delta7_RENT_gte;

    /* @var int $delta7_SALES_lte */
    public $delta7_SALES_lte;

    /* @var int $delta7_SALES_gte */
    public $delta7_SALES_gte;

    /* @var int $delta7_TRADE_IN_lte */
    public $delta7_TRADE_IN_lte;

    /* @var int $delta7_TRADE_IN_gte */
    public $delta7_TRADE_IN_gte;

    /* @var int $delta7_USED_lte */
    public $delta7_USED_lte;

    /* @var int $delta7_USED_gte */
    public $delta7_USED_gte;

    /* @var int $delta7_USED_ACCEPTABLE_SHIPPING_lte */
    public $delta7_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $delta7_USED_ACCEPTABLE_SHIPPING_gte */
    public $delta7_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $delta7_USED_GOOD_SHIPPING_lte */
    public $delta7_USED_GOOD_SHIPPING_lte;

    /* @var int $delta7_USED_GOOD_SHIPPING_gte */
    public $delta7_USED_GOOD_SHIPPING_gte;

    /* @var int $delta7_USED_NEW_SHIPPING_lte */
    public $delta7_USED_NEW_SHIPPING_lte;

    /* @var int $delta7_USED_NEW_SHIPPING_gte */
    public $delta7_USED_NEW_SHIPPING_gte;

    /* @var int $delta7_USED_VERY_GOOD_SHIPPING_lte */
    public $delta7_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $delta7_USED_VERY_GOOD_SHIPPING_gte */
    public $delta7_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $delta7_WAREHOUSE_lte */
    public $delta7_WAREHOUSE_lte;

    /* @var int $delta7_WAREHOUSE_gte */
    public $delta7_WAREHOUSE_gte;

    /* @var int $delta90_AMAZON_lte */
    public $delta90_AMAZON_lte;

    /* @var int $delta90_AMAZON_gte */
    public $delta90_AMAZON_gte;

    /* @var int $delta90_BUY_BOX_SHIPPING_lte */
    public $delta90_BUY_BOX_SHIPPING_lte;

    /* @var int $delta90_BUY_BOX_SHIPPING_gte */
    public $delta90_BUY_BOX_SHIPPING_gte;

    /* @var int $delta90_COLLECTIBLE_lte */
    public $delta90_COLLECTIBLE_lte;

    /* @var int $delta90_COLLECTIBLE_gte */
    public $delta90_COLLECTIBLE_gte;

    /* @var int $delta90_COUNT_COLLECTIBLE_lte */
    public $delta90_COUNT_COLLECTIBLE_lte;

    /* @var int $delta90_COUNT_COLLECTIBLE_gte */
    public $delta90_COUNT_COLLECTIBLE_gte;

    /* @var int $delta90_COUNT_NEW_lte */
    public $delta90_COUNT_NEW_lte;

    /* @var int $delta90_COUNT_NEW_gte */
    public $delta90_COUNT_NEW_gte;

    /* @var int $delta90_COUNT_REFURBISHED_lte */
    public $delta90_COUNT_REFURBISHED_lte;

    /* @var int $delta90_COUNT_REFURBISHED_gte */
    public $delta90_COUNT_REFURBISHED_gte;

    /* @var int $delta90_COUNT_REVIEWS_lte */
    public $delta90_COUNT_REVIEWS_lte;

    /* @var int $delta90_COUNT_REVIEWS_gte */
    public $delta90_COUNT_REVIEWS_gte;

    /* @var int $delta90_COUNT_USED_lte */
    public $delta90_COUNT_USED_lte;

    /* @var int $delta90_COUNT_USED_gte */
    public $delta90_COUNT_USED_gte;

    /* @var int $delta90_EBAY_NEW_SHIPPING_lte */
    public $delta90_EBAY_NEW_SHIPPING_lte;

    /* @var int $delta90_EBAY_NEW_SHIPPING_gte */
    public $delta90_EBAY_NEW_SHIPPING_gte;

    /* @var int $delta90_EBAY_USED_SHIPPING_lte */
    public $delta90_EBAY_USED_SHIPPING_lte;

    /* @var int $delta90_EBAY_USED_SHIPPING_gte */
    public $delta90_EBAY_USED_SHIPPING_gte;

    /* @var int $delta90_LIGHTNING_DEAL_lte */
    public $delta90_LIGHTNING_DEAL_lte;

    /* @var int $delta90_LIGHTNING_DEAL_gte */
    public $delta90_LIGHTNING_DEAL_gte;

    /* @var int $delta90_LISTPRICE_lte */
    public $delta90_LISTPRICE_lte;

    /* @var int $delta90_LISTPRICE_gte */
    public $delta90_LISTPRICE_gte;

    /* @var int $delta90_NEW_lte */
    public $delta90_NEW_lte;

    /* @var int $delta90_NEW_gte */
    public $delta90_NEW_gte;

    /* @var int $delta90_NEW_FBA_lte */
    public $delta90_NEW_FBA_lte;

    /* @var int $delta90_NEW_FBA_gte */
    public $delta90_NEW_FBA_gte;

    /* @var int $delta90_NEW_FBM_SHIPPING_lte */
    public $delta90_NEW_FBM_SHIPPING_lte;

    /* @var int $delta90_NEW_FBM_SHIPPING_gte */
    public $delta90_NEW_FBM_SHIPPING_gte;

    /* @var int $delta90_RATING_lte */
    public $delta90_RATING_lte;

    /* @var int $delta90_RATING_gte */
    public $delta90_RATING_gte;

    /* @var int $delta90_REFURBISHED_lte */
    public $delta90_REFURBISHED_lte;

    /* @var int $delta90_REFURBISHED_gte */
    public $delta90_REFURBISHED_gte;

    /* @var int $delta90_REFURBISHED_SHIPPING_lte */
    public $delta90_REFURBISHED_SHIPPING_lte;

    /* @var int $delta90_REFURBISHED_SHIPPING_gte */
    public $delta90_REFURBISHED_SHIPPING_gte;

    /* @var int $delta90_RENT_lte */
    public $delta90_RENT_lte;

    /* @var int $delta90_RENT_gte */
    public $delta90_RENT_gte;

    /* @var int $delta90_SALES_lte */
    public $delta90_SALES_lte;

    /* @var int $delta90_SALES_gte */
    public $delta90_SALES_gte;

    /* @var int $delta90_TRADE_IN_lte */
    public $delta90_TRADE_IN_lte;

    /* @var int $delta90_TRADE_IN_gte */
    public $delta90_TRADE_IN_gte;

    /* @var int $delta90_USED_lte */
    public $delta90_USED_lte;

    /* @var int $delta90_USED_gte */
    public $delta90_USED_gte;

    /* @var int $delta90_USED_ACCEPTABLE_SHIPPING_lte */
    public $delta90_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $delta90_USED_ACCEPTABLE_SHIPPING_gte */
    public $delta90_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $delta90_USED_GOOD_SHIPPING_lte */
    public $delta90_USED_GOOD_SHIPPING_lte;

    /* @var int $delta90_USED_GOOD_SHIPPING_gte */
    public $delta90_USED_GOOD_SHIPPING_gte;

    /* @var int $delta90_USED_NEW_SHIPPING_lte */
    public $delta90_USED_NEW_SHIPPING_lte;

    /* @var int $delta90_USED_NEW_SHIPPING_gte */
    public $delta90_USED_NEW_SHIPPING_gte;

    /* @var int $delta90_USED_VERY_GOOD_SHIPPING_lte */
    public $delta90_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $delta90_USED_VERY_GOOD_SHIPPING_gte */
    public $delta90_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $delta90_WAREHOUSE_lte */
    public $delta90_WAREHOUSE_lte;

    /* @var int $delta90_WAREHOUSE_gte */
    public $delta90_WAREHOUSE_gte;

    /* @var int $deltaLast_AMAZON_lte */
    public $deltaLast_AMAZON_lte;

    /* @var int $deltaLast_AMAZON_gte */
    public $deltaLast_AMAZON_gte;

    /* @var int $deltaLast_BUY_BOX_SHIPPING_lte */
    public $deltaLast_BUY_BOX_SHIPPING_lte;

    /* @var int $deltaLast_BUY_BOX_SHIPPING_gte */
    public $deltaLast_BUY_BOX_SHIPPING_gte;

    /* @var int $deltaLast_COLLECTIBLE_lte */
    public $deltaLast_COLLECTIBLE_lte;

    /* @var int $deltaLast_COLLECTIBLE_gte */
    public $deltaLast_COLLECTIBLE_gte;

    /* @var int $deltaLast_COUNT_COLLECTIBLE_lte */
    public $deltaLast_COUNT_COLLECTIBLE_lte;

    /* @var int $deltaLast_COUNT_COLLECTIBLE_gte */
    public $deltaLast_COUNT_COLLECTIBLE_gte;

    /* @var int $deltaLast_COUNT_NEW_lte */
    public $deltaLast_COUNT_NEW_lte;

    /* @var int $deltaLast_COUNT_NEW_gte */
    public $deltaLast_COUNT_NEW_gte;

    /* @var int $deltaLast_COUNT_REFURBISHED_lte */
    public $deltaLast_COUNT_REFURBISHED_lte;

    /* @var int $deltaLast_COUNT_REFURBISHED_gte */
    public $deltaLast_COUNT_REFURBISHED_gte;

    /* @var int $deltaLast_COUNT_REVIEWS_lte */
    public $deltaLast_COUNT_REVIEWS_lte;

    /* @var int $deltaLast_COUNT_REVIEWS_gte */
    public $deltaLast_COUNT_REVIEWS_gte;

    /* @var int $deltaLast_COUNT_USED_lte */
    public $deltaLast_COUNT_USED_lte;

    /* @var int $deltaLast_COUNT_USED_gte */
    public $deltaLast_COUNT_USED_gte;

    /* @var int $deltaLast_EBAY_NEW_SHIPPING_lte */
    public $deltaLast_EBAY_NEW_SHIPPING_lte;

    /* @var int $deltaLast_EBAY_NEW_SHIPPING_gte */
    public $deltaLast_EBAY_NEW_SHIPPING_gte;

    /* @var int $deltaLast_EBAY_USED_SHIPPING_lte */
    public $deltaLast_EBAY_USED_SHIPPING_lte;

    /* @var int $deltaLast_EBAY_USED_SHIPPING_gte */
    public $deltaLast_EBAY_USED_SHIPPING_gte;

    /* @var int $deltaLast_LIGHTNING_DEAL_lte */
    public $deltaLast_LIGHTNING_DEAL_lte;

    /* @var int $deltaLast_LIGHTNING_DEAL_gte */
    public $deltaLast_LIGHTNING_DEAL_gte;

    /* @var int $deltaLast_LISTPRICE_lte */
    public $deltaLast_LISTPRICE_lte;

    /* @var int $deltaLast_LISTPRICE_gte */
    public $deltaLast_LISTPRICE_gte;

    /* @var int $deltaLast_NEW_lte */
    public $deltaLast_NEW_lte;

    /* @var int $deltaLast_NEW_gte */
    public $deltaLast_NEW_gte;

    /* @var int $deltaLast_NEW_FBA_lte */
    public $deltaLast_NEW_FBA_lte;

    /* @var int $deltaLast_NEW_FBA_gte */
    public $deltaLast_NEW_FBA_gte;

    /* @var int $deltaLast_NEW_FBM_SHIPPING_lte */
    public $deltaLast_NEW_FBM_SHIPPING_lte;

    /* @var int $deltaLast_NEW_FBM_SHIPPING_gte */
    public $deltaLast_NEW_FBM_SHIPPING_gte;

    /* @var int $deltaLast_RATING_lte */
    public $deltaLast_RATING_lte;

    /* @var int $deltaLast_RATING_gte */
    public $deltaLast_RATING_gte;

    /* @var int $deltaLast_REFURBISHED_lte */
    public $deltaLast_REFURBISHED_lte;

    /* @var int $deltaLast_REFURBISHED_gte */
    public $deltaLast_REFURBISHED_gte;

    /* @var int $deltaLast_REFURBISHED_SHIPPING_lte */
    public $deltaLast_REFURBISHED_SHIPPING_lte;

    /* @var int $deltaLast_REFURBISHED_SHIPPING_gte */
    public $deltaLast_REFURBISHED_SHIPPING_gte;

    /* @var int $deltaLast_RENT_lte */
    public $deltaLast_RENT_lte;

    /* @var int $deltaLast_RENT_gte */
    public $deltaLast_RENT_gte;

    /* @var int $deltaLast_SALES_lte */
    public $deltaLast_SALES_lte;

    /* @var int $deltaLast_SALES_gte */
    public $deltaLast_SALES_gte;

    /* @var int $deltaLast_TRADE_IN_lte */
    public $deltaLast_TRADE_IN_lte;

    /* @var int $deltaLast_TRADE_IN_gte */
    public $deltaLast_TRADE_IN_gte;

    /* @var int $deltaLast_USED_lte */
    public $deltaLast_USED_lte;

    /* @var int $deltaLast_USED_gte */
    public $deltaLast_USED_gte;

    /* @var int $deltaLast_USED_ACCEPTABLE_SHIPPING_lte */
    public $deltaLast_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $deltaLast_USED_ACCEPTABLE_SHIPPING_gte */
    public $deltaLast_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $deltaLast_USED_GOOD_SHIPPING_lte */
    public $deltaLast_USED_GOOD_SHIPPING_lte;

    /* @var int $deltaLast_USED_GOOD_SHIPPING_gte */
    public $deltaLast_USED_GOOD_SHIPPING_gte;

    /* @var int $deltaLast_USED_NEW_SHIPPING_lte */
    public $deltaLast_USED_NEW_SHIPPING_lte;

    /* @var int $deltaLast_USED_NEW_SHIPPING_gte */
    public $deltaLast_USED_NEW_SHIPPING_gte;

    /* @var int $deltaLast_USED_VERY_GOOD_SHIPPING_lte */
    public $deltaLast_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $deltaLast_USED_VERY_GOOD_SHIPPING_gte */
    public $deltaLast_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $deltaLast_WAREHOUSE_lte */
    public $deltaLast_WAREHOUSE_lte;

    /* @var int $deltaLast_WAREHOUSE_gte */
    public $deltaLast_WAREHOUSE_gte;

    /* @var short $deltaPercent1_AMAZON_lte */
    public $deltaPercent1_AMAZON_lte;

    /* @var short $deltaPercent1_AMAZON_gte */
    public $deltaPercent1_AMAZON_gte;

    /* @var short $deltaPercent1_BUY_BOX_SHIPPING_lte */
    public $deltaPercent1_BUY_BOX_SHIPPING_lte;

    /* @var short $deltaPercent1_BUY_BOX_SHIPPING_gte */
    public $deltaPercent1_BUY_BOX_SHIPPING_gte;

    /* @var short $deltaPercent1_COLLECTIBLE_lte */
    public $deltaPercent1_COLLECTIBLE_lte;

    /* @var short $deltaPercent1_COLLECTIBLE_gte */
    public $deltaPercent1_COLLECTIBLE_gte;

    /* @var short $deltaPercent1_COUNT_COLLECTIBLE_lte */
    public $deltaPercent1_COUNT_COLLECTIBLE_lte;

    /* @var short $deltaPercent1_COUNT_COLLECTIBLE_gte */
    public $deltaPercent1_COUNT_COLLECTIBLE_gte;

    /* @var short $deltaPercent1_COUNT_NEW_lte */
    public $deltaPercent1_COUNT_NEW_lte;

    /* @var short $deltaPercent1_COUNT_NEW_gte */
    public $deltaPercent1_COUNT_NEW_gte;

    /* @var short $deltaPercent1_COUNT_REFURBISHED_lte */
    public $deltaPercent1_COUNT_REFURBISHED_lte;

    /* @var short $deltaPercent1_COUNT_REFURBISHED_gte */
    public $deltaPercent1_COUNT_REFURBISHED_gte;

    /* @var short $deltaPercent1_COUNT_REVIEWS_lte */
    public $deltaPercent1_COUNT_REVIEWS_lte;

    /* @var short $deltaPercent1_COUNT_REVIEWS_gte */
    public $deltaPercent1_COUNT_REVIEWS_gte;

    /* @var short $deltaPercent1_COUNT_USED_lte */
    public $deltaPercent1_COUNT_USED_lte;

    /* @var short $deltaPercent1_COUNT_USED_gte */
    public $deltaPercent1_COUNT_USED_gte;

    /* @var short $deltaPercent1_EBAY_NEW_SHIPPING_lte */
    public $deltaPercent1_EBAY_NEW_SHIPPING_lte;

    /* @var short $deltaPercent1_EBAY_NEW_SHIPPING_gte */
    public $deltaPercent1_EBAY_NEW_SHIPPING_gte;

    /* @var short $deltaPercent1_EBAY_USED_SHIPPING_lte */
    public $deltaPercent1_EBAY_USED_SHIPPING_lte;

    /* @var short $deltaPercent1_EBAY_USED_SHIPPING_gte */
    public $deltaPercent1_EBAY_USED_SHIPPING_gte;

    /* @var short $deltaPercent1_LIGHTNING_DEAL_lte */
    public $deltaPercent1_LIGHTNING_DEAL_lte;

    /* @var short $deltaPercent1_LIGHTNING_DEAL_gte */
    public $deltaPercent1_LIGHTNING_DEAL_gte;

    /* @var short $deltaPercent1_LISTPRICE_lte */
    public $deltaPercent1_LISTPRICE_lte;

    /* @var short $deltaPercent1_LISTPRICE_gte */
    public $deltaPercent1_LISTPRICE_gte;

    /* @var short $deltaPercent1_NEW_lte */
    public $deltaPercent1_NEW_lte;

    /* @var short $deltaPercent1_NEW_gte */
    public $deltaPercent1_NEW_gte;

    /* @var short $deltaPercent1_NEW_FBA_lte */
    public $deltaPercent1_NEW_FBA_lte;

    /* @var short $deltaPercent1_NEW_FBA_gte */
    public $deltaPercent1_NEW_FBA_gte;

    /* @var short $deltaPercent1_NEW_FBM_SHIPPING_lte */
    public $deltaPercent1_NEW_FBM_SHIPPING_lte;

    /* @var short $deltaPercent1_NEW_FBM_SHIPPING_gte */
    public $deltaPercent1_NEW_FBM_SHIPPING_gte;

    /* @var short $deltaPercent1_RATING_lte */
    public $deltaPercent1_RATING_lte;

    /* @var short $deltaPercent1_RATING_gte */
    public $deltaPercent1_RATING_gte;

    /* @var short $deltaPercent1_REFURBISHED_lte */
    public $deltaPercent1_REFURBISHED_lte;

    /* @var short $deltaPercent1_REFURBISHED_gte */
    public $deltaPercent1_REFURBISHED_gte;

    /* @var short $deltaPercent1_REFURBISHED_SHIPPING_lte */
    public $deltaPercent1_REFURBISHED_SHIPPING_lte;

    /* @var short $deltaPercent1_REFURBISHED_SHIPPING_gte */
    public $deltaPercent1_REFURBISHED_SHIPPING_gte;

    /* @var short $deltaPercent1_RENT_lte */
    public $deltaPercent1_RENT_lte;

    /* @var short $deltaPercent1_RENT_gte */
    public $deltaPercent1_RENT_gte;

    /* @var short $deltaPercent1_SALES_lte */
    public $deltaPercent1_SALES_lte;

    /* @var short $deltaPercent1_SALES_gte */
    public $deltaPercent1_SALES_gte;

    /* @var short $deltaPercent1_TRADE_IN_lte */
    public $deltaPercent1_TRADE_IN_lte;

    /* @var short $deltaPercent1_TRADE_IN_gte */
    public $deltaPercent1_TRADE_IN_gte;

    /* @var short $deltaPercent1_USED_lte */
    public $deltaPercent1_USED_lte;

    /* @var short $deltaPercent1_USED_gte */
    public $deltaPercent1_USED_gte;

    /* @var short $deltaPercent1_USED_ACCEPTABLE_SHIPPING_lte */
    public $deltaPercent1_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var short $deltaPercent1_USED_ACCEPTABLE_SHIPPING_gte */
    public $deltaPercent1_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var short $deltaPercent1_USED_GOOD_SHIPPING_lte */
    public $deltaPercent1_USED_GOOD_SHIPPING_lte;

    /* @var short $deltaPercent1_USED_GOOD_SHIPPING_gte */
    public $deltaPercent1_USED_GOOD_SHIPPING_gte;

    /* @var short $deltaPercent1_USED_NEW_SHIPPING_lte */
    public $deltaPercent1_USED_NEW_SHIPPING_lte;

    /* @var short $deltaPercent1_USED_NEW_SHIPPING_gte */
    public $deltaPercent1_USED_NEW_SHIPPING_gte;

    /* @var short $deltaPercent1_USED_VERY_GOOD_SHIPPING_lte */
    public $deltaPercent1_USED_VERY_GOOD_SHIPPING_lte;

    /* @var short $deltaPercent1_USED_VERY_GOOD_SHIPPING_gte */
    public $deltaPercent1_USED_VERY_GOOD_SHIPPING_gte;

    /* @var short $deltaPercent1_WAREHOUSE_lte */
    public $deltaPercent1_WAREHOUSE_lte;

    /* @var short $deltaPercent1_WAREHOUSE_gte */
    public $deltaPercent1_WAREHOUSE_gte;

    /* @var short $deltaPercent30_AMAZON_lte */
    public $deltaPercent30_AMAZON_lte;

    /* @var short $deltaPercent30_AMAZON_gte */
    public $deltaPercent30_AMAZON_gte;

    /* @var short $deltaPercent30_BUY_BOX_SHIPPING_lte */
    public $deltaPercent30_BUY_BOX_SHIPPING_lte;

    /* @var short $deltaPercent30_BUY_BOX_SHIPPING_gte */
    public $deltaPercent30_BUY_BOX_SHIPPING_gte;

    /* @var short $deltaPercent30_COLLECTIBLE_lte */
    public $deltaPercent30_COLLECTIBLE_lte;

    /* @var short $deltaPercent30_COLLECTIBLE_gte */
    public $deltaPercent30_COLLECTIBLE_gte;

    /* @var short $deltaPercent30_COUNT_COLLECTIBLE_lte */
    public $deltaPercent30_COUNT_COLLECTIBLE_lte;

    /* @var short $deltaPercent30_COUNT_COLLECTIBLE_gte */
    public $deltaPercent30_COUNT_COLLECTIBLE_gte;

    /* @var short $deltaPercent30_COUNT_NEW_lte */
    public $deltaPercent30_COUNT_NEW_lte;

    /* @var short $deltaPercent30_COUNT_NEW_gte */
    public $deltaPercent30_COUNT_NEW_gte;

    /* @var short $deltaPercent30_COUNT_REFURBISHED_lte */
    public $deltaPercent30_COUNT_REFURBISHED_lte;

    /* @var short $deltaPercent30_COUNT_REFURBISHED_gte */
    public $deltaPercent30_COUNT_REFURBISHED_gte;

    /* @var short $deltaPercent30_COUNT_REVIEWS_lte */
    public $deltaPercent30_COUNT_REVIEWS_lte;

    /* @var short $deltaPercent30_COUNT_REVIEWS_gte */
    public $deltaPercent30_COUNT_REVIEWS_gte;

    /* @var short $deltaPercent30_COUNT_USED_lte */
    public $deltaPercent30_COUNT_USED_lte;

    /* @var short $deltaPercent30_COUNT_USED_gte */
    public $deltaPercent30_COUNT_USED_gte;

    /* @var short $deltaPercent30_EBAY_NEW_SHIPPING_lte */
    public $deltaPercent30_EBAY_NEW_SHIPPING_lte;

    /* @var short $deltaPercent30_EBAY_NEW_SHIPPING_gte */
    public $deltaPercent30_EBAY_NEW_SHIPPING_gte;

    /* @var short $deltaPercent30_EBAY_USED_SHIPPING_lte */
    public $deltaPercent30_EBAY_USED_SHIPPING_lte;

    /* @var short $deltaPercent30_EBAY_USED_SHIPPING_gte */
    public $deltaPercent30_EBAY_USED_SHIPPING_gte;

    /* @var short $deltaPercent30_LIGHTNING_DEAL_lte */
    public $deltaPercent30_LIGHTNING_DEAL_lte;

    /* @var short $deltaPercent30_LIGHTNING_DEAL_gte */
    public $deltaPercent30_LIGHTNING_DEAL_gte;

    /* @var short $deltaPercent30_LISTPRICE_lte */
    public $deltaPercent30_LISTPRICE_lte;

    /* @var short $deltaPercent30_LISTPRICE_gte */
    public $deltaPercent30_LISTPRICE_gte;

    /* @var short $deltaPercent30_NEW_lte */
    public $deltaPercent30_NEW_lte;

    /* @var short $deltaPercent30_NEW_gte */
    public $deltaPercent30_NEW_gte;

    /* @var short $deltaPercent30_NEW_FBA_lte */
    public $deltaPercent30_NEW_FBA_lte;

    /* @var short $deltaPercent30_NEW_FBA_gte */
    public $deltaPercent30_NEW_FBA_gte;

    /* @var short $deltaPercent30_NEW_FBM_SHIPPING_lte */
    public $deltaPercent30_NEW_FBM_SHIPPING_lte;

    /* @var short $deltaPercent30_NEW_FBM_SHIPPING_gte */
    public $deltaPercent30_NEW_FBM_SHIPPING_gte;

    /* @var short $deltaPercent30_RATING_lte */
    public $deltaPercent30_RATING_lte;

    /* @var short $deltaPercent30_RATING_gte */
    public $deltaPercent30_RATING_gte;

    /* @var short $deltaPercent30_REFURBISHED_lte */
    public $deltaPercent30_REFURBISHED_lte;

    /* @var short $deltaPercent30_REFURBISHED_gte */
    public $deltaPercent30_REFURBISHED_gte;

    /* @var short $deltaPercent30_REFURBISHED_SHIPPING_lte */
    public $deltaPercent30_REFURBISHED_SHIPPING_lte;

    /* @var short $deltaPercent30_REFURBISHED_SHIPPING_gte */
    public $deltaPercent30_REFURBISHED_SHIPPING_gte;

    /* @var short $deltaPercent30_RENT_lte */
    public $deltaPercent30_RENT_lte;

    /* @var short $deltaPercent30_RENT_gte */
    public $deltaPercent30_RENT_gte;

    /* @var short $deltaPercent30_SALES_lte */
    public $deltaPercent30_SALES_lte;

    /* @var short $deltaPercent30_SALES_gte */
    public $deltaPercent30_SALES_gte;

    /* @var short $deltaPercent30_TRADE_IN_lte */
    public $deltaPercent30_TRADE_IN_lte;

    /* @var short $deltaPercent30_TRADE_IN_gte */
    public $deltaPercent30_TRADE_IN_gte;

    /* @var short $deltaPercent30_USED_lte */
    public $deltaPercent30_USED_lte;

    /* @var short $deltaPercent30_USED_gte */
    public $deltaPercent30_USED_gte;

    /* @var short $deltaPercent30_USED_ACCEPTABLE_SHIPPING_lte */
    public $deltaPercent30_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var short $deltaPercent30_USED_ACCEPTABLE_SHIPPING_gte */
    public $deltaPercent30_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var short $deltaPercent30_USED_GOOD_SHIPPING_lte */
    public $deltaPercent30_USED_GOOD_SHIPPING_lte;

    /* @var short $deltaPercent30_USED_GOOD_SHIPPING_gte */
    public $deltaPercent30_USED_GOOD_SHIPPING_gte;

    /* @var short $deltaPercent30_USED_NEW_SHIPPING_lte */
    public $deltaPercent30_USED_NEW_SHIPPING_lte;

    /* @var short $deltaPercent30_USED_NEW_SHIPPING_gte */
    public $deltaPercent30_USED_NEW_SHIPPING_gte;

    /* @var short $deltaPercent30_USED_VERY_GOOD_SHIPPING_lte */
    public $deltaPercent30_USED_VERY_GOOD_SHIPPING_lte;

    /* @var short $deltaPercent30_USED_VERY_GOOD_SHIPPING_gte */
    public $deltaPercent30_USED_VERY_GOOD_SHIPPING_gte;

    /* @var short $deltaPercent30_WAREHOUSE_lte */
    public $deltaPercent30_WAREHOUSE_lte;

    /* @var short $deltaPercent30_WAREHOUSE_gte */
    public $deltaPercent30_WAREHOUSE_gte;

    /* @var short $deltaPercent7_AMAZON_lte */
    public $deltaPercent7_AMAZON_lte;

    /* @var short $deltaPercent7_AMAZON_gte */
    public $deltaPercent7_AMAZON_gte;

    /* @var short $deltaPercent7_BUY_BOX_SHIPPING_lte */
    public $deltaPercent7_BUY_BOX_SHIPPING_lte;

    /* @var short $deltaPercent7_BUY_BOX_SHIPPING_gte */
    public $deltaPercent7_BUY_BOX_SHIPPING_gte;

    /* @var short $deltaPercent7_COLLECTIBLE_lte */
    public $deltaPercent7_COLLECTIBLE_lte;

    /* @var short $deltaPercent7_COLLECTIBLE_gte */
    public $deltaPercent7_COLLECTIBLE_gte;

    /* @var short $deltaPercent7_COUNT_COLLECTIBLE_lte */
    public $deltaPercent7_COUNT_COLLECTIBLE_lte;

    /* @var short $deltaPercent7_COUNT_COLLECTIBLE_gte */
    public $deltaPercent7_COUNT_COLLECTIBLE_gte;

    /* @var short $deltaPercent7_COUNT_NEW_lte */
    public $deltaPercent7_COUNT_NEW_lte;

    /* @var short $deltaPercent7_COUNT_NEW_gte */
    public $deltaPercent7_COUNT_NEW_gte;

    /* @var short $deltaPercent7_COUNT_REFURBISHED_lte */
    public $deltaPercent7_COUNT_REFURBISHED_lte;

    /* @var short $deltaPercent7_COUNT_REFURBISHED_gte */
    public $deltaPercent7_COUNT_REFURBISHED_gte;

    /* @var short $deltaPercent7_COUNT_REVIEWS_lte */
    public $deltaPercent7_COUNT_REVIEWS_lte;

    /* @var short $deltaPercent7_COUNT_REVIEWS_gte */
    public $deltaPercent7_COUNT_REVIEWS_gte;

    /* @var short $deltaPercent7_COUNT_USED_lte */
    public $deltaPercent7_COUNT_USED_lte;

    /* @var short $deltaPercent7_COUNT_USED_gte */
    public $deltaPercent7_COUNT_USED_gte;

    /* @var short $deltaPercent7_EBAY_NEW_SHIPPING_lte */
    public $deltaPercent7_EBAY_NEW_SHIPPING_lte;

    /* @var short $deltaPercent7_EBAY_NEW_SHIPPING_gte */
    public $deltaPercent7_EBAY_NEW_SHIPPING_gte;

    /* @var short $deltaPercent7_EBAY_USED_SHIPPING_lte */
    public $deltaPercent7_EBAY_USED_SHIPPING_lte;

    /* @var short $deltaPercent7_EBAY_USED_SHIPPING_gte */
    public $deltaPercent7_EBAY_USED_SHIPPING_gte;

    /* @var short $deltaPercent7_LIGHTNING_DEAL_lte */
    public $deltaPercent7_LIGHTNING_DEAL_lte;

    /* @var short $deltaPercent7_LIGHTNING_DEAL_gte */
    public $deltaPercent7_LIGHTNING_DEAL_gte;

    /* @var short $deltaPercent7_LISTPRICE_lte */
    public $deltaPercent7_LISTPRICE_lte;

    /* @var short $deltaPercent7_LISTPRICE_gte */
    public $deltaPercent7_LISTPRICE_gte;

    /* @var short $deltaPercent7_NEW_lte */
    public $deltaPercent7_NEW_lte;

    /* @var short $deltaPercent7_NEW_gte */
    public $deltaPercent7_NEW_gte;

    /* @var short $deltaPercent7_NEW_FBA_lte */
    public $deltaPercent7_NEW_FBA_lte;

    /* @var short $deltaPercent7_NEW_FBA_gte */
    public $deltaPercent7_NEW_FBA_gte;

    /* @var short $deltaPercent7_NEW_FBM_SHIPPING_lte */
    public $deltaPercent7_NEW_FBM_SHIPPING_lte;

    /* @var short $deltaPercent7_NEW_FBM_SHIPPING_gte */
    public $deltaPercent7_NEW_FBM_SHIPPING_gte;

    /* @var short $deltaPercent7_RATING_lte */
    public $deltaPercent7_RATING_lte;

    /* @var short $deltaPercent7_RATING_gte */
    public $deltaPercent7_RATING_gte;

    /* @var short $deltaPercent7_REFURBISHED_lte */
    public $deltaPercent7_REFURBISHED_lte;

    /* @var short $deltaPercent7_REFURBISHED_gte */
    public $deltaPercent7_REFURBISHED_gte;

    /* @var short $deltaPercent7_REFURBISHED_SHIPPING_lte */
    public $deltaPercent7_REFURBISHED_SHIPPING_lte;

    /* @var short $deltaPercent7_REFURBISHED_SHIPPING_gte */
    public $deltaPercent7_REFURBISHED_SHIPPING_gte;

    /* @var short $deltaPercent7_RENT_lte */
    public $deltaPercent7_RENT_lte;

    /* @var short $deltaPercent7_RENT_gte */
    public $deltaPercent7_RENT_gte;

    /* @var short $deltaPercent7_SALES_lte */
    public $deltaPercent7_SALES_lte;

    /* @var short $deltaPercent7_SALES_gte */
    public $deltaPercent7_SALES_gte;

    /* @var short $deltaPercent7_TRADE_IN_lte */
    public $deltaPercent7_TRADE_IN_lte;

    /* @var short $deltaPercent7_TRADE_IN_gte */
    public $deltaPercent7_TRADE_IN_gte;

    /* @var short $deltaPercent7_USED_lte */
    public $deltaPercent7_USED_lte;

    /* @var short $deltaPercent7_USED_gte */
    public $deltaPercent7_USED_gte;

    /* @var short $deltaPercent7_USED_ACCEPTABLE_SHIPPING_lte */
    public $deltaPercent7_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var short $deltaPercent7_USED_ACCEPTABLE_SHIPPING_gte */
    public $deltaPercent7_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var short $deltaPercent7_USED_GOOD_SHIPPING_lte */
    public $deltaPercent7_USED_GOOD_SHIPPING_lte;

    /* @var short $deltaPercent7_USED_GOOD_SHIPPING_gte */
    public $deltaPercent7_USED_GOOD_SHIPPING_gte;

    /* @var short $deltaPercent7_USED_NEW_SHIPPING_lte */
    public $deltaPercent7_USED_NEW_SHIPPING_lte;

    /* @var short $deltaPercent7_USED_NEW_SHIPPING_gte */
    public $deltaPercent7_USED_NEW_SHIPPING_gte;

    /* @var short $deltaPercent7_USED_VERY_GOOD_SHIPPING_lte */
    public $deltaPercent7_USED_VERY_GOOD_SHIPPING_lte;

    /* @var short $deltaPercent7_USED_VERY_GOOD_SHIPPING_gte */
    public $deltaPercent7_USED_VERY_GOOD_SHIPPING_gte;

    /* @var short $deltaPercent7_WAREHOUSE_lte */
    public $deltaPercent7_WAREHOUSE_lte;

    /* @var short $deltaPercent7_WAREHOUSE_gte */
    public $deltaPercent7_WAREHOUSE_gte;

    /* @var short $deltaPercent90_AMAZON_lte */
    public $deltaPercent90_AMAZON_lte;

    /* @var short $deltaPercent90_AMAZON_gte */
    public $deltaPercent90_AMAZON_gte;

    /* @var short $deltaPercent90_BUY_BOX_SHIPPING_lte */
    public $deltaPercent90_BUY_BOX_SHIPPING_lte;

    /* @var short $deltaPercent90_BUY_BOX_SHIPPING_gte */
    public $deltaPercent90_BUY_BOX_SHIPPING_gte;

    /* @var short $deltaPercent90_COLLECTIBLE_lte */
    public $deltaPercent90_COLLECTIBLE_lte;

    /* @var short $deltaPercent90_COLLECTIBLE_gte */
    public $deltaPercent90_COLLECTIBLE_gte;

    /* @var short $deltaPercent90_COUNT_COLLECTIBLE_lte */
    public $deltaPercent90_COUNT_COLLECTIBLE_lte;

    /* @var short $deltaPercent90_COUNT_COLLECTIBLE_gte */
    public $deltaPercent90_COUNT_COLLECTIBLE_gte;

    /* @var short $deltaPercent90_COUNT_NEW_lte */
    public $deltaPercent90_COUNT_NEW_lte;

    /* @var short $deltaPercent90_COUNT_NEW_gte */
    public $deltaPercent90_COUNT_NEW_gte;

    /* @var short $deltaPercent90_COUNT_REFURBISHED_lte */
    public $deltaPercent90_COUNT_REFURBISHED_lte;

    /* @var short $deltaPercent90_COUNT_REFURBISHED_gte */
    public $deltaPercent90_COUNT_REFURBISHED_gte;

    /* @var short $deltaPercent90_COUNT_REVIEWS_lte */
    public $deltaPercent90_COUNT_REVIEWS_lte;

    /* @var short $deltaPercent90_COUNT_REVIEWS_gte */
    public $deltaPercent90_COUNT_REVIEWS_gte;

    /* @var short $deltaPercent90_COUNT_USED_lte */
    public $deltaPercent90_COUNT_USED_lte;

    /* @var short $deltaPercent90_COUNT_USED_gte */
    public $deltaPercent90_COUNT_USED_gte;

    /* @var short $deltaPercent90_EBAY_NEW_SHIPPING_lte */
    public $deltaPercent90_EBAY_NEW_SHIPPING_lte;

    /* @var short $deltaPercent90_EBAY_NEW_SHIPPING_gte */
    public $deltaPercent90_EBAY_NEW_SHIPPING_gte;

    /* @var short $deltaPercent90_EBAY_USED_SHIPPING_lte */
    public $deltaPercent90_EBAY_USED_SHIPPING_lte;

    /* @var short $deltaPercent90_EBAY_USED_SHIPPING_gte */
    public $deltaPercent90_EBAY_USED_SHIPPING_gte;

    /* @var short $deltaPercent90_LIGHTNING_DEAL_lte */
    public $deltaPercent90_LIGHTNING_DEAL_lte;

    /* @var short $deltaPercent90_LIGHTNING_DEAL_gte */
    public $deltaPercent90_LIGHTNING_DEAL_gte;

    /* @var short $deltaPercent90_LISTPRICE_lte */
    public $deltaPercent90_LISTPRICE_lte;

    /* @var short $deltaPercent90_LISTPRICE_gte */
    public $deltaPercent90_LISTPRICE_gte;

    /* @var short $deltaPercent90_NEW_lte */
    public $deltaPercent90_NEW_lte;

    /* @var short $deltaPercent90_NEW_gte */
    public $deltaPercent90_NEW_gte;

    /* @var short $deltaPercent90_NEW_FBA_lte */
    public $deltaPercent90_NEW_FBA_lte;

    /* @var short $deltaPercent90_NEW_FBA_gte */
    public $deltaPercent90_NEW_FBA_gte;

    /* @var short $deltaPercent90_NEW_FBM_SHIPPING_lte */
    public $deltaPercent90_NEW_FBM_SHIPPING_lte;

    /* @var short $deltaPercent90_NEW_FBM_SHIPPING_gte */
    public $deltaPercent90_NEW_FBM_SHIPPING_gte;

    /* @var short $deltaPercent90_RATING_lte */
    public $deltaPercent90_RATING_lte;

    /* @var short $deltaPercent90_RATING_gte */
    public $deltaPercent90_RATING_gte;

    /* @var short $deltaPercent90_REFURBISHED_lte */
    public $deltaPercent90_REFURBISHED_lte;

    /* @var short $deltaPercent90_REFURBISHED_gte */
    public $deltaPercent90_REFURBISHED_gte;

    /* @var short $deltaPercent90_REFURBISHED_SHIPPING_lte */
    public $deltaPercent90_REFURBISHED_SHIPPING_lte;

    /* @var short $deltaPercent90_REFURBISHED_SHIPPING_gte */
    public $deltaPercent90_REFURBISHED_SHIPPING_gte;

    /* @var short $deltaPercent90_RENT_lte */
    public $deltaPercent90_RENT_lte;

    /* @var short $deltaPercent90_RENT_gte */
    public $deltaPercent90_RENT_gte;

    /* @var short $deltaPercent90_SALES_lte */
    public $deltaPercent90_SALES_lte;

    /* @var short $deltaPercent90_SALES_gte */
    public $deltaPercent90_SALES_gte;

    /* @var short $deltaPercent90_TRADE_IN_lte */
    public $deltaPercent90_TRADE_IN_lte;

    /* @var short $deltaPercent90_TRADE_IN_gte */
    public $deltaPercent90_TRADE_IN_gte;

    /* @var short $deltaPercent90_USED_lte */
    public $deltaPercent90_USED_lte;

    /* @var short $deltaPercent90_USED_gte */
    public $deltaPercent90_USED_gte;

    /* @var short $deltaPercent90_USED_ACCEPTABLE_SHIPPING_lte */
    public $deltaPercent90_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var short $deltaPercent90_USED_ACCEPTABLE_SHIPPING_gte */
    public $deltaPercent90_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var short $deltaPercent90_USED_GOOD_SHIPPING_lte */
    public $deltaPercent90_USED_GOOD_SHIPPING_lte;

    /* @var short $deltaPercent90_USED_GOOD_SHIPPING_gte */
    public $deltaPercent90_USED_GOOD_SHIPPING_gte;

    /* @var short $deltaPercent90_USED_NEW_SHIPPING_lte */
    public $deltaPercent90_USED_NEW_SHIPPING_lte;

    /* @var short $deltaPercent90_USED_NEW_SHIPPING_gte */
    public $deltaPercent90_USED_NEW_SHIPPING_gte;

    /* @var short $deltaPercent90_USED_VERY_GOOD_SHIPPING_lte */
    public $deltaPercent90_USED_VERY_GOOD_SHIPPING_lte;

    /* @var short $deltaPercent90_USED_VERY_GOOD_SHIPPING_gte */
    public $deltaPercent90_USED_VERY_GOOD_SHIPPING_gte;

    /* @var short $deltaPercent90_WAREHOUSE_lte */
    public $deltaPercent90_WAREHOUSE_lte;

    /* @var short $deltaPercent90_WAREHOUSE_gte */
    public $deltaPercent90_WAREHOUSE_gte;

    /* @var string[] $department */
    public $department;

    /* @var string[] $edition */
    public $edition;

    /* @var int $fbaFees_lte */
    public $fbaFees_lte;

    /* @var int $fbaFees_gte */
    public $fbaFees_gte;

    /* @var string[] $format */
    public $format;

    /* @var string[] $genre */
    public $genre;

    /* @var bool $hasParentASIN */
    public $hasParentASIN;

    /* @var bool $hasReviews */
    public $hasReviews;

    /* @var byte $hazardousMaterialType_lte */
    public $hazardousMaterialType_lte;

    /* @var byte $hazardousMaterialType_gte */
    public $hazardousMaterialType_gte;

    /* @var bool $isAdultProduct */
    public $isAdultProduct;

    /* @var bool $isEligibleForSuperSaverShipping */
    public $isEligibleForSuperSaverShipping;

    /* @var bool $isEligibleForTradeIn */
    public $isEligibleForTradeIn;

    /* @var bool $isHighestOffer */
    public $isHighestOffer;

    /* @var bool $isHighest_AMAZON */
    public $isHighest_AMAZON;

    /* @var bool $isHighest_BUY_BOX_SHIPPING */
    public $isHighest_BUY_BOX_SHIPPING;

    /* @var bool $isHighest_COLLECTIBLE */
    public $isHighest_COLLECTIBLE;

    /* @var bool $isHighest_COUNT_COLLECTIBLE */
    public $isHighest_COUNT_COLLECTIBLE;

    /* @var bool $isHighest_COUNT_NEW */
    public $isHighest_COUNT_NEW;

    /* @var bool $isHighest_COUNT_REFURBISHED */
    public $isHighest_COUNT_REFURBISHED;

    /* @var bool $isHighest_COUNT_REVIEWS */
    public $isHighest_COUNT_REVIEWS;

    /* @var bool $isHighest_COUNT_USED */
    public $isHighest_COUNT_USED;

    /* @var bool $isHighest_EBAY_NEW_SHIPPING */
    public $isHighest_EBAY_NEW_SHIPPING;

    /* @var bool $isHighest_EBAY_USED_SHIPPING */
    public $isHighest_EBAY_USED_SHIPPING;

    /* @var bool $isHighest_LIGHTNING_DEAL */
    public $isHighest_LIGHTNING_DEAL;

    /* @var bool $isHighest_LISTPRICE */
    public $isHighest_LISTPRICE;

    /* @var bool $isHighest_NEW */
    public $isHighest_NEW;

    /* @var bool $isHighest_NEW_FBA */
    public $isHighest_NEW_FBA;

    /* @var bool $isHighest_NEW_FBM_SHIPPING */
    public $isHighest_NEW_FBM_SHIPPING;

    /* @var bool $isHighest_RATING */
    public $isHighest_RATING;

    /* @var bool $isHighest_REFURBISHED */
    public $isHighest_REFURBISHED;

    /* @var bool $isHighest_REFURBISHED_SHIPPING */
    public $isHighest_REFURBISHED_SHIPPING;

    /* @var bool $isHighest_RENT */
    public $isHighest_RENT;

    /* @var bool $isHighest_SALES */
    public $isHighest_SALES;

    /* @var bool $isHighest_TRADE_IN */
    public $isHighest_TRADE_IN;

    /* @var bool $isHighest_USED */
    public $isHighest_USED;

    /* @var bool $isHighest_USED_ACCEPTABLE_SHIPPING */
    public $isHighest_USED_ACCEPTABLE_SHIPPING;

    /* @var bool $isHighest_USED_GOOD_SHIPPING */
    public $isHighest_USED_GOOD_SHIPPING;

    /* @var bool $isHighest_USED_NEW_SHIPPING */
    public $isHighest_USED_NEW_SHIPPING;

    /* @var bool $isHighest_USED_VERY_GOOD_SHIPPING */
    public $isHighest_USED_VERY_GOOD_SHIPPING;

    /* @var bool $isHighest_WAREHOUSE */
    public $isHighest_WAREHOUSE;

    /* @var bool $isLowestOffer */
    public $isLowestOffer;

    /* @var bool $isLowest_AMAZON */
    public $isLowest_AMAZON;

    /* @var bool $isLowest_BUY_BOX_SHIPPING */
    public $isLowest_BUY_BOX_SHIPPING;

    /* @var bool $isLowest_COLLECTIBLE */
    public $isLowest_COLLECTIBLE;

    /* @var bool $isLowest_COUNT_COLLECTIBLE */
    public $isLowest_COUNT_COLLECTIBLE;

    /* @var bool $isLowest_COUNT_NEW */
    public $isLowest_COUNT_NEW;

    /* @var bool $isLowest_COUNT_REFURBISHED */
    public $isLowest_COUNT_REFURBISHED;

    /* @var bool $isLowest_COUNT_REVIEWS */
    public $isLowest_COUNT_REVIEWS;

    /* @var bool $isLowest_COUNT_USED */
    public $isLowest_COUNT_USED;

    /* @var bool $isLowest_EBAY_NEW_SHIPPING */
    public $isLowest_EBAY_NEW_SHIPPING;

    /* @var bool $isLowest_EBAY_USED_SHIPPING */
    public $isLowest_EBAY_USED_SHIPPING;

    /* @var bool $isLowest_LIGHTNING_DEAL */
    public $isLowest_LIGHTNING_DEAL;

    /* @var bool $isLowest_LISTPRICE */
    public $isLowest_LISTPRICE;

    /* @var bool $isLowest_NEW */
    public $isLowest_NEW;

    /* @var bool $isLowest_NEW_FBA */
    public $isLowest_NEW_FBA;

    /* @var bool $isLowest_NEW_FBM_SHIPPING */
    public $isLowest_NEW_FBM_SHIPPING;

    /* @var bool $isLowest_RATING */
    public $isLowest_RATING;

    /* @var bool $isLowest_REFURBISHED */
    public $isLowest_REFURBISHED;

    /* @var bool $isLowest_REFURBISHED_SHIPPING */
    public $isLowest_REFURBISHED_SHIPPING;

    /* @var bool $isLowest_RENT */
    public $isLowest_RENT;

    /* @var bool $isLowest_SALES */
    public $isLowest_SALES;

    /* @var bool $isLowest_TRADE_IN */
    public $isLowest_TRADE_IN;

    /* @var bool $isLowest_USED */
    public $isLowest_USED;

    /* @var bool $isLowest_USED_ACCEPTABLE_SHIPPING */
    public $isLowest_USED_ACCEPTABLE_SHIPPING;

    /* @var bool $isLowest_USED_GOOD_SHIPPING */
    public $isLowest_USED_GOOD_SHIPPING;

    /* @var bool $isLowest_USED_NEW_SHIPPING */
    public $isLowest_USED_NEW_SHIPPING;

    /* @var bool $isLowest_USED_VERY_GOOD_SHIPPING */
    public $isLowest_USED_VERY_GOOD_SHIPPING;

    /* @var bool $isLowest_WAREHOUSE */
    public $isLowest_WAREHOUSE;

    /* @var bool $isPrimeExclusive */
    public $isPrimeExclusive;

    /* @var bool $isSNS */
    public $isSNS;

    /* @var string[] $label */
    public $label;

    /* @var string[] $languages */
    public $languages;

    /* @var int $lastOffersUpdate_lte */
    public $lastOffersUpdate_lte;

    /* @var int $lastOffersUpdate_gte */
    public $lastOffersUpdate_gte;

    /* @var int $lastPriceChange_lte */
    public $lastPriceChange_lte;

    /* @var int $lastPriceChange_gte */
    public $lastPriceChange_gte;

    /* @var int $lastRatingUpdate_lte */
    public $lastRatingUpdate_lte;

    /* @var int $lastRatingUpdate_gte */
    public $lastRatingUpdate_gte;

    /* @var int $lastUpdate_lte */
    public $lastUpdate_lte;

    /* @var int $lastUpdate_gte */
    public $lastUpdate_gte;

    /* @var int $lightningEnd_lte */
    public $lightningEnd_lte;

    /* @var int $lightningEnd_gte */
    public $lightningEnd_gte;

    /* @var int $lightningStart_lte */
    public $lightningStart_lte;

    /* @var int $lightningStart_gte */
    public $lightningStart_gte;

    /* @var int $listedSince_lte */
    public $listedSince_lte;

    /* @var int $listedSince_gte */
    public $listedSince_gte;

    /* @var string[] $manufacturer */
    public $manufacturer;

    /* @var string[] $model */
    public $model;

    /* @var bool $newPriceIsMAP */
    public $newPriceIsMAP;

    /* @var int $nextUpdate_lte */
    public $nextUpdate_lte;

    /* @var int $nextUpdate_gte */
    public $nextUpdate_gte;

    /* @var int $numberOfItems_lte */
    public $numberOfItems_lte;

    /* @var int $numberOfItems_gte */
    public $numberOfItems_gte;

    /* @var int $numberOfPages_lte */
    public $numberOfPages_lte;

    /* @var int $numberOfPages_gte */
    public $numberOfPages_gte;

    /* @var int $numberOfTrackings_lte */
    public $numberOfTrackings_lte;

    /* @var int $numberOfTrackings_gte */
    public $numberOfTrackings_gte;

    /* @var int $offerCountFBA_lte */
    public $offerCountFBA_lte;

    /* @var int $offerCountFBA_gte */
    public $offerCountFBA_gte;

    /* @var int $offerCountFBM_lte */
    public $offerCountFBM_lte;

    /* @var int $offerCountFBM_gte */
    public $offerCountFBM_gte;

    /* @var int $outOfStockPercentageInInterval_lte */
    public $outOfStockPercentageInInterval_lte;

    /* @var int $outOfStockPercentageInInterval_gte */
    public $outOfStockPercentageInInterval_gte;

    /* @var int $packageDimension_lte */
    public $packageDimension_lte;

    /* @var int $packageDimension_gte */
    public $packageDimension_gte;

    /* @var int $packageHeight_lte */
    public $packageHeight_lte;

    /* @var int $packageHeight_gte */
    public $packageHeight_gte;

    /* @var int $packageLength_lte */
    public $packageLength_lte;

    /* @var int $packageLength_gte */
    public $packageLength_gte;

    /* @var int $packageQuantity_lte */
    public $packageQuantity_lte;

    /* @var int $packageQuantity_gte */
    public $packageQuantity_gte;

    /* @var int $packageWeight_lte */
    public $packageWeight_lte;

    /* @var int $packageWeight_gte */
    public $packageWeight_gte;

    /* @var int $packageWidth_lte */
    public $packageWidth_lte;

    /* @var int $packageWidth_gte */
    public $packageWidth_gte;

    /* @var string[] $partNumber */
    public $partNumber;

    /* @var string[] $platform */
    public $platform;

    /* @var string[] $productGroup */
    public $productGroup;

    /* @var byte[] $productType */
    public $productType;

    /* @var byte[] $promotions */
    public $promotions;

    /* @var int $publicationDate_lte */
    public $publicationDate_lte;

    /* @var int $publicationDate_gte */
    public $publicationDate_gte;

    /* @var string[] $publisher */
    public $publisher;

    /* @var int $releaseDate_lte */
    public $releaseDate_lte;

    /* @var int $releaseDate_gte */
    public $releaseDate_gte;

    /* @var long $rootCategory */
    public $rootCategory;

    /* @var string[] $sellerIds */
    public $sellerIds;

    /* @var string[] $sellerIdsLowestFBA */
    public $sellerIdsLowestFBA;

    /* @var string[] $sellerIdsLowestFBM */
    public $sellerIdsLowestFBM;

    /* @var string[] $size */
    public $size;

    /* @var int $stockAmazon_lte */
    public $stockAmazon_lte;

    /* @var int $stockAmazon_gte */
    public $stockAmazon_gte;

    /* @var int $stockBuyBox_lte */
    public $stockBuyBox_lte;

    /* @var int $stockBuyBox_gte */
    public $stockBuyBox_gte;

    /* @var string[] $studio */
    public $studio;

    /* @var string $title */
    public $title;

    /* @var string $title_flag */
    public $title_flag;

    /* @var int $trackingSince_lte */
    public $trackingSince_lte;

    /* @var int $trackingSince_gte */
    public $trackingSince_gte;


    /* @var int $monthlySold_lte */
    public $monthlySold_lte;

    /* @var int $monthlySold_gte */
    public $monthlySold_gte;

    /* @var bool $buyBoxIsPreorder */
    public $buyBoxIsPreorder;

        /* @var bool $buyBoxIsBackorder */
    public $buyBoxIsBackorder;

    /* @var bool $buyBoxIsPrimeExclusive */
    public $buyBoxIsPrimeExclusive;

    /* @var bool $buyBoxIsPrimeExclusive */
    public $buyBoxIsPrimeEligible;

    /* @var string[] $type */
    public $type;


    /* @var string[] $mpn */
    public $mpn;

    /* @var int $outOfStockPercentage90_lte */
    public $outOfStockPercentage90_lte;

    /* @var int $outOfStockPercentage90_gte */
    public $outOfStockPercentage90_gte;

    /* @var int $salesRankDrops180_lte */
    public $salesRankDrops180_lte;

    /* @var int $salesRankDrops180_gte */
	public $salesRankDrops180_gte;

    /* @var int $salesRankDrops30_lte */
	public $salesRankDrops30_lte;

    /* @var int $salesRankDrops30_gte */
	public $salesRankDrops30_gte;

    /* @var int $salesRankDrops365_lte */
	public $salesRankDrops365_lte;

    /* @var int $salesRankDrops365_gte */
	public $salesRankDrops365_gte;

    /* @var int $salesRankDrops90_lte */
	public $salesRankDrops90_lte;

    /* @var int $salesRankDrops90_gte */
	public $salesRankDrops90_gte;

    /* @var long $salesRankReference */
	public $salesRankReference;

    /* @var int $salesRankTopPct_lte */
	public $salesRankTopPct_lte;

    /* @var byte $salesRankTopPct_gte */
	public $salesRankTopPct_gte;

    /* @var byte $totalOfferCount_lte */
	public $totalOfferCount_lte;

    /* @var int $totalOfferCount_gte */
	public $totalOfferCount_gte;

    /* @var byte[] $warehouseCondition */
	public $warehouseCondition;

    /* @var boolean $singleVariation */
	public $singleVariation;

    /* @var string[] $material */
    public $material;

    /* @var string[] $unitType */
	public $unitType;

    /* @var string[] $scent */
	public $scent;

    /* @var string[] $itemForm */
	public $itemForm;

    /* @var string[] $pattern */
	public $pattern;

    /* @var string[] $style */
	public $style;

    /* @var string[] $itemTypeKeyword */
	public $itemTypeKeyword;

    /* @var string[] $targetAudienceKeyword */
	public $targetAudienceKeyword;



    /* @var int $avg365_AMAZON_lte */
    public $avg365_AMAZON_lte;

    /* @var int $avg365_AMAZON_gte */
    public $avg365_AMAZON_gte;

    /* @var int $avg365_BUY_BOX_SHIPPING_lte */
    public $avg365_BUY_BOX_SHIPPING_lte;

    /* @var int $avg365_BUY_BOX_SHIPPING_gte */
    public $avg365_BUY_BOX_SHIPPING_gte;

    /* @var int $avg365_BUY_BOX_USED_SHIPPING_lte */
    public $avg365_BUY_BOX_USED_SHIPPING_lte;

    /* @var int $avg365_BUY_BOX_USED_SHIPPING_gte */
    public $avg365_BUY_BOX_USED_SHIPPING_gte;

    /* @var int $avg365_COLLECTIBLE_lte */
    public $avg365_COLLECTIBLE_lte;

    /* @var int $avg365_COLLECTIBLE_gte */
    public $avg365_COLLECTIBLE_gte;

    /* @var int $avg365_COUNT_COLLECTIBLE_lte */
    public $avg365_COUNT_COLLECTIBLE_lte;

    /* @var int $avg365_COUNT_COLLECTIBLE_gte */
    public $avg365_COUNT_COLLECTIBLE_gte;

    /* @var int $avg365_COUNT_NEW_lte */
    public $avg365_COUNT_NEW_lte;

    /* @var int $avg365_COUNT_NEW_gte */
    public $avg365_COUNT_NEW_gte;

    /* @var int $avg365_COUNT_REFURBISHED_lte */
    public $avg365_COUNT_REFURBISHED_lte;

    /* @var int $avg365_COUNT_REFURBISHED_gte */
    public $avg365_COUNT_REFURBISHED_gte;

    /* @var int $avg365_COUNT_REVIEWS_lte */
    public $avg365_COUNT_REVIEWS_lte;

    /* @var int $avg365_COUNT_REVIEWS_gte */
    public $avg365_COUNT_REVIEWS_gte;

    /* @var int $avg365_COUNT_USED_lte */
    public $avg365_COUNT_USED_lte;

    /* @var int $avg365_COUNT_USED_gte */
    public $avg365_COUNT_USED_gte;

    /* @var int $avg365_EBAY_NEW_SHIPPING_lte */
    public $avg365_EBAY_NEW_SHIPPING_lte;

    /* @var int $avg365_EBAY_NEW_SHIPPING_gte */
    public $avg365_EBAY_NEW_SHIPPING_gte;

    /* @var int $avg365_EBAY_USED_SHIPPING_lte */
    public $avg365_EBAY_USED_SHIPPING_lte;

    /* @var int $avg365_EBAY_USED_SHIPPING_gte */
    public $avg365_EBAY_USED_SHIPPING_gte;

    /* @var int $avg365_LIGHTNING_DEAL_lte */
    public $avg365_LIGHTNING_DEAL_lte;

    /* @var int $avg365_LIGHTNING_DEAL_gte */
    public $avg365_LIGHTNING_DEAL_gte;

    /* @var int $avg365_LISTPRICE_lte */
    public $avg365_LISTPRICE_lte;

    /* @var int $avg365_LISTPRICE_gte */
    public $avg365_LISTPRICE_gte;

    /* @var int $avg365_NEW_lte */
    public $avg365_NEW_lte;

    /* @var int $avg365_NEW_gte */
    public $avg365_NEW_gte;

    /* @var int $avg365_NEW_FBA_lte */
    public $avg365_NEW_FBA_lte;

    /* @var int $avg365_NEW_FBA_gte */
    public $avg365_NEW_FBA_gte;

    /* @var int $avg365_NEW_FBM_SHIPPING_lte */
    public $avg365_NEW_FBM_SHIPPING_lte;

    /* @var int $avg365_NEW_FBM_SHIPPING_gte */
    public $avg365_NEW_FBM_SHIPPING_gte;

    /* @var int $avg365_PRIME_EXCL_lte */
    public $avg365_PRIME_EXCL_lte;

    /* @var int $avg365_PRIME_EXCL_gte */
    public $avg365_PRIME_EXCL_gte;

    /* @var int $avg365_RATING_lte */
    public $avg365_RATING_lte;

    /* @var int $avg365_RATING_gte */
    public $avg365_RATING_gte;

    /* @var int $avg365_REFURBISHED_lte */
    public $avg365_REFURBISHED_lte;

    /* @var int $avg365_REFURBISHED_gte */
    public $avg365_REFURBISHED_gte;

    /* @var int $avg365_REFURBISHED_SHIPPING_lte */
    public $avg365_REFURBISHED_SHIPPING_lte;

    /* @var int $avg365_REFURBISHED_SHIPPING_gte */
    public $avg365_REFURBISHED_SHIPPING_gte;

    /* @var int $avg365_RENT_lte */
    public $avg365_RENT_lte;

    /* @var int $avg365_RENT_gte */
    public $avg365_RENT_gte;

    /* @var int $avg365_SALES_lte */
    public $avg365_SALES_lte;

    /* @var int $avg365_SALES_gte */
    public $avg365_SALES_gte;

    /* @var int $avg365_TRADE_IN_lte */
    public $avg365_TRADE_IN_lte;

    /* @var int $avg365_TRADE_IN_gte */
    public $avg365_TRADE_IN_gte;

    /* @var int $avg365_USED_lte */
    public $avg365_USED_lte;

    /* @var int $avg365_USED_gte */
    public $avg365_USED_gte;

    /* @var int $avg365_USED_ACCEPTABLE_SHIPPING_lte */
    public $avg365_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int $avg365_USED_ACCEPTABLE_SHIPPING_gte */
    public $avg365_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int $avg365_USED_GOOD_SHIPPING_lte */
    public $avg365_USED_GOOD_SHIPPING_lte;

    /* @var int $avg365_USED_GOOD_SHIPPING_gte */
    public $avg365_USED_GOOD_SHIPPING_gte;

    /* @var int $avg365_USED_NEW_SHIPPING_lte */
    public $avg365_USED_NEW_SHIPPING_lte;

    /* @var int $avg365_USED_NEW_SHIPPING_gte */
    public $avg365_USED_NEW_SHIPPING_gte;

    /* @var int $avg365_USED_VERY_GOOD_SHIPPING_lte */
    public $avg365_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int $avg365_USED_VERY_GOOD_SHIPPING_gte */
    public $avg365_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int $avg365_WAREHOUSE_lte */
    public $avg365_WAREHOUSE_lte;

    /* @var int $avg365_WAREHOUSE_gte */
    public $avg365_WAREHOUSE_gte;

    /* @var int $buyBoxStandardDeviation30_lte */
    #public $buyBoxStandardDeviation30_lte;

    /* @var int $buyBoxStandardDeviation30_gte */
    #public $buyBoxStandardDeviation30_gte;

    /* @var int $buyBoxStandardDeviation90_lte */
    #public $buyBoxStandardDeviation90_lte;

    /* @var int $buyBoxStandardDeviation90_gte */
    #public $buyBoxStandardDeviation90_gte;

    /* @var int $buyBoxStandardDeviation365_lte */
    #public $buyBoxStandardDeviation365_lte;

    /* @var int $buyBoxStandardDeviation365_gte */
    #public $buyBoxStandardDeviation365_gte;

    /* @var int $flipability30_lte */
    #public $flipability30_lte;

    /* @var int $flipability30_gte */
    #public $flipability30_gte;

    /* @var int $flipability90_lte */
    #public $flipability90_lte;

    /* @var int $flipability90_gte */
    #public $flipability90_gte;

    /* @var int $flipability365_lte */
    #public $flipability365_lte;

    /* @var int $flipability365_gte */
    #public $flipability365_gte;


    /* @var float $unitValue_lte */
    public $unitValue_lte;

    /* @var float $unitValue_gte */
    public $unitValue_gte;

    /* @var bool $batteriesRequired */
    public $batteriesRequired;

    /* @var bool $batteriesIncluded */
    public $batteriesIncluded;

    /* @var int $lastBusinessDiscountUpdate_lte */
    public $lastBusinessDiscountUpdate_lte = null;

    /* @var int $lastBusinessDiscountUpdate_gte */
    public $lastBusinessDiscountUpdate_gte = null;

    /* @var int $businessDiscount_lte */
    public $businessDiscount_lte;

    /* @var int $businessDiscount_gte */
    public $businessDiscount_gte;

    /* @var string[] $activeIngredients */
    public $activeIngredients;

    /* @var string[] $specialIngredients */
    public $specialIngredients;

    /* @var bool $isMerchOnDemand */
    public $isMerchOnDemand;

    /* @var bool $hasMainVideo */
    public $hasMainVideo;

    /* @var bool $hasAPlus */
    public $hasAPlus;

    /* @var bool $hasAPlusFromManufacturer */
    public $hasAPlusFromManufacturer;

    /* @var int $videoCount_lte */
    public $videoCount_lte;

    /* @var int $videoCount_gte */
    public $videoCount_gte;

    /* @var string $brandStoreName */
    public $brandStoreName;

    /* @var string $brandStoreUrlName */
    public $brandStoreUrlName;

    /* @var int variationCount_lte */
    public $variationCount_lte;

    /* @var int variationCount_gte */
    public $variationCount_gte;

    /* @var int imageCount_lte */
    public $imageCount_lte;

    /* @var int imageCount_gte */
    public $imageCount_gte;

    /* @var int buyBoxStatsAmazon30_lte */
    public $buyBoxStatsAmazon30_lte;

    /* @var int buyBoxStatsAmazon30_gte */
    public $buyBoxStatsAmazon30_gte;

    /* @var int buyBoxStatsAmazon90_lte */
    public $buyBoxStatsAmazon90_lte;

    /* @var int buyBoxStatsAmazon90_gte */
    public $buyBoxStatsAmazon90_gte;

    /* @var int buyBoxStatsAmazon180_lte */
    public $buyBoxStatsAmazon180_lte;

    /* @var int buyBoxStatsAmazon180_gte */
    public $buyBoxStatsAmazon180_gte;

    /* @var int buyBoxStatsAmazon365_lte */
    public $buyBoxStatsAmazon365_lte;

    /* @var int buyBoxStatsAmazon365_gte */
    public $buyBoxStatsAmazon365_gte;

    /* @var int buyBoxStatsTopSeller30_lte */
    public $buyBoxStatsTopSeller30_lte;

    /* @var int buyBoxStatsTopSeller30_gte */
    public $buyBoxStatsTopSeller30_gte;

    /* @var int buyBoxStatsTopSeller90_lte */
    public $buyBoxStatsTopSeller90_lte;

    /* @var int buyBoxStatsTopSeller90_gte */
    public $buyBoxStatsTopSeller90_gte;

    /* @var int buyBoxStatsTopSeller180_lte */
    public $buyBoxStatsTopSeller180_lte;

    /* @var int buyBoxStatsTopSeller180_gte */
    public $buyBoxStatsTopSeller180_gte;

    /* @var int buyBoxStatsTopSeller365_lte */
    public $buyBoxStatsTopSeller365_lte;

    /* @var int buyBoxStatsTopSeller365_gte */
    public $buyBoxStatsTopSeller365_gte;

    /* @var int buyBoxStatsSellerCount30_lte */
    public $buyBoxStatsSellerCount30_lte;

    /* @var int buyBoxStatsSellerCount30_gte */
    public $buyBoxStatsSellerCount30_gte;

    /* @var int buyBoxStatsSellerCount90_lte */
    public $buyBoxStatsSellerCount90_lte;

    /* @var int buyBoxStatsSellerCount90_gte */
    public $buyBoxStatsSellerCount90_gte;

    /* @var int buyBoxStatsSellerCount180_lte */
    public $buyBoxStatsSellerCount180_lte;

    /* @var int buyBoxStatsSellerCount180_gte */
    public $buyBoxStatsSellerCount180_gte;

    /* @var int buyBoxStatsSellerCount365_lte */
    public $buyBoxStatsSellerCount365_lte;

    /* @var int buyBoxStatsSellerCount365_gte */
    public $buyBoxStatsSellerCount365_gte;

    /* @var bool $isHazMat */
    public $isHazMat;

    /* @var bool $isHeatSensitive */
    public $isHeatSensitive;

    /* @var boolean $buyBoxIsUnqualified */
	public $buyBoxIsUnqualified;

    /* @var boolean $buyBoxIsFBA */
	public $buyBoxIsFBA;

    /* @var int itemDimension_lte */
	public $itemDimension_lte;

    /* @var int $itemDimension_gte */
	public $itemDimension_gte;

    /* @var int $itemHeight_lte */
	public $itemHeight_lte;

    /* @var int itemHeight_gte */
	public $itemHeight_gte;

    /* @var int $itemLength_lte */
	public $itemLength_lte;

    /* @var int $itemLength_gte */
	public $itemLength_gte;

    /* @var int $itemWeight_lte */
	public $itemWeight_lte;

    /* @var int itemWeight_gte */
	public $itemWeight_gte;

    /* @var int $itemWidth_lte */
	public $itemWidth_lte;

    /* @var int $itemWidth_gte */
	public $itemWidth_gte;

    /* @var int lastPriceChange_AMAZON_lte; */
    public $lastPriceChange_AMAZON_lte;

    /* @var int lastPriceChange_AMAZON_gte; */
    public $lastPriceChange_AMAZON_gte;

    /* @var int lastPriceChange_NEW_lte; */
    public $lastPriceChange_NEW_lte;

    /* @var int lastPriceChange_NEW_gte; */
    public $lastPriceChange_NEW_gte;

    /* @var int lastPriceChange_USED_lte; */
    public $lastPriceChange_USED_lte;

    /* @var int lastPriceChange_USED_gte; */
    public $lastPriceChange_USED_gte;

    /* @var int lastPriceChange_SALES_lte; */
    public $lastPriceChange_SALES_lte;

    /* @var int lastPriceChange_SALES_gte; */
    public $lastPriceChange_SALES_gte;

    /* @var int lastPriceChange_LISTPRICE_lte; */
    public $lastPriceChange_LISTPRICE_lte;

    /* @var int lastPriceChange_LISTPRICE_gte; */
    public $lastPriceChange_LISTPRICE_gte;

    /* @var int lastPriceChange_COLLECTIBLE_lte; */
    public $lastPriceChange_COLLECTIBLE_lte;

    /* @var int lastPriceChange_COLLECTIBLE_gte; */
    public $lastPriceChange_COLLECTIBLE_gte;

    /* @var int lastPriceChange_REFURBISHED_lte; */
    public $lastPriceChange_REFURBISHED_lte;

    /* @var int lastPriceChange_REFURBISHED_gte; */
    public $lastPriceChange_REFURBISHED_gte;

    /* @var int lastPriceChange_NEW_FBM_SHIPPING_lte; */
    public $lastPriceChange_NEW_FBM_SHIPPING_lte;

    /* @var int lastPriceChange_NEW_FBM_SHIPPING_gte; */
    public $lastPriceChange_NEW_FBM_SHIPPING_gte;

    /* @var int lastPriceChange_LIGHTNING_DEAL_lte; */
    public $lastPriceChange_LIGHTNING_DEAL_lte;

    /* @var int lastPriceChange_LIGHTNING_DEAL_gte; */
    public $lastPriceChange_LIGHTNING_DEAL_gte;

    /* @var int lastPriceChange_WAREHOUSE_lte; */
    public $lastPriceChange_WAREHOUSE_lte;

    /* @var int lastPriceChange_WAREHOUSE_gte; */
    public $lastPriceChange_WAREHOUSE_gte;

    /* @var int lastPriceChange_NEW_FBA_lte; */
    public $lastPriceChange_NEW_FBA_lte;

    /* @var int lastPriceChange_NEW_FBA_gte; */
    public $lastPriceChange_NEW_FBA_gte;

    /* @var int lastPriceChange_COUNT_NEW_lte; */
    public $lastPriceChange_COUNT_NEW_lte;

    /* @var int lastPriceChange_COUNT_NEW_gte; */
    public $lastPriceChange_COUNT_NEW_gte;

    /* @var int lastPriceChange_COUNT_USED_lte; */
    public $lastPriceChange_COUNT_USED_lte;

    /* @var int lastPriceChange_COUNT_USED_gte; */
    public $lastPriceChange_COUNT_USED_gte;

    /* @var int lastPriceChange_COUNT_REFURBISHED_lte; */
    public $lastPriceChange_COUNT_REFURBISHED_lte;

    /* @var int lastPriceChange_COUNT_REFURBISHED_gte; */
    public $lastPriceChange_COUNT_REFURBISHED_gte;

    /* @var int lastPriceChange_COUNT_COLLECTIBLE_lte; */
    public $lastPriceChange_COUNT_COLLECTIBLE_lte;

    /* @var int lastPriceChange_COUNT_COLLECTIBLE_gte; */
    public $lastPriceChange_COUNT_COLLECTIBLE_gte;

    /* @var int lastPriceChange_RATING_lte; */
    public $lastPriceChange_RATING_lte;

    /* @var int lastPriceChange_RATING_gte; */
    public $lastPriceChange_RATING_gte;

    /* @var int lastPriceChange_COUNT_REVIEWS_lte; */
    public $lastPriceChange_COUNT_REVIEWS_lte;

    /* @var int lastPriceChange_COUNT_REVIEWS_gte; */
    public $lastPriceChange_COUNT_REVIEWS_gte;

    /* @var int lastPriceChange_BUY_BOX_SHIPPING_lte; */
    public $lastPriceChange_BUY_BOX_SHIPPING_lte;

    /* @var int lastPriceChange_BUY_BOX_SHIPPING_gte; */
    public $lastPriceChange_BUY_BOX_SHIPPING_gte;

    /* @var int lastPriceChange_USED_NEW_SHIPPING_lte; */
    public $lastPriceChange_USED_NEW_SHIPPING_lte;

    /* @var int lastPriceChange_USED_NEW_SHIPPING_gte; */
    public $lastPriceChange_USED_NEW_SHIPPING_gte;

    /* @var int lastPriceChange_USED_VERY_GOOD_SHIPPING_lte; */
    public $lastPriceChange_USED_VERY_GOOD_SHIPPING_lte;

    /* @var int lastPriceChange_USED_VERY_GOOD_SHIPPING_gte; */
    public $lastPriceChange_USED_VERY_GOOD_SHIPPING_gte;

    /* @var int lastPriceChange_USED_GOOD_SHIPPING_lte; */
    public $lastPriceChange_USED_GOOD_SHIPPING_lte;

    /* @var int lastPriceChange_USED_GOOD_SHIPPING_gte; */
    public $lastPriceChange_USED_GOOD_SHIPPING_gte;

    /* @var int lastPriceChange_USED_ACCEPTABLE_SHIPPING_lte; */
    public $lastPriceChange_USED_ACCEPTABLE_SHIPPING_lte;

    /* @var int lastPriceChange_USED_ACCEPTABLE_SHIPPING_gte; */
    public $lastPriceChange_USED_ACCEPTABLE_SHIPPING_gte;

    /* @var int lastPriceChange_REFURBISHED_SHIPPING_lte; */
    public $lastPriceChange_REFURBISHED_SHIPPING_lte;

    /* @var int lastPriceChange_REFURBISHED_SHIPPING_gte; */
    public $lastPriceChange_REFURBISHED_SHIPPING_gte;

    /* @var int lastPriceChange_EBAY_NEW_SHIPPING_lte; */
    public $lastPriceChange_EBAY_NEW_SHIPPING_lte;

    /* @var int lastPriceChange_EBAY_NEW_SHIPPING_gte; */
    public $lastPriceChange_EBAY_NEW_SHIPPING_gte;

    /* @var int lastPriceChange_EBAY_USED_SHIPPING_lte; */
    public $lastPriceChange_EBAY_USED_SHIPPING_lte;

    /* @var int lastPriceChange_EBAY_USED_SHIPPING_gte; */
    public $lastPriceChange_EBAY_USED_SHIPPING_gte;

    /* @var int lastPriceChange_TRADE_IN_lte; */
    public $lastPriceChange_TRADE_IN_lte;

    /* @var int lastPriceChange_TRADE_IN_gte; */
    public $lastPriceChange_TRADE_IN_gte;

    /* @var int lastPriceChange_RENT_lte; */
    public $lastPriceChange_RENT_lte;

    /* @var int lastPriceChange_RENT_gte; */
    public $lastPriceChange_RENT_gte;

    /* @var int lastPriceChange_BUY_BOX_USED_SHIPPING_lte; */
    public $lastPriceChange_BUY_BOX_USED_SHIPPING_lte;

    /* @var int lastPriceChange_BUY_BOX_USED_SHIPPING_gte; */
    public $lastPriceChange_BUY_BOX_USED_SHIPPING_gte;

    /* @var int lastPriceChange_PRIME_EXCL_lte; */
    public $lastPriceChange_PRIME_EXCL_lte;

    /* @var int lastPriceChange_PRIME_EXCL_gte; */
    public $lastPriceChange_PRIME_EXCL_gte;

    /* @var int outOfStockPercentage90_BB_lte; */
    public $outOfStockPercentage90_BB_lte;

    /* @var int outOfStockPercentage90_BB_gte; */
    public $outOfStockPercentage90_BB_gte;

    /* @var int outOfStockPercentage90_BB_USED_lte; */
    public $outOfStockPercentage90_BB_USED_lte;

    /* @var int outOfStockPercentage90_BB_USED_gte; */
    public $outOfStockPercentage90_BB_USED_gte;

    /* @var int outOfStockPercentage90_NEW_lte; */
    public $outOfStockPercentage90_NEW_lte;

    /* @var int outOfStockPercentage90_NEW_gte; */
    public $outOfStockPercentage90_NEW_gte;

    /* @var int outOfStockPercentage90_USED_lte; */
    public $outOfStockPercentage90_USED_lte;

    /* @var int outOfStockPercentage90_USED_gte; */
    public $outOfStockPercentage90_USED_gte;

    /* @var int buyBoxStandardDeviation30_lte; */
    public $buyBoxStandardDeviation30_lte;

    /* @var int buyBoxStandardDeviation30_gte; */
    public $buyBoxStandardDeviation30_gte;

    /* @var int buyBoxStandardDeviation90_lte; */
    public $buyBoxStandardDeviation90_lte;

    /* @var int buyBoxStandardDeviation90_gte; */
    public $buyBoxStandardDeviation90_gte;

    /* @var int buyBoxStandardDeviation365_lte; */
    public $buyBoxStandardDeviation365_lte;

    /* @var int buyBoxStandardDeviation365_gte; */
    public $buyBoxStandardDeviation365_gte;

    /* @var int  flipability30_lte; */
    public $flipability30_lte;

    /* @var int  flipability30_gte; */
    public $flipability30_gte;

    /* @var int  flipability90_lte; */
    public $flipability90_lte;

    /* @var int  flipability90_gte; */
    public $flipability90_gte;

    /* @var int  flipability365_lte; */
    public $flipability365_lte;

    /* @var int  flipability365_gte; */
    public $flipability365_gte;

    /* @var int deltaPercent90_monthlySold_lte; */
    public $deltaPercent90_monthlySold_lte;

    /* @var int deltaPercent90_monthlySold_gte; */
    public $deltaPercent90_monthlySold_gte;

    /* @var int outOfStockCountAmazon30_lte; */
    public $outOfStockCountAmazon30_lte;

    /* @var int outOfStockCountAmazon30_gte; */
    public $outOfStockCountAmazon30_gte;

    /* @var int outOfStockCountAmazon90_lte; */
    public $outOfStockCountAmazon90_lte;

    /* @var int outOfStockCountAmazon90_gte; */
    public $outOfStockCountAmazon90_gte;

    /* @var int variationReviewCount_lte; */
    public $variationReviewCount_lte;

    /* @var int variationReviewCou    te; */
    public $variationReviewCount_gte;

    /* @var int variationRatingCount_lte; */
    public $variationRatingCount_lte;

    /* @var int variationRatingCount_gte; */
    public $variationRatingCount_gte;

    /* @var string[] websiteDisplayGroupName; */
    public $websiteDisplayGroupName;

    /* @var string[] websiteDisplayGroup; */
    public $websiteDisplayGroup;

    /* @var int availabilityAmazonMinDelayInDa    te; */
    public $availabilityAmazonMinDelayInDays_lte;

    /* @var int availabilityAmazonMinDelayInDays_gte; */
    public $availabilityAmazonMinDelayInDays_gte;

    /* @var int[] blackList; */
    public $blackList;

    /* @var Boolean isDeal; */
    public $isDeal;

    /* @var Boolean launchpad; */
    public $launchpad;

    /* @var string[] historicalSellerIds; */
    public $historicalSellerIds;

    /* @var string[] buyBoxShippingCountry; */
    public $buyBoxShippingCountry;

    /* @var string[] sellerIdsFBA; */
    public $sellerIdsFBA;

    /* @var string[] sellerIdsFBM; */
    public $sellerIdsFBM;

    /* @var string[] buyBoxStatsTopSellerId30; */
    public $buyBoxStatsTopSellerId30;

    /* @var string[] buyBoxStatsTopSellerId90; */
    public $buyBoxStatsTopSellerId90;

    /* @var string[] buyBoxStatsTopSellerId180; */
    public $buyBoxStatsTopSellerId180;

    /* @var string[] buyBoxStatsTopSellerId365; */
    public $buyBoxStatsTopSellerId365;

    /* @var int buyBoxEligibleOfferCountsNewFBA_lte; */
    public $buyBoxEligibleOfferCountsNewFBA_lte;

    /* @var int buyBoxEligibleOfferCountsNewFBA_gte; */
    public $buyBoxEligibleOfferCountsNewFBA_gte;

    /* @var int buyBoxEligibleOfferCountsNewFBM_lte; */
    public $buyBoxEligibleOfferCountsNewFBM_lte;

    /* @var int buyBoxEligibleOfferCountsNewFBM_gte; */
    public $buyBoxEligibleOfferCountsNewFBM_gte;

    /* @var int buyBoxEligibleOfferCountsUsedFBA_lte; */
    public $buyBoxEligibleOfferCountsUsedFBA_lte;

    /* @var int buyBoxEligibleOfferCountsUsedFBA_gte; */
    public $buyBoxEligibleOfferCountsUsedFBA_gte;

    /* @var int buyBoxEligibleOfferCountsUsedFBM_lte; */
    public $buyBoxEligibleOfferCountsUsedFBM_lte;

    /* @var int buyBoxEligibleOfferCountsUsedFBM_gte; */
    public $buyBoxEligibleOfferCountsUsedFBM_gte;

    /* @var int srAvg000_gte; */
    public $srAvg000_gte;

    /* @var int srAvg001_gte; */
    public $srAvg001_gte;

    /* @var int srAvg002_gte; */
    public $srAvg002_gte;

    /* @var int srAvg003_gte; */
    public $srAvg003_gte;

    /* @var int srAvg004_gte; */
    public $srAvg004_gte;

    /* @var int srAvg005_gte; */
    public $srAvg005_gte;

    /* @var int srAvg006_gte; */
    public $srAvg006_gte;

    /* @var int srAvg007_gte; */
    public $srAvg007_gte;

    /* @var int srAvg008_gte; */
    public $srAvg008_gte;

    /* @var int srAvg009_gte; */
    public $srAvg009_gte;

    /* @var int srAvg010_gte; */
    public $srAvg010_gte;

    /* @var int srAvg011_gte; */
    public $srAvg011_gte;

    /* @var int srAvg100_gte; */
    public $srAvg100_gte;

    /* @var int srAvg    gte; */
    public $srAvg101_gte;

    /* @var int srAvg102_gte; */
    public $srAvg102_gte;

    /* @var int srAvg103_gte; */
    public $srAvg103_gte;

    /* @var int srAvg104_gte; */
    public $srAvg104_gte;

    /* @var int srAvg105_gte; */
    public $srAvg105_gte;

    /* @var int srAvg106_gte; */
    public $srAvg106_gte;

    /* @var int srAvg107_gte; */
    public $srAvg107_gte;

    /* @var int srAvg108_gte; */
    public $srAvg108_gte;

    /* @var int srAvg109_gte; */
    public $srAvg109_gte;

    /* @var int sr    10_gte; */
    public $srAvg110_gte;

    /* @var int srAvg111_gte; */
    public $srAvg111_gte;

    /* @var int srAvg200_gte; */
    public $srAvg200_gte;

    /* @var int srAvg201_gte; */
    public $srAvg201_gte;

    /* @var int srAvg202_gte; */
    public $srAvg202_gte;

    /* @var int srAvg203_gte; */
    public $srAvg203_gte;

    /* @var int srAvg204_gte; */
    public $srAvg204_gte;

    /* @var int srAvg205_gte; */
    public $srAvg205_gte;

    /* @var int srAvg206_gte; */
    public $srAvg206_gte;

    /* @var int srAvg207_gte; */
    public $srAvg207_gte;

    /* @var int srAvg208_gte; */
    public $srAvg208_gte;

    /* @var int srAvg209_gte; */
    public $srAvg209_gte;

    /* @var int srAvg210_gte; */
    public $srAvg210_gte;

    /* @var int srAvg211_gte; */
    public $srAvg211_gte;

    /* @var int srAvg000_lte; */
    public $srAvg000_lte;

    /* @var int srAvg001_lte; */
    public $srAvg001_lte;

    /* @var int srAvg002_lte; */
    public $srAvg002_lte;

    /* @var int srAvg003_lte; */
    public $srAvg003_lte;

    /* @var int srAvg004_lte; */
    public $srAvg004_lte;

    /* @var int srAvg005_lte; */
    public $srAvg005_lte;

    /* @var int srAvg006_lte; */
    public $srAvg006_lte;

    /* @var int srAvg007_lte; */
    public $srAvg007_lte;

    /* @var int srAvg008_lte; */
    public $srAvg008_lte;

    /* @var int srAvg009_lte; */
    public $srAvg009_lte;

    /* @var int srAvg010_lte; */
    public $srAvg010_lte;

    /* @var int srAvg011_lte; */
    public $srAvg011_lte;

    /* @var int srAvg100_lte; */
    public $srAvg100_lte;

    /* @var int srAvg101_lte; */
    public $srAvg101_lte;

    /* @var int srAvg102_lte; */
    public $srAvg102_lte;

    /* @var int srAvg103_lte; */
    public $srAvg103_lte;

    /* @var int srAvg104_lte; */
    public $srAvg104_lte;

    /* @var int srAvg105_lte; */
    public $srAvg105_lte;

    /* @var int srAvg106_lte; */
    public $srAvg106_lte;

    /* @var int srAvg107_lte; */
    public $srAvg107_lte;

    /* @var int srAvg108_lte; */
    public $srAvg108_lte;

    /* @var int srAvg109_lte; */
    public $srAvg109_lte;

    /* @var int srAvg110_lte; */
    public $srAvg110_lte;

    /* @var int srAvg111_lte; */
    public $srAvg111_lte;

    /* @var int srAvg200_lte; */
    public $srAvg200_lte;

    /* @var int srAvg201_lte; */
    public $srAvg201_lte;

    /* @var int sr02_lte; */
    public $srAvg202_lte;

    /* @var int srAvg203_lte; */
    public $srAvg203_lte;

    /* @var int srAvg204_lte; */
    public $srAvg204_lte;

    /* @var int srAvg205_lte; */
    public $srAvg205_lte;

    /* @var int srAvg206_lte; */
    public $srAvg206_lte;

    /* @var int srAvg207_lte; */
    public $srAvg207_lte;

    /* @var int srAvg208_lte; */
    public $srAvg208_lte;

    /* @var int srAvg209_lte; */
    public $srAvg209_lte;

    /* @var int srAvg210_lte; */
    public $srAvg210_lte;

    /* @var int srAvg211_lte; */
    public $srAvg211_lte;

    /* @var string[][] $sort = null */
    public $sort = null;


    /* @var int $perPage = null */
    public $perPage = 50;

    /* @var string[][] $page = null */
    public $page = 0;
}
