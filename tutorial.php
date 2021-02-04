<?php

/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - Labs - CPT - Tutorial
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>📬CPT</strong> | Adds Labs CPT - Tutorials
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

define( 'ANDYP_LABS_CPT_TUTORIAL_PATH', __DIR__ );
define( 'ANDYP_LABS_CPT_TUTORIAL_URL', plugins_url( '/', __FILE__ ) );
define( 'ANDYP_LABS_CPT_TUTORIAL_PLUGIN_FILE',  __FILE__ );


//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                    Plugin Activation - once only.    		             │
// └─────────────────────────────────────────────────────────────────────────┘
new andyp\labs\cpt\tutorial\setup\activate;

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        	   Initialise    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
(new andyp\labs\cpt\tutorial\initialise)->run();
