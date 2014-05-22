(function($) {
    "use strict";

    var shortcodeSelect = $('#shortcode-select'),
        shortcodeSubmit = $('#shortcode-submit'),
        iconSelect      = $('.dork-icon-select li'),
        colorSelect     = $('.dork-color-select li');


    /**
     * Load the shortcode form that corresponds to a newly selected item from our
     * shortcode select list.
     *
     * @since v1.0.0
     */
    shortcodeSelect.on('change', function() {

        var shortcode        = $(this).val(),
            shortcodeSubmit  = $('#shortcode-submit'),
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
        return false;

    });


    /**
     * Begin compiling each of our shortcodes so that they can be sent to the tinyMCE
     * editor when the user clicks the submit button.
     *
     * @since v1.0.0
     */
    shortcodeSubmit.on('click', function() {

        // Get the currently selected shortcode
        var shortcodeSelect = $('#shortcode-select'),
            shortcode       = shortcodeSelect.val(),
            output;

        // Accordion shortcode variables
        var accordionCount = $('#accordion-count-select').val(),
            accordionIcon  = $('#accordion-icon-icon-select').find('.selected').data('id'),
            accordionBasic = $('#accordion-basic-checkbox').prop('checked'),
            accordionClass = $('#accordion-class-text').val();

        // Alert shortcode variables
        var alertHeading = $('#alert-heading-text').val(),
            alertContent = $('#alert-content-textarea').val(),
            alertColor   = $('#alert-color-color-select').find('.selected').data('id'),
            alertIcon    = $('#alert-icon-icon-select').find('.selected').data('id'),
            alertSize    = $('#alert-size-select').val(),
            alertDismiss = $('#alert-dismiss-checkbox').prop('checked'),
            alertClass   = $('#alert-class-text').val();

        // No need to run anything if a shortcode hasn't been selected
        if (shortcode !== '') {

            /**
             * Accordion shortcode.
             *
             * @since v1.0.0
             */
            if (shortcode === 'dork-accordion') {

                output = '[accordion basic="' + accordionBasic + '" class="' + accordionClass + '"]' + '<br/>';

                for (var i = 1; i <= accordionCount; i++) {
                    output += '[accordion_section title="Accordion Title #' + i + '" icon="' + accordionIcon + '" open="false"]Accordion Content #' + i + '[/accordion_section]' + '<br/>';
                } // End for

                output += '[/accordion]';

                /**
                 * Alert shortcode.
                 *
                 * @since v1.0.0
                 */
            } else if (shortcode === 'dork-alert'){

                output = '[alert heading="' + alertHeading + '" color="' + alertColor + '" icon="' + alertIcon + '" size="' + alertSize + '" dismiss="' + alertDismiss + '" class="' + alertClass + '"]' + alertContent + '[/alert]';

            }

            // Insert our shortcode into the tinyMCE editor
            tinyMCE.activeEditor.execCommand('mceInsertContent', false, output);

        }


        // Prevent default
        return false;

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

})(jQuery);