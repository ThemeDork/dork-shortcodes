jQuery(document).ready(function($) {
    "use strict";

    var shortcodeSelect = $('#shortcode-select'),
        iconSelect      = $('.dork-icon-select li');

    /**
     * Load the shortcode form that corresponds to a newly selected item from our
     * shortcode select list.
     *
     * @since v1.0.0
     */

    shortcodeSelect.on('change', function() {

        var currentShortcode = $(this).val(),
            shortcodeForm    = $('#dork-' + currentShortcode + '-form'),
            shortcodeContent = $('.shortcode-content-display'),
            shortcodeSubmit  = $('#shortcode-submit');

        // Disable our shortcode submit button
        shortcodeSubmit.attr('disabled', true);

        // Load the shortcode form as needed
        shortcodeContent.fadeOut('fast').delay(400);
        shortcodeForm.slideDown(2000);

        // Enable our shortcode submit button
        if (currentShortcode !== '') {
            shortcodeSubmit.removeAttr('disabled');
        }

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

        return false;

    });

});