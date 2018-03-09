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

function getTemplateName(template) {
    let templates = [{id: 'template-eight', text: 'The Venice'},
        {id: 'template-seven', text: 'The Seattle'}, {id: 'one-page-card-new', text: 'The Chicago'},
        {id: 'sound-cloud-v3', text: 'The Londoner'}, {id: 'inline-temp-new', text: 'The Greek'},
        {id: 'experian', text: 'The Tokyo'}, {id: 'template-five', text: 'The Madrid'},
        {id: 'template-six', text: 'The Stockholm'}];
    console.log('hello', templates.find(t => t.id.includes(template)));
    return templates.find(t => t.id.includes(template));
}

window.setPremade = function () {
    let premadeTemplateList = jQuery('#gallery-content-center');
    let innerHTML = '';
    for (let i = 0; i < window.calcs.length; i++) {
        let id = `${window.calcs[i].id}`;
        let className = window.calcs[i].Industry;
        if (i === 0) {
            innerHTML += `<li class="active filter-all ${className}" id="${id}">
                        <a href="javascript:void(0)" onclick="markAsActive('${id}')">
                    ${window.calcs[i].Description}</a></li>`
        } else {
            innerHTML += `<li class="filter-all ${className}" id="${id}">
                        <a href="javascript:void(0)" onclick="markAsActive('${id}')">
                    ${window.calcs[i].Description}</a></li>`
        }
    }
    premadeTemplateList.html(innerHTML)
}

window.markAsActive = function (calcId) {
    console.log(calcId);
    var currentActiveCalc = document.querySelector('#gallery-content-center li.active');
    currentActiveCalc.classList.remove('active');
    var tobeActiveCalc = document.querySelector('#' + calcId);
    tobeActiveCalc.classList.add('active');
    let calc = window.calcs.find(function (calc) {
        return calc.id === calcId
    });
    console.log(calc)
    var premadeGif = document.getElementById('premade-gif');
    var premadePreview = document.getElementById('premade-preview-link');
    var premadeName = document.getElementById('premade-calc-name');
    var premadeLayout = document.getElementById('premade-calc-layout')
    premadeGif.src = calc.GIF;
    premadePreview.href = calc['Published Link'];
    premadeName.innerHTML = '<i class="material-icons">&#xE80E;</i>' + calc.Name;
    premadeLayout.innerHTML = '<strong>Layout:</strong> ' + calc.Layout
}

window.changeActiveCalcCategory = function (id) {
    var currentActiveCat = document.querySelector('#calc-cats li.active');
    currentActiveCat.classList.remove('active');
    console.log(id)
    var tobeActiveCat = document.querySelector('#' + id);
    tobeActiveCat.parentElement.classList.add('active')
}

window.shuffleCalcs = function (filterName) {
    console.log(filterName);
    changeActiveCalcCategory(filterName);
    var hiddenCalcs = document.querySelectorAll('#gallery-content-center li.hide');
    hiddenCalcs.forEach(function (calc) {
        calc.classList.remove('hide')
    });
    window.calcs.filter(function (calc) {
        return !calc.filters.includes(filterName)
    }).forEach(function (calc) {
        var calc = document.querySelector('#' + calc.id);
        calc.classList.add('hide')
    })
    var activeCalc = document.querySelector('#gallery-content-center li.active');
    if (activeCalc)
        activeCalc.classList.remove('active');
    var allCalcs = document.querySelectorAll('#gallery-content-center li');
    var sflag = !0;
    allCalcs.forEach(function (calc) {
        if (!calc.classList.contains('hide') && sflag) {
            calc.classList.add('active');
            var activeCal = window.calcs.find(function (cal) {
                return cal.id === calc.id
            });
            console.log(activeCal)
            var premadeGif = document.getElementById('premade-gif');
            var premadePreview = document.getElementById('premade-preview-link');
            var premadeName = document.getElementById('premade-calc-name');
            var premadeLayout = document.getElementById('premade-calc-layout')
            premadeGif.src = activeCal.GIF;
            premadePreview.href = activeCal['Published Link'];
            premadeName.innerHTML = '<i class="material-icons">&#xE80E;</i>' + activeCal.Name;
            premadeLayout.innerHTML = '<strong>Layout:</strong> ' + activeCal.Layout;
            sflag = !1
        }
    })
}

window.changeTab = function(className) {
    let hiddenCalcs = document.querySelectorAll('#gallery-content-center li.hide');
    hiddenCalcs.forEach(function (calc) {
        calc.classList.remove('hide')
    });
    window.calcs.filter(function (calc) {
        return !calc.filters.includes(className)
    }).forEach(function (calc) {
        var calc = document.querySelector('#' + calc.id);
        calc.classList.add('hide')
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
    jQuery.post('http://outgrow-api.herokuapp.com/api/v1/admin/getCalculators',
        function (data, status) {
            console.log(status, data);
            if (status === 'success') {
                window.calcs = data.data.calculators;
                window.calcs.forEach(calc => {

                    calc['filters'] = ['filter-auto', calc.industry, calc.template.replace(/\s/g,'')];
                    calc['GIF'] = calc.media;
                    calc['Industry'] = calc.industry.replace(/(\s|&)/g, '');
                    calc['Name'] = calc.title;
                    calc['id'] = 'id' + calc._id;
                    calc['Description'] = calc.description;
                    let layout = getTemplateName(calc.template);
                    calc['Layout'] = layout ? layout.text : 'Stockholm';
                    calc['Published Link'] = calc.liveApp.url;

                });
                jQuery('#premade-content').removeClass('hide');
                jQuery('#premade-header').removeClass('hide');
                jQuery('#premade-loader').addClass('hide');
                setPremade();
                shuffleCalcs('Auto');
                console.log(calcs);
            }
        });
})