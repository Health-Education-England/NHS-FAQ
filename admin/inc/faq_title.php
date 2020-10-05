<?php

namespace NHS_FAQ\ADMIN\FilterTitle;


add_filter( 'get_the_archive_title', __NAMESPACE__ . '\filter_title' );


function filter_title( $title ) {    

    if ( is_tax( 'faq_categories' ) ) { 
        
        $title = sprintf( __( 'FAQs - %1$s', 'nhs_faq' ), single_term_title( '', false ) );

    } elseif ( is_post_type_archive( 'faqs' ) ) {
       
        $title = post_type_archive_title( '', false );
    
    }
    
    return $title;    
}