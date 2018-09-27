<?php

require_once "vendor/autoload.php";

use Keepa\API\Request;
use Keepa\API\ResponseStatus;
use Keepa\helper\CSVType;
use Keepa\helper\CSVTypeWrapper;
use Keepa\helper\KeepaTime;
use Keepa\helper\ProductAnalyzer;
use Keepa\helper\ProductType;
use Keepa\KeepaAPI;
use Keepa\objects\AmazonLocale;

$api = new KeepaAPI("771ftntmq9f04bpasd0j903sh7le7tk8vo0irulj98cm6ulgl8ieu805ctmpdf4k");
$api->setHttpClient(new \Keepa\API\CurlClient);
$r = Request::getProductRequest(AmazonLocale::DE, 0, "2015-12-31", "2018-01-01", 0, true, ['B001G73S50']);

while (true) {
    $response = $api->sendRequestWithRetry($r);

    switch ($response->status) {
        case ResponseStatus::OK:
            // iterate over received product information
            foreach ($response->products as $product) {
                if ($product->productType == ProductType::STANDARD || $product->productType == ProductType::DOWNLOADABLE) {

                    //get basic data of product and print to stdout
                    $currentAmazonPrice = ProductAnalyzer::getLast($product->csv[CSVType::AMAZON], CSVTypeWrapper::getCSVTypeFromIndex(CSVType::AMAZON));

                    //check if the product is in stock -1 -> out of stock
                    if ($currentAmazonPrice == -1) {
                        echo sprintf("%s %s is currently out of stock! %s", $product->asin, $product->title, PHP_EOL);
                    } else {
                        echo sprintf("%s %s Current Amazon Price: %s %s", $product->asin, $product->title, $currentAmazonPrice, PHP_EOL);
                    }

                    // get weighted mean of the last 90 days for Amazon
                    $weightedMean90days = ProductAnalyzer::calcWeightedMean($product->csv[CSVType::AMAZON], KeepaTime::nowMinutes(), 90, CSVTypeWrapper::getCSVTypeFromIndex(CSVType::AMAZON));

                } else {

                }
            }
            break;
        default:
            print_r($response);
    }
}