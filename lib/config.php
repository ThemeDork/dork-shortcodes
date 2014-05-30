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
					'key'  => 'alert-shadow',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'pre-color' => array(
					'std'     => '',
					'name'    => __( 'Alert Color Schemes', '__shortcodes__' ),
					'desc'    => __( 'If you would rather not choose custom custom colors, you can select from a pre-defined color scheme here.', '__shortcodes__' ),
					'key'     => 'alert-pre-color',
					'type'    => 'select',
					'options' => array(
						'info'     => __( 'Info Alert / Blue', '__shortcodes__' ),
						'success'  => __( 'Success Alert / Green', '__shortcodes__' ),
						'warning'  => __( 'Warning Alert / Yellow', '__shortcodes__' ),
						'error'    => __( 'Error Alert / Red', '__shortcodes__' ),
						'inverted' => __( 'Inverted Alert / Black', '__shortcodes__' ),
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
					'std'  => '#555555',
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


		/**
		 * Divider shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-divider'] = array(
			'name'   => __( 'Divider', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'text' => array(
					'std' => __( 'The great divide...', '__shortcodes__' ),
					'name' => __( 'Divider Text', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to add some text to your divider, you may define that here.', '__shortcodes__' ),
					'key'  => 'divider-text',
					'type' => 'text',
				),
				'icon' => array(
					'std' => 'no-icon',
					'name' => __( 'Divider Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to add an icon to your divider, you may choose one here. These work with text or by themselves.', '__shortcodes__' ),
					'key'  => 'divider-icon',
					'type' => 'icon-select',
				),
				'style' => array(
					'std' => 'double',
					'name' => __( 'Divider Style', '__shortcodes__' ),
					'desc' => __( 'Choose a style for your divider. There are several to choose from, depending on your preferences.', '__shortcodes__' ),
					'key'  => 'divider-style',
					'type' => 'select',
					'options' => array(
						'single' => __( 'Divider with Single Line', '__shortcodes__' ),
						'double' => __( 'Divider with Double Line', '__shortcodes__' ),
						'dashed' => __( 'Divider with Dashed Line', '__shortcodes__' ),
						'dotted' => __( 'Divider with Dotted Line', '__shortcodes__' ),
						'faded'  => __( 'Divider with Faded Line - No Text or Icons', '__shortcodes__' ),
					),
				),
				'color' => array(
					'std' => '#555555',
					'name' => __( 'Divider Color', '__shortcodes__' ),
					'desc' => __( 'Modify the color of your divider. This will change the divider color only, not text or icons.', '__shortcodes__' ),
					'key' => 'divider-color',
					'type' => 'color',
				),
				'margin-top' => array(
					'std' => '20',
					'name' => __( 'Divider Margin Top', '__shortcodes__' ),
					'desc' => __( 'Adjust the margin, or space, above your new divider. Allows for greater spacing between content.', '__shortcodes__' ),
					'key'  => 'divider-margin-top',
					'type' => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'margin-bottom' => array(
					'std' => '20',
					'name' => __( 'Divider Margin Bottom', '__shortcodes__' ),
					'desc' => __( 'Adjust the margin, or space, below your new divider. Allows for greater spacing between content.', '__shortcodes__' ),
					'key'  => 'divider-margin-bottom',
					'type' => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'divider-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Heading shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-heading'] = array(
			'name'   => __( 'Content Heading', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'text' => array(
					'std'  => __( 'I stand out from the crowd...', '__shortcodes__' ),
					'name' => __( 'Heading Text', '__shortcodes__' ),
					'desc' => __( 'What would you like your content heading to say? You can say anything you like here, its your header.', '__shortcodes__' ),
					'key'  => 'heading-text',
					'type' => 'text',
				),
				'position' => array(
					'std'     => 'center',
					'name'    => __( 'Heading Position', '__shortcodes__' ),
					'desc'    => __( 'Choose how you would like to position your content heading. It can be aligned to the left, center or right.', '__shortcodes__' ),
					'key'     => 'heading-position',
					'type'    => 'select',
					'options' => array(
						'left'   => __( 'Align Heading to the Left', '__shortcodes__' ),
						'center' => __( 'Align Heading to the Center', '__shortcodes__' ),
						'right'  => __( 'Align Heading to the Right', '__shortcodes__' ),
					),
				),
				'size' => array(
					'std'     => 'h3',
					'name'    => __( 'Heading Size', '__shortcodes__' ),
					'desc'    => __( 'Choose a pre-defined size for your content heading. This will increase, or decrease, the font size of your heading.', '__shortcodes__' ),
					'key'     => 'heading-size',
					'type'    => 'select',
					'options' => array(
						'h5' => __( 'Tiny Heading', '__shortcodes__' ),
						'h4' => __( 'Small Heading', '__shortcodes__' ),
						'h3' => __( 'Default Heading', '__shortcodes__' ),
						'h2' => __( 'Large Heading', '__shortcodes__' ),
						'h1' => __( 'Huge Heading', '__shortcodes__' ),
					),
				),
				'style' => array(
					'std'     => 'block',
					'name'    => __( 'Heading Style', '__shortcodes__' ),
					'desc'    => __( 'Pick a style for your content heading. There are a couple styles to choose from based on your preferences and needs.', '__shortcodes__' ),
					'key'     => 'heading-style',
					'type'    => 'select',
					'options' => array(
						'basic'   => __( 'Basic Heading / No Lines or Backgrounds', '__shortcodes__' ),
						'lined'   => __( 'Heading with Single Separator Line', '__shortcodes__' ),
					),
				),
				'color' => array(
					'std'  => '#555555',
					'name' => __( 'Heading Color', '__shortcodes__' ),
					'desc' => __( 'If you would like to modify the color of your heading, you may do so here. This setting will modify the font color of your heading.', '__shortcodes__' ),
					'key'  => 'heading-color',
					'type' => 'color',
				),
				'top-margin' => array(
					'std'  => '20',
					'name' => __( 'Heading Top Margin', '__shortcodes__' ),
					'desc' => __( 'Adjust the margin, or spacing, above your content heading.', '__shortcodes__' ),
					'key'  => 'heading-top-margin',
					'type' => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'bottom-margin' => array(
					'std'  => '20',
					'name' => __( 'Heading Bottom Margin', '__shortcodes__' ),
					'desc' => __( 'Adjust the margin, or spacing, below your content heading.', '__shortcodes__' ),
					'key'  => 'heading-bottom-margin',
					'type' => 'slider',
					'options' => array(
						'type' => 'px',
					),
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'heading-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Highlight shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-highlight'] = array(
			'name'   => __( 'Highlight', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'content' => array(
					'std'  => __( 'I am the highlight of the party...', '__shortcodes__' ),
					'name' => __( 'Highlight Content', '__shortcodes__' ),
					'desc' => __( 'Create the content that you would like to highlight. This can be as much, or as little, as you like.', '__shortcodes__' ),
					'key'  => 'highlight-content',
					'type' => 'text',
				),
				'color' => array(
					'std'  => '#BF2ABF',
					'name' => __( 'Highlight Color', '__shortcodes__' ),
					'desc' => __( 'Choose a background color for your new highlight. Make it bright, or keep it simple, its up to you!', '__shortcodes__' ),
					'key'  => 'highlight-color',
					'type' => 'color',
				),
				'font-color' => array(
					'std'  => '#F5F5F5',
					'name' => __( 'Highlight Font Color', '__shortcodes__' ),
					'desc' => __( 'Choose a font color for your highlight. Consider using a lighter font if you have a dark background.', '__shortcodes__' ),
					'key'  => 'highlight-font-color',
					'type' => 'color',
				),
				'rounded' => array(
					'std'  => 1,
					'name' => __( 'Rounded corners on this highlight?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'highlight-rounded',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'highlight-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Progress bar shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-progress'] = array(
			'name'   => __( 'Progress Bar', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'label' => array(
					'std'  => __( 'Ohhh yeah, I rock!', '__shortcodes__' ),
					'name' => __( 'Progress Bar Label', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to add a label to your progress bar, you can create it here.', '__shortcodes__' ),
					'key'  => 'progress-label',
					'type' => 'text',
				),
				'completion' => array(
					'std'  => '60',
					'name' => __( 'Progress Percentage', '__shortcodes__' ),
					'desc' => __( 'Let everyone know how close you are to completing this task be setting the percentage of completion here.', '__shortcodes__' ),
					'key'  => 'progress-completion',
					'type' => 'slider',
					'options' => array(
						'type' => '%',
					),
				),
				'pre-color' => array(
					'std'     => '',
					'name'    => __( 'Progress Bar Color Scheme', '__shortcodes__' ),
					'desc'    => __( 'If you prefer to use a pre-defined color scheme for your progress bar, you can choose one here. Or add your own color below.', '__shortcodes__' ),
					'key'     => 'progress-pre-color',
					'type'    => 'select',
					'options' => array(
						'grey'   => __( 'Grey Progress Bar', '__shortcodes__' ),
						'blue'   => __( 'Blue Progress Bar', '__shortcodes__' ),
						'black'  => __( 'Black Progress Bar', '__shortcodes__' ),
						'green'  => __( 'Green Progress Bar', '__shortcodes__' ),
						'red'    => __( 'Red Progress Bar', '__shortcodes__' ),
						'purple' => __( 'Purple Progress Bar', '__shortcodes__' ),
						'teal'   => __( 'Teal Progress Bar', '__shortcodes__' ),
						'orange' => __( 'Orange Progress Bar', '__shortcodes__' ),
					),
				),
				'color' => array(
					'std'  => '#E5E5E5',
					'name' => __( 'Custom Progress Bar Color', '__shortcodes__' ),
					'desc' => __( 'If you chose not to use a pre-defined color scheme, you can define your own custom progress bar color here.', '__shortcodes__' ),
					'key'  => 'progress-color',
					'type' => 'color',
				),
				'striped' => array(
					'std'  => 0,
					'name' => __( 'Striped progress bar?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'progress-striped',
					'type' => 'checkbox',
				),
				'animated' => array(
					'std'  => 0,
					'name' => __( 'Add animation to striped progress bar?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'progress-animated',
					'type' => 'checkbox',
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'progress-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Styled list shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-list'] = array(
			'name'   => __( 'Styled List', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'items' => array(
					'std'     => '3',
					'name'    => __( 'Number of List Items', '__shortcodes__' ),
					'desc'    => __( 'Choose the number od list items to create. You can always add more later if you want to.', '__shortcodes__' ),
					'key'     => 'list-items',
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
					'name' => __( 'List Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to display an icon along side each list item, you may choose that icon here.', '__shortcodes__' ),
					'key'  => 'list-icon',
					'type' => 'icon-select',
				),
				'color' => array(
					'std'  => '#555555',
					'name' => __( 'List Icon Color', '__shortcodes__' ),
					'desc' => __( 'If you are using an icon for your list items, you can choose a color for that icon here.', '__shortcodes__' ),
					'key'  => 'list-color',
					'type' => 'color',
				),
				'circular' => array(
					'std'  => 0,
					'name' => __( 'Inverted icon with circular background?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'list-circular',
					'type' => 'checkbox',
				),
				'animated' => array(
					'std'  => 1,
					'name' => __( 'Animate each list item when hovered?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'list-animated',
					'type' => 'checkbox',
				),
				'divided' => array(
					'std'  => 0,
					'name' => __( 'Add divider between list items?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'list-divided',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'size' => array(
					'std'     => 'default',
					'name'    => __( 'List Size', '__shortcodes__' ),
					'desc'    => __( 'Choose the size of your list items. This primarily affects the font size for your list items, but can add much more impact to an otherwise boring list.', '__shortcodes__' ),
					'key'     => 'list-size',
					'type'    => 'select',
					'options' => array(
						'tiny'    => __( 'Tiny List Size', '__shortcodes__' ),
						'small'   => __( 'Small List Size', '__shortcodes__' ),
						'default' => __( 'Default List Size', '__shortcodes__' ),
						'large'   => __( 'Large List Size', '__shortcodes__' ),
						'huge'    => __( 'Huge List Size', '__shortcodes__' ),
					),
				),
				'class' => array(
					'std'  => __( 'my-custom-class', '__shortcodes__' ),
					'name' => __( 'Add a Custom CSS Class', '__shortcodes__ ' ),
					'desc' => __( 'If you would like to add and/or override the styles for this element, you may add a custom class to make doing so easier.', '__shortcodes__' ),
					'key'  => 'list-class',
					'type' => 'text',
				),
			)
		);


		/**
		 * Tooltip shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-tooltip'] = array(
			'name'   => __( 'Tooltip', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'title' => array(
					'std'  => __( 'What a funky title...', '__shortcodes__' ),
					'name' => __( 'Tooltip Title', '__shortcodes__' ),
					'desc' => __( 'Optional. You have the option to add a title to your tooltip. Should you choose to do so, you may create the title here.', '__shortcodes__' ),
					'key'  => 'tooltip-title',
					'type' => 'text',
				),
				'placement' => array(
					'std'     => 'top',
					'name'    => __( 'Tooltip Placement', '__shortcodes__' ),
					'desc'    => __( 'Choose a placement for your tooltip. There are several options available to fit your content.', '__shortcodes__' ),
					'key'     => 'tooltip-placement',
					'type'    => 'select',
					'options' => array(
						'top'    => __( 'Tooltip on Top', '__shortcodes__' ),
						'left'   => __( 'Tooltip on Left', '__shortcodes__' ),
						'right'  => __( 'Tooltip on Right','__shortcodes__' ),
						'bottom' => __( 'Tooltip on Bottom','__shortcodes__' ),
					),
				),
			)
		);


		// Return our shortcode configuration array
		return $dork_shortcodes;

	} // End dork_shortcodes_config()

} // End if