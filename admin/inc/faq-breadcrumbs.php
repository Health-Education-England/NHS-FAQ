<?php


namespace NHS_FAQ\ADMIN\BreadCrumbs;



add_filter( 'nightingale_modify_breadcrumb', __NAMESPACE__ . '\add_to_breadcrumbs', 20, 1 );


function add_to_breadcrumbs( $trail ) {


	if( ! ( is_post_type_archive( 'faqs' ) || is_tax( 'faq_categories' )  )  ) return $trail;


	if ( is_post_type_archive( 'faqs' ) ){

		return '<li class="nhsuk-breadcrumb__item">' . esc_html( 'FAQs', 'nhs_cs' ) . '</li>';

	} elseif ( is_tax( 'faq_categories' ) ) {

		global $wp_query;


		$trail = '<li class="nhsuk-breadcrumb__item"><a href="' . esc_url( get_post_type_archive_link( 'faqs' ) ) . '">' . esc_html( 'FAQs', 'nhs_cs' ) . '</a></li>';
		$trail .= '<li class="nhsuk-breadcrumb__item">' . esc_html( $wp_query->get_queried_object()->name ) . '</li>';

		return $trail;

	} 

    
}