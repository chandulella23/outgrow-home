document.getElementsByClassName('lead-form-email')[0].onchange = function (e) {
    let email = e.target.value;
    let href = "//app.outgrow.co/signup/?email=";
    document.getElementsByClassName('lead-email')[0].href = href + email;
}

document.getElementsByClassName('lead-form-email')[0].onkeypress = function (e) {
    let email = e.target.value;
    let href = "//app.outgrow.co/signup/?email=";
    if (e.keyCode == 13) {
        window.location.href = href + email;
    }
}

function closeCookieDialog(closeOnReload) {
    jQuery('.section.sec-cookies').addClass('hide');
    jQuery('.intercom-launcher-discovery-frame').removeClass('custom-intercom');
    jQuery('.intercom-launcher-frame').removeClass('custom-intercom');
    jQuery('.intercom-launcher-badge-frame').removeClass('custom-intercom');
    jQuery('.intercom-messenger-frame').css('bottom', 'calc(20px + 80px)');
    if (closeOnReload) {
        document.cookie = "disableCookieDialog=true; expires=Thu, 29 Dec 2022 12:00:00 UTC";
    }

}