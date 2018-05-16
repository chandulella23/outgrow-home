jQuery(document).ready(function () {

    jQuery("#menu-close").click(function(e) {
        e.preventDefault();
        jQuery("#sidebar-wrapper").toggleClass("active");
        jQuery('.overlay').fadeOut("slow");
        jQuery("html,body").css({"overflow": "auto"});
    });
    jQuery("#menu-toggle").click(function(e) {
        e.preventDefault();
        jQuery("#sidebar-wrapper").toggleClass("active");
        jQuery('.overlay').fadeIn("slow");
        jQuery("html,body").css({"overflow": "hidden"});
    });

    jQuery('.overlay').click(function (e) {
        jQuery('#sidebar-wrapper').removeClass('active');
        jQuery('.overlay').fadeOut("slow");
        jQuery("html,body").css({"overflow": "auto"});
    });
    jQuery('.nav-case').click(function (e) {
        jQuery('#sidebar-wrapper').removeClass('active');
        jQuery('.overlay').fadeOut("slow");
        jQuery("html,body").css({"overflow": "auto"});
    });    

})