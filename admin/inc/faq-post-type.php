<?php

namespace NHS_FAQ\ADMIN\Custom_Post_Type;


add_action( 'init',  __NAMESPACE__ . '\create_faq_post_type' );


function create_faq_post_type() {
    $faqs_labels = array(
        'name'               => 'FAQs',
        'singular_name'      => 'FAQ',
        'menu_name'          => 'FAQs',
        'name_admin_bar'     => 'FAQs',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New FAQ',
        'new_item'           => 'New FAQ',
        'edit_item'          => 'Edit FAQ',
        'view_item'          => 'View FAQ',
        'all_items'          => 'All FAQs',
        'search_items'       => 'Search FAQs',
        'parent_item_colon'  => 'Parent FAQ',
        'not_found'          => 'No FAQs Found',
        'not_found_in_trash' => 'No FAQs Found in Trash'
    );

    $faqs_args = array(
        'labels'              => $faqs_labels,
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-appearance',
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'         => true,
        'rewrite'             => array( 'slug' => 'faqs' ),
        'query_var'           => true
    );

    register_post_type( 'faqs', $faqs_args );
}


add_action( 'pre_get_posts', __NAMESPACE__ . '\dont_paginate_faqs' );

function dont_paginate_faqs( $query ) {

    // Not a query for an admin page.
    // It's the main query for a faqs archive.

    if ( ! is_admin() && is_archive( 'faqs' ) && $query->is_main_query() ) {
        
        // Let's change the query for faqs archives.
        $query->set( 'posts_per_page', -1 );
    }
}
