
<!-- Testimonials -->
<section class="wrapper">
    <div class="inner">
        <header class="special">
            <h2>Faucibus consequat lorem</h2>
            <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
        </header>
        <div class="testimonials">
            <!-- Individual testominials and where to put the the while -->

            <?php 

            // Google search for a solution: https://wordpress.stackexchange.com/questions/267543/filtering-custom-post-type-query

            $posts = get_posts(
                [
                    'numberpost'    =>  3,
                    'post_type'     =>  'testimonial',
                    'orderby'       =>  'date',
                    'order'         =>  'DESC'          
                ]
            );
            
            foreach( $posts as $post ){ 

            ?>

                <section>
                    <div class="content">
                        
                        <blockquote>
                            <p><?php echo $post->post_content; ?></p>
                        </blockquote>
                        
                        <div class="author">
                            <div class="image">
                                <img src="<?php echo $post->post_image; //get_theme_file_uri( 'images/pic01.jpg' ); ?>" alt="" />
                            </div>
                            
                            <p class="credit">- <strong><?php echo $post->post_title ?></strong> <span><?php echo 'CEO - ABC Inc.'; ?></span></p>
                            <!-- Insert directly the photo in the custom post type -->
                        </div>

                    </div>
                </section>

            <?php

            }

            ?>

            <!-- <section>
                <div class="content">
                    <blockquote>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </blockquote>
                    <div class="author">
                        <div class="image">
                            <img src="<?php echo get_theme_file_uri( 'images/pic01.jpg' ); ?>" alt="" />
                        </div>
                        <p class="credit">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
                    </div>
                </div>
            </section>
            <section>
                <div class="content">
                    <blockquote>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </blockquote>
                    <div class="author">
                        <div class="image">
                            <img src="<?php echo get_theme_file_uri( 'images/pic03.jpg' ); ?>" alt="" />
                        </div>
                        <p class="credit">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
                    </div>
                </div>
            </section>
            <section>
                <div class="content">
                    <blockquote>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </blockquote>
                    <div class="author">
                        <div class="image">
                            <img src="<?php echo get_theme_file_uri( 'images/pic02.jpg' ); ?>" alt="" />
                        </div>
                        <p class="credit">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
                    </div>
                </div>
            </section> -->
        </div>
    </div>
</section>