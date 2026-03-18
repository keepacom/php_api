<?php

namespace Keepa\helper;

/**
 * Contains variation specific review and rating counts histories as well as a last update timestamp.
 */
class ReviewObject
{
    /**
     * The last time the information was updated, in Keepa Time minutes.
     * Use KeepaTime::keepaMinuteToUnixInMillis() to get an uncompressed timestamp (Unix epoch time).
     * @var int
     */
    public $lastUpdate = 0;

    /**
     * Contains historical values of the ratingCount field. null if it has no value.
     * The most recent value is at the end of the array. The first value is the oldest.
     * Data points alternate in this pattern: [ keepaTime, ratingCount, ... ]
     * The ratingCount history has not been updated since April 9th 2025 as that data point was removed by Amazon.
     * @var int[]|null
     */
    public $ratingCount = null;

    /**
     * Contains historical values of the reviewCount field. null if it has no value.
     * The most recent value is at the end of the array. The first value is the oldest.
     * Data points alternate in this pattern: [ keepaTime, reviewCount, ... ]
     * @var int[]|null
     */
    public $reviewCount = null;

    /**
     * Convenience method to get the most recent review count value.
     * Returns 0 if the review count history is not available or empty.
     * @return int The most recent review count value, or 0 if not available.
     */
    public function getCurrentReviewCount(): int
    {
        if ($this->reviewCount === null || count($this->reviewCount) < 2) {
            return 0;
        }
        return $this->reviewCount[count($this->reviewCount) - 1];
    }
}
