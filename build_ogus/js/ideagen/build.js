function requestBuild(data) {
    console.log(data, '>>>>>>>>>>>>>>>', data.app_selected.length);
    $('.result-page-loader').removeClass('hide');
    makeRequest(data, data.app_selected.length);
}

function makeRequest(app, count, finalCallback) {
    var data = appParams(app, count - 1);
    someAjaxCall(data, function (response) {
        if (count > 0) {
            console.log(response, '>>>>>>>', count);
            makeRequest(app, count - 1, finalCallback);
        } else {
            $('.result-page-loader').addClass('hide');
            $('.build-btn').removeClass('hide');
            finalCallback && finalCallback();
        }
    });
}

function someAjaxCall(data, callback) {
    $.ajax({
        type: 'POST',
        url: link.getBuildLink(),
        headers: {
            "Content-Type": "application/json"
        },
        data: JSON.stringify(data),
        success: function (response) {
            if (response.error) callback();
            else callback(response);
        },
        error: function (errr) {
            callback(err);
        }
    })
}

function appParams(data, key) {
    let name = data.email.split('@')[0].split('.').join(' ');
    let domain = data.email.split('@')[1].split('.')[0];
    let params = {
        "user": {
            "emails": {
                "email": data.email
            },
            "name": name,
            "password": "1234567890"
        },
        "company": {
            "sub_domain": domain,
            "name": domain
        },
        "app": {
            "name": data.app_selected[key],
            "header": data.app_selected[key],
            "background": ""
        },
        "template": "5892d26dcbff7e0b1c34bf65"
    }
    return params;
}

function sendVisitResponse() {
    let data = {
        timestamp: timestamp,
        email: email,
        category: saveData.category,
        sub_category: saveData.subCat,
        flag: true,
        isVisit: true,
        form_idea_generator: 'yes'
    }
    // requestBuild(data);
    $.ajax({
        type: 'POST',
        url: link.getResponseLink(),
        data: JSON.stringify(data),
        success: function (response) {
            console.log(response);
        },
        error: function () {

        }
    })
    flag = true;
}

function sendLeadResponse() {

    let data = {
        email: email,
        flag: true,
        isLead: true,
        personalized_idea: 'yes'
    }
    // requestBuild(data);
    $.ajax({
        type: 'POST',
        url: link.getResponseLink(),
        data: JSON.stringify(data),
        success: function (response) {
            console.log(response);

            jQuery('button:contains("TALK")').on('click', function () {
                Intercom('show');
            });
        },
        error: function () {

        }
    })
    flag = true;
}

function showErrors(classname, message) {
    $('.' + classname).html(message);
    $('.' + classname).css({
        'display': 'block'
    })
}

