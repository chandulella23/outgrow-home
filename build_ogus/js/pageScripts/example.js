window.runTimeout = function () {
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
    let templates = [{
        id: 'template-eight',
        text: 'The Venice'
    },
    {
        id: 'template-seven',
        text: 'The Seattle'
    }, {
        id: 'one-page-card-new',
        text: 'The Chicago'
    },
    {
        id: 'sound-cloud-v3',
        text: 'The Londoner'
    }, {
        id: 'inline-temp-new',
        text: 'The Greek'
    },
    {
        id: 'experian',
        text: 'The Tokyo'
    }, {
        id: 'template-five',
        text: 'The Madrid'
    },
    {
        id: 'template-six',
        text: 'The Stockholm'
    }
    ];
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

// window.markAsActive = function (calcId) {
//     var currentActiveCalc = document.querySelector('#gallery-content-center li.active');
//     currentActiveCalc.classList.remove('active');
//     var tobeActiveCalc = document.querySelector('#' + calcId);
//     tobeActiveCalc.classList.add('active');
//     let calc = window.calcs.find(function (calc) {
//         return calc.id === calcId
//     });
//     var premadeGif = document.getElementById('premade-gif');
//     var premadePreview = document.getElementById('premade-preview-link');
//     var premadeName = document.getElementById('premade-calc-name');
//     var premadeLayout = document.getElementById('premade-calc-layout')
//     premadeGif.src = calc.GIF;
//     premadePreview.href = calc['Published Link'];
//     premadeName.innerHTML = '<i class="material-icons">&#xE80E;</i>' + calc.Name;
//     premadeLayout.innerHTML = '<strong>Layout:</strong> ' + calc.Layout
// }

window.changeActiveCalcCategory = function (id) {
    var currentActiveCat = document.querySelector('#calc-cats li.active');
    currentActiveCat.classList.remove('active');
    var tobeActiveCat = document.querySelector('#' + id);
    tobeActiveCat.parentElement.classList.add('active')
}

window.setCalcCategory = function (filterName) {
    changeActiveCalcCategory(filterName);
    let selectedTab = jQuery('.nav.nav-tabs.premade-calc li.active').children().attr('id');
    console.log(filterName, selectedTab);
    var hiddenCalcs = document.querySelectorAll('#gallery-content-center li.hide');
    hiddenCalcs.forEach(function (calc) {
        calc.classList.remove('hide')
    });
    window.calcs.filter(function (calc) {
        return !(calc.filters.includes(filterName) && calc.filters.includes(selectedTab))
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
            let activeCal = window.calcs.find(function (cal) {
                return cal.id === calc.id
            });
            let premadeGif = document.getElementById('premade-gif');
            let premadePreview = document.getElementById('premade-preview-link');
            let premadeName = document.getElementById('premade-calc-name');
            let premadeLayout = document.getElementById('premade-calc-layout')
            premadeGif.src = activeCal.GIF;
            premadePreview.href = activeCal['Published Link'];
            premadeName.innerHTML = '<i class="material-icons">&#xE80E;</i>' + activeCal.Name;
            premadeLayout.innerHTML = '<strong>Layout:</strong> ' + activeCal.Layout;
            sflag = !1
        }
    })
}

window.changeTab = function (tabName) {
    let text = '';

    switch (tabName) {
        case 'Calculator':
            text = 'There is a Calculator for that!';
            break;
        case 'OutcomeQuiz':
            text = 'There is an Outcome quiz for that!';
            break;
        case 'GradedQuiz':
            text = 'There is a Graded quiz for that!';
            break;
        case 'Poll':
            text = 'There is a Poll for that!';
            break;
        default:
            break;
    }
    jQuery('#premade-heading').text(text);
    let hiddenCalcs = document.querySelectorAll('#gallery-content-center li.hide');
    let selectedCat = jQuery('#calc-cats li.active').children().attr('id');
    console.log('tabname=', tabName, selectedCat);
    hiddenCalcs.forEach(function (calc) {
        calc.classList.remove('hide')
    });
    let categorySet = new Set();
    window.calcs.filter(function (calc) {
        return !(calc.filters.includes(tabName) && calc.filters.includes(selectedCat));
    }).forEach(function (cal) {
        var calc = document.querySelector('#' + cal.id);
        calc.classList.add('hide')
    });

    window.calcs.filter(function (calc) {
        return calc.filters.includes(tabName);
    }).forEach(function (cal) {
        categorySet.add(cal.Industry);
    });

    console.log(categorySet);
    let categoryContainer = jQuery('#calc-cats').children();
    let categories = categoryContainer.children();
    let it = categorySet.values();
    let first = it.next().value; //get first valid category
    for (let i = 0; i < categories.length; i++) {
        if (categorySet.has(categories[i].id)) {
            categoryContainer[i].classList.remove('hide');
        } else {
            categoryContainer[i].classList.add('hide');
        }
    }

    if (first) {
        setCalcCategory(first)
    } else {
        setCalcCategory('Auto');
    }
}

