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
    jQuery('.og-iframe-res').each(function () {
        console.log('Examples og');
        if (jQuery(this).attr('data-calc')) {
            console.log('Examples og if');
            jQuery(this).attr('src', jQuery(this).attr('data-calc'));
            jQuery(this).attr('data-calc', '');
        }
    })
})