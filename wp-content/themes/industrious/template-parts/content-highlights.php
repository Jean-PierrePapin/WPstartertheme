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
                echo 'No posts found';
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


            /* foreach( $posts as $post ){ 

            ?>

                <section>
                    <div class="content">
                                           
                        <?php //echo $post->post_content; ?>
                        
                    </div>
                </section>
            
            <?php

            } */

            ?>

            <!-- 
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
                        <h3>Feugiat consequat</h3>
                    </header>
                    <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </div>
            </section>    
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
                        <h3>Ante sem integer</h3>
                    </header>
                    <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </div>
            </section>
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-floppy-o"><span class="label">Icon</span></a>
                        <h3>Ipsum consequat</h3>
                    </header>
                    <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </div>
            </section>
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-line-chart"><span class="label">Icon</span></a>
                        <h3>Interdum gravida</h3>
                    </header>
                    <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </div>
            </section>
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
                        <h3>Faucibus consequat</h3>
                    </header>
                    <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </div>
            </section>
            <section>
                <div class="content">
                    <header>
                        <a href="#" class="icon fa-qrcode"><span class="label">Icon</span></a>
                        <h3>Accumsan viverra</h3>
                    </header>
                    <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                </div>
            </section> 
            -->
        </div>
    </div>
</section>