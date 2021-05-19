<?php

namespace andyp\cpt\tutorial\filters\transforms;
/**
 * Filters content for Markdown and converts it to HTML.
 */
class parsedown {

    public function __construct()
    {
        add_filter('cpt_tutorial_transforms', [$this, 'callback'], 10, 1 );
    }

    public function callback($text)
    {
        $Parsedown = new \Parsedown();
        return $Parsedown->setBreaksEnabled(true)->text($text);
    }

}
