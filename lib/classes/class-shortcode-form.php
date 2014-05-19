<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Class-Shortcode-Form.php
 *
 *
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

class Dork_Shortcodes_Form extends Dork_Shortcodes {

	// Config error
	private $error;

	// Shortcodes array
	private $shortcodes;

	/**
	 * Class constructor. The heart, if you will, gets all of our class methods ready
	 * for duty, if this quits working we might as well head out for coffee.
	 *
	 * @since v1.0.0
	 */

	public function __construct() {

		// Access the parent constructor
		parent::__construct();

		// Retrieve our config error, if there is one
		$this->error = $this->config_error;

		// Retrieve our array of shortcodes if available
		$this->shortcodes = $this->shortcode_arr;

	} // End __construct()


	/**
	 * Lets begin building the actual form that the user will use to create and edit
	 * their shortcodes. There are no controls being built here, only the html for the
	 * shortcode form itself.
	 *
	 * @since v1.0.0
	 */

	public function generate_form() {

		// Close Php and begin building this form
		?>

		<div id="dork-shortcode-form">

			<div class="shortcode-select-section">

				<div class="shortcode-select-field">

					<span class="shortcode-config-error"><p><?php echo esc_html( $this->error ); ?></p></span>

					<?php if ( ! empty( $this->shortcodes ) && is_array( $this->shortcodes ) ) { ?>

						<label for="shortcode-select"></label>

						<select id="shortcode-select" autocomplete="off">

							<?php foreach ( $this->shortcodes as $shortcode_id => $shortcode ) { ?>

								<?php $name = ( ( isset( $shortcode['name'] ) ) && ! empty( $shortcode['name'] ) ? $shortcode['name'] : '' ); ?>

								<option value="<?php echo esc_attr( $shortcode_id ); ?>"><?php echo esc_html( ':: ' . $name ); ?></option>

							<?php } // End foreach ?>

						</select><!-- End #shortcode-select -->

					<?php } // End if ?>

				</div><!-- End .shortcode-select-field -->

			</div><!-- End .shortcode-select-section -->

			<div class="shortcode-content">

			</div><!-- End .shortcode-content -->

		</div><!-- End #dork-shortcode-form -->

		<?php

	} // End generate_form()

} // End Dork_Shortcodes_Form