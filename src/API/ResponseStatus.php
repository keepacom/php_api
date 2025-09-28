<?php
namespace Keepa\API;

class ResponseStatus
{
    const PENDING = "PENDING";
    const OK = "OK";
    const FAIL = "FAIL";
    const NOT_ENOUGH_TOKEN = "NOT_ENOUGH_TOKEN";
    const REQUEST_REJECTED = "REQUEST_REJECTED";
    const REQUEST_FAILED = "REQUEST_FAILED";
    const PAYMENT_REQUIRED = "PAYMENT_REQUIRED";
    const METHOD_NOT_ALLOWED = "METHOD_NOT_ALLOWED";
    const NOT_FOUND = "NOT_FOUND";
}