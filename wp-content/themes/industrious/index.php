<?php 

get_header(); 

if ( is_home() ) {

    get_template_part( 'template-parts/content', 'banner' );
    get_template_part( 'template-parts/content', 'highlights' );
    get_template_part( 'template-parts/content', 'cta' );
    get_template_part( 'template-parts/content', 'testimonials' );

} elseif ( is_page() ) {

    get_template_part( 'page' );

} elseif( is_single() ) {

    get_template_part( 'post' );

}

get_footer(); 