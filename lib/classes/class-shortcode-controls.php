<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Class-Shortcode-Controls.php
 *
 * A form is simply not a form without the proper controls. Lets begin defining and
 * building each of the controls that will be made available within our plugin.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

class Dork_Shortcodes_Controls {

	/**
	 * Class constructor.
	 *
	 * @since v1.0.0
	 */

	public function __construct() {}


	/**
	 * Start building the output for each of the controls that will be available
	 * within this plugin. We will be accepting the form variables and using those to
	 * populate the data needed for each control.
	 *
	 * @since v1.0.0
	 */

	public function generate_controls( $pname, $desc, $key, $type, $std, $options ) {

		// Create our output
		$output = '';

		// Begin building the controls
		switch ( $type ) {


			/**
			 * Build our custom text control.
			 *
			 * @since v1.0.0
			 */

			case 'text':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-text">' . esc_html( $pname ) . '</label>';
				$output .= '<input type="text" id="' . esc_attr( $key ) . '-text" name="' . esc_attr( $pname ) . '" placeholder="' . esc_attr( $std ) . '" autocomplete="off" />';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom textarea control.
			 *
			 * @since v1.0.0
			 */

			case 'textarea':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-textarea">' . esc_html( $pname ) . '</label>';
				$output .= '<textarea id="' . esc_attr( $key ) . '-textarea" name="' . esc_attr( $pname ) . '" rows="5" placeholder="' . esc_attr( $std ) . '" autocomplete="off"></textarea>';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom select control
			 *
			 * @since v1.0.0
			 */

			case 'checkbox':
				$output .= '<div class="dork-checkbox-field">';
				$checked = ( 1 == $std ) ? ' checked' : '';
				$output .= '<input type="checkbox" id="' . esc_attr( $key ) . '-checkbox" name="' . esc_attr( $pname ) . '" autocomplete="off"' . esc_attr( $checked ) . ' />';
				$output .= '<label for="' . esc_attr( $key ) . '-checkbox">' . esc_html( $pname ) . '</label>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom select control
			 *
			 * @since v1.0.0
			 */

			case 'select':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-select">' . esc_html( $pname ) . '</label>';
				$output .= '<select id="' . esc_attr( $key ) . '-select" autocomplete="off">';
				$output .= '<option value="">' . esc_html__( 'Choose One:', '__shortcodes__' ) . '</option>';

				if ( ! empty( $options ) && is_array( $options ) ) {

					foreach ( $options as $option_id => $option ) {

						$selected = ( ( $option_id == $std ) ? ' selected' : '' );
						$output .= '<option value="' . esc_attr( $option_id ) . '"' . esc_attr( $selected ) . '>' . esc_html( ':: ' . $option ) . '</option>';

					} // End foreach

				} // End if

				$output .= '</select>';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom color picker control.
			 *
			 * @since v1.0.0
			 */

			case 'color':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-color">' . esc_html( $pname ) . '</label>';
				$output .= '<input type="text" id="' . esc_attr( $key ) . '-text" class="dork-color-picker" name="' . esc_attr( $pname ) . '" value="' . esc_attr( $std ) . '" autocomplete="off" />';
				$output .= '<div class="color-picker-preview"><i class="icon circle"></i></div>';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom range slider control.
			 *
			 * @since v1.0.0
			 */

			case 'slider':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-slider">' . esc_html( $pname ) . '</label>';
				$output .= '<div id="' . esc_attr( $key ) . '-slider" class="dork-range-slider" data-start="' . esc_attr( $std ) . '"></div>';
				$output .= '<span id="' . esc_attr( $key ) . '-slider-value" class="range-slider-value"></span>';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom color select control.
			 *
			 * @since v1.0.0
			 */

			case 'color-select':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-color-select">' . esc_html( $pname ) . '</label>';
				$output .= '<ul id="' . esc_attr( $key ) . '-color-select" class="dork-color-select" autocomplete="off">';

				$output .= '<li class="icon-select-option selected" data-id="alert-muted"><i class="dork-icon-circle icon-muted"></i>' . __( 'Muted / Grey', '__shortcodes__' ) . '</li>';
				$output .= '<li class="icon-select-option" data-id="alert-info"><i class="dork-icon-circle icon-info"></i>' . __( 'Info / Blue', '__shortcodes__' ) . '</li>';
				$output .= '<li class="icon-select-option" data-id="alert-success"><i class="dork-icon-circle icon-success"></i>' . __( 'Success / Green', '__shortcodes__' ) . '</li>';
				$output .= '<li class="icon-select-option" data-id="alert-warning"><i class="dork-icon-circle icon-warning"></i>' . __( 'Warning / Yellow', '__shortcodes__' ) . '</li>';
				$output .= '<li class="icon-select-option" data-id="alert-danger"><i class="dork-icon-circle icon-danger"></i>' . __( 'Danger / Red', '__shortcodes__' ) . '</li>';
				$output .= '<li class="icon-select-option" data-id="alert-inverted"><i class="dork-icon-circle icon-inverted"></i>' . __( 'Inverted / Black', '__shortcodes__' ) . '</li>';

				$output .= '</ul>';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom icon select control
			 *
			 * @since v1.0.0
			 */

			case 'icon-select':
				$output .= '<div class="dork-control-field">';
				$output .= '<label for="' . esc_attr( $key ) . '-icon-select">' . esc_html( $pname ) . '</label>';
				$output .= '<ul id="' . esc_attr( $key ) . '-icon-select" class="dork-icon-select" autocomplete="off">';

				// Access our icon array
				$icons = ( function_exists( 'dork_shortcodes_icons' ) ? dork_shortcodes_icons() : '' );

				// Verify that icons exists before continuing
				if ( ! empty( $icons ) && is_array( $icons ) ) {

					foreach ( $icons as $icon_id => $icon ) {

						// Determine the default selected item
						$selected = ( $icon_id == $std ) ? 'selected' : '';

						// Allow user the ability to not choose an icon
						$icon_red = '';
						if ( 'no-icon' == $icon_id ) { $icon_red = ' icon-red'; $selected = ' selected'; }

						// Generate the individual options for each icon
						$output .= '<li class="icon-select-option ' . esc_attr( $icon_red ) . esc_attr( $selected ) . '" data-id="' . esc_attr( $icon_id ) . '"><i class="dork-icon ' . esc_attr( $icon_id ) . '"></i>' . esc_html( $icon ) . '</li>';

					} // End foreach

				} // End if

				$output .= '</ul>';
				$output .= '<div class="control-field-desc">' . esc_html( $desc ) . '</div>';
				$output .= '<div class="clear"></div>';
				$output .= '</div>';
				break;


			/**
			 * Build our custom spacer control.
			 *
			 * @since v1.0.0
			 */

			case 'spacer':
				$output .= '<hr class="dork-control-spacer" />';
				break;

		} // End switch()

		// Return our control output to make them work
		return $output;

	} // End generate_controls()

} // End Dork_Shortcodes_Controls