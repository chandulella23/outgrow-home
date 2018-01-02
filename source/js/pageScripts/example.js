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

window.calc = {
    'Auto Loan Calculator': {
        belongsTo: ['Auto', 'All']
    },
    'Early Payment Calculator': {
        belongsTo: ['Auto', 'All']
    },
    'How much should I put down?': {
        belongsTo: ['Auto', 'All']
    },
    'Student Budget Calculator': {
        belongsTo: ['Education', 'All']
    },
    'What is a good enough score to get into Harvard with your background?': {
        belongsTo: ['Education', 'All']
    },
    'Home Budget Calculator': {
        belongsTo: ['Finance', 'All']
    },
    'Weight Loss Calculator': {
        belongsTo: ['Health & Fitness', 'All']
    },
    "How will Trump's tax plan affect you?": {
        belongsTo: ['Publishing', 'All']
    }
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
    // jQuery('.og-iframe-res').each(function () {
    //     console.log('Examples og');
    //     if (jQuery(this).attr('data-calc')) {
    //         console.log('Examples og if');
    //         jQuery(this).attr('src', jQuery(this).attr('data-calc'));
    //         jQuery(this).attr('data-calc', '');
    //     }
    // })
    runTimeout();
})