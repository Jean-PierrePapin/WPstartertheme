<?php
/*
*   Industrious functions and definitions
*   
*   Table of contents
*   Required Files
*   Register Styles
*   Register Scripts
*   Register Menus
*
*
*
*/




// Menu 
function register_my_menus() {
    /* register_my_menus(
        [
            'header-menu'   =>  __( 'Header Menu', 'Industrious' ),
        ]
    ); */
}
add_action( 'init', 'register_my_menus' );