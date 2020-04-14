<?php
/*
*   Industrious functions and definitions
*   
*   Table of contents
*   Register Styles
*   Register Scripts
*   Register Menus
*
*
*
*/


/**
 * Register and Enqueue Styles.
 */
function industrious_register_styles() {
    $uri                =   get_theme_file_uri();

    wp_register_style( 'industrious_main', $uri . '/assets/css/main.css' );
    wp_register_style( 'industrious_font', $uri . '/assets/css/font-awesome.min.css' );

    wp_enqueue_style( 'industrious_main' );
    wp_enqueue_style( 'industrious_font' );
}
add_action( 'wp_enqueue_scripts', 'industrious_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function industrious_register_scripts() {
    $uri                =   get_theme_file_uri();
    
    wp_register_script( 'industrious_jquery', $uri . '/assets/js/jquery.min.js', [], false, true );
    wp_register_script( 'industrious_browser', $uri . '/assets/js/browser.min.js', [], false, true );
    wp_register_script( 'industrious_breakpoints', $uri . '/assets/js/breakpoints.min.js', [], false, true );
    wp_register_script( 'industrious_js', $uri . '/assets/js/util.js', [], false, true );
    wp_register_script( 'industrious_main', $uri . '/assets/js/main.js', [], false, true );

    wp_enqueue_script( 'industrious_jquery' );
    wp_enqueue_script( 'industrious_browser' );
    wp_enqueue_script( 'industrious_breakpoints' );
    wp_enqueue_script( 'industrious_js' );
    wp_enqueue_script( 'industrious_main' );
}
add_action( 'wp_enqueue_scripts', 'industrious_register_scripts' );

 /**
 * Menu.
 */
function register_my_menus() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'industrious' ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );