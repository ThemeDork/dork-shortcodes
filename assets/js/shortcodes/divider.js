;(function ($) {
    "use strict";

    $('.go-to-top').click(function (e) {

        $("html, body").animate({
            scrollTop: 0
        }, 800);

        // Prevent default click behavior
        e.preventDefault();

    });

})(jQuery);