<?php
namespace Keepa\API;

/**
 * Contains information about an API error.
 */
class KeepaRequestError
{

    /**
     * Error Description for the response
     * @var string
     */
    public $type = null;

    /**
     * Error Description for the response
     * @var string
     */
    public $message = null;

    /**
     * Error Description for the response
     * @var mixed|null
     */
    public $details = null;
}
