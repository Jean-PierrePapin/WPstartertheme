<!-- Highlights -->
<section class="wrapper">
    <div class="inner">
        <header class="special">
            <h2>Sem turpis amet semper</h2>
            <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
        </header>
        <div class="highlights">

            <?php 

            
            // WP_Query class use to display 6 custom post types
            $args = [
                'post_type'         =>  'highlight',
                'nopaging'          =>  false,
                'posts_per_page'    =>  '6',
                'order'             =>  'ASC',
                'orderby'           =>  'ID'
            ];
            
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                    
                    <section>
                        <div class="content">
                                           

                    <?php

                    echo $post->post_content;

                    ?>
                    
                        </div>
                    </section>

                    <?php
                }
            } else {

                echo '<section><div class="content" >No posts found</div></section>';

            }
            

            // Google search for a solution: https://wordpress.stackexchange.com/questions/267543/filtering-custom-post-type-query

            $posts = get_posts(
                [
                    'numberpost'    =>  6,
                    'post_type'     =>  'highlight',
                    'orderby'       =>  'date',
                    'order'         =>  'ASC'          
                ]
            );

            ?>

        </div>
    </div>
</section>