window.ready = function () {
    let http = new XMLHttpRequest();
    let url = 'https://api.outgrow.co/api/v1/admin/getCalculators';
    http.open("POST", url, true);

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            let res = JSON.parse(http.responseText);
            renderPremadeCalcs(res);
        }
    };
    http.send();
};
ready();

window.ready1 = function () {
    let http = new XMLHttpRequest();
    let url = 'https://outgrow.co/blog/api/get_posts/';
    http.open("GET", url, true);

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            let res = JSON.parse(http.responseText);
            renderBlogs(res);
        }
    };
    http.send();
};
ready1();


function renderBlogs(response) {
    let posts = response.posts;

    console.log('Post -> ', posts[0]);
    if (posts.length > 0) {
        let post = '';
        for (let i = 0; i < posts.length; i++) {
            if (i % 2 == 0) {
                post += ` <div class="swiper-slide">
                        <div class="recentNews-inner-row">
                            <div class="img-section"><img src="${posts[i].attachments[0].url}" /></div>
                            <div class="recentNews-text">
                                <h5>${posts[i].title} </h5>
                                <a href="${posts[i].url}" target="_blank" class="readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
                            </div>
                        </div>`;

            } else {
                post += `<div class="recentNews-inner-row">
                        <div class="img-section"><img src="${posts[i].attachments[0].url}" /></div>
                        <div class="recentNews-text"> 
                        <h5>${posts[i].title} </h5>
                        <a href="${posts[i].url}" target="_blank" class="readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
                        </div>
                    </div>
                </div>`
            }
        }
        let postt = document.getElementById("postt");
        let a = `<div class="swiper-wrapper">
            ${post}
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                <span class="swiper-pagination-bullet"></span>
                <span class="swiper-pagination-bullet"></span>
                <span class="swiper-pagination-bullet"></span>
                <span class="swiper-pagination-bullet"></span>
            </div>`;
        postt.innerHTML = a;

        setTimeout(() => {
            var swiper = new Swiper('.swiper-container-blog', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                //spaceBetween: 30,
                //slidesPerView: 3,
                centeredSlides: true,
                // autoplay: 2500,
                speed: 500,
                autoplayDisableOnInteraction: false
            });
        }, 1000);
    }
}

