<?php 

get_header(); 

if ( is_home() ) {

    get_template_part( 'template-parts/content', 'banner' );
    get_template_part( 'template-parts/content', 'highlights' );
    get_template_part( 'template-parts/content', 'cta' );
    get_template_part( 'template-parts/content', 'testimonials' );

} else {

    get_template_part( 'template-parts/content', 'post' );

}

get_footer(); 