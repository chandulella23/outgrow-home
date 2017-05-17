window.display = function (url) {
	//console.log('Display called', url)
	//jQuery('.hrefTarget').empty().append('<iframe id="og-iframe" src="'+url+'"></iframe>');
	document.getElementById('og-iframe').src = url;
	var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    },'#og-iframe');
}

jQuery(document).ready(function () {
	calculateMinHeight();
	var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    },'#og-iframe');

    jQuery('.calc-links a').on('click',function(){
		jQuery('a').removeClass('active');
		jQuery(this).addClass('active');
	});

})