function renderPremadeCalcs(responseText) {
    if (responseText.success) {
        window.calcs = responseText.data.calculators;
        console.log(window.calcs);
        let trendingC = [];
        window.events = [];
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        window.calcs.forEach(calc => {
            if (calc.industry === "Trending") {
                if (trendingC.length !== 6)
                    trendingC.push(calc);
            }

            calc['GIF'] = calc.media;
            calc['Industry'] = calc.industry.replace(/(\s|&)/g, '');
            calc['Name'] = calc.title;
            calc['id'] = 'id' + calc._id;
            calc['Description'] = calc.description;
            let layout = getTemplateName(calc.template);
            calc['Layout'] = layout ? layout.text : 'Stockholm';
            calc['Published Link'] = calc.liveApp.url;
            calc['filters'] = ['filter-auto', calc.Industry, calc.type.replace(/\s/g, '')];
            if (calc.launch_date !== null) {
                let launch_date = new Date(calc.launch_date);
                let day = launch_date.getUTCDate();
                let month = launch_date.getUTCMonth();
                let year = launch_date.getUTCFullYear();
                let ev = {
                    Date: new Date(year, month, day),
                    id: calc._id,
                    Title: calc.title,
                    Link: '',
                    Image: calc.media ? calc.media : 'https://dzvexx2x036l1.cloudfront.net/default_premade.jpg',
                    Description: calc.Description,
                    EventName: calc.event_name
                };
                window.events.push(ev);
            }
        });
        var settings = {};
        var element = document.getElementById('calendar');
        caleandar(element, window.events, settings);

        jQuery('.eventday').popover({
            placement: 'top',
            trigger: 'hover',
            container: 'body',
            html: true
        });

        if (trendingC.length > 0) {
            let tCalc = '';
            for (let i = 0; i < trendingC.length; i++) {
                if (i % 2 == 0) {
                    tCalc += `<div class="swiper-slide">
                                <div class="recentNews-inner-row">
                                    <div class="img-section"><img src="${trendingC[i].media}" /></div>
                                    <div class="recentNews-text">
                                        <h5>${trendingC[i].Name}</h5>
                                        <span>${trendingC[i].type}</span>
                                        <p class="">${trendingC[i].Description} </p>
                                        <div class="button-wrapper">
                                            <a target='_blank' href="${trendingC[i]['Published Link']}" class="btn btn-preview btn-hover">Preview</a>
                                            <a href="//app.outgrow.co/signup" class="btn btn-useTemp btn-hover">Use Template</a>
                                        </div>
                                    </div>
                                </div>`;

                } else {
                    tCalc += `<div class="recentNews-inner-row">
                                <div class="img-section"><img src="${trendingC[i].media}" /></div>
                                <div class="recentNews-text">
                                    <h5>${trendingC[i].Name}</h5>
                                    <span>${trendingC[i].type}</span>
                                    <p class="">${trendingC[i].Description} </p>
                                    <div class="button-wrapper">
                                        <a target='_blank' href='${trendingC[i].GIF}' class="btn btn-preview btn-hover">Preview</a>
                                        <a href="//app.outgrow.co/signup" class="btn btn-useTemp btn-hover">Use Template</a>
                                    </div>
                                </div>
                                </div>
                            </div>`
                }
            }
            let TC = document.getElementById("trendingC");
            let a = `<div class="swiper-wrapper">
                    ${tCalc}
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                        <span class="swiper-pagination-bullet"></span>
                        <span class="swiper-pagination-bullet"></span>
                    </div>`;
            TC.innerHTML = a;

            setTimeout(() => {
                var swiper = new Swiper('.swiper-container-recentNews', {
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    //spaceBetween: 30,
                    //slidesPerView: 3,
                    centeredSlides: true,
                    // autoplay: 2500,
                    speed: 500,
                    autoplayDisableOnInteraction: false
                });
            }, 1000);
        }

        jQuery(document).on('click', '.eventday', (event) => {
            self.selectedEvent = [];
            let selectedDate = event.target.getAttribute('content').trim();
            jQuery('p.eventday').removeClass('selected');
            jQuery(event.target).addClass('selected');
            let popover = jQuery(".popover");
            if (!popover.hasClass("noTransition")) {
                popover.addClass("noTransition");
            }
            let selectedEvent = window.events.filter((event) => {
                if (event.Date == selectedDate) {
                    return event;
                }
            });
            if (selectedEvent.length > 0) {
                let eventNames = selectedEvent.map(e => e.EventName).join(' / ');
                let evBanner = ``;
                selectedEvent.forEach((se) => {
                    evBanner += `
                        <div class="event-wrapper">
                            <div class="img-outer"><img src="${se.Image}" /></div>
                            <div class="event-content">
                                <h5>${se.Title}</h5>
                                <span>${se.Description} </span>
                            </div>
                        </div>
                    `;
                });

                let selEvents = document.getElementById("selEvents");
                selEvents.innerHTML = evBanner;
            }

            // self.getEventName(self.selectedEvent);
            // setTimeout(() => {
            //   jQuery('.event-template-outer').slideDown();
            // }, 500);
        });

        jQuery(document).on('click', '.cld-nav', (event) => {
            jQuery('.eventday').popover({
                placement: 'top',
                trigger: 'hover',
                container: 'body',
                html: true
            });
        });


        //  jQuery('#premade-content').removeClass('hide');
        let ele = document.getElementById('premade-content-new');
        ele.classList.remove('hide');

        let loader = document.getElementById('premade-loader-new');
        loader.classList.add('hide');

        //   jQuery('#premade-loader').addClass('hide');
        setPremade();
        setCalcCategory('Auto');
        changeTab('Calculator');
        shuffleCalcs('Auto');
        console.log('qwerty')

        jQuery('#search-experience').val('');
    }
}

jQuery(document).ready(function () {
    jQuery('#nav-examples').addClass('active');
    jQuery('#nav-get-inspired').addClass('active');

    calculateMinHeight();
    window.Intercom('update', {
        'site_example_viewed': new Date()
    });

    var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    }, '#og-iframe');

    jQuery('.calc-links a').on('click', function () {
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

    jQuery('#select-list').selectize({
        create: true,
        sortField: 'text'
    });
    runTimeout();
});

window.filterList = function () {
    let text = document.querySelector('#search-experience').value.toLowerCase();
    let list = jQuery('#calc-cats').children();

    list.each(function (index) {
        jQuery(this).removeClass('active');
    });

    list.each(function (index) {
        const textContent = jQuery(this).text().toLowerCase().trim();

        if (text && textContent.startsWith(text)) {
            jQuery(this).parent().prepend(this);
            jQuery(this).addClass('active');
            // shuffleCalcs(jQuery(this).text().trim());
        }
    });
}

window.searchList = function (event) {
    if (event.keyCode === 13) {
        filterList();
    }
}