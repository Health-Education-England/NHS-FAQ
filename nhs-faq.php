<?php
/**
 * Plugin Name: NHS FAQ
 * Plugin URI: https://github.com/Health-Education-England/nhs-jobs
 * Description: NHS FAQ Plugin
 * Version: 1.0.0
 * Author: VeryTwisty
 */


namespace NHS_FAQ\SetUp;


defined( 'ABSPATH' ) || exit;

/**
 * Currently plugin version.
 */
define( 'NHSFAQ_VERSION', '1.0.0' );


/**
 * Gets this plugin's absolute directory path.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return string
 */

function get_plugin_directory() {
    return __DIR__;
}

/**
 * Gets this plugin's URL.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return string
 */

function get_plugin_url() {
    static $plugin_url;

    if ( empty( $plugin_url ) ) {
        $plugin_url = plugins_url( null, __FILE__ );
    }

    return $plugin_url;
}


require_once 'admin/admin.php';

require_once 'public/public.php';