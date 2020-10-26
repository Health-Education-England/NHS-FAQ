<?php

namespace NHS_FAQ\FRONTEND\RegisterScripts;


add_action( 'wp_enqueue_scripts',  __NAMESPACE__ . '\register_scripts' );


function register_scripts(){


	$js_path = '/public/js';
	$css_path = '/public/css';

	if( is_post_type_archive('faqs') || is_tax('faq_categories') ){

		// Only load on post type page
		wp_enqueue_script( 
	        'nhsfaq_search_js',  
	        \NHS_FAQ\SetUp\get_plugin_url() . $js_path . '/faqsearch.js',
	        array(),
	        filemtime( \NHS_FAQ\SetUp\get_plugin_directory() . $js_path . '/faqsearch.js' ),
	        true
	    );

	    wp_enqueue_style( 
	        'nhsfaq_search_css',  
	        \NHS_FAQ\SetUp\get_plugin_url() . $css_path . '/style.css',
	        array(),
	        filemtime( \NHS_FAQ\SetUp\get_plugin_directory() . $css_path . '/style.css' )
	    );
	}


}