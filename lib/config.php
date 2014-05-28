<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Error! Unauthorized access is denied...!' ); }

/**
 * Config.php
 *
 * We need options and lots of them! Lets get started by creating our configuration
 * file for the available shortcodes. Every option you see on one of the shortcode
 * forms was born right here...ahhh.
 *
 * @package Dork Shortcodes
 * @author ThemeDork <dork@themedork.com>
 * @copyright 2014 ThemeDork
 * @link http://www.themedork.com
 * @since v1.0.0
 */

if ( ! function_exists( 'dork_shortcodes_config' ) ) {

	function dork_shortcodes_config() {

		/**
		 * Accordion shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-accordion'] = array(
			'name'   => __( 'Accordion', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'items' => array(
					'std'     => '3',
					'name'    => __( 'Number of Accordion Items', '__shortcodes__' ),
					'desc'    => __( 'Select the number of accordion items that you would like to create. You can always add more later, should you choose to do so.', '__shortcodes__' ),
					'key'     => 'accordion-items',
					'type'    => 'select',
					'options' => array(
						'1'  => __( 'One Item', '__shortcodes__' ),
						'2'  => __( 'Two Items', '__shortcodes__' ),
						'3'  => __( 'Three Items', '__shortcodes__' ),
						'4'  => __( 'Four Items', '__shortcodes__' ),
						'5'  => __( 'Five Items', '__shortcodes__' ),
						'6'  => __( 'Six Items', '__shortcodes__' ),
						'7'  => __( 'Seven Items', '__shortcodes__' ),
						'8'  => __( 'Eight Items', '__shortcodes__' ),
						'9'  => __( 'Nine Items', '__shortcodes__' ),
						'10' => __( 'Ten Items', '__shortcodes__' ),
					),
				),
				'basic' => array(
					'std'  => 0,
					'name' => __( 'Basic accordion with no background or borders?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'accordion-basic',
					'type' => 'checkbox',
				),
				'rounded' => array(
					'std'  => 1,
					'name' => __( 'Round the corners of this accordion?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'accordion-rounded',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'accordion-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Alert shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-alert'] = array(
			'name'   => __( 'Alert Message', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'heading' => array(
					'std'  => __( 'Hey! Look at me...', '__shortcodes__' ),
					'name' => __( 'Alert Heading', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to add a bold heading to your alert message, you may define the content for that here.', '__shortcodes__' ),
					'key'  => 'alert-heading',
					'type' => 'text',
				),
				'content' => array(
					'std'  => __( 'Please, please don\'t alert me...', '__shortcodes__' ),
					'name' => __( 'Alert Content', '__shortcodes__' ),
					'desc' => __( 'Set the content or message that you would like to display on this alert. Make it important, or have fun with it, the choice is yours.', '__shortcodes__' ),
					'key'  => 'alert-content',
					'type' => 'textarea',
				),
				'icon' => array(
					'std'  => 'no-icon',
					'name' => __( 'Alert Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to add a large icon to the left of your alert heading and content, please choose one here.', '__shortcodes__' ),
					'key'  => 'alert-icon',
					'type' => 'icon-select',
				),
				'dismiss' => array(
					'std'  => 1,
					'name' => __( 'Allow user to dismiss alert?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'alert-dismiss',
					'type' => 'checkbox',
				),
				'compact' => array(
					'std'  => 0,
					'name' => __( 'Keep this alert compact?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'alert-compact',
					'type' => 'checkbox',
				),
				'shadow' => array(
					'std'  => 1,
					'name' => __( 'Add a shadow to the alert?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'alert-dismiss',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'pre-color' => array(
					'std' => '',
					'name' => __( 'Alert Color Schemes', '__shortcodes__' ),
					'desc' => __( 'If you would rather not choose custom custom colors, you can select from a pre-defined color scheme here.', '__shortcodes__' ),
					'key'  => 'alert-pre-color',
					'type' => 'select',
					'options' => array(
						'info' => __( 'Info Alert / Blue', '__shortcodes__' ),
						'success' => __( 'Success Alert / Green', '__shortcodes__' ),
						'warning' => __( 'Warning Alert / Yellow', '__shortcodes__' ),
						'error' => __( 'Error Alert / Red', '__shortcodes__' ),
					),
				),
				'color' => array(
					'std'  => '#E5E5E5',
					'name' => __( 'Alert Background Color', '__shortcodes__' ),
					'desc' => __( 'Choose a custom background color for your alert message. This will only work if you have not chosen a pre-defined color scheme above.', '__shortcodes__' ),
					'key'  => 'alert-color',
					'type' => 'color',
				),
				'font-color' => array(
					'std' => '#555555',
					'name' => __( 'Alert Font Color', '__shortcodes__' ),
					'desc' => __( 'Choose a custom font color for your alert message. This will only work if you have not chosen a pre-defined color scheme above.', '__shortcodes__' ),
					'key'  => 'alert-font-color',
					'type' => 'color',
				),
				'size' => array(
					'std'     => 'default',
					'name'    => __( 'Alert Size', '__shortcodes__' ),
					'desc'    => __( 'Choose a pre-defined size for your alert message. This primarily affects the font size, allowing for more visibility.', '__shortcodes__' ),
					'key'     => 'alert-size',
					'type'    => 'select',
					'options' => array(
						'small'   => __( 'Small Alert', '__shortcodes__' ),
						'default' => __( 'Default Alert', '__shortcodes__' ),
						'large'   => __( 'Large Alert', '__shortcodes__' ),
						'huge'    => __( 'Huge Alert', '__shortcodes__' ),
						'massive' => __( 'Massive Alert', '__shortcodes__' ),
					),
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'alert-class',
					'type' => 'text',
				),
			)
		);


		// Return our shortcode configuration array
		return $dork_shortcodes;

	} // End dork_shortcodes_config()

} // End if