<?php
// Define the custom post type
function custom_post_type_cases() {
    $labels = array(
        'name'               => _x( 'Cases', 'post type general name' ),
        'singular_name'      => _x( 'Case', 'post type singular name' ),
        'menu_name'          => _x( 'Cases', 'admin menu' ),
        'name_admin_bar'     => _x( 'Case', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Case' ),
        'add_new_item'       => __( 'Add New Case' ),
        'new_item'           => __( 'New Case' ),
        'edit_item'          => __( 'Edit Case' ),
        'view_item'          => __( 'View Case' ),
        'all_items'          => __( 'All Cases' ),
        'search_items'       => __( 'Search Cases' ),
        'parent_item_colon'  => __( 'Parent Cases:' ),
        'not_found'          => __( 'No Cases found.' ),
        'not_found_in_trash' => __( 'No Cases found in Trash.' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cases' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
    );
    
    register_post_type( 'cases', $args );
}
add_action( 'init', 'custom_post_type_cases' );
