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

Keepa API Framework
==============================

This framework is intended for users of the Keepa API.

<a name="features"></a>Features
--------
* Parses API response to easy to use PHP objects
* Provides methods that facilitate the work with price history data

Composer
-----
```bash
composer require keepa/php_api
```

<a name="examples"></a>Quick Example
==============

<a name="examples-keepa-api"></a>Make an API request
---------------------------

```php
<?php

/* maybe required - depends if youre using a framework which automaticly loading this file
require_once "vendor/autoload.php";
*/ 

use Keepa\API\Request;
use Keepa\API\ResponseStatus;
use Keepa\helper\CSVType;
use Keepa\helper\CSVTypeWrapper;
use Keepa\helper\KeepaTime;
use Keepa\helper\ProductAnalyzer;
use Keepa\helper\ProductType;
use Keepa\KeepaAPI;
use Keepa\objects\AmazonLocale;

        $api = new KeepaAPI("YOUR-API-KEY");
        $r = Request::getProductRequest(AmazonLocale::DE, 0, "2015-12-31", "2018-01-01", 0, true, ['B001G73S50']);

        $response = $api->sendRequestWithRetry($r);

			switch ($response->status) {
                case ResponseStatus::OK:
                    // iterate over received product information
                    foreach ($response->products as $product){
                        if ($product->productType == ProductType::STANDARD || $product->productType == ProductType::DOWNLOADABLE) {

                            //get basic data of product and print to stdout
                            $currentAmazonPrice = ProductAnalyzer::getLast($product->csv[CSVType::AMAZON], CSVTypeWrapper::getCSVTypeFromIndex(CSVType::AMAZON));

							//check if the product is in stock -1 -> out of stock
							if ($currentAmazonPrice == -1) {
                                echo sprintf("%s %s is currently not sold by Amazon (out of stock) %s",$product->asin,$product->title,PHP_EOL);
                            } else {
                                echo sprintf("%s %s Current Amazon Price: %s %s",$product->asin,$product->title,$currentAmazonPrice,PHP_EOL);
                            }

							// get weighted mean of the last 90 days for Amazon
							$weightedMean90days = ProductAnalyzer::calcWeightedMean($product->csv[CSVType::AMAZON], KeepaTime::nowMinutes(),90, CSVTypeWrapper::getCSVTypeFromIndex(CSVType::AMAZON));

						} else {

                        }
                    }
					break;
				default:
					print_r($response);
			}
```
