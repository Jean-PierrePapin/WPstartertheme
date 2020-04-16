<?php get_header(); ?>

<!-- FAIRE LES CLASSES CSS PLUS TARD EN COMPRENANT COMMENT LE FICHIER SASS EST STRUCTURE -->

<!-- Page title -->
<section class="page">
    <div class="page__title">
        <h1><?php get_the_title(); ?></h1>

        <span>
            <?php 
                if( function_exists( 'the_subtitle' ) ) {
                    the_subtitle(); 
                }
            
            ?>
        </span>
    </div>
</section>

<!-- Page content -->
<section class="page-content">
    <div class="page-content__wrapper">
        <div class="page-content--no-bottom-margin">

                <?php

                while( have_posts() ) {
                    the_post();

                    global $post;
                    $author_ID          =   $post->post_author;
                    
                    ?>

                    <div class="page-content__entry-content">

                        <?php

                        the_content();

                        $defaults       =   array(
                            'before'    =>  '<p class="text-center">' . __('Pages:', 'industrious'),
                            'after'     =>  '</p>'
                        );
                        
                        wp_link_pages( $defaults );

                        ?>

                    </div>
                                        
                    <?php
                    
                    if( comments_open()  || get_comments_number() ) {
                        comments_template(); // faire le template pour les comments
                    }

                }

                ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>