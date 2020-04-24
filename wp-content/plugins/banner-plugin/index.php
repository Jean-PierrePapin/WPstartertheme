<?php
/*
 * Plugin Name: banner plugin. My own code!
 * Description: A simple WordPress plugin that allows user to create banner
 * Version: 1.0
 * Author: Sam the Coder
 * Author URI: none
 * Text Domain: Highlights
 */

if( !function_exists( 'add_action' ) ) {
    echo "Hi there! I'm just a plugin, not much I can do when called directly.";
    exit;
 }

  
// Setup


// Includes
include( 'init.php' );


// Hooks
add_action( 'init', 'banner_init' );



// Shortcodes
