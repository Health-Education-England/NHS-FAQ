<?php

namespace NHS_FAQ\ADMIN\Template_Loader;


add_filter('template_include',  __NAMESPACE__ . '\faq_template');

function faq_template( $template ) {


  	if ( is_post_type_archive('faqs') || is_tax('faq_categories') ) {
 		
		return \NHS_FAQ\SetUp\get_plugin_directory() . '/public/templates/faq-archive.php';;

  	}else{
  		return $template;
  	}

	
}