window.openTestimonial = function (sectionId) {
    var sections = document.querySelectorAll('.protfolio-inner-section');
    sections.forEach(function (section) {
        section.classList.add('testhide','hide');
    });
    
    var arrowSections = document.querySelectorAll('.arrow_box');
    arrowSections.forEach(function (section) {
        section.classList.remove('testactive');
    });

    var showSection = document.getElementById(sectionId);
    showSection.classList.remove('testhide','hide');
    
    var activeImg = document.getElementById(`${sectionId}-img`);
    activeImg.classList.add('testactive');
}
window.submitEbookData = function (e) {
    e.preventDefault(), jQuery("#ebook-error").html("");
    var o = jQuery("#ebook-email").val(),
        t = jQuery("#ebook-name").val();
    return "" == o || "" == t ? void jQuery("#ebook-error").html("Please fill in the required fields") : void jQuery.ajax({
        url: "js/ebookhandler.php",
        type: "POST",
        data: {
            email: o,
            name: t,
            group_id: 4043919
        },
        beforeSend: function() {
            jQuery("#ebook-submit").html("Preparing your course ... ")
        },
        success: function(e) {
            var a = JSON.parse(e);
            a.error ? (jQuery("#ebook-error").html("There were some errors in the data you provided"), jQuery("#ebook-submit").html('Get Access<i class="material-icons">arrow_downward</i>')) : (jQuery("#ebook-submit").fadeOut(), -1 != window.location.href.indexOf("outgrow.co") && sendNotification(o, t), setTimeout(function() {
                window.location.href = "http://resources.outgrow.co/courses/lead-generation-with-calculators/ebook"
            }, 200))
        },
        error: function(e) {
            jQuery("#ebook-error").html("We are a little backed right now. Please try again."), jQuery("#ebook-submit").html('Get Access<i class="material-icons">arrow_downward</i>')
        }
    })
}

window.sendNotification = function (e, o) {
    jQuery.ajax({
        url: "js/mailer.php",
        data: {
            email: e,
            name: o
        },
        method: "POST",
        success: function(e) {
            console.log(e)
        },
        error: function(e) {
            console.log(e)
        }
    })
}

window.runTimeout = function() {
    setTimeout(function () {
        jQuery('.content-loader').addClass('hide');   
    }, 5000);
    setTimeout(function () {
        console.log('Loading timeout calculate height');
        calculateMinHeight();
    }, 500);
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

jQuery.noConflict();
jQuery.material.init();
jQuery(document).ready(function() {
	calculateMinHeight();

    jQuery('.calc-links a').on('click',function(){
		jQuery('a').removeClass('active');
		jQuery(this).addClass('active');
	});

	var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    },'#og-iframe');

	var url = setLoginSignup();

	console.log(url);

    jQuery('#btnBuildCalc1 > a').prop('href', url);

    runTimeout();
    // initTestimonial();


});