function clearErrors() {
    $('.error').html("");
    $('.error').each(function () {
        $(this).css({
            'display': 'none'
        })
    })
}
window.closeCookieDialog = function (closeOnReload) {
    jQuery('.section.sec-cookies').addClass('hide');
    // jQuery('.intercom-launcher-discovery-frame').removeClass('custom-intercom');
    // jQuery('.intercom-launcher-frame').removeClass('custom-intercom');
    // jQuery('.intercom-launcher-badge-frame').removeClass('custom-intercom');
    jQuery('.intercom-launcher-discovery-frame').removeAttr('style');
    jQuery('.intercom-launcher-frame').removeAttr('style');
    jQuery('.intercom-launcher-badge-frame').removeAttr('style');
    jQuery('.intercom-borderless-frame').removeAttr('style');
    jQuery('.intercom-messenger-frame').css('bottom', 'calc(20px + 80px)');
    jQuery('.intercom-notifications-frame').removeAttr('style');

    if (closeOnReload) {
        document.cookie = "disableCookieDialog=true; expires=Thu, 29 Dec 2022 12:00:00 UTC"
    }
    jQuery('.floating-btn').addClass('floating-btn-space');
}, window.setIntercomLauncherPos = function () {
    const intercomMessengerInterval = setInterval(() => {
        console.log('setting custom intercom css');
        const iframe = document.querySelector('.intercom-messenger-frame');
        const launcherBadge = document.querySelector('.intercom-launcher-badge-frame');
        const cookieSection = document.querySelector('.section.sec-cookies');
        const intercomBorderlessFrame = document.querySelector('.intercom-borderless-frame');

        const intercomNotification = document.querySelector('.intercom-notifications-frame');
        const intercomLauncher = document.querySelector('.intercom-launcher-discovery-frame');

        if (!cookieSection.classList.contains('hide')) {
            if (iframe) {
                jQuery('.intercom-messenger-frame').css('bottom', '160px');
            }
            if (launcherBadge) {
                jQuery('.intercom-launcher-badge-frame').css('bottom', '134px');
            }
            if (intercomBorderlessFrame) {
                jQuery('.intercom-borderless-frame').css('bottom', '160px');
            }
            if (intercomNotification) {
                jQuery('.intercom-notifications-frame').css('bottom', '160px');
            }
            if (intercomLauncher) {
                intercomLauncher.style.bottom = '90px';
                document.querySelector('.intercom-launcher-frame').style.bottom = '90px'
            }
        }
    }, 600);
}, window.showCookieDialog = function () {
    const disableCookieDialog = readCookie('disableCookieDialog');
    if (disableCookieDialog == undefined || disableCookieDialog === 'false') {
        jQuery('.section.sec-cookies').removeClass('hide');
    } else {
        jQuery('.floating-btn').addClass('floating-btn-space');
    }
},
    window.readCookie = function (a) {
        for (var b = a + "=", c = document.cookie.split(";"), d = 0; d < c.length; d++) {
            for (var e = c[d];
                " " == e.charAt(0);) e = e.substring(1, e.length);
            if (0 == e.indexOf(b)) return e.substring(b.length, e.length)
        }
        return null;

    }

function setLoginSignup() {
    // var a = window.location.hostname;
    // 0 === a.indexOf("www.outgrow.co") && (a = "outgrow.co") || -1 === a.indexOf("outgrow") && (a = "rely.co");
    // var b = "//app." + a,
    //     c = b + "/login",
    //     d = b + "/signup",
    //     e = "Start Free Trial";
    // jQuery(".signuplink").each(function () {
    //     jQuery(this).prop('href', b)
    // })
    // jQuery(".login > .link-login").prop("href", c);
    // let f = readCookie("storage");

    // try {
    //     if (f) {
    //         f = JSON.parse(f);
    //         d = "//" + f.companyList[1] + "." + a + "/dashboard";
    //         e = "Dashboard";
    //         console.log('dashboard');
    //         // jQuery(".login > .link-login").prop("href", d).text(e).on("click", function(a) {
    //         //     callGA(e);
    //         // }, b);

    //         jQuery('.login-dashboard-link').prop('href', d).text(e).on('click', (a) => {
    //             callGA(e)
    //         }, b);
    //         jQuery('.dash-login').addClass('dashboard-login');
    //         jQuery('.hideafter-login').addClass('hide');
    //         //  jQuery('.navbar-email').addClass('hide');
    var a = window.location.hostname;
    0 === a.indexOf("www.outgrow.co") && (a = "outgrow.co") || -1 === a.indexOf("outgrow") && (a = "rely.co");
    var b = "//app." + a,
        c = b + "/login",
        d = b + "/signup",
        e = "Start Free Trial";
    jQuery(".signuplink").each(function () {
        jQuery(this).prop('href', b)
    })
    jQuery(".login > .link-login").prop("href", c);
    let f = readCookie("storage");

    try {
        if (f) {
            f = JSON.parse(f);
            d = "//" + f.companyList[1] + "." + a + "/dashboard";
            e = "Dashboard";
            console.log('dashboard');
            // jQuery(".login > .link-login").prop("href", d).text(e).on("click", function(a) {
            //     callGA(e);
            // }, b);

            jQuery('.login-dashboard-link').prop('href', d).text(e).on('click', (a) => {
                callGA(e)
            }, b);
            jQuery('.dash-login').removeClass('hide');
            jQuery('.login-button').addClass('hide');
            jQuery('.hideafter-login').addClass('hide');
            //  jQuery('.navbar-email').addClass('hide');
        }

    } catch (e) {
        console.log(e)
    }

}

jQuery(document).ready(function () {
    showCookieDialog();
    setIntercomLauncherPos();
    setLoginSignup();
});

