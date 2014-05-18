<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Class-Dork-Shortcodes.php
 *
 * Primary class for the Dork Shortcodes plugin. This class contains most of the
 * "magic" that gets the wheels spinning. We will be performing a variety of actions
 * ranging from registering our meta box to building our shortcode form, so hang on
 * to your hats...
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

class Dork_Shortcodes {

	private $config;
	private $fields;
	private $load_fields;
	public $shortcodes = array();
	public $pname;
	public $desc;
	public $key;
	public $type;
	public $std;
	public $options;
	private $load_error;

	/**
	 * Class constructor. The heart of the Dork Shortcodes class, if this stops running
	 * we might as well just head out for coffee.
	 *
	 * @since v1.0.0
	 */

	public function __construct() {

		// Die if user does not have the necessary privileges
		if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {

			return;

		} // End if

		// Verify that our shortcode configuration file and the corresponding function exist
		if ( file_exists( DORK_SHORTCODES_DIR . '/lib/config.php' ) && function_exists( 'dork_shortcode_config' ) ) {

			// Get our shortcode configuration options
			$this->config = dork_shortcode_config();

			// Get the array of shortcodes if available
			$this->shortcodes = ( ( ! empty( $this->config ) ) ? $this->config : '' );

			// Include our shortcode form and fields
			require_once( DORK_SHORTCODES_DIR . '/lib/classes/class-shortcode-form.php' );

		} else {

			// Error if unable to locate shortcode config file
			$this->load_error = esc_html__( 'Error! Unable to locate the shortcode configuration file.', '__shortcodes__' );

		} // End if

		// Verify that our shortcode form and fields file exist and that the class has been loaded
		if ( file_exists( DORK_SHORTCODES_DIR . '/lib/classes/class-shortcode-form.php' ) && class_exists( 'Dork_Shortcode_Form' ) ) {

			// Instantiate our shortcode form class
			$this->fields = new Dork_Shortcode_Form();


		} // End if

		// Register and enqueue our admin scripts and styles
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ) );

		// Register the meta box that will contain our shortcode form
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );

	} // End __construct()


	/**
	 * Register the meta box that we will use to contain our main shortcode form. Using
	 * a meta box allows us to avoid the use of popups and modal windows, yay!
	 *
	 * @since v1.0.0
	 */

	public function add_meta_box() {

		// Add our meta box to WordPress posts
		add_meta_box( 'dork_shortcode_manager', __( 'Shortcode Manager', '__sclang__' ), array( $this, 'build_form' ), 'post', 'normal', 'high', null );

		// Add our meta box to WordPress pages
		add_meta_box( 'dork_shortcode_manager', __( 'Shortcode Manager', '__sclang__' ), array( $this, 'build_form' ), 'page', 'normal', 'high', null );

	} // End add_meta_box()


	/**
	 * Begin building the form to display our shortcode views. Each view will contain
	 * that shortcodes controls and information. Lets get started...
	 *
	 * @since v1.0.0
	 */

	public function build_form() {

		?>

		<div id="dork-shortcode-form">

			<div class="shortcode-select-section">

				<div class="shortcode-select-field">

					<span class="shortcode-config-error"><?php echo esc_html( $this->load_error ); ?></span>

					<?php if ( ! empty( $this->shortcodes ) && is_array( $this->shortcodes ) ) { ?>

						<label for="shortcode-select"></label>

						<select id="shortcode-select" autocomplete="off">

							<option value=""></option>

							<?php foreach ( $this->shortcodes as $shortcode_id => $shortcode ) { ?>

								<?php $name = ( isset( $shortcode['name'] ) && ! empty( $shortcode['name'] ) ? $shortcode['name'] : '' ); ?>

								<option value="<?php echo esc_attr( $shortcode_id ); ?>">:: <?php echo esc_html( $name ); ?></option>

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
							<?php } ?>

							<?php if ( isset( $shortcode['params'] ) ) { ?>

								<?php foreach ( $shortcode['params'] as $param_id => $param ) { ?>

									<?php
									// Set default value for our parameters to avoid errors
									$pname   = ( isset( $param['name'] ) ? $param['name'] : '' );
									$desc    = ( isset( $param['desc'] ) ? $param['desc'] : '' );
									$key     = ( isset( $param['key'] ) ? $param['key'] : '' );
									$type    = ( isset( $param['type'] ) ? $param['type'] : 'text' );
									$std     = ( isset( $param['std'] ) ? $param['std'] : '' );
									$options = ( isset( $param['options'] ) ? $param['options'] : '' );
									?>

									<?php echo $this->fields->generate_fields( $pname, $desc, $key, $type, $std, $options ); ?>

								<?php } // End foreach ?>

							<?php } // End if ?>

						</div>

					<?php } // End foreach ?>

				<?php } // End if ?>

			</div><!-- End .shortcode-content -->

			<div class="shortcode-content-toolbar">

				<div class="shortcode-toolbar-support">

					<a class="submitdelete deletion" href="<?php echo esc_attr( DORK_SHORTCODES_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Read the Documentation', '__shortcodes__' ); ?></a>

				</div><!-- End .shortcode-toolbar-support -->

				<div class="shortcode-toolbar-submit">

					<p class="shortcode-toolbar-success"><?php esc_html_e( 'Success! Your shortcode has been sent to the editor...', '__shortcodes__' ); ?></p>

					<input type="submit" autocomplete="off" id="shortcode-submit" name="shortcode-submit" class="button button-primary" value="<?php esc_attr_e( 'Insert Shortcode', '__shortcodes__' ); ?>" disabled>

				</div><!-- End .shortcode-toolbar-submit -->

				<div class="clear"></div>

			</div><!-- End .shortcode-content-toolbar -->

		</div><!-- End #dork-shortcode-box -->

		<?php

	} // End build_form()


	/**
	 * Register and enqueue our admin scripts and styles. These scripts are needed to
	 * provide both beauty and functionality for our shortcode form, and will only be
	 * enqueued on the pages they are needed. Avoid conflict man...
	 *
	 * @since v1.0.0
	 */

	public function admin_enqueue() {

		// Access $pagenow globals
		global $pagenow;

		// Only enqueue scripts when needed to avoid conflict
		if ( is_admin() && $pagenow == 'post-new.php' || $pagenow == 'post.php' ) {

			// Register admin styles
			wp_register_style( 'font-icons', DORK_SHORTCODES_URI . '/assets/css/font-icons.css', null, time(), 'all' );
			wp_register_style( 'shortcode-form', DORK_SHORTCODES_URI . '/assets/css/shortcode-form.css', null, time(), 'all' );


			// Register admin scripts
			wp_register_script( 'easing', DORK_SHORTCODES_URI . '/assets/js/jquery.easing.1.3.js', array( 'jquery' ), time(), true );
			wp_register_script( 'select2', DORK_SHORTCODES_URI . '/assets/js/select2.min.js', array( 'jquery' ), time(), true );
			wp_register_script( 'image-uploader', DORK_SHORTCODES_URI . '/assets/js/media-upload.js', array( 'jquery' ), time(), true );
			wp_register_script( 'shortcode-form', DORK_SHORTCODES_URI . '/assets/js/shortcode-form.js', array( 'jquery', 'wp-color-picker' ), time(), true );

			// Enqueue admin styles
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_style( 'font-icons' );
			wp_enqueue_style( 'shortcode-form' );

			// Enqueue admin scripts
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'easing' );
			wp_enqueue_script( 'select2' );
			wp_enqueue_script( 'image-uploader' );
			wp_enqueue_script( 'shortcode-form' );

			// Localize jQuery
			wp_localize_script( 'shortcode-form', 'dork', array( 'plugin_path' => DORK_SHORTCODES_URI ) );

		} // End if

	} // End admin_enqueue()

} // End Dork_Shortcodes