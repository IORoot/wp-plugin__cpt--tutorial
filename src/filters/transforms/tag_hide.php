<?php

namespace andyp\cpt\tutorial\filters\transforms;

/**
 * Hide the tag:beginner tags.
 */
class tag_hide {

    public function __construct()
    {
        add_filter('cpt_tutorial_transforms', [$this, 'callback'], 50, 1 );
    }

    public function callback($text)
    {
        return preg_replace('/\" >tag/i',' hidden">tag',$text);
    }

}
