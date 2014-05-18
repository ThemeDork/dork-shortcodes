<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Enqueue.php
 *
 * Begin registering and enqueueing all of the scripts and styles that we need to make
 * our plugin both functional and beautiful...We will be preparing the admin as well as
 * front-end scripts, lets get rolling...
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_admin_enqueue' ) ) {

	function dork_shortcodes_admin_enqueue() {

		// Access the $pagenow global
		global $pagenow;

		// No sense in loading scripts where they aren't needed, lets prevent that
		if ( is_admin() && $pagenow == 'post-new.php' || $pagenow == 'post.php' ) {

			// Register our admin styles
			wp_register_style( 'shortcode-form', DORK_SHORTCODES_URI . '/assets/css/shortcode-form.css', null, time(), 'all' );

			// Enqueue our admin styles
			wp_enqueue_style( 'shortcode-form' );

		} // End if

	} // End dork_shortcodes_admin_enqueue()

	// Now we need to send it to WordPress
	add_action( 'admin_enqueue_scripts', 'dork_shortcodes_admin_enqueue' );

} // End if