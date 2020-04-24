<?php

function banner_init() {
    $labels = array(
        'name'                  => _x( 'banner', 'Post type general name', 'banner' ),
        'singular_name'         => _x( 'banner', 'Post type singular name', 'banner' ),
        'menu_name'             => _x( 'banner', 'Admin Menu text', 'banner' ),
        'name_admin_bar'        => _x( 'banner', 'Add New on Toolbar', 'banner' ),
        'add_new'               => __( 'Add New', 'banner' ),
        'add_new_item'          => __( 'Add New banners', 'banner' ),
        'new_item'              => __( 'New banners', 'banner' ),
        'edit_item'             => __( 'Edit banners', 'banner' ),
        'view_item'             => __( 'View banners', 'banner' ),
        'all_items'             => __( 'All bannerss', 'banner' ),
        'search_items'          => __( 'Search banners', 'banner' ),
        'parent_item_colon'     => __( 'Parent banners:', 'banner' ),
        'not_found'             => __( 'No banners found.', 'banner' ),
        'not_found_in_trash'    => __( 'No banners found in Trash.', 'banner' ),
        'featured_image'        => _x( 'banners Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'banner' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'banner' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'banner' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'banner' ),
        'archives'              => _x( 'banner archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'banner' ),
        'insert_into_item'      => _x( 'Insert into banners', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'banner' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this banners', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'banner' ),
        'filter_items_list'     => _x( 'Filter bannerss list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'banner' ),
        'items_list_navigation' => _x( 'banner list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'banner' ),
        'items_list'            => _x( 'banner list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'banner' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for banner',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'banner' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'banner', $args );

    register_taxonomy( 'origin', 'banners', [
        'label'                 =>  __( 'Origin', 'banners' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}