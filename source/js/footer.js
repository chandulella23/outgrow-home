window.setUTMRefCookie = function() {
    var a = window.location.search;
    if ("" !== a && !readCookie("utm_ref")) {
        a = a.split("?")[1];
        var b = {
            ref: "UNKNOWN",
            utm_source: "UNKNOWN",
            utm_medium: "UNKNOWN",
            utm_campaign: "UNKNOWN"
        };
        a.split("&").forEach(function(a) {
            var c = a.split("=")[0],
                d = a.split("=")[1];
            ("ref" === c || "utm_source" === c || "utm_medium" === c || "utm_campaign" === c) && (b[c] = d)
        }), "UNKNOWN" === b.ref && (b.ref = document.referrer ? document.referrer : "DIRECT"), createCookie("utm_ref", JSON.stringify(b), 365)
    }
}, window.appendParamsToUrl = function() {
    var a = "",
        b = window.location.href,
        c = b.split("?");
    void 0 !== c[1] && (a = "?" + c[1]), jQuery(".params").each(function() {
        var b = jQuery(this).prop("href");
        /javascript/.test(b) || (b += a, jQuery(this).prop("href", b))
    })
}, window.createCookie = function(a, b, c) {
    var d = "";
    if (c) {
        var e = new Date;
        e.setTime(e.getTime() + 24 * c * 60 * 60 * 1e3), d = "; expires=" + e.toUTCString()
    }
    document.cookie = a + "=" + b + d + "; path=/"
}, window.readCookie = function(a) {
    for (var b = a + "=", c = document.cookie.split(";"), d = 0; d < c.length; d++) {
        for (var e = c[d];
            " " == e.charAt(0);) e = e.substring(1, e.length);
        if (0 == e.indexOf(b)) return e.substring(b.length, e.length)
    }
    return null
}, window.setLoginSignup = function() {
    var a = window.location.hostname;
    0 === a.indexOf("www.outgrow.co") && (a = "outgrow.co") || -1 === a.indexOf("outgrow") && (a = "rely.co");
    var b = "//app." + a,
        c = b + "/login",
        d = b + "/signup",
        e = "Sign Up";
    jQuery(".login > .link-login").prop("href", c);
    var f = readCookie("storage");
    return f && (f = JSON.parse(f), d = "//" + f.companyList[1] + "." + a + "/dashboard", e = "Dashboard", jQuery(".login").hide()), jQuery(".signUp > .link-login").prop("href", d).html(e).on("click", function(a) {
        callGA(e)
    }), b
}, window.callGA = function(a) {
    switch (a) {
        case "CANNOT WAIT CTA":
            console.log('CANNOT WAIT CTA')
            ga("send", "event", "Signup", "Click", "LP_FirstFold");
            break;
        case "WHY":
            ga("markettingteam.send", "event", "Header", "Click", "LP_Header_WhyCalc");
            break;
        case "FEATURES":
            ga("markettingteam.send", "event", "Header", "Click", "LP_Header_Features");
            break;
        case "PRICING":
            ga("markettingteam.send", "event", "Header", "Click", "LP_Header_Pricing");
            break;
        case "USECASE":
            ga("markettingteam.send", "event", "Header", "Click", "LP_Header_UseCases");
            break;
        case "LOGIN":
            ga("markettingteam.send", "event", "Login", "Click", "LP_Header_Login");
            break;
        case "DASHBOARD":
            ga("markettingteam.send", "event", "DASHBOARD", "Click", "LP_Header_GO_TO_DASHBOARD");
            break;
        case "FEATURESF":
            ga("markettingteam.send", "event", "Footer", "Click", "LP_Footer_Features");
            break;
        case "USECASEF":
            ga("markettingteam.send", "event", "Footer", "Click", "LP_Footer_UseCases");
            break;
        case "PRICINGF":
            ga("markettingteam.send", "event", "Footer", "Click", "LP_Footer_Pricing");
            break;
        case "RESOURCEF":
            ga("markettingteam.send", "event", "Footer", "Click", "LP_Footer_Resouces");
            break;
        case "ABOUTF":
            ga("markettingteam.send", "event", "Footer", "Click", "LP_Footer_About");
            break;
        case "PRIVACYF":
            ga("markettingteam.send", "event", "Footer", "Click", "LP_Footer_Privacy");
            break;
        case "TERMSF":
            ga("markettingteam.send", "event", "Footer", "Click", "LP_Footer_Terms")
    }
}, jQuery(document).ready(function() {
    jQuery(".mk-animate-element").viewportChecker({
            classToAdd: "mk-in-viewport"
        }), jQuery(window).scroll(function() {
            jQuery(this).scrollTop() > 70 ? jQuery("nav").addClass("nav-boxshadow") : jQuery("nav").removeClass("nav-boxshadow")
        }), jQuery("#open").click(function() {
            jQuery(".menu-outer").addClass("is-active"), jQuery(".backdrop-custom").addClass("is-active")
        }), jQuery(".close-menu").click(function() {
            jQuery(".menu-outer").removeClass("is-active"), jQuery(".backdrop-custom").removeClass("is-active")
        }),
        function(a, b) {
            b(function() {
                b(".ripple").on("click", function(c) {
                    var d = b("<div/>"),
                        e = b(this).offset(),
                        f = c.pageX - e.left,
                        g = c.pageY - e.top;
                    d.addClass("ripple-effect");
                    var h = b(".ripple-effect");
                    h.css("height", b(this).height()), h.css("width", b(this).height()), d.css({
                        top: g - h.height() / 2,
                        left: f - h.width() / 2,
                        background: b(this).data("ripple-color")
                    }).appendTo(b(this)), a.setTimeout(function() {
                        d.remove()
                    }, 2e3)
                })
            })
        }(window, jQuery), setLoginSignup(), appendParamsToUrl(), setUTMRefCookie();
    var a = location.search.split("=");
    createCookie("referralCode", a[1], 3)
}), jQuery(window).load(function() {
    jQuery(".lazyLoad1").append('<video width="1324" height="607" autoplay loop><source src="images/Outgrow-demo.mp4" type="video/mp4"></video>'), jQuery(".lazyLoad2").append('<video width="1324" height="607" autoplay loop><source src="images/Outgrow-demo.mp4" type="video/mp4"></video>'), jQuery("img").each(function() {
        jQuery(this).attr("src", jQuery(this).attr("data-src"))
    }), jQuery(".outgrow-video").each(function() {
        jQuery(this).attr("src", jQuery(this).attr("data-src"))
    })
}), window.onscroll = function() {
    jQuery(window).scrollTop() > 1e3 && (console.log("Inside if"), jQuery("body").innerWidth() > 990 && "" !== jQuery("#og-iframe").attr("data-calc") && (jQuery("#og-iframe").attr("src", jQuery("#og-iframe").attr("data-calc")), jQuery("#og-iframe").attr("data-calc", ""), console.log("Desktop if", jQuery("#og-iframe").attr("data-calc", ""))), jQuery("body").innerWidth() <= 990 && document.getElementsByClassName("og-iframe-res")[0] && "" !== document.getElementsByClassName("og-iframe-res")[0].dataset.calc && jQuery(".og-iframe-res").each(function() {
        jQuery(this).attr("src", jQuery(this).attr("data-calc")), jQuery(this).attr("data-calc", ""), console.log("Res if")
    }), "" !== document.getElementsByClassName("scrollimg")[0].dataset.scrollImg && jQuery(".scrollimg").each(function() {
        jQuery(this).attr("src", jQuery(this).attr("data-scroll-img")), jQuery(this).attr("data-scroll-img", "")
    }))
}, window.calculateMinHeight = function() {
    var a = screen.width / screen.height,
        b = document.getElementById("og-iframe"),
        c = b.clientWidth / a;
    b.style.minHeight = c + "px"
};