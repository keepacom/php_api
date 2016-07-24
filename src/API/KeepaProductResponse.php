<?php
namespace Keepa\API;
/**
 * Represents the response of an API request
 * @deprecated Use {@link Response} instead.
 */
final class KeepaProductResponse
{

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
    public $tokensLeft = 0;

    /**
     * Milliseconds till new tokens are generated. Use this if your contigent is depleted to wait before you try a new request. Tokens are generated every 5 minutes.
     * @var int
     */
    public $refillIn = 0;

    /**
     * Token refill rate per minute.
     * @var int
     */
    public $refillRate = 0;

    /**
     * time the request took, in milliseconds
     * @var int
     */
    public $requestTime = 0;

    /**
     * Status of the request.
     */
    public $status = ResponseStatus::PENDING;

    /**
     * Results of the product request
     * @var \Keepa\objects\Product[]
     */
    public $products = null; // Requested Data
}
