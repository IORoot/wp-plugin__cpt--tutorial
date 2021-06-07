<?php

namespace andyp\cpt\tutorial\filters\transforms;

/**
 * Only render whats between
 * the --- lines
 * 
 * ---
 * DESCRIPTION
 * ---
 */
class youtube_description {

    public function __construct()
    {
        add_filter('cpt_tutorial_transforms', [$this, 'callback'], 10, 1 );
    }

    public function callback($text)
    {
        preg_match('/\-\-\-([\w|\W]*)\-\-\-/',$text, $match);

        return $match[1];
    }

}
