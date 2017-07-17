<?php
namespace Keepa\API;

use Keepa\helper\KeepaTime;

/**
 * Common Request
 */
class Request
{
    //@var HashMap<String, String>
    public $parameter = [];
    //@var string
    public $postData;
    //@var string
    public $path;

    public function __construct(array $parameter = null)
    {
        $this->parameter = $parameter;
    }

    /**
     * By accessing our deals you can find products that recently changed and match your search criteria. A single request will return a maximum of 150 deals.
     *
     * @param dealRequest DealRequest dealRequest contains all request parameters.
     * @return Request
     */
    public static function getDealsRequest(DealRequest $dealRequest)
    {
        $r = new Request();
        $r->path = "deal";
        $r->postData = json_encode($dealRequest);
        return $r;
    }

    /**
     * Retrieve category objects using their node ids and (optional) their parent tree.
     *
     * @param int $domainID Locale of the product <a href='psi_element://AmazonLocale'>AmazonLocale</a>
     * @param true $parents or not to include the category tree for each category.
     * @param string $category category node id of the category you want to request. For batch requests a comma separated list of ids (up to 10, the token cost stays the same).
     * @return Request
     */
    public static function getCategoryLookupRequest($domainID, $parents, $category)
    {
        $r = new Request();
        $r->path = "category";
        $r->parameter["category"] = $category;
        $r->parameter["domain"] = $domainID;

        if ($parents)
            $r->parameter["parents"] = "1";

        return $r;
    }

    /**
     * Search for Amazon category names. Retrieves the category objects12 and optional their parent tree.
     *
     * @param int $domainID locale of the product <a href='psi_element://AmazonLocale'>AmazonLocale</a>
     * @param string $term The $term term you want to search for. Multiple space separated keywords are possible and if provided must all match. The minimum length of a keyword is 3 characters.
     * @param bool $parents Whether $parents or not to include the category tree for each category.
     * @return Request
     */
    public static function getCategorySearchRequest($domainID, $term, $parents)
    {
        $r = new Request();
        $r->path = "search";
        $r->parameter["domain"] = $domainID;
        $r->parameter["type"] = "category";
        $r->parameter["term"] = $term;

        if ($parents)
            $r->parameter["parents"] = "1";

        return $r;
    }

    /**
     * Retrieves the seller object via the seller id. If a seller is not found no tokens will be consumed.
     * <p>
     * <b>Seller data is not available for Amazon China.</b>
     *
     * @param int $domainID Amazon locale of the product <a href='psi_element://AmazonLocale'>AmazonLocale</a>
     * @param array|\int[] $seller The seller id of the merchant you want to request. For batch requests a comma separated list of sellerIds (up to 100). The seller id is part of the offer object and can also be found on Amazon on seller profile pages in the seller parameter of the URL.
     * @return Request
     * Example: A2L77EE7U53NWQ (Amazon.com Warehouse Deals)
     */
    public static function getSellerRequest($domainID, array $seller)
    {
        $r = new Request();
        $r->path = "seller";
        $r->parameter["domain"] = $domainID;
        $r->parameter["seller"] = implode(",", $seller);
        return $r;
    }


    /**
     * Retrieve an ASIN list of the most popular products based on sales in a specific category.
     *
     * @param domainId Amazon locale of the product {@link AmazonLocale}
     * @param category The category node id of the category you want to request the best sellers list for
     * @return Request A ready to send request.
     *
     * @param int $domainID Amazon locale of the product <a href='psi_element://AmazonLocale'>AmazonLocale</a>
     * @param string $categoryID The category node id of the category you want to request the best sellers list for. You can find category node ids via the category search request53, via the deals29 (search/select the category and click on "Show API query") or on Amazon. Alternatively you can also provide a product group (e.g. "Beauty"), which can be found in the productGroup field of product object.
     * @return Request
     */
    public static function getBestSellerRequest($domainID, $categoryID)
    {
        $r = new Request();
        $r->path = "bestsellers";
        $r->parameter["domain"] = $domainID;
        $r->parameter["category"] = $categoryID;
        return $r;
    }

