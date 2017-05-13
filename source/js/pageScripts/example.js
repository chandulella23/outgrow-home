window.display = function (url) {
	console.log('Display called', url)
	jQuery('.hrefTarget').empty().append('<iframe id="og-iframe" src="'+url+'"></iframe>');
	var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    },'#og-iframe');
}

jQuery(document).ready(function () {
	var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    },'#og-iframe');
})