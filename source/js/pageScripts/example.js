window.runTimeout = function() {
    setTimeout(function () {
        jQuery('.content-loader').addClass('hide');   
    }, 5000);
}

window.display = function (url) {
    document.getElementById('og-iframe').src = url;
    jQuery('#og-iframe').addClass('iframeHeight')
    calculateMinHeight();
    
    setTimeout(calculateMinHeight, 2000);
}

jQuery(document).ready(function () {
	
	var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    },'#og-iframe');

    calculateMinHeight();

    jQuery('.calc-links a').on('click',function(){
		jQuery('a').removeClass('active');
		jQuery(this).addClass('active');
	});
    jQuery('.og-iframe-res').each(function () {
        console.log('Examples og');
        if (jQuery(this).attr('data-calc')) {
            console.log('Examples og if');
            jQuery(this).attr('src', jQuery(this).attr('data-calc'));
            jQuery(this).attr('data-calc', '');
        }
    })
    runTimeout();
})