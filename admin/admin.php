<?php

namespace NHS_FAQ\ADMIN;

/**
 * Load FAQ CPT
 */

require_once 'inc/faq-post-type.php';

/**
 * Load FAQ Taxonomies
 */

require_once 'inc/faq-taxonomies.php';

/**
 * Load FAQ Archive Template
 */

require_once 'inc/faq-template-loader.php';

/**
 * Filter FAQ
 */

require_once 'inc/faq_title.php';


/**
 * Update screen options so Custom Tax is visible by default
 */

require_once 'inc/faq-screen-options.php';