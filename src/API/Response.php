<?php namespace Keepa\API;

/**
 * Common Keepa API Response
 */
class Response
{
    /**
     * Server time when response was sent.
     * @var Request
     */
    public $request = null;

    /**
     * Server time when response was sent.
     * @var int
     */
    public $timestamp = null;

    /**
     * States how many ASINs may be requested before the assigned API contingent is depleted.
     * If the contigent is depleted, HTTP status code 503 will be delivered with the message:
     * "You are submitting requests too quickly and your requests are being throttled."
     * @var int
     */
    public $tokensLeft = null;

    /**
     * Milliseconds till new tokens are generated. Use this if your contigent is depleted to wait before you try a new request. Tokens are generated every 5 minutes.
     * @var int
     */
    public $refillIn = null;

    /**
     * Token refill rate per minute.
     * @var int
     */
    public $refillRate = null;

    /**
     * total time the request took (local, including latencies and connection establishment), in milliseconds
     * @var int
     */
    public $requestTime = null;

    /**
     * time the request's processing took (remote), in milliseconds
     * @var int
     */
    public $processingTimeInMs = 0;

    /**
     * Token flow reduction
     * @var float
     */
    public $tokenFlowReduction = -1;

    /**
     * Tokens used for call
     * @var int
     */
    public $tokensConsumed = 0;

    /**
     * Status of the request.
     * @var int
     */
    public $status = ResponseStatus::PENDING;

    /**
     * Results of the product request
     * @var \Keepa\objects\Product[]
     */
    public $products = null;

    /**
     * Results of the category lookup and search
     * @var \Keepa\objects\Category[]
     */
    public $categories = null;

    /**
     * Results of the category lookup and search includeParents parameter
     * @var \Keepa\objects\Category[]
     */
    public $categoryParents = null;

    /**
     * Results of the deals request
     * @var \Keepa\API\DealResponse
     */
    public $deals = null;

    /**
     * Results of the deals request
     * @var \Keepa\objects\Seller[]
     */
    public $sellers = null;

    /**
     * Results of the deals request
     * @var \Keepa\objects\BestSellers
     */
    public $bestSellersList = null;

    /**
     * Contains information about any error that might have occurred.
     * @var KeepaRequestError|null
     */
    public $error = null;

    /**
     * Contains request specific additional output.
     * @var string|null
     */
    public $additional = null;

    /**
     * Contains information about any error that might have occurred.
     * @var \Keepa\objects\Tracking[]
     */
    public $trackings = null;

    /**
     * Contains information about any error that might have occurred.
     * @var string[]|null
     */
    public $asinList = null;

    /**
     * A list of sellerIds.
     * @var string[]|null
     */
    public $sellerIdList = null;

    /**
     * Estimated count of all matched products.
     * @var int|null
     */
    public $totalResults = null;

    /**
     * A list of lightning deals.
     * @var \Keepa\objects\LightningDeal[]|null
     */
    public $lightningDeals = null;

    /**
     * url
     * @var string
     */
    public $url = null;

    function __construct(Request $request)
    {
        $this->request = $request;
    }
}
