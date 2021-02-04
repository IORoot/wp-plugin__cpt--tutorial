<?php

namespace andyp\labs\cpt\tutorial\filters\transforms;

/**
 * Remove the top H2 if present.
 */
class h2_remove {

    public function __construct()
    {
        add_filter('cpt_tutorial_transforms', [$this, 'callback'], 40, 1 );
    }

    public function callback($text)
    {

        return preg_replace('/^<h2.*\/h2>/','',$text,1);

    }

}
