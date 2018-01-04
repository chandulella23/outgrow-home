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
        filters: ['filter-all', 'filter-auto'],
        calcLink: 'https://premade.outgrow.us/Auto-Loan-Calc',
        gif: 'https://dzvexx2x036l1.cloudfront.net/calc_images/auto+loan+calculator.gif',
        name: 'AUTO LOAN CALCULATOR',
        layout: 'The Londoner'
    },
    {
        'id': 'calc-early-payment',
        filters: ['filter-all', 'filter-auto'],
        calcLink: 'https://premade.outgrow.us/Early-Payment-Calculator',
        gif: 'https://dzvexx2x036l1.cloudfront.net/calc_images/early+payment+calculator.gif',
        name: 'EARLY PAYMENT CALCULATOR',
        layout: 'The Tokyo'
    },
    {
        'id': 'calc-downpayment',
        filters: ['filter-all', 'filter-auto'],
        calcLink: 'https://premade.outgrow.us/Downpayment-Calculator',
        gif: 'https://dzvexx2x036l1.cloudfront.net/calc_images/downpayment+calculator.gif',
        name: 'HOW MUCH SHOULD I PUT DOWN?',
        layout: 'The Londoner'
    },
    {
        'id': 'calc-student-budget',
        filters: ['filter-all', 'filter-education'],
        calcLink: 'https://premade.outgrow.us/student-budget-calculator',
        gif: 'https://dzvexx2x036l1.cloudfront.net/calc_images/calculate+your+student+budget.gif',
        name: 'STUDENT BUDGET CALCULATOR',
        layout: 'The Madrid'
    },
    {
        'id': 'calc-harward-score',
        filters: ['filter-all', 'filter-education'],
        calcLink: 'https://premade.outgrow.us/Harvard-Minimum-Score-Calculator',
        gif: 'https://dzvexx2x036l1.cloudfront.net/calc_images/chances+of+getting+into+harvard.gif',
        name: 'What is a good enough score to get into Harvard with your background?',
        layout: 'The Greek'
    },
    {
        'id': 'calc-home-budget',
        filters: ['filter-all', 'filter-finance'],
        calcLink: 'https://premade.outgrow.us/Home-Budget-Calculator',
        gif: 'https://dzvexx2x036l1.cloudfront.net/calc_images/calculate+your+monthly+home+budget.gif',
        name: 'HOME BUDGET CALCULATOR',
        layout: 'The Tokyo'
    },
    {
        'id': 'calc-weight-loss',
        filters: ['filter-all', 'filter-health'],
        calcLink: 'https://premade.outgrow.us/weightloss-calc',
        gif: 'https://dzvexx2x036l1.cloudfront.net/calc_images/Weightloss+Calc.gif',
        name: 'WEIGHT LOSS CALCULATOR',
        layout: 'The Greek'
    },
    {
        'id': "calc-trump-plan",
        filters: ['filter-all', 'filter-publishing'],
        calcLink: 'https://premade.outgrow.us/How-will-Trump-tax-plan-affect-you',
        gif: 'https://dzvexx2x036l1.cloudfront.net/calc_images/how+will+trumps+tax+plan+affect+you.gif',
        name: 'HOW WILL TRUMP\'S TAX PLAN AFFECT YOU?',
        layout: 'The Madrid'
    }
];

window.markAsActive = function (calcId) {
    var currentActiveCalc = document.querySelector('#gallery-content-center li.active');
    currentActiveCalc.classList.remove('active');

    var tobeActiveCalc = document.querySelector('#' + calcId);
    tobeActiveCalc.classList.add('active');

    toBeActiveCalc = window.calcs.find(function (calc) {
        return calc.id === calcId;
    });
    
    var premadeGif = document.getElementById('premade-gif');
    var premadePreview = document.getElementById('premade-preview-link');
    var premadeName = document.getElementById('premade-calc-name');
    var premadeLayout = document.getElementById('premade-calc-layout')

    premadeGif.src = toBeActiveCalc.gif;
    premadePreview.href = toBeActiveCalc.calcLink;
    premadeName.innerHTML = '<i class="material-icons">&#xE80E;</i>' + toBeActiveCalc.name;
    premadeLayout.innerHTML = '<strong>Layout:</strong> ' + toBeActiveCalc.layout;
};

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
    });

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
    var sflag = true;
    allCalcs.forEach(function (calc) {
        if (!calc.classList.contains('hide') && sflag) {
            calc.classList.add('active');
            
            var activeCal = window.calcs.find(function (cal) {
                return cal.id === calc.id;
            });

            var premadeGif = document.getElementById('premade-gif');
            var premadePreview = document.getElementById('premade-preview-link');
            var premadeName = document.getElementById('premade-calc-name');
            var premadeLayout = document.getElementById('premade-calc-layout')

            premadeGif.src = activeCal.gif;
            premadePreview.href = activeCal.calcLink;
            premadeName.innerHTML = '<i class="material-icons">&#xE80E;</i>' + activeCal.name;
            premadeLayout.innerHTML = '<strong>Layout:</strong> ' + activeCal.layout;
            sflag = false;
        }
    });
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