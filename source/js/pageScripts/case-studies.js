jQuery(document).ready(function () {
    jQuery('.counter').counterUp();
    jQuery('#nav-case-studies').addClass('active');
    jQuery('#nav-why-interactive').removeClass('active');

    jQuery('.navbar ul li .dropdown-sub-content a').on('click', function ($event) {
        // jQuery('.case-study-tabs').removeClass('active');
        let text = jQuery(event.target).text().trim();
        jQuery('.case-study-tabs').removeClass('active');
        jQuery('.tab-pane').removeClass('active');
        if(text == 'TAG') {
            jQuery('.nav-case-tag').addClass('active');
            jQuery('.tab-pane-tag').addClass('active');
        } else if(text == 'Get Paid Your Pad') {
            jQuery('.nav-case-gpyp').addClass('active');
            jQuery('.tab-pane-gpyp').addClass('active');
        } else if(text == 'VenturePact') {
            jQuery('.nav-case-vp').addClass('active');
            jQuery('.tab-pane-vp').addClass('active');
        } else if(text == 'Macroscape') {
            jQuery('.nav-case-macroscape').addClass('active');
            jQuery('.tab-pane-macroscape').addClass('active');
        }
    });

});

