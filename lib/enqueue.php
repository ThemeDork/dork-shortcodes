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


/**
 * Register and enqueue admin scripts and styles. These will only be used within the
 * admin portion of WordPress, no front-end styles here.
 *
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_admin_enqueue' ) ) {

	function dork_shortcodes_admin_enqueue() {

		// Access the $pagenow global
		global $pagenow;

		// No sense in loading scripts where they aren't needed, lets prevent that
		if ( is_admin() && $pagenow == 'post-new.php' || $pagenow == 'post.php' ) {

			// Register our admin styles
			wp_register_style( 'icon-font', DORK_SHORTCODES_URI . '/assets/css/icon-font.css', null, time(), 'all' );
			wp_register_style( 'shortcode-form', DORK_SHORTCODES_URI . '/assets/css/shortcode-form.css', null, time(), 'all' );

			// Register our admin scripts
			wp_register_script( 'shortcode-form', DORK_SHORTCODES_URI . '/assets/js/shortcode-form.js', array( 'jquery' ), time(), true );

			// Enqueue our admin styles
			wp_enqueue_style( 'icon-font' );
			wp_enqueue_style( 'shortcode-form' );

			// Enqueue our admin scripts
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'shortcode-form' );

		} // End if

	} // End dork_shortcodes_admin_enqueue()

	// Enqueue the scripts and styles
	add_action( 'admin_enqueue_scripts', 'dork_shortcodes_admin_enqueue' );

} // End if


/**
 * Register and enqueue front-end scripts and styles. These will only be used within
 * the front-end portion of the theme, no admin styles here.
 *
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_front_enqueue' ) ) {

	function dork_shortcodes_front_enqueue() {

		// Register our front-end styles
		wp_register_style( 'dork-shortcodes', DORK_SHORTCODES_URI . '/assets/css/dork-shortcodes.css', null, time(), 'all' );

		// Register our front-end scripts
		wp_register_script( 'dork-shortcodes', DORK_SHORTCODES_URI . '/assets/js/dork-shortcodes.js', array( 'jquery' ), time(), true );

		// Enqueue our front-end styles
		wp_enqueue_style( 'dork-shortcodes' );

		// Enqueue our front-end scripts
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'dork-shortcodes' );

	} // End dork_shortcodes_front_enqueue()

	// Enqueue the scripts and styles
	add_action( 'wp_enqueue_scripts', 'dork_shortcodes_front_enqueue' );

} // End if