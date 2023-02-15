<?php
namespace Keepa\objects;

/**
 * About:
 * The offer object represents a marketplace offer.
 * <p>
 * Returned by:
 * The offer object is returned by the Product Request using the optional offers parameter and is part of the Product Object.
 * <p>
 * Important to know:
 * It is impossible to update billions of marketplace offers on a regular basis. The product request's offers parameter determines how many offers we retrieve / update. We always fetch the best offers, as sorted by Amazon, in all conditions. If a product has more offers than requested, those will not be retrieved.
 * The order of offers constantly changes and we can retrieve a different amount of offers with each data retrieval. Because of this as well as the fact that we do keep a history of offers you will almost certainly encounter outdated offers. So the following is very important:
 * <p>
 * Evaluate the lastSeen field - only process fresh and active offers if you are not interested in past offers.
 * The history of an offer (its past prices and shipping costs) is often not without gaps. Evaluate the EXTRA_INFO_UPDATES csv-type of the product object to find out when we updated the offers. If you need complete coverage of (all) offers of a product you have to request it on a regular basis.
 * If there are almost identical offers - same seller, same condition, same shipping type and same condition text - we only provide access to the one with the cheapest price. We do not list duplicates.
 */
class Offer
{

    /**
     * Unique id of this offer (in the scope of the product).
     * Not related to the offerIds used by Amazon, as those are user specific and only valid for a short time.
     * The offerId can be used to identify the same offers throughout requests.
     * <p>
     * Example: 4
     * @var int
     */
    public $offerId;

    /**
     * States the last time we have seen (and updated) this offer, in Keepa Time minutes.
     * <p>
     * Example: 2700145
     * @var int
     */
    public $lastSeen = 0;

    /**
     * The seller id of the merchant.
     * <p>
     * Example: A2L77EE7U53NWQ (Amazon.com Warehouse Deals)
     * @var string|null
     */
    public $sellerId = null;

    /**
     * Contains the current price and shipping costs of the offer as well as, if available, the offer's history.
     * It has the format Keepa time minutes, price, shipping cost, [...].
     * <p>
     * The price and shipping cost are integers of the respective Amazon locale's smallest currency unit (e.g. euro cents or yen).
     * If we were unable to determine the price or shipping cost they have the value -2.
     * Free shipping has the shipping cost of 0.
     * If an offer is not shippable or has unspecified shipping costs the shipping cost will be -1.
     * To get the newest price and shipping cost access the last two entries of the array.<br>
     * Most recent price: offerCSV[offerCSV.length - 2]<br>
     * Most recent shipping cost: offerCSV[offerCSV.length - 1]
     * @var int[]|null
     */
    public $offerCSV = null;

    /**
     * The {@link OfferCondition} condition of the offered product. Integer value:
     * <br>0 - Unknown: We were unable to determine the condition.
     * <br>1 - New
     * <br> 2 - Used - Like New
     * <br>3 - Used - Very Good
     * <br>4 - Used - Good
     * <br>5 - Used - Acceptable
     * <br>6 - Refurbished
     * <br>7 - Collectible - Like New
     * <br>8 - Collectible - Very Good
     * <br>9 - Collectible - Good
     * <br>10 - Collectible - Acceptable
     * <br>Note: Open Box conditions will be coded as Used conditions.
     * @var int
     */
    public $condition = 0;

    /**
     * The describing text of the condition.
     * <p>
     * Example: The item may come repackaged. Small cosmetic imperfection on top, [...]
     * @var string|null
     */
    public $conditionComment = null;

    /**
     * Whether or not this offer is available via Prime shipping. Can be used as a FBA ("Fulfillment by Amazon") indicator as well.
     * @var bool|null
     */
    public $isPrime = null;

    /**
     * If the price of this offer is hidden on Amazon due to a MAP ("minimum advertised price") restriction.
     * Even if so, the offer object will contain the price and shipping costs.
     * @var bool|null
     */
    public $isMAP = null;

    /**
     * Indicating whether or not the offer is currently shippable.
     * If not this could mean for example that it is temporarily out of stock or a pre-order.
     * @var bool|null
     */
    public $isShippable = null;

    /**
     * Indicating whether or not the offer is an Add-on item.
     * @var bool|null
     */
    public $isAddonItem = null;

    /**
     * Indicating whether or not the offer is a pre-order.
     * @var bool|null
     */
    public $isPreorder = null;

    /**
     * Indicating whether or not the offer is a Warehouse Deal.
     * @var bool|null
     */
    public $isWarehouseDeal = null;

    /**
     * Indicating whether or not our system identified that the offering merchant attempts to scam users.
     * @var bool|null
     */
    public $isScam = null;

    /**
     * Indicating whether or not the offer ships from China.
     * @var bool|null
     */
    public $shipsFromChina;

    /**
     * True if the seller is Amazon (e.g. "Amazon.com").
     * <p>
     * <b>Note:</b> Amazon's Warehouse Deals seller account or other accounts Amazon is maintaining under a different name are not considered to be Amazon.
     * @var bool|null
     */
    public $isAmazon = null;

    /**
     * Whether or not this offer is fulfilled by Amazon.
     * @var boolean|null
     */
    public $isFBA = null;

    /**
     * Indicating whether or not our system identified that the offering merchant attempts to scam users.
     * @var boolean|null
     */
    public $isCustomizeable = null;

    /**
     * This offer has a discounted Prime exclusive price. A Prime exclusive offer can only be ordered if the buyer has an active Prime subscription.
     * @var bool|null
     */
    public $isPrimeExcl = null;


    /**
     * Contains the Prime exclusive price history of this offer, if available. A Prime exclusive offer can only be ordered if the buyer has an active Prime subscription.
     * It has the format Keepa time minutes, price, [...].
     * <p>
     * Most recent Prime exclusive price: primeExclCSV[primeExclCSV.length - 1]
     * @var null|int[]
     */
    public $primeExclCSV;



    /**
     * Contains the available stock of this offer as well as, if available, the stock's history.
     * It has the format Keepa time minutes, stock, [...].
     * <p>
     * Most recent stock: stockCSV[stockCSV.length - 1]
     * @var int[]
     */
    public $stockCSV;
}
