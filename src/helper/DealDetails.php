<?php
namespace Keepa\helper;

/**
 * Metadata for a product's deal.
 * <p>
 * Notes:
 * <ul>
 *   <li>All fields are optional and may be {@code null} if not applicable or not provided.</li>
 *   <li>String-typed categorical fields are open-ended: Keepa may introduce new values at any time.
 *       Do not hard-code exhaustive switches against them.</li>
 *   <li>Times are provided in <em>Keepa Time minutes</em> (Keepa’s internal minute-based timestamp).
 *       Not all deal types will include start/end times.</li>
 * </ul>
 *
 * <h3>Example payload</h3>
 * <pre>{@code
 * "deals": [
 *   {
 *     "accessType": "PRIME_EXCLUSIVE",
 *     "endTime": 7769220,
 *     "startTime": 7736100,
 *     "percentClaimed": 0,
 *     "badge": "Early Prime Deal",
 *     "dealType": "EARLY_ACCESS_WITH_PRIME"
 *   }
 * ]
 * }</pre>
 */
class DealDetails
{

    /**
     * Who can access the deal. New access types can be added at any time.
     * <p>
     * Currently observed values include (non-exhaustive):
     * <ul>
     *   <li>{@code ALL}</li>
     *   <li>{@code PRIME_EARLY_ACCESS}</li>
     *   <li>{@code PRIME_EXCLUSIVE}</li>
     * </ul>
     *
     * @var string|null
     */
    public $accessType;

    /**
     * Deal end time in <em>Keepa Time minutes</em>.
     * <p>
     * May be {@code null} and is not available for all deal types.
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     *
     * @var int|null
     */
    public $endTime;

    /**
     * Deal start time in <em>Keepa Time minutes</em>.
     * <p>
     * May be {@code null} and is not available for all deal types.
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     *
     * @var int|null
     */
    public $startTime;

    /**
     * Percentage claimed for Lightning Deals (i.e., {@code dealType == LIMITED_TIME_DEAL}).
     * <p>
     * Range: {@code 0}–{@code 100}. May be {@code null} or absent for other deal types.
     *
     * @var int|null
     */
    public $percentClaimed;

    /**
     * The badge text as shown on the product page.
     * <p>
     * Example: {@code "Early Prime Deal"}.
     *
     * @var string|null
     */
    public $badge;

    /**
     * The type/category of the deal. New deal types can be added at any time.
     * <p>
     * Currently observed values include (non-exhaustive):
     * <ul>
     *   <li>{@code PRIME_DAY}</li>
     *   <li>{@code PRIME_DAY_EARLY}</li>
     *   <li>{@code EARLY_ACCESS_WITH_PRIME}</li>
     *   <li>{@code PRIME_EXCLUSIVE}</li>
     *   <li>{@code SELLING_FAST}</li>
     *   <li>{@code PRIME_SELLING_FAST}</li>
     *   <li>{@code LIMITED_TIME_DEAL}</li>
     *   <li>{@code COUNTDOWN_ENDS_IN}</li>
     *   <li>{@code APP_ONLY}</li>
     *   <li>{@code CLEARANCE_NO_RETURNS}</li>
     *   <li>{@code SPECIAL_EVENT_SALE}</li>
     *   <li>{@code GENERIC_OFFER_PROMO}</li>
     *   <li>{@code UNKNOWN}</li>
     * </ul>
     *
     * @var string|null
     */
    public $dealType;

}