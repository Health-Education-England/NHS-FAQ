<?php

namespace NHS_FAQ\ADMIN\Custom_Taxonomy;

add_action( 'init', __NAMESPACE__ . '\faq_categories' );

// Register Custom Taxonomy
function faq_categories() {

	$labels = array(
		'name'                       => _x( 'FAQ Categories', 'Taxonomy General Name', 'nhs_faq' ),
		'singular_name'              => _x( 'FAQ Category', 'Taxonomy Singular Name', 'nhs_faq' ),
		'menu_name'                  => __( 'FAQ Categories', 'nhs_faq' ),
		'all_items'                  => __( 'All Items', 'nhs_faq' ),
		'parent_item'                => __( 'Parent Item', 'nhs_faq' ),
		'parent_item_colon'          => __( 'Parent Item:', 'nhs_faq' ),
		'new_item_name'              => __( 'New Item Name', 'nhs_faq' ),
		'add_new_item'               => __( 'Add New Item', 'nhs_faq' ),
		'edit_item'                  => __( 'Edit Item', 'nhs_faq' ),
		'update_item'                => __( 'Update Item', 'nhs_faq' ),
		'view_item'                  => __( 'View Item', 'nhs_faq' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'nhs_faq' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'nhs_faq' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'nhs_faq' ),
		'popular_items'              => __( 'Popular Items', 'nhs_faq' ),
		'search_items'               => __( 'Search Items', 'nhs_faq' ),
		'not_found'                  => __( 'Not Found', 'nhs_faq' ),
		'no_terms'                   => __( 'No items', 'nhs_faq' ),
		'items_list'                 => __( 'Items list', 'nhs_faq' ),
		'items_list_navigation'      => __( 'Items list navigation', 'nhs_faq' ),
	);
	$rewrite = array(
		'slug'                       => 'faq',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);

	register_taxonomy( 'faq_categories', array( 'faqs' ), $args );

}