<?php

namespace NHS_FAQ\ADMIN\FilterTitle;


add_filter( 'get_the_archive_title', __NAMESPACE__ . '\filter_title' );


function filter_title( $title ) {    

    if ( is_tax( 'faq_categories' ) ) { 
        
        $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );

    } elseif ( is_post_type_archive( 'faq_categories' ) ) {

    	var_dump('assdfsdfsdfsd');
        
        $title = post_type_archive_title( '', false );
    
    }
    
    return $title;    
}