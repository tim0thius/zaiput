<?php

    /**
        Any functionality related to the `gallery` post type.
    **/


    # Register Gallery Post Type

    add_action( 'init', 'register_post_type_gallery', 0 );

    function register_post_type_gallery() {

    	$labels = array(
    		'name'                  => _x( 'Galleries', 'Post Type General Name', 'lss' ),
    		'singular_name'         => _x( 'Galleries', 'Post Type Singular Name', 'lss' ),
    		'menu_name'             => __( 'Galleries', 'lss' ),
    		'name_admin_bar'        => __( 'Galleries', 'lss' ),
    		'archives'              => __( 'Galleries Archives', 'lss' ),
    		'parent_item_colon'     => __( 'Parent Gallery:', 'lss' ),
    		'all_items'             => __( 'All Galleries', 'lss' ),
    		'add_new_item'          => __( 'Add New Gallery', 'lss' ),
    		'add_new'               => __( 'Add New', 'lss' ),
    		'new_item'              => __( 'New Gallery', 'lss' ),
    		'edit_item'             => __( 'Edit Gallery', 'lss' ),
    		'update_item'           => __( 'Update Gallery', 'lss' ),
    		'view_item'             => __( 'View Gallery', 'lss' ),
    		'search_items'          => __( 'Search Gallery', 'lss' ),
    		'not_found'             => __( 'Not found', 'lss' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'lss' ),
    		'featured_image'        => __( 'Featured Image', 'lss' ),
    		'set_featured_image'    => __( 'Set featured image', 'lss' ),
    		'remove_featured_image' => __( 'Remove featured image', 'lss' ),
    		'use_featured_image'    => __( 'Use as featured image', 'lss' ),
    		'insert_into_item'      => __( 'Insert into item', 'lss' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lss' ),
    		'items_list'            => __( 'Items list', 'lss' ),
    		'items_list_navigation' => __( 'Items list navigation', 'lss' ),
    		'filter_items_list'     => __( 'Filter items list', 'lss' ),
    	);

    	$args = array(
    		'label'                 => __( 'Galleries', 'lss' ),
    		'description'           => __( 'Items for the Galleries', 'lss' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'excerpt', 'thumbnail', ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-book-alt',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'post',
        'taxonomies'            => ['category']
    	);

        register_post_type( 'gallery', $args );

    }
