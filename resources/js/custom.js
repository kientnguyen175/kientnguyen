/* PAGE LOADING ANIMATION */
(function ($) {
    "use strict";
    
    // Selectors
    var page_html = $('html');
    var loading_container = $('#isg-page-loading');
    var loading_text = $('.isg-loading-text', '#isg-page-loading');
    var loading_bar = $('.isg-loading-bar', '#isg-page-loading');
    var loading_sub_title = $('.isg-loading-sub-text', '#isg-page-loading');
    
    // Disable scroll bar
    page_html.addClass('isg-loading-overflow-hidden');

    // Start Loading Text Animation
    loading_text.addClass('start-animation');

    // Start Loading Bar Animation
    loading_bar.addClass('start-animation');

    // After page has loaded
    $(window).on('load', function () {

        // Stop Loading Text Animation
        loading_text.addClass('stop-animation');

        // Stop Loading Bar Animation
        loading_bar.addClass('stop-animation');

        // Change opacity of the sub title
        loading_sub_title.css('opacity', 0.3);

        // After loading animation has finished
        setTimeout(function () {
            // Enable scroll bar
            page_html.removeClass('isg-loading-overflow-hidden');
            // Hide page loading container
            loading_container.fadeOut();
        }, 1200);

    });
})(jQuery);

/* TOP MENU */
(function ($) {
    "use strict";

    // Selectors
    var toggles = document.querySelectorAll(".isg-hamburger", "#isg-header");
    var hiddenmenu = $('#isg-hidden-menu');

    // Loop
    for (var i = toggles.length - 1; i >= 0; i--) {
        var toggle = toggles[i];
        toggleHandler(toggle);
    }

    // Toggle handler
    function toggleHandler(toggle) {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            // if menu is opened
            if (this.classList.contains("is-active") === true) {
                this.classList.remove("is-active");
                hiddenmenu.slideToggle();
            } 
            // if menu is closed
            else {
                this.classList.add("is-active");
                hiddenmenu.slideToggle();
            }
            return false;
        });
    }

})(jQuery);

/* SCROLL TO BOTTOM ARROW */
jQuery("#isg-down-arrow").on('click', function (event) {
    "use strict";
    
    event.preventDefault();
    
    // Selectors
    var container = jQuery('#isg-boxes');
    var menu = jQuery('.isg-hamburger', '#isg-header');
    var menucontainer = jQuery('#isg-hidden-menu').height() + 40;

    // If menu is opened
    if (menu.hasClass('is-active')) {
        jQuery('body,html').animate({
            scrollTop: container.offset().top - jQuery(this).offset().top + jQuery(this).scrollTop() + menucontainer + 35
        });
    } 
    // If menu is closed
    else {
        jQuery('body,html').animate({
            scrollTop: container.offset().top - jQuery(this).offset().top + jQuery(this).scrollTop() + 35
        });
    }

    return false;
});

/* BACK TO TOP ARROW */
jQuery("#isg-back-to-top").on('click', function (event) {
    "use strict";
    
    event.preventDefault();
    
    // Start animation
    jQuery('body,html').animate({
        scrollTop: 0
    }, 500);
    
    return false;
});