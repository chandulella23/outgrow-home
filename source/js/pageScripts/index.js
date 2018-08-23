window.openTestimonial = function (sectionId) {
    var sections = document.querySelectorAll('.protfolio-inner-section');
    sections.forEach(function (section) {
        section.classList.add('testhide', 'hide');
    });

    var arrowSections = document.querySelectorAll('.arrow_box');
    arrowSections.forEach(function (section) {
        section.classList.remove('testactive');
    });

    var showSection = document.getElementById(sectionId);
    showSection.classList.remove('testhide', 'hide');

    var activeImg = document.getElementById(`${sectionId}-img`);
    activeImg.classList.add('testactive');
}
window.submitEbookData = function (e) {
    e.preventDefault(), jQuery("#ebook-error").html("");
    var o = jQuery("#ebook-email").val(),
        t = jQuery("#ebook-name").val();
    return "" == o || "" == t ? void jQuery("#ebook-error").html("Please fill in the required fields") : void jQuery.ajax({
        url: "js/ebookhandler.php",
        type: "POST",
        data: {
            email: o,
            name: t,
            group_id: 4043919
        },
        beforeSend: function () {
            jQuery("#ebook-submit").html("Preparing your course ... ")
        },
        success: function (e) {
            var a = JSON.parse(e);
            a.error ? (jQuery("#ebook-error").html("There were some errors in the data you provided"), jQuery("#ebook-submit").html('Get Access<i class="material-icons">arrow_downward</i>')) : (jQuery("#ebook-submit").fadeOut(), -1 != window.location.href.indexOf("outgrow.co") && sendNotification(o, t), setTimeout(function () {
                window.location.href = "http://resources.outgrow.co/courses/lead-generation-with-calculators/ebook"
            }, 200))
        },
        error: function (e) {
            jQuery("#ebook-error").html("We are a little backed right now. Please try again."), jQuery("#ebook-submit").html('Get Access<i class="material-icons">arrow_downward</i>')
        }
    })
}

window.sendNotification = function (e, o) {
    jQuery.ajax({
        url: "js/mailer.php",
        data: {
            email: e,
            name: o
        },
        method: "POST",
        success: function (e) {
            console.log(e)
        },
        error: function (e) {
            console.log(e)
        }
    })
}

window.runTimeout = function () {
    setTimeout(function () {
        jQuery('.content-loader').addClass('hide');
    }, 5000);
    setTimeout(function () {
        console.log('Loading timeout calculate height');
        calculateMinHeight();
    }, 500);
}

window.display = function (url) {
    document.getElementById('og-iframe').src = url;
    jQuery('#og-iframe').addClass('iframeHeight');
    calculateMinHeight();

    setTimeout(calculateMinHeight, 2000);
}

window.getCookie = function (cookieName) {
    let i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x === cookieName) {
            return unescape(y);
        }
    }
};

jQuery.noConflict();
jQuery.material.init();

jQuery(document).ready(function () {

    // jQuery('.noToggle').click(function(e) {
    //     e.preventDefault();
    //     setTimeout(() => {
    //         jQuery('#GetInspired').addClass('open');
    //     }, 50);
    // });

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

    disableCookieDialog = getCookie('disableCookieDialog');
    if (disableCookieDialog == undefined || disableCookieDialog === 'false') jQuery('.section.sec-cookies').removeClass('hide');
    calculateMinHeight();

    jQuery('.calc-links a').on('click', function () {
        jQuery('a').removeClass('active');
        jQuery(this).addClass('active');
    });
    jQuery('.navbar ul li a').on('click', function () {
        jQuery('.params').removeClass('active');
        jQuery(this).addClass('active');
    });

    var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    }, '#og-iframe');

    var url = setLoginSignup();

    console.log(url);

    jQuery('#btnBuildCalc1 > a').prop('href', url);

    runTimeout();
    // initTestimonial();


    //add custom class to intercom
    // Wait for Intercom to boot (max 30 seconds)

    const timeout = setTimeout(() => clearInterval(interval), 30000);

    const intercomMessengerInterval = setInterval(() => {
        const iframe = document.querySelector('.intercom-messenger-frame');
        const launcherBadge = document.querySelector('.intercom-launcher-badge-frame');

        const cookieSection = document.querySelector('.section.sec-cookies');

        if (!cookieSection.classList.contains('hide')) {
            if (iframe) {
                //clearInterval(intercomMessengerInterval);
                jQuery('.intercom-messenger-frame').css('bottom', '160px');
            }
            if (launcherBadge) {
                jQuery('.intercom-launcher-badge-frame').addClass('custom-intercom');
            }
        }

    }, 1000);

    const interval = setInterval(() => {
        console.log('testing')
        const iframe = document.querySelector('.intercom-launcher-discovery-frame');

        if (iframe) {
            // Append the stylesheet to the iframe head
            // iframe.className+='custom-intercom';
            jQuery('.intercom-launcher-discovery-frame').addClass('custom-intercom');
            jQuery('.intercom-launcher-frame').addClass('custom-intercom');
            console.log('setting custom intercom css')
            clearInterval(interval);
            clearTimeout(timeout);
        }
    }, 1000);

    // const interval = setInterval(() => {
    //     console.log('interval ')
    //     if (window.Intercom.booted) {
    //         // Intercom is booted!
    //         clearInterval(interval);
    //         clearTimeout(timeout);
    //         setTimeout(() => {
    //             let disableCookieDialog = readCookie('disableCookieDialog');
    //             console.log(disableCookieDialog);
    //             if (disableCookieDialog==undefined || disableCookieDialog ==='false') {
    //                 let intercomContainer = document.getElementById("intercom-container");
    //                 intercomContainer.className += 'custom-intercom';
    //                 console.log('adding custom class to intercom');
    //             }
    //         }, 3000)
    //     }
    // }, 2000);

});