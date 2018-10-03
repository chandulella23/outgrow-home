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