    /**
     * Search for Amazon products using keywords with a maximum of 50 results per search term.
     *
     * @param int $domainID Amazon locale of the product <a href='psi_element://AmazonLocale'>AmazonLocale</a>
     * @param string $term $term The term you want to search for.
     * @param bool $stats If specified (= not null) the product object will have a stats field with quick access to current prices, min/max prices and the weighted mean values of the last x days, where x is the value of the stats parameter.
     * @return Request
     */
    public static function getProductSearchRequest($domainID, $term, $stats)
    {
        $r = new Request();
        $r->path = "search";
        $r->parameter["domain"] = $domainID;
        $r->parameter["type"] = "product";
        $r->parameter["term"] = $term;

        if ($stats != null && $stats > 0)
            $r->parameter["stats"] = $stats;

        return $r;
    }

    /**
     * Search for Amazon products using keywords with a maximum of 50 results per search term.
     *
     * @param int $domainID Amazon locale of the product {@link AmazonLocale}
     * @param string $term The term you want to search for.
     * @param bool $history Whether or not to include the product's history data (csv field). If you do not evaluate the csv field set to false to speed up the request and reduce traffic.
     * @param int $update If the product's last refresh is older than <i>update</i>-hours force a refresh. Use this to speed up requests if up-to-date data is not required. Might cost an extra token if 0 (= live data). Default 1.
     * @param int $stats If specified (= not null) the product object will have a stats field with quick access to current prices, min/max prices and the weighted mean values of the last x days, where x is the value of the stats parameter.
     * @return Request A ready to send request.
     */
    public static function getProductSearchRequestWithUpdate($domainID, $term, $stats, $update, $history)
    {
        $r = new Request();
        $r->path = "search";
        $r->parameter["domain"] = $domainID;
        $r->parameter["type"] = "product";
        $r->parameter["term"] = $term;
        $r->parameter["update"] = $update;
        $r->parameter["history"] = ($history ? "1" : "0");

        if ($stats != null && $stats > 0)
            $r->parameter["stats"] = $stats;

        return $r;
    }

    /**
     * Retrieves the product object28 for the specified ASIN and domain.
     * If our last update is older than 1 hour it will be automatically refreshed before delivered to you to ensure you get near to real-time pricing data.
     *
     * @param $domainID int Amazon locale of the product {@link AmazonLocale}
     * @param $asins string[] ASINs to request, must contain between 1 and 100 ASINs - or max 20 ASINs if the offers parameter is used.
     * @param $statsStartDate string Must ISO8601 coded date (with or without time in UTC). Example: 2015-12-31 or 2015-12-31T14:51Z. If specified (= not null) the product object will have a stats field with quick access to current prices, min/max prices and the weighted mean values in the interval specified statsStartDate to statsEndDate. .
     * @param $statsEndDate string the end of the stats interval. See statsStartDate.
     * @param $history bool Whether or not to include the product's history data (csv field). If you do not evaluate the csv field set to false to speed up the request and reduce traffic.
     * @param $update int If the product's last refresh is older than <i>update</i>-hours force a refresh. Use this to speed up requests if up-to-date data is not required. Might cost an extra token if 0 (= live data). Default 1.
     * @param $offers int If specified (= not null) Determines the number of marketplace offers to retrieve. <b>Not available for Amazon China.</b>
     * @return Request ready to send request.
     */
    public static function getProductRequest($domainID, $offers, $statsStartDate, $statsEndDate, $update, $history, array $asins, $params = null)
    {
        $r = new Request();
        $r->path = "product";
        $r->parameter["asin"] = implode(",", $asins);
        $r->parameter["domain"] = $domainID;
        $r->parameter["update"] = $update;
        $r->parameter["history"] = $history ? "1" : "0";

        if ($statsStartDate != null && $statsEndDate != null)
            $r->parameter["stats"] = $statsStartDate . "," . $statsEndDate;

        if ($offers != null && $offers > 0)
            $r->parameter["offers"] = $offers;

        if ($params) {
            foreach ($params as $key => $val) {
                $r->parameter[$key] = $val;
            }
        }
        return $r;
    }


