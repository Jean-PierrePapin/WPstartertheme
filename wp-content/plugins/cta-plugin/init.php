<?php

function cta_init() {
    $labels = array(
        'name'                  => _x( 'cta', 'Post type general name', 'cta' ),
        'singular_name'         => _x( 'cta', 'Post type singular name', 'cta' ),
        'menu_name'             => _x( 'cta', 'Admin Menu text', 'cta' ),
        'name_admin_bar'        => _x( 'cta', 'Add New on Toolbar', 'cta' ),
        'add_new'               => __( 'Add New', 'cta' ),
        'add_new_item'          => __( 'Add New ctas', 'cta' ),
        'new_item'              => __( 'New ctas', 'cta' ),
        'edit_item'             => __( 'Edit ctas', 'cta' ),
        'view_item'             => __( 'View ctas', 'cta' ),
        'all_items'             => __( 'All ctass', 'cta' ),
        'search_items'          => __( 'Search ctas', 'cta' ),
        'parent_item_colon'     => __( 'Parent ctas:', 'cta' ),
        'not_found'             => __( 'No ctas found.', 'cta' ),
        'not_found_in_trash'    => __( 'No ctas found in Trash.', 'cta' ),
        'featured_image'        => _x( 'ctas Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cta' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cta' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cta' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'cta' ),
        'archives'              => _x( 'cta archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'cta' ),
        'insert_into_item'      => _x( 'Insert into ctas', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'cta' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this ctas', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'cta' ),
        'filter_items_list'     => _x( 'Filter ctass list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'cta' ),
        'items_list_navigation' => _x( 'cta list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'cta' ),
        'items_list'            => _x( 'cta list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'cta' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for cta',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'cta' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'cta', $args );

    register_taxonomy( 'origin', 'ctas', [
        'label'                 =>  __( 'Origin', 'ctas' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}