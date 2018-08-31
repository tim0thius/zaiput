<?php

    /**
        Any functionality related to the `announcement` post type.
    **/


    # Register Announcement Post Type

    add_action( 'init', 'register_post_type_announcement', 0 );

    function register_post_type_announcement() {

    	$labels = array(
    		'name'                  => _x( 'Announcements', 'Post Type General Name', 'lss' ),
    		'singular_name'         => _x( 'Announcements', 'Post Type Singular Name', 'lss' ),
    		'menu_name'             => __( 'Announcements', 'lss' ),
    		'name_admin_bar'        => __( 'Announcements', 'lss' ),
    		'archives'              => __( 'Announcements Archives', 'lss' ),
    		'parent_item_colon'     => __( 'Parent Announcement:', 'lss' ),
    		'all_items'             => __( 'All Announcements', 'lss' ),
    		'add_new_item'          => __( 'Add New Announcement', 'lss' ),
    		'add_new'               => __( 'Add New', 'lss' ),
    		'new_item'              => __( 'New Announcement', 'lss' ),
    		'edit_item'             => __( 'Edit Announcement', 'lss' ),
    		'update_item'           => __( 'Update Announcement', 'lss' ),
    		'view_item'             => __( 'View Announcement', 'lss' ),
    		'search_items'          => __( 'Search Announcement', 'lss' ),
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
    		'label'                 => __( 'Announcements', 'lss' ),
    		'description'           => __( 'Items for the Announcements', 'lss' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-megaphone',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'post',
        'taxonomies'            => ['category']
    	);

        register_post_type( 'announcement', $args );

    }
