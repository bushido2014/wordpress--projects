<?php
// Define the custom post type
function custom_post_type_practice_areas() {
    $labels = array(
        'name'               => _x( 'Pratice Areas', 'post type general name' ),
        'singular_name'      => _x( 'Pratice Area', 'post type singular name' ),
        'menu_name'          => _x( 'Pratice Areas', 'admin menu' ),
        'name_admin_bar'     => _x( 'Pratice Area', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Pratice Area' ),
        'add_new_item'       => __( 'Add New Pratice Area' ),
        'new_item'           => __( 'New Pratice Area' ),
        'edit_item'          => __( 'Edit Pratice Area' ),
        'view_item'          => __( 'View Pratice Area' ),
        'all_items'          => __( 'All Pratice Areas' ),
        'search_items'       => __( 'Search Pratice Areas' ),
        'parent_item_colon'  => __( 'Parent Pratice Areas:' ),
        'not_found'          => __( 'No Pratice Areas found.' ),
        'not_found_in_trash' => __( 'No Pratice Areas found in Trash.' )
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'practice-areas' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
    );
    
    register_post_type( 'practice_areas', $args );
}
add_action( 'init', 'custom_post_type_practice_areas' );