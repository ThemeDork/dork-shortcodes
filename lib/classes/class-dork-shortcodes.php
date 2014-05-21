<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Class-Dork-Shortcodes.php
 *
 * Primary class for the Dork Shortcodes plugin. This file contains most of the magic
 * that gets us up and running. There is a lot going on, so hang on to your hats...
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

class Dork_Shortcodes {

	// Shortcode configuration
	private $config;

	// Shortcode array
	protected $shortcode_arr = [];

	// Config errors
	protected $config_error;

	/**
	 * Class constructor. The heart, if you will, gets all of our class methods ready
	 * for duty, if this quits working we might as well head out for coffee.
	 *
	 * @since v1.0.0
	 */

	public function __construct() {

		// Before we do anything, lets check the current users privileges
		if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {

			return;

		} // End if

		// No point in loading the configuration file if it doesn't exist, lets check now
		if ( file_exists( DORK_SHORTCODES_DIR . '/lib/config.php' ) && function_exists( 'dork_shortcodes_config' ) ) {

			// Lets get our shortcode configuration options
			$this->config = dork_shortcodes_config();

			// If there are any shortcodes available, lets go ahead and get them
			$this->shortcode_arr = ( ( ! empty( $this->config ) ) ? $this->config : '' );

		} else {

			// Generate an error if the configuration file was not found
			$this->config_error = __( 'Hot diggity dog...ya broke it! That darn config file has gone missing!', '__shortcodes__' );

		} // End if / else

		// Setup the meta boxes that will contain our shortcode form
		add_action( 'add_meta_boxes', array( $this, 'setup_meta_boxes' ) );

	} // End __construct()


	/**
	 * Register the meta boxes that we will be using to display our shortcode forms
	 * in. Using a meta box means that we don't have to rely on popups and modal
	 * windows...yay!
	 *
	 * @since v1.0.0
	 */

	public function setup_meta_boxes() {

		// Add the meta box to WordPress posts
		add_meta_box( 'dork_shortcodes_manager', __( 'Shortcode Manager', '__shortcodes__' ), array( $this, 'form_setup' ), 'post', 'normal', 'high', null );

		// Add the meta box to WordPress pages
		add_meta_box( 'dork_shortcodes_manager', __( 'Shortcode Manager', '__shortcodes__' ), array( $this, 'form_setup' ), 'page', 'normal', 'high', null );

	} // End setup_meta_boxes()


	/**
	 * Begin pulling everything together to get this plugin up and running. We will be
	 * loading the shortcode form class in addition to the shortcode controls class.
	 * With their powers combined, we will have a super form!
	 *
	 * @since v1.0.0
	 */

	public function form_setup() {

		// No form should be without controls, lets get those up and running
		if ( ! class_exists( 'Dork_Shortcodes_Controls' ) && file_exists( DORK_SHORTCODES_DIR . '/lib/classes/class-shortcode-controls.php' ) ) {

			// Include the shortcode controls class
			include_once( DORK_SHORTCODES_DIR . '/lib/classes/class-shortcode-controls.php' );

			// Instantiate the class
			$shortcode_controls = new Dork_Shortcodes_Controls();

		} // End if

		// What would a form be without a form? Lets set it up now
		if ( ! class_exists( 'Dork_Shortcodes_Form' ) && file_exists( DORK_SHORTCODES_DIR . '/lib/classes/class-shortcode-form.php' ) ) {

			// Include the shortcode form class
			include_once( DORK_SHORTCODES_DIR . '/lib/classes/class-shortcode-form.php' );

			// Instantiate the class
			$shortcode_form = new Dork_Shortcodes_Form();
			$shortcode_form->generate_form();

		} // End if

	} // End form_setup()

} // End Dork_Shortcodes