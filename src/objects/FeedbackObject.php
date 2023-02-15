<?php

namespace Keepa\objects;

class FeedbackObject
{

    /**
     * the feedback star rating - value range from 10 (1 star) to 50 (5 stars)
     * @var int
     */
    public $rating;

    /**
     * timestamp of the feedback, in Keepa Time minutes
     * @var int
     */
    public $date;

    /**
     * the feedback text
     * @var string|null
     */
    public $feedback = null;

    /**
     * whether or not the feedback is striked
     * @var bool
     */
    public $isStriked;
}