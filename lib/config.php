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
			'name'   => __( 'Accordion Shortcode', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'count' => array(
					'std'     => '3',
					'name'    => __( 'Number of Accordion Items', '__shortcodes__' ),
					'desc'    => __( 'Choose the number of items to add to your accordion. You can always add more later.', '__shortcodes__' ),
					'key'     => 'accordion-count',
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
				'icon' => array(
					'std'  => 'no-icon',
					'name' => __( 'Accordion Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. Choose an icon to display on your accordion items.', '__shortcodes__' ),
					'key'  => 'accordion-icon',
					'type' => 'icon-select',
				),
				'basic' => array(
					'std'  => 0,
					'name' => __( 'Keep basic, no borders or backgrounds?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'accordion-basic',
					'type' => 'checkbox',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__shortcodes__' ),
					'name' => __( 'Custom CSS Class', '__shortcodes__' ),
					'desc' => __( 'Optional. Define a custom class that can be used to apply your own styles to this element.', '__shortcodes__' ),
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
			'name'   => __( 'Alert Messages', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'heading' => array(
					'std'  => __( 'My Super Awesome Heading!', '__shortcodes__' ),
					'name' => __( 'Alert Heading', '__shortcodes__' ),
					'desc' => __( 'Optional. Although not required, the alert heading offers a great way for you to catch the users attention and really make an impact.', '__shortcodes__' ),
					'key'  => 'alert-heading',
					'type' => 'text',
				),
				'content' => array(
					'std'  => __( 'Some like, totally informative content, dude...', '__shortcodes__' ),
					'name' => __( 'Alert Content', '__shortcodes__' ),
					'desc' => __( 'Create the content that will displayed within your alert message. You are welcome to put anything here such as a site notification, short informative message, public service announcement or whatever else you may dream up.', '__shortcodes__' ),
					'key'  => 'alert-content',
					'type' => 'textarea',
				),
				'color' => array(
					'std'  => 'muted',
					'name' => __( 'Alert Color', '__shortcodes__' ),
					'desc' => __( 'Choose the color, or style, of your new alert message. You have several options to choose from, so choose the one that best suits your alerts purpose.', '__shortcodes__' ),
					'key'  => 'alert-color',
					'type' => 'color-select',
				),
				'icon' => array(
					'std'  => 'no-icon',
					'name' => __( 'Alert Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to add a custom icon to your new alert message, you may choose one here. The icon will be displayed to the left of your alert content.', '__shortcodes__' ),
					'key'  => 'alert-icon',
					'type' => 'icon-select',
				),
				'size' => array(
					'std'     => 'alert-default',
					'name'    => __( 'Alert Size', '__shortcodes__' ),
					'desc'    => __( 'Choose a size that best fits your content or the purpose of your alert message. There are several pre-defined sizes to choose from, the choice is yours.', '__shortcodes__' ),
					'key'     => 'alert-size',
					'type'    => 'select',
					'options' => array(
						'alert-small'   => __( 'Small Alert', '__shortcodes__' ),
						'alert-default' => __( 'Default Alert', '__shortcodes__' ),
						'alert-large'   => __( 'Large Alert', '__shortcodes__' ),
						'alert-huge'    => __( 'Huge Alert', '__shortcodes__' ),
						'alert-massive' => __( 'Massive Alert', '__shortcodes__' ),
					),
				),
				'dismiss' => array(
					'std'  => 1,
					'name' => __( 'Allow user to dismiss alert?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'alert-dismiss',
					'type' => 'checkbox',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__shortcodes__' ),
					'name' => __( 'Custom CSS Class', '__shortcodes__' ),
					'desc' => __( 'Optional. Define a custom class that can be used to apply your own styles to this element.', '__shortcodes__' ),
					'key'  => 'alert-class',
					'type' => 'text',
				),
			)
		);

		// Return our shortcode configuration array
		return $dork_shortcodes;

	} // End dork_shortcodes_config()

} // End if