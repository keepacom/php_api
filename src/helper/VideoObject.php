<?php
namespace Keepa\helper;

class VideoObject
{
    /**
     *
     * @var string|null
     */
    public $title = null;

    /**
     * Full Amazon image path:<br>
     * https://m.media-amazon.com/images/I/_image_
     * @var string|null
     */
    public $image = null;

    /**
     * in seconds
     * @var int|null
     */
    public $duration = null;

    /**
     *
     * @var \Keepa\helper\VideoCreatorType|null
     */
    public $creator = null;

    /**
     * @var int|null
     */
    public $name = null;

    /**
     * @var int|null
     */
    public $url = null;
}