<?php

namespace andyp\labs\cpt\tutorial\setup;

class activate
{

    public function __construct()
    {
        register_activation_hook( ANDYP_LABS_CPT_TUTORIAL_PLUGIN_FILE, [$this, 'flush_post_types'] );
    }

    public function flush_post_types() {

        $tutorial = new \andyp\labs\cpt\tutorial\initialise;
        $tutorial->setup_cpt();
        $tutorial->register_cpt();
        $tutorial->run_cpt();

        global $wp_rewrite;
        $wp_rewrite->flush_rules();
    }

}