;(function ($) {
    "use strict";

    var accordion = $('.dork-accordion');

    /**
     * Accordion shortcode functionality.
     *
     * @since v1.0.0
     */
    accordion.each(function () {

        var acc        = $(this),
            accTitle   = $('.accordion-title'),
            accContent = $('.accordion-content'),
            accAnimate = 'easeInOutSine',
            accColor   = acc.data('color');

        // Open and close items when title is clicked
        $(this).find(accTitle).on('click', function(e) {

            // Check for active class
            if ($(this).hasClass('active')) {

                // Remove active and close item
                acc.find(accTitle).removeClass('active').css('background-color', '').parent().find(accContent).slideUp(400, accAnimate);

            } else {

                // Remove active from all items, add active to clicked item and show active item content
                acc.find(accTitle).removeClass('active').css('background-color', '').parent().find(accContent).slideUp(400, accAnimate);
                $(this).parent().find(accContent).stop(true, true).slideToggle(400, accAnimate);
                $(this).addClass('active').css('background-color', accColor);

            }

            // Prevent default click behavior
            e.preventDefault();

        });

    });

})(jQuery);