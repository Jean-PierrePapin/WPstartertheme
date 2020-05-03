<?php

function highlights_init() {
    $labels = array(
        'name'                  => _x( 'highlight', 'Post type general name', 'highlight' ),
        'singular_name'         => _x( 'highlight', 'Post type singular name', 'highlight' ),
        'menu_name'             => _x( 'highlight', 'Admin Menu text', 'highlight' ),
        'name_admin_bar'        => _x( 'highlight', 'Add New on Toolbar', 'highlight' ),
        'add_new'               => __( 'Add New', 'highlight' ),
        'add_new_item'          => __( 'Add New highlights', 'highlight' ),
        'new_item'              => __( 'New highlights', 'highlight' ),
        'edit_item'             => __( 'Edit highlights', 'highlight' ),
        'view_item'             => __( 'View highlights', 'highlight' ),
        'all_items'             => __( 'All highlights', 'highlight' ),
        'search_items'          => __( 'Search highlights', 'highlight' ),
        'parent_item_colon'     => __( 'Parent highlights:', 'highlight' ),
        'not_found'             => __( 'No highlights found.', 'highlight' ),
        'not_found_in_trash'    => __( 'No highlights found in Trash.', 'highlight' ),
        'featured_image'        => _x( 'highlights Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'highlight' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'highlight' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'highlight' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'highlight' ),
        'archives'              => _x( 'highlight archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'highlight' ),
        'insert_into_item'      => _x( 'Insert into highlights', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'highlight' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this highlights', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'highlight' ),
        'filter_items_list'     => _x( 'Filter highlights list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'highlight' ),
        'items_list_navigation' => _x( 'highlight list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'highlight' ),
        'items_list'            => _x( 'highlight list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'highlight' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for higlights',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'highlight' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'highlight', $args );

    register_taxonomy( 'origin', 'highlights', [
        'label'                 =>  __( 'Origin', 'highlights' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}