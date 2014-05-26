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
				'spacer' => array(
					'type' => 'spacer',
				),
				'color' => array(
					'std' => '#21CDEC',
					'name' => __( 'Accent Color', '__shortcodes__' ),
					'desc' => __( 'Choose the accent color for your accordion items. This will affect the arrow and icons while in an active state.', '__shortcodes__' ),
					'key'  => 'accordion-color',
					'type' => 'color',
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
				'spacer' => array(
					'type' => 'spacer',
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

		/**
		 * Blockquote shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-blockquote'] = array(
			'name'   => __( 'Blockquote', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'content' => array(
					'std'  => __( 'A nickel ain\'t worth a dime anymore.', '__shortcodes__' ),
					'name' => __( 'Blockquote Content', '__shortcodes__' ),
					'desc' => __( 'Create the content, or quote, for your new blockquote. You can include as much or as little as you like, after all, great quotes come in a variety of sizes.', '__shortcodes__' ),
					'key'  => 'blockquote-content',
					'type' => 'textarea',
				),
				'cite' => array(
					'std'  => __( '~Yogi Berra', '__shortcodes__' ),
					'name' => __( 'Blockquote Citation', '__shortcodes__' ),
					'desc' => __( 'Optional. Consider including a source, or citation, for your blockquote. Surely there is someone you can credit for these words of wisdom.', '__shortcodes__' ),
					'key'  => 'blockquote-cite',
					'type' => 'text',
				),
				'link' => array(
					'std'  => 'http://www.google.com',
					'name' => __( 'Citation Link', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to include a link to the source of your quote you may do so here. This will create a link from the citation you defined above.', '__shortcodes__' ),
					'key'  => 'blockquote-link',
					'type' => 'text',
				),
				'target' => array(
					'std'  => 1,
					'name' => __( 'Open citation link in new window?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'blockquote-target',
					'type' => 'checkbox',
				),
				'basic' => array(
					'std'  => 0,
					'name' => __( 'Basic blockquote with light background?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'blockquote-basic',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'color' => array(
					'std' => '#00B5AD',
					'name' => __( 'Accent Color', '__shortcodes__' ),
					'desc' => __( 'Choose an accent color for your blockquote. This will modify both the left border and the citation color, but only if you have not chosen the basic blockquote above.', '__shortcodes__' ),
					'key'  => 'blockquote-color',
					'type' => 'color',
				),
				'position' => array(
					'std'     => 'left',
					'name'    => __( 'Citation Position', '__shortcodes__' ),
					'desc'    => __( 'Choose a pre-defined position for your blockquote citation. You can align it to the left, center or right depending on your preferences.', '__shortcodes__' ),
					'key'     => 'blockquote-position',
					'type'    => 'select',
					'options' => array(
						'left'   => __( 'Aligned to the Left', '__shortcodes__' ),
						'center' => __( 'Aligned to the Center', '__shortcodes__' ),
						'right'  => __( 'Aligned to the Right', '__shortcodes__' ),
					),
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__shortcodes__' ),
					'name' => __( 'Custom CSS Class', '__shortcodes__' ),
					'desc' => __( 'Optional. Define a custom class that can be used to apply your own styles to this element.', '__shortcodes__' ),
					'key'  => 'blockquote-class',
					'type' => 'text',
				),
			)
		);

		/**
		 * Button shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-button'] = array(
			'name'   => __( 'Buttons', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'text' => array(
					'std'  => __( 'Click Me Maybe?', '__shortcodes__' ),
					'name' => __( 'Button Text', '__shortcodes__' ),
					'desc' => __( 'Create the text that will be displayed on your new button. You can say as much, or as little as you want.', '__shortcodes__' ),
					'key'  => 'button-text',
					'type' => 'text',
				),
				'url' => array(
					'std'  => 'http://www.google.com',
					'name' => __( 'Button Link', '__shortcodes__' ),
					'desc' => __( 'Where would you like the user to go after they click on your button? Provide the link to that page in this field.', '__shortcodes__' ),
					'key'  => 'button-link',
					'type' => 'text',
				),
				'icon' => array(
					'std'  => 'no-icon',
					'name' => __( 'Button Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. Add a little bit of flare to your new button with a custom icon. There are hundreds to choose from, pick the one you love.' ),
					'key'  => 'button-icon',
					'type' => 'icon-select',
				),
				'color' => array(
					'std'  => '#E7E7E7',
					'name' => __( 'Button Color', '__shortcodes__' ),
					'desc' => __( 'Choose the background color for your button.', '__shortcodes__' ),
					'key'  => 'button-color',
					'type' => 'color',
				),
				'font-color' => array(
					'std'  => '#777777',
					'name' => __( 'Font Color', '__shortcodes__' ),
					'desc' => __( 'Choose the font color for your button, especially helpful for dark buttons that need a lighter font.', '__shortcodes__' ),
					'key'  => 'button-font-color',
					'type' => 'color',
				),
				'fullwidth' => array(
					'std'  => 0,
					'name' => __( 'Full width button?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'button-fullwidth',
					'type' => 'checkbox',
				),
				'target' => array(
					'std'  => 1,
					'name' => __( 'Open in new window?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'button-target',
					'type' => 'checkbox',
				),
				'rounded' => array(
					'std'  => 0,
					'name' => __( 'Rounded corners?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'button-rounded',
					'type' => 'checkbox',
				),
				'animated' => array(
					'std'  => 1,
					'name' => __( 'Animated icon button?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'button-animated',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'position' => array(
					'std'     => 'left',
					'name'    => __( 'Button Icon Position', '__shortcodes__' ),
					'desc'    => __( 'If you have decided to add an icon to your button, you can choose whether to place it to the left or right of your button text.', '__shortcodes__' ),
					'key'     => 'button-position',
					'type'    => 'select',
					'options' => array(
						'left'  => __( 'Align Icon to the Left', '__shortcodes__' ),
						'right' => __( 'Align Icon to the Right', '__shortcodes__' ),
					),
				),
				'size' => array(
					'std'     => 'default',
					'name'    => __( 'Button Size', '__shortcodes__' ),
					'desc'    => __( 'Choose from a variety of button sizes to fit just about any purpose. Make an impact or keep it subtle, its up to you.', '__shortcodes__' ),
					'key'     => 'button-size',
					'type'    => 'select',
					'options' => array(
						'mini'    => __( 'Mini Button', '__shortcodes__' ),
						'small'   => __( 'Small Button', '__shortcodes__' ),
						'default' => __( 'Default Button', '__shortcodes__' ),
						'large'   => __( 'Large Button', '__shortcodes__' ),
						'huge'    => __( 'Huge Button', '__shortcodes__' ),
						'massive' => __( 'Massive Button', '__shortcodes__' ),
					),
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__shortcodes__' ),
					'name' => __( 'Custom CSS Class', '__shortcodes__' ),
					'desc' => __( 'Optional. Define a custom class that can be used to apply your own styles to this element.', '__shortcodes__' ),
					'key'  => 'button-class',
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
			'name'   => __( 'Dividers', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'style' => array(
					'std'     => '',
					'name'    => __( 'Divider Style', '__shortcodes__' ),
					'desc'    => __( 'Choose a pre-defined style for your new divider. There are several to choose from and each is unique.', '__shortcodes__' ),
					'key'     => 'divider-style',
					'type'    => 'select',
					'options' => array(
						'single'        => __( 'Single Solid Line', '__shortcodes__' ),
						'single-thick'  => __( 'Single Thick Solid Line', '__shortcodes__' ),
						'single-fade'   => __( 'Single Faded Line', '__shortcodes__' ),
						'dotted'        => __( 'Single Dotted Line', '__shortcodes__' ),
						'dashed'        => __( 'Single Dashed Line', '__shortcodes__' ),
						'double'        => __( 'Double Solid Line', '__shortcodes__' ),
						'double-dotted' => __( 'Double Dotted Line', '__shortcodes__' ),
						'double-dashed' => __( 'Double Dashed Line', '__shortcodes__' ),
					),
				),
				'margin-top' => array(
					'std'  => '30',
					'name' => __( 'Divider Top Margin', '__shortcodes__' ),
					'desc' => __( 'Choose the amount of spacing, the margin, that you have above your divider. Allows for more separation of content.', '__shortcodes__' ),
					'key'  => 'divider-margin-top',
					'type' => 'slider',
				),
				'margin-bottom' => array(
					'std'  => '30',
					'name' => __( 'Divider Bottom Margin', '__shortcodes__' ),
					'desc' => __( 'Choose the amount of spacing, the margin, that you have below your divider. Allows for more separation of content.', '__shortcodes__' ),
					'key'  => 'divider-margin-bottom',
					'type' => 'slider',
				),
				'color' => array(
					'std'  => '#E5E5E5',
					'name' => __( 'Divider Color', '__shortcodes__' ),
					'desc' => __( 'Choose a color for your new divider. You can keep it simple or make it stand out, the choice is yours.', '__shortcodes__' ),
					'key'  => 'divider-color',
					'type' => 'color',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__shortcodes__' ),
					'name' => __( 'Custom CSS Class', '__shortcodes__' ),
					'desc' => __( 'Optional. Define a custom class that can be used to apply your own styles to this element.', '__shortcodes__' ),
					'key'  => 'divider-class',
					'type' => 'text',
				),
			)
		);

		/**
		 * Dropcap shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-dropcap'] = array(
			'name'   => __( 'Dropcaps', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'symbol' => array(
					'std'  => __( 'A', '__shortcodes__' ),
					'name' => __( 'Dropcap Symbol', '__shortcodes__' ),
					'desc' => __( 'Define the symbol / letter that you would like to use as your dropcap. Typically the first letter of the first word, but its your dropcap.', '__shortcodes__' ),
					'key'  => 'dropcap-symbol',
					'type' => 'text',
				),
				'style' => array(
					'std'     => 'circle',
					'name'    => __( 'Dropcap Style', '__shortcodes__' ),
					'desc'    => __( 'Choose one of several pre-defined styles for your new dropcap, to give your page a unique appearance.', '__shortcodes__' ),
					'key'     => 'dropcap-style',
					'type'    => 'select',
					'options' => array(
						'circle' => __( 'Symbol on Circular Background', '__shortcodes__' ),
						'square' => __( 'Symbol on Square Background', '__shortcodes__' ),
						'plain'  => __( 'Symbol with No Background', '__shortcodes__' ),
					),
				),
				'color' => array(
					'std'  => '#EBEBEB',
					'name' => __( 'Dropcap Background Color', '__shortcodes__' ),
					'desc' => __( 'Choose the color for your dropcap background. This only applies if you chose a circular or square dropcap from the style selections.', '__shortcodes__' ),
					'key'  => 'dropcap-color',
					'type' => 'color',
				),
				'font-color' => array(
					'std'  => '#333333',
					'name' => __( 'Dropcap Font Color', '__shortcodes__' ),
					'desc' => __( 'Choose the font color for your new dropcap. Applies to all dropcap styles.', '__shortcodes__' ),
					'key'  => 'dropcap-font-color',
					'type' => 'color',
				),
				'size' => array(
					'std'     => 'default',
					'name'    => __( 'Dropcap Size', '__shortcodes__' ),
					'desc'    => __( 'Choose from several pre-defined sizes for your dropcap. This primarily affects the font size, however there are some padding modifications as well.', '__shortcodes__' ),
					'key'     => 'dropcap-size',
					'type'    => 'select',
					'options' => array(
						'small'   => __( 'Small Dropcap', '__shortcodes__' ),
						'default' => __( 'Default Dropcap', '__shortcodes__' ),
						'large'   => __( 'Large Dropcap', '__shortcodes__' ),
					),
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__shortcodes__' ),
					'name' => __( 'Custom CSS Class', '__shortcodes__' ),
					'desc' => __( 'Optional. Define a custom class that can be used to apply your own styles to this element.', '__shortcodes__' ),
					'key'  => 'dropcap-class',
					'type' => 'text',
				),
			)
		);

		/**
		 * Headline shortcode config.
		 *
		 * @since v1.0.0
		 */

		$dork_shortcodes['dork-headline'] = array(
			'name'   => __( 'Headline', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'text' => array(
					'std'  => __( 'Hello! Look at me...', '__shortcodes__' ),
					'name' => __( 'Headline Text', '__shortcodes__' ),
					'desc' => __( 'What would you like your headline to say? You can use this field to define that text.', '__shortcodes__' ),
					'key'  => 'headline-text',
					'type' => 'text',
				),
				'icon' => array(
					'std'  => 'no-icon',
					'name' => __( 'Headline Icon', '__shortcodes__' ),
					'desc' => __( 'Optional. If you would like to display an icon alongside your headline, you may choose one here.', '__shortcodes__' ),
					'key'  => 'headline-icon',
					'type' => 'icon-select',
				),
				'animated' => array(
					'std' => 1,
					'name' => __( 'Animate headline icon on hover?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'headline-animated',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'color' => array(
					'std'  => '#2B2B2B',
					'name' => __( 'Headline Color', '__shortcodes__' ),
					'desc' => __( 'Choose a color for your headline. This setting will affect the font color of your headline.', '__shortcodes__' ),
					'key'  => 'headline-color',
					'type' => 'color',
				),
				'style' => array(
					'std'     => 'center',
					'name'    => __( 'Headline Style', '__shortcodes__' ),
					'desc'    => __( 'Choose from several pre-defined styles for your headline. These will modify the alignment of your headline text.', '__shortcodes__' ),
					'key'     => 'headline-style',
					'type'    => 'select',
					'options' => array(
						'left'   => __( 'Aligned to the Left', '__shortcodes__' ),
						'center' => __( 'Aligned to the Center', '__shortcodes__' ),
						'right'  => __( 'Aligned to the Right', '__shortcodes__' ),
					),
				),
				'size' => array(
					'std'     => 'default',
					'name'    => __( 'Headline Size', '__shortcodes__' ),
					'desc'    => __( 'Choose from a variety of pre-defined sizes for your new headline. These will primarily affect the font size of your headline.', '__shortcodes__' ),
					'key'     => 'headline-size',
					'type'    => 'select',
					'options' => array(
						'mini'    => __( 'Mini Headline', '__shortcodes__' ),
						'small'   => __( 'Small Headline', '__shortcodes__' ),
						'default' => __( 'Default Headline', '__shortcodes__' ),
						'large'   => __( 'Large Headline', '__shortcodes__' ),
						'huge'    => __( 'Huge Headline', '__shortcodes__' ),
					),
				),
				'margin-top' => array(
					'std'  => '30',
					'name' => __( 'Headline Top Margin', '__shortcodes__' ),
					'desc' => __( 'Choose the amount of spacing, the margin, that you have above your headline. Allows for more separation of content.', '__shortcodes__' ),
					'key'  => 'headline-margin-top',
					'type' => 'slider',
				),
				'margin-bottom' => array(
					'std'  => '30',
					'name' => __( 'Headline Bottom Margin', '__shortcodes__' ),
					'desc' => __( 'Choose the amount of spacing, the margin, that you have below your headline. Allows for more separation of content.', '__shortcodes__' ),
					'key'  => 'headline-margin-bottom',
					'type' => 'slider',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__shortcodes__' ),
					'name' => __( 'Custom CSS Class', '__shortcodes__' ),
					'desc' => __( 'Optional. Define a custom class that can be used to apply your own styles to this element.', '__shortcodes__' ),
					'key'  => 'headline-class',
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
			'name'   => __( 'Highlights', '__shortcodes__' ),
			'desc'   => __( '', '__shortcodes__' ),
			'params' => array(
				'content' => array(
					'std'  => __( 'Finally, the highlight of the party...', '__shortcodes__' ),
					'name' => __( 'Highlight Content', '__shortcodes__' ),
					'desc' => __( 'Create the content that you would like to highlight. This content can be pretty much anything you want.', '__shortcodes__' ),
					'key'  => 'highlight-content',
					'type' => 'textarea',
				),
				'color' => array(
					'std' => '#00A0DC',
					'name' => __( 'Highlight Color', '__shortcodes__' ),
					'desc' => __( 'Choose the background color for your new highlight. Something bright is always a good choice, but its up to you.', '__shortcodes__' ),
					'key'  => 'highlight-color',
					'type' => 'color',
				),
				'font-color' => array(
					'std' => '#FFFFFF',
					'name' => __( 'Highlight Font Color', '__shortcodes__' ),
					'desc' => __( 'Choose a font color for your highlight. A light font would be best suited for a darker highlight and so forth.', '__shortcodes__' ),
					'key'  => 'highlight-font-color',
					'type' => 'color',
				),
				'rounded' => array(
					'std' => 1,
					'name' => __( 'Rounded corners on this highlight?', '__shortcodes__' ),
					'desc' => __( '', '__shortcodes__' ),
					'key'  => 'highlight-rounded',
					'type' => 'checkbox',
				),
				'spacer' => array(
					'type' => 'spacer',
				),
				'class' => array(
					'std'  => __( 'custom-css-class', '__shortcodes__' ),
					'name' => __( 'Custom CSS Class', '__shortcodes__' ),
					'desc' => __( 'Optional. Define a custom class that can be used to apply your own styles to this element.', '__shortcodes__' ),
					'key'  => 'highlight-class',
					'type' => 'text',
				),
			)
		);


		// Return our shortcode configuration array
		return $dork_shortcodes;

	} // End dork_shortcodes_config()

} // End if