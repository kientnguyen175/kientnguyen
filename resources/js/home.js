(function ($) {
    "use strict";
    
    // Selectors
    var isg_boxes = jQuery("#isg-boxes");
    var isg_panels = jQuery("#isg-panels");

    // Change the background color of the boxes
    isg_boxes.find(".isg-box").each(function () {
        jQuery(this).css('background-color', jQuery(this).attr('data-bgcolor'));
    });

    // Change the border colors of the panels
    isg_panels.find(".isg-panel-inner").each(function () {
        jQuery(this).css('border-color', jQuery(this).attr('data-bordercolor'));
    });

    // Change the skill bar percentages
    isg_panels.find('.isg-skillbar').each(function () {
        jQuery(this).find('.isg-skillbar-bar').width(jQuery(this).data('percent'));
    });

    // Back to top button animation
    isg_panels.find(".isg-panel-up").on('click', function () {
        isg_panels.find('.isg-panel').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    /* PANELS */
    jQuery(document).ready(function () {
        
        // Define the links in the boxes which open the panels
        isg_boxes.find(".isg-panel-open").panelslider({
            side: 'right',
            clickClose: true,
            duration: 600
        });

        // Define the links in the panels which open other panels
        isg_panels.find(".isg-panel-open").panelslider({
            side: 'right',
            clickClose: true,
            duration: 600
        });

        // Define the links which close the panels
        isg_panels.find(".isg-panel-close").on('click', function () {
            jQuery.panelslider.close();
            return false;
        });
        
        // Check the page link. If link contains an id of a panel, open the panel
        if (window.location.hash) {
            jQuery(window.location.hash + '-link').trigger("click");
        }

    });

})(jQuery);