<?php

    /**
        Any functionality related to the `testimonial` post type.
    **/


    # Register Testimonial Post Type

    add_action( 'init', 'register_post_type_testimonial', 0 );

    function register_post_type_testimonial() {

    	$labels = array(
    		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'lss' ),
    		'singular_name'         => _x( 'Testimonials', 'Post Type Singular Name', 'lss' ),
    		'menu_name'             => __( 'Testimonials', 'lss' ),
    		'name_admin_bar'        => __( 'Testimonials', 'lss' ),
    		'archives'              => __( 'Testimonials Archives', 'lss' ),
    		'parent_item_colon'     => __( 'Parent Testimonial:', 'lss' ),
    		'all_items'             => __( 'All Testimonials', 'lss' ),
    		'add_new_item'          => __( 'Add New Testimonial', 'lss' ),
    		'add_new'               => __( 'Add New', 'lss' ),
    		'new_item'              => __( 'New Testimonial', 'lss' ),
    		'edit_item'             => __( 'Edit Testimonial', 'lss' ),
    		'update_item'           => __( 'Update Testimonial', 'lss' ),
    		'view_item'             => __( 'View Testimonial', 'lss' ),
    		'search_items'          => __( 'Search Testimonial', 'lss' ),
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
    		'label'                 => __( 'Testimonials', 'lss' ),
    		'description'           => __( 'Items for the Testimonials', 'lss' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title' ),
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

        register_post_type( 'testimonial', $args );

    }


    function tbd_register_taxes_type() {

    /**
     * Taxonomy: Internal Types.
     */

    $labels = array(
        "name" => __( "Types", "" ),
        "singular_name" => __( "Type", "" ),
    );

    $args = array(
        "label" => __( "Types", "" ),
        "labels" => $labels,
        "public" => true,
        "hierarchical" => false,
        "label" => "Types",
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'type', 'with_front' => true, ),
        "show_admin_column" => false,
        "show_in_rest" => false,
        "rest_base" => "type",
        "show_in_quick_edit" => false,
    );
    register_taxonomy( "type", array( "testimonial" ), $args );
}

add_action( 'init', 'tbd_register_taxes_type' );

