(function($) {
    "use strict";

    var shortcodeSelect = $('#shortcode-select'),
        shortcodeSubmit = $('#shortcode-submit'),
        iconSelect      = $('.dork-icon-select li'),
        colorSelect     = $('.dork-color-select li'),
        colorPicker     = $('.dork-color-picker'),
        colorPreview    = $('.color-picker-preview'),
        rangeSlider     = $('.dork-range-slider');


    /**
     * Load the shortcode form that corresponds to a newly selected item from our
     * shortcode select list.
     *
     * @since v1.0.0
     */
    shortcodeSelect.on('change', function (e) {

        var shortcode        = $(this).val(),
            shortcodeContent = $('.shortcode-content-display'),
            shortcodeForm    = $('#dork-' + shortcode + '-form');

        // Disable our shortcode submit button if no selection
        shortcodeSubmit.attr('disabled', true);

        // Verify that a shortcode is selected before continuing
        if (shortcode !== '') {

            // Load our shortcode forms as needed
            shortcodeContent.fadeOut('fast').delay(400);
            shortcodeForm.slideDown(2000);

            // Enable the shortcode submit button
            shortcodeSubmit.removeAttr('disabled');

        } // End if

        // Prevent default
        e.preventDefault();

    });


    /**
     * Begin compiling each of our shortcodes so that they can be sent to the tinyMCE
     * editor when the user clicks the submit button.
     *
     * @since v1.0.0
     */
    shortcodeSubmit.on('click', function (e) {

        // Get the currently selected shortcode
        var shortcodeSelect = $('#shortcode-select'),
            shortcode       = shortcodeSelect.val(),
            output;

        // Accordion shortcode parameters
        var accordionItems     = $('#accordion-items-select').val(),
            accordionColor     = $('#accordion-color-text').val(),
            accordionFontColor = $('#accordion-font-color-text').val(),
            accordionBasic     = $('#accordion-basic-checkbox').prop('checked'),
            accordionRounded   = $('#accordion-rounded-checkbox').prop('checked'),
            accordionClass     = $('#accordion-class-text').val();

        // No need to run anything if a shortcode hasn't been selected
        if (shortcode !== '') {

            /**
             * Accordion shortcode.
             *
             * @since v1.0.0
             */
            if (shortcode === 'dork-accordion') {

                // Form output
                output = '[accordion basic="' + accordionBasic + '" active_color="' + accordionColor + '" font_color="' + accordionFontColor + '" rounded="' + accordionRounded + '" class="' + accordionClass + '"]' + '<br/>';

                for (var i = 1; i <= accordionItems; i++) {
                    output += '[accordion_item title="Accordion Title #' + i + '" open="false"]Accordion Content #' + i + '[/accordion_item]' + '<br/>';
                } // End for

                output += '[/accordion]';

            }

            // Insert our shortcode into the tinyMCE editor
            window.send_to_editor(output);

        }

        // Prevent default
        e.preventDefault();

    });

    /**
     * Add select functionality to our custom icon select fields.
     *
     * @since v1.0.0
     */
    iconSelect.on('click', function() {

        var iconSiblings = $(this).siblings();

        // Remove the selected class from items
        iconSiblings.removeClass('selected');

        // Add the selected class to the user selected item
        $(this).addClass('selected');

        // Prevent default
        return false;

    });


    /**
     * Add select functionality to our custom color select fields.
     *
     * @since v1.0.0
     */
    colorSelect.on('click', function() {

        var colorSiblings = $(this).siblings();

        // Remove the selected class from items
        colorSiblings.removeClass('selected');

        // Add the selected class to the user selected item
        $(this).addClass('selected');

        // Prevent default
        return false;

    });


    /**
     * Add functionality to our color picker fields.
     *
     * @since v1.0.0
     */

    // Set preview color based on default value
    colorPicker.each(function() {
        $(this).parent().find(colorPreview).css('color', this.value);
    });

    // Attach the color picker to input field and update when value changes
    colorPicker.colpick({
        layout: 'full',
        submit: 0,
        colorScheme: 'light',
        onChange: function(hsb,hex,rgb,el,bySetColor) {
            $(el).parent().find('.color-picker-preview i').css('color', '#' + hex);
            if ( ! bySetColor) { $(el).val('#' + hex); }
        },
        onBeforeShow: function(el) {
            $(this).colpickSetColor(this.value);
        }
    }).keyup(function() {
        $(this).colpickSetColor(this.value);
    });


    /**
     * Add functionality to the range slider control.
     *
     * @since v1.0.0
     */
    rangeSlider.each(function() {
        $(this).noUiSlider({
            start        : $(this).data('start'),
            orientation  : 'horizontal',
            connect: 'lower',
            range        : {
                'min': 0,
                'max': 100
            },
            serialization: {
                lower : [
                    $.Link({
                        target: $(this).next('.range-slider-value')
                    })
                ],
                format: {
                    postfix: 'px',
                    decimals: 0
                }
            }
        });
    });

})(jQuery);