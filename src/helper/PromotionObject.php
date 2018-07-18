<?php

namespace Keepa\helper;

/**
 * PromotionObject
 */
class PromotionObject
{
    const BuyAmountXGetAmountOffX = "BuyAmountXGetAmountOffX";
    const BuyAmountXGetPercentOffX = "BuyAmountXGetPercentOffX";
    const BuyAmountXGetSimpleShippingFreeX = "BuyAmountXGetSimpleShippingFreeX";
    const BuyQuantityXGetAmountOffX = "BuyQuantityXGetAmountOffX";
    const BuyQuantityXGetPercentOffX = "BuyQuantityXGetPercentOffX";
    const BuyQuantityXGetQuantityFreeX = "BuyQuantityXGetQuantityFreeX";
    const ForEachQuantityXGetAmountOffX = "ForEachQuantityXGetAmountOffX";
    const DiscountCheapestNofM = "DiscountCheapestNofM";
    const BuyQuantityXGetQuantityFreeGiftCard = "BuyQuantityXGetQuantityFreeGiftCard";
    const BuyQuantityXGetSimpleShippingFreeX = "BuyQuantityXGetSimpleShippingFreeX";

    /**
     * The type of promotion
     * @var string|null
     */
    public $type = null;

    /**
     * @var string|null
     */
    public $eligibilityRequirementDescription = null;

    /**
     * @var string|null
     */
    public $benefitDescription = null;

    /**
     * unique Id of this promotion.
     * @var string|null
     */
    public $promotionId = null;
}
