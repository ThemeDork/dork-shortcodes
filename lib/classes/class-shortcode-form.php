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

	// Shortcode controls
	private $controls;

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

		// Verify that our shortcode controls exist and have been loaded
		if ( file_exists( DORK_SHORTCODES_DIR . '/lib/classes/class-shortcode-controls.php' ) && class_exists( 'Dork_Shortcodes_Controls' ) ) {

			// Instantiate our shortcode controls
			$this->controls = new Dork_Shortcodes_Controls();

		} // End if

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

					<p><span class="shortcode-config-error"><?php echo esc_html( $this->error ); ?></span></p>

					<?php if ( ! empty( $this->shortcodes ) && is_array( $this->shortcodes ) ) { ?>

						<label for="shortcode-select"></label>

						<select id="shortcode-select" autocomplete="off">

							<option value="" selected="selected"><?php esc_html_e( 'Choose a Shortcode', '__shortcodes' ); ?></option>

							<?php foreach ( $this->shortcodes as $shortcode_id => $shortcode ) { ?>

								<?php $name = ( ( isset( $shortcode['name'] ) ) && ! empty( $shortcode['name'] ) ? $shortcode['name'] : '' ); ?>

								<option value="<?php echo esc_attr( $shortcode_id ); ?>"><?php echo esc_html( ':: ' . $name ); ?></option>

							<?php } // End foreach ?>

						</select><!-- End #shortcode-select -->

					<?php } // End if ?>

				</div><!-- End .shortcode-select-field -->

			</div><!-- End .shortcode-select-section -->

			<div class="shortcode-content">

				<?php if ( ! empty( $this->shortcodes ) && is_array( $this->shortcodes ) ) { ?>

					<?php foreach ( $this->shortcodes as $shortcode_id => $shortcode ) { ?>

						<div id="dork-<?php echo esc_attr( $shortcode_id ); ?>-form" class="shortcode-content-display" style="display: none;">

							<?php if ( isset( $shortcode['desc'] ) && ! empty ( $shortcode['desc'] ) ) { ?>

								<p class="dork-shortcode-intro"><?php echo $shortcode['desc']; ?></p>

							<?php } // End if ?>

							<?php if ( isset( $shortcode['params'] ) ) { ?>

								<?php foreach ( $shortcode['params'] as $param_id => $param ) { ?>

									<?php

									// Set default values for our parameters to avoid errors
									$pname   = ( isset( $param['name'] ) ? $param['name'] : '' );
									$desc    = ( isset( $param['desc'] ) ? $param['desc'] : '' );
									$key     = ( isset( $param['key'] ) ? $param['key'] : '' );
									$type    = ( isset( $param['type'] ) ? $param['type'] : 'text' );
									$std     = ( isset( $param['std'] ) ? $param['std'] : '' );
									$options = ( isset( $param['options'] ) ? $param['options'] : '' );

									?>

									<?php echo $this->controls->generate_controls( $pname, $desc, $key, $type, $std, $options ); ?>

								<?php } // End foreach ?>

							<?php } // End if ?>

						</div><!-- End .shortcode-content-display -->

					<?php } // End foreach ?>

				<?php } // End if ?>

			</div><!-- End .shortcode-content -->

			<div class="shortcode-content-toolbar">

				<div class="shortcode-toolbar-support">

					<a class="submitdelete deletion" href="<?php esc_attr_e( DORK_SHORTCODES_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Read the Documentation', '__shortcodes__' ); ?></a>

				</div><!-- End .shortcode-toolbar-support -->

				<div class="shortcode-toolbar-submit">

					<input type="submit" autocomplete="off" id="shortcode-submit" name="shortcode-submit" class="button button-primary" value="<?php esc_attr_e( 'Insert Shortcode', '__shortcodes__' ); ?>" disabled />

				</div><!-- End .shortcode-toolbar-submit -->

				<div class="clear"></div>

			</div><!-- End .shortcode-content-toolbar -->

		</div><!-- End #dork-shortcode-form -->

		<?php

	} // End generate_form()

} // End Dork_Shortcodes_Form