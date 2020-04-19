<?php

function testimonials_init() {
    $labels = array(
        'name'                  => _x( 'testimonial', 'Post type general name', 'testimonials' ),
        'singular_name'         => _x( 'testimonials', 'Post type singular name', 'testimonials' ),
        'menu_name'             => _x( 'testimonials', 'Admin Menu text', 'testimonials' ),
        'name_admin_bar'        => _x( 'testimonials', 'Add New on Toolbar', 'testimonials' ),
        'add_new'               => __( 'Add New', 'testimonials' ),
        'add_new_item'          => __( 'Add New testimonialss', 'testimonials' ),
        'new_item'              => __( 'New testimonialss', 'testimonials' ),
        'edit_item'             => __( 'Edit testimonialss', 'testimonials' ),
        'view_item'             => __( 'View testimonialss', 'testimonials' ),
        'all_items'             => __( 'All testimonialsss', 'testimonials' ),
        'search_items'          => __( 'Search testimonialss', 'testimonials' ),
        'parent_item_colon'     => __( 'Parent testimonialss:', 'testimonials' ),
        'not_found'             => __( 'No testimonialss found.', 'testimonials' ),
        'not_found_in_trash'    => __( 'No testimonialss found in Trash.', 'testimonials' ),
        'featured_image'        => _x( 'testimonialss Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'testimonials' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'testimonials' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'testimonials' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'testimonials' ),
        'archives'              => _x( 'testimonials archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'testimonials' ),
        'insert_into_item'      => _x( 'Insert into testimonialss', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'testimonials' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this testimonialss', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'testimonials' ),
        'filter_items_list'     => _x( 'Filter testimonialsss list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'testimonials' ),
        'items_list_navigation' => _x( 'testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'testimonials' ),
        'items_list'            => _x( 'testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'testimonials' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for testominials',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'testimonials' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'testimonial', $args );

    register_taxonomy( 'origin', 'testimonials', [
        'label'                 =>  __( 'Origin', 'testimonials' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}