    /**
     * Add tracking to your list.
     *
     * @param TrackingRequest $trackingRequest trackingRequest The trackingRequest contains all request parameters.
     * @return Request ready to send request.
     */
    public static function getTrackingAddRequest($trackingRequest)
    {
        return self::getTrackingBatchAddRequest([$trackingRequest]);
    }

    /**
     * Add multiple tracking to your list. Much more efficient than individual additions.
     *
     * @param TrackingRequest[] $trackingRequest trackingRequests The trackingRequests (up to 1000).
     * @return Request ready to send request.
     */
    public static function getTrackingBatchAddRequest(array $trackingRequest)
    {
        $r = new Request();
        $r->path = "tracking";
        $r->parameter["type"] = "add";
        $r->postData = json_encode($trackingRequest);
        return $r;
    }


    /**
     * Removes all your trackings from your list.
     *
     * @return Request ready to send request.
     */
    public static function getTrackingRemoveAllRequest()
    {
        $r = new Request();
        $r->path = "tracking";
        $r->parameter["type"] = "removeAll";
        return $r;
    }

    /**
     * Remove a tracking from your list.
     *
     * @var string $asin
     * @return Request ready to send request.
     */
    public static function getTrackingRemoveRequest($asin)
    {
        $r = new Request();
        $r->path = "tracking";
        $r->parameter["type"] = "remove";
        $r->parameter["asin"] = $asin;
        return $r;
    }

    /**
     * Get all trackings from your list. If you track a lot of products this may be a resource intensive operation. Use responsibly.
     *
     * @var bool $asinsOnly Wether or not to only request an ASIN list of tracked products or to return all tracking objects (much larger response).
     * @return Request ready to send request.
     */
    public static function getTrackingListRequest($asinsOnly)
    {
        $r = new Request();
        $r->path = "tracking";
        $r->parameter["type"] = "list";
        if ($asinsOnly)
            $r->parameter["asins-only"] = 1;

        return $r;
    }

    /**
     * Get a single tracking from your list.
     *
     * @param string $asin The ASIN to retrieve the tracking for.
     * @return Request ready to send request.
     */
    public static function getTrackingGetRequest($asin)
    {
        $r = new Request();
        $r->path = "tracking";
        $r->parameter["type"] = "get";
        $r->parameter["asin"] = $asin;

        return $r;
    }


    /**
     * Get your recent notifications.
     * @param int $since Retrieve all available notifications that occurred since this date, in {@link KeepaTime}. Use 0 to request all.
     * @param bool $revise Whether or not to request notifications already marked as read.
     * @return Request ready to send request.
     */
    public static function getTrackingNotificationRequest($since, $revise)
    {
        $r = new Request();
        $r->path = "tracking";
        $r->parameter["since"] = $since;
        $r->parameter["revise"] = $revise ? "1" : "0";
        $r->parameter["type"] = "notification";

        return $r;
    }


    /**
     * Updates the webhook URL our service will call whenever a notification is triggered. The URL can also be updated and tested via the website.
     * A push notification will be a HTTP POST call with a single notification object as its content.
     * Your server must respond with a status code of 200 to confirm the successful retrieval.
     * If delivery fails a second attempt will be made with a 15 seconds delay.
     *
     * @param string $url The new webhook URL
     * @return Request ready to send request.
     */
    public static function getTrackingWebhookRequest($url)
    {
        $r = new Request();
        $r->path = "tracking";
        $r->parameter["type"] = "webhook";
        $r->parameter["url"] = $url;

        return $r;
    }

    public function query()
    {
        if ($this->parameter == null || count($this->parameter) == 0)
            return "";
        else
            $query = http_build_query($this->parameter, "", "&");
        return $query;
    }
}