<?php

$posts = get_posts(
    [
        'numberpost'    =>  1,
        'post_type'     =>  'banner',
        'orderby'       =>  'date',
        'order'         =>  'ASC'          
    ]
);

foreach( $posts as $post ){ 

?>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">

            <?php echo $post->post_content; ?>
            <!-- <h1><?php //bloginfo( 'name' ); ?></h1>
            <p>A responsive business oriented template with a video background<br />
            designed by <a href="https://templated.co/">TEMPLATED</a> and released under the Creative Commons License.</p> -->
        </div>
        <video autoplay loop muted playsinline src="<?php echo get_theme_file_uri( 'images/banner.mp4' ); ?>"></video>
    </section>

<?php

}