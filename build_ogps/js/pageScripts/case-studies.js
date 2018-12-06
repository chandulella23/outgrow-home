jQuery(document).ready(function () {
    let tag = location.href.split('#');
    if(tag.length > 1) {
        console.log(tag);
        jQuery('.case-study-tabs').removeClass('active');
        jQuery('.tab-pane').removeClass('active');
        switch(tag[1]) {
            case 'tag':
                jQuery('.nav-case-tag').addClass('active');
                jQuery('.tab-pane-tag').addClass('active');
            break;
            case 'getPaid':
                jQuery('.nav-case-gpyp').addClass('active');
                jQuery('.tab-pane-gpyp').addClass('active');
            break;
            case 'vp':
                jQuery('.nav-case-vp').addClass('active');
                jQuery('.tab-pane-vp').addClass('active');
            break;
            case 'macroscape':
                jQuery('.nav-case-macroscape').addClass('active');
                jQuery('.tab-pane-macroscape').addClass('active');
            break;
            case 'wingman':
                jQuery('.nav-case-wingman').addClass('active');
                jQuery('.tab-pane-wingman').addClass('active');
            break;
            default:
            break;
        }
    }
    http://localhost:8000/case-studies#tag
    jQuery('.counter').counterUp();
    jQuery('#nav-case-studies').addClass('active');
    jQuery('#nav-why-interactive').removeClass('active');

    jQuery('.navbar ul li .dropdown-sub-content a').on('click', function ($event) {
        // jQuery('.case-study-tabs').removeClass('active');
        jQuery('.nav-case').removeClass('active');
        jQuery(this).addClass('active');
        let text = jQuery(event.target).text().trim();
        jQuery('.case-study-tabs').removeClass('active');
        jQuery('.tab-pane').removeClass('active');
        if(text == 'TAG') {
            jQuery('.nav-case-tag').addClass('active');
            jQuery('.tab-pane-tag').addClass('active');
        } 
        else if(text == 'Get Paid Your Pad') {
            jQuery('.nav-case-gpyp').addClass('active');
            jQuery('.tab-pane-gpyp').addClass('active');
        } 
        else if(text == 'VenturePact') {
            jQuery('.nav-case-vp').addClass('active');
            jQuery('.tab-pane-vp').addClass('active');
        } 
        else if(text == 'Macroscape') {
            jQuery('.nav-case-macroscape').addClass('active');
            jQuery('.tab-pane-macroscape').addClass('active');
        }        
        else if(text == 'Professional Wingman') {
            jQuery('.nav-case-wingman').addClass('active');
            jQuery('.tab-pane-wingman').addClass('active');
        }
    });

    jQuery('#nav-get-inspired').addClass('active');
});

