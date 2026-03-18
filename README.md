<!--
  Copyright 2016 Keepa.com - Marius Johann
  
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
  
    http://www.apache.org/licenses/LICENSE-2.0
  
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->

![Test Image 5](https://travis-ci.org/keepacom/php_api.svg?branch=master)

Keepa API Framework
==============================

This framework is intended for users of the Keepa API.

Requirements
==============================

All needed requirements (php version/external libraries) you find in can find in [composer.json](https://github.com/keepacom/php_api/blob/master/composer.json) or on [packagist](https://packagist.org/packages/keepa/php_api)





<a name="features"></a>Features
--------
* Parses API response to easy to use PHP objects
* Provides methods that facilitate the work with price history data

Composer
-----
```bash
composer require keepa/php_api:*
```

<a name="examples"></a>Examples
==============

<details>
<summary><strong>Product lookup with price history</strong></summary>

```php
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

$api = new KeepaAPI("YOUR_API_KEY");
$r = Request::getProductRequest(AmazonLocale::DE, 0, "2015-12-31", "2018-01-01", 0, true, ['B001G73S50']);

$response = $api->sendRequestWithRetry($r);

switch ($response->status) {
    case ResponseStatus::OK:
        foreach ($response->products as $product) {
            if ($product->productType == ProductType::STANDARD || $product->productType == ProductType::DOWNLOADABLE) {

                // current Amazon price (-1 = out of stock)
                $currentAmazonPrice = ProductAnalyzer::getLast(
                    $product->csv[CSVType::AMAZON],
                    CSVTypeWrapper::getCSVTypeFromIndex(CSVType::AMAZON)
                );

                if ($currentAmazonPrice == -1) {
                    echo "{$product->asin} {$product->title} is currently out of stock" . PHP_EOL;
                } else {
                    echo "{$product->asin} {$product->title} — Amazon price: {$currentAmazonPrice}" . PHP_EOL;
                }

                // weighted mean over the last 90 days
                $weightedMean90 = ProductAnalyzer::calcWeightedMean(
                    $product->csv[CSVType::AMAZON],
                    KeepaTime::nowMinutes(),
                    90,
                    CSVTypeWrapper::getCSVTypeFromIndex(CSVType::AMAZON)
                );
                echo "90-day weighted mean: {$weightedMean90}" . PHP_EOL;

                // product images
                if (!empty($product->images)) {
                    echo "Main image: https://m.media-amazon.com/images/I/{$product->images[0]->l}" . PHP_EOL;
                }

                // alternate formats (books)
                if (!empty($product->formats)) {
                    foreach ($product->formats as $fmt) {
                        echo "Also available as: {$fmt->format} — ASIN {$fmt->asin}" . PHP_EOL;
                    }
                }
            }
        }
        break;
    default:
        print_r($response);
}
```

</details>

<details>
<summary><strong>Product lookup with offers and buy box stats</strong></summary>

```php
<?php
require_once "vendor/autoload.php";

use Keepa\API\Request;
use Keepa\KeepaAPI;
use Keepa\objects\AmazonLocale;

$api = new KeepaAPI("YOUR_API_KEY");

// request with 20 offers and buy box stats for the last year
$r = Request::getProductRequest(
    AmazonLocale::DE,
    20,               // number of offers to retrieve
    "2024-01-01",     // stats start date
    "2024-12-31",     // stats end date
    0,
    true,
    ['B001G73S50'],
    ["buybox" => 1]
);

$response = $api->sendRequestWithRetry($r);

if ($response->status === "OK") {
    $product = $response->products[0];
    $stats = $product->stats;

    echo "Buy box price: {$stats->buyBoxPrice}" . PHP_EOL;
    echo "Buy box seller: {$stats->buyBoxSellerId}" . PHP_EOL;
    echo "Is FBA: " . ($stats->buyBoxIsFBA ? "yes" : "no") . PHP_EOL;

    // sale/discount info
    if ($stats->buyBoxSavingBasisType !== null) {
        echo "Discount type: {$stats->buyBoxSavingBasisType}" . PHP_EOL;
        echo "Discount: {$stats->buyBoxSavingPercentage}%" . PHP_EOL;
    }

    // buy box history per seller
    if (!empty($stats->buyBoxStats)) {
        foreach ($stats->buyBoxStats as $sellerId => $bbStats) {
            echo "Seller {$sellerId} won buy box {$bbStats->percentageWon}% of the time" . PHP_EOL;
        }
    }

    // live offers
    if (!empty($product->offers)) {
        foreach ($product->offers as $offer) {
            echo "Offer: {$offer->sellerId} — {$offer->offerCSV[0]} (FBA: " . ($offer->isFBA ? "yes" : "no") . ")" . PHP_EOL;
        }
    }
}
```

</details>

<details>
<summary><strong>Product Finder</strong></summary>

```php
<?php
require_once "vendor/autoload.php";

use Keepa\API\Request;
use Keepa\KeepaAPI;
use Keepa\objects\AmazonLocale;
use Keepa\objects\ProductFinderRequest;

$api = new KeepaAPI("YOUR_API_KEY");

// find products between €10 and €50 with an active coupon
$finder = new ProductFinderRequest();
$finder->avg1_AMAZON_gte = 1000;   // prices in cents
$finder->avg1_AMAZON_lte = 5000;
$finder->couponOneTimeAbsolute_gte = 1;

$response = $api->sendRequestWithRetry(Request::getFinderRequest(AmazonLocale::DE, $finder));

if ($response->status === "OK") {
    echo "Found " . count($response->asinList) . " ASINs" . PHP_EOL;

    // fetch full product data for the first result
    $productResponse = $api->sendRequestWithRetry(
        Request::getProductRequest(AmazonLocale::DE, 0, null, null, 0, true, [$response->asinList[0]])
    );

    if ($productResponse->status === "OK") {
        $product = $productResponse->products[0];
        echo "{$product->asin}: {$product->title}" . PHP_EOL;

        if (!empty($product->coupon)) {
            echo "Coupon: {$product->coupon[1]} cents off" . PHP_EOL;
        }
        if (!empty($product->couponHistory)) {
            echo "Coupon history entries: " . (count($product->couponHistory) / 3) . PHP_EOL;
        }
    }
}
```

</details>

<details>
<summary><strong>Seller lookup</strong></summary>

```php
<?php
require_once "vendor/autoload.php";

use Keepa\API\Request;
use Keepa\KeepaAPI;
use Keepa\objects\AmazonLocale;

$api = new KeepaAPI("YOUR_API_KEY");

// request seller with storefront ASIN list
$response = $api->sendRequestWithRetry(
    Request::getSellerRequest(AmazonLocale::DE, ["A8KICS1PHF7ZO"], true)
);

if ($response->status === "OK") {
    $seller = $response->sellers["A8KICS1PHF7ZO"];

    echo "Seller: {$seller->sellerName}" . PHP_EOL;
    echo "FBA: " . ($seller->hasFBA ? "yes" : "no") . PHP_EOL;
    echo "Total storefront ASINs: " . end($seller->totalStorefrontAsins) . PHP_EOL;
    echo "Buy box win rate (new): {$seller->buyBoxNewOwnershipRate}%" . PHP_EOL;
    echo "Avg. buy box competitors: {$seller->avgBuyBoxCompetitors}" . PHP_EOL;

    // top competitors
    if (!empty($seller->competitors)) {
        echo "Top competitors:" . PHP_EOL;
        foreach ($seller->competitors as $competitor) {
            echo "  {$competitor->sellerId} — {$competitor->percent}% shared listings" . PHP_EOL;
        }
    }
}
```

</details>

<details>
<summary><strong>Top sellers</strong></summary>

```php
<?php
require_once "vendor/autoload.php";

use Keepa\API\Request;
use Keepa\KeepaAPI;
use Keepa\objects\AmazonLocale;

$api = new KeepaAPI("YOUR_API_KEY");

$response = $api->sendRequestWithRetry(Request::getTopSellerRequest(AmazonLocale::DE));

if ($response->status === "OK") {
    echo "Top sellers on Amazon.de:" . PHP_EOL;
    foreach ($response->sellerIdList as $sellerId) {
        echo "  {$sellerId}" . PHP_EOL;
    }
}
```

</details>

<details>
<summary><strong>Category lookup with statistics</strong></summary>

```php
<?php
require_once "vendor/autoload.php";

use Keepa\API\Request;
use Keepa\KeepaAPI;
use Keepa\objects\AmazonLocale;

$api = new KeepaAPI("YOUR_API_KEY");

$response = $api->sendRequestWithRetry(
    Request::getCategoryLookupRequest(AmazonLocale::DE, false, "528966011")
);

if ($response->status === "OK") {
    $category = reset($response->categories);

    echo "Category: {$category->name}" . PHP_EOL;
    echo "Avg. buy box price (current): {$category->avgBuyBox}" . PHP_EOL;
    echo "Avg. buy box price (90d): {$category->avgBuyBox90}" . PHP_EOL;
    echo "Avg. rating: " . ($category->avgRating / 10) . " stars" . PHP_EOL;
    echo "Avg. review count: {$category->avgReviewCount}" . PHP_EOL;
    echo "FBA percentage: {$category->isFBAPercent}%" . PHP_EOL;
    echo "Sold by Amazon: {$category->soldByAmazonPercent}%" . PHP_EOL;
    echo "Active sellers: {$category->sellerCount}" . PHP_EOL;
    echo "Distinct brands: {$category->brandCount}" . PHP_EOL;
}
```

</details>

<details>
<summary><strong>Tracking notifications</strong></summary>

```php
<?php
require_once "vendor/autoload.php";

use Keepa\API\Request;
use Keepa\KeepaAPI;
use Keepa\helper\CSVType;

$api = new KeepaAPI("YOUR_API_KEY");

// retrieve all unread notifications
$response = $api->sendRequestWithRetry(
    Request::getTrackingNotificationRequest(0, false)
);

if ($response->status === "OK" && !empty($response->notifications)) {
    foreach ($response->notifications as $notification) {
        echo "ASIN: {$notification->asin} — {$notification->title}" . PHP_EOL;
        echo "Triggered CSV type: {$notification->csvType}" . PHP_EOL;

        if (!empty($notification->currentPrices)) {
            $price = $notification->currentPrices[CSVType::AMAZON] ?? null;
            if ($price !== null && $price !== -1) {
                echo "Current Amazon price at notification: {$price}" . PHP_EOL;
            }
        }
    }
} else {
    echo "No new notifications." . PHP_EOL;
}
```

</details>
