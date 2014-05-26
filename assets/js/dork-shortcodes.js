(function ($) {
    "use strict";

    var accordionTitle = $('.dork-accordion li > a');

    /**
     * Accordion shortcode functionality.
     *
     * @since v1.0.0
     */

    // Allow user to specify open accordion section.
    accordionTitle.each(function () {

        // Check for active class and display corresponding accordion content
        if ($(this).hasClass('active')) {
            $(this).next().slideDown();
        }

    });

    // Close and open accordion items as they are clicked.
    accordionTitle.on('click', function (e) {

        var accContent = $(this).closest('li').find('.accordion-inner');

        // Close other accordion items when new item is clicked
        $(this).closest('.dork-accordion').find('.accordion-inner').not(accContent).slideUp(500);

        // Remove active class if it already exists
        if ($(this).hasClass('active')) {

            $(this).removeClass('active');

        } else {

            // Add the active class to the active accordion item
            $(this).closest('.dork-accordion').find('a.active').removeClass('active');
            $(this).addClass('active');

        }

        // Toggle the opening of new accordion item
        accContent.stop(false, true).slideToggle(500);

        // Prevent default click action
        e.preventDefault();
    });

    /**
     * Alert shortcode functionality.
     *
     * @since v1.0.0
     */
    $('.dork-alert .alert-dismiss').on('click', function (e) {

        $(this).parent().fadeOut('500');

        // Prevent default
        e.preventDefault();

    });

})(jQuery);