<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Labs - CPT: Tutorials',
        'icon'      => 'test-tube',
        'color'     => '#38EF7D',
        'path'      => __FILE__,
    ]);
} );