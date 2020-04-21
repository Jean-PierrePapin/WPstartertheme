<?php
/*
 * Plugin Name: Highlights plugin. My own code!
 * Description: A simple WordPress plugin that allows user to create highlights and add them to the DB
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
include( 'includes/activate.php' );
include( 'includes/init.php' );


// Hooks
register_activation_hook( __FILE__, 'h_activate_plugin' );
add_action( 'init', 'highlights_init' );



// Shortcodes
