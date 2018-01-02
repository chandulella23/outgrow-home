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

window.calcs = [
    {
        'id': 'calc-auto-loan',
        filters: ['filter-all', 'filter-auto']
    },
    {
        'id': 'calc-early-payment',
        filters: ['filter-all', 'filter-auto']
    },
    {
        'id': 'calc-downpayment',
        filters: ['filter-all', 'filter-auto']
    },
    {
        'id': 'calc-student-budget',
        filters: ['filter-all', 'filter-education']
    },
    {
        'id': 'calc-harward-score',
        filters: ['filter-all', 'filter-education']
    },
    {
        'id': 'calc-home-budget',
        filters: ['filter-all', 'filter-finance']
    },
    {
        'id': 'calc-weight-loss',
        filters: ['filter-all', 'filter-health']
    },
    {
        'id': "calc-trump-plan",
        filters: ['filter-all', 'filter-publishing']
    }
];

window.changeActiveCalcCategory = function (id) {
    var currentActiveCat = document.querySelector('#calc-cats li.active');
    currentActiveCat.classList.remove('active');

    var tobeActiveCat = document.querySelector('#' + id);
    tobeActiveCat.parentElement.classList.add('active');
}

window.shuffleCalcs = function (filterName) {
    changeActiveCalcCategory(filterName);
    var hiddenCalcs = document.querySelectorAll('#gallery-content-center li.hide');
    hiddenCalcs.forEach(function (calc) {
        calc.classList.remove('hide');
    })
    window.calcs
        .filter(function (calc) {
            return !calc.filters.includes(filterName);
        })
        .forEach(function (calc) {
            var calc = document.querySelector('#'+calc.id);
            calc.classList.add('hide');
        })

    var activeCalc = document.querySelector('#gallery-content-center li.active');
    if (activeCalc)
        activeCalc.classList.remove('active');

    var allCalcs = document.querySelectorAll('#gallery-content-center li');
    let sflag = true;
    allCalcs.forEach(function (calc) {
        if (!calc.classList.contains('hide') && sflag) {
            calc.classList.add('active');
            sflag = false;
        }
    })
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