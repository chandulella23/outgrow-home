jQuery(document).ready(function () {

    jQuery("#menu-close").click(function (e) {
        e.preventDefault();
        jQuery("#sidebar-wrapper").removeClass("active");
        jQuery('.overlay').fadeOut("slow");
        jQuery("html,body").css({ "overflow": "auto" });
    });
    jQuery("#menu-toggle").click(function (e) {
        e.preventDefault();
        jQuery("#sidebar-wrapper").addClass("active");
        jQuery('.overlay').fadeIn("slow");
        jQuery("html,body").css({ "overflow": "hidden" });
    });

    jQuery('.overlay').click(function (e) {
        jQuery('#sidebar-wrapper').removeClass('active');
        jQuery('.overlay').fadeOut("slow");
        jQuery("html,body").css({ "overflow": "auto" });
    });
    // jQuery('.nav-case').click(function (e) {
    //     jQuery('#sidebar-wrapper').removeClass('active');
    //     jQuery('.overlay').fadeOut("slow");
    //     jQuery("html,body").css({"overflow": "auto"});
    // });    

    // jQuery('#nav-get-inspired').addClass('active');
    // jQuery('#nav-use-cases').addClass('active');
    jQuery("#drop-toggle").click(function (e) {
        e.preventDefault();
        jQuery(".dropdown-content").css({ "display": "block" });
        jQuery(".dropdown-sub-content").css({ "display": "block" });
        jQuery('#GetInspired').addClass('open');
    });



})