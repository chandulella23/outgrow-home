jQuery('.mk-animate-element').viewportChecker({
		classToAdd: 'mk-in-viewport', // Class to add to the elements when they are visible
	});

	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 70) {
			jQuery("nav").addClass('nav-boxshadow');
		} else {
			jQuery("nav").removeClass('nav-boxshadow');
		}
	});

	jQuery( "#open" ).click(function() {
	  	jQuery(".menu-outer").addClass("is-active");
		jQuery(".backdrop-custom").addClass("is-active");
	});

	jQuery( ".close-menu" ).click(function() {
		jQuery(".menu-outer").removeClass("is-active");
		jQuery(".backdrop-custom").removeClass("is-active");
	});

	(function (window, $) {
		$(function() {
			$('.ripple').on('click', function (event) {
				var $div = $('<div/>'),
				btnOffset = $(this).offset(),
				xPos = event.pageX - btnOffset.left,
				yPos = event.pageY - btnOffset.top;

				$div.addClass('ripple-effect');
				var $ripple = $(".ripple-effect");

				$ripple.css("height", $(this).height());
				$ripple.css("width", $(this).height());
				$div
				.css({
					top: yPos - ($ripple.height()/2),
					left: xPos - ($ripple.width()/2),
					background: $(this).data("ripple-color")
				})
				.appendTo($(this));

				window.setTimeout(function(){
					$div.remove();
				}, 2000);
			});
		});
	})(window, jQuery);

	appendParamsToUrl();
	var query_params = location.search.split('=');
	createCookie('referralCode',query_params[1],3);

	function appendParamsToUrl() {
		var param = '';
		var url = window.location.href;
		var paramArray = url.split('?');
		if(typeof paramArray[1] !== "undefined") {
			param = '?'+paramArray[1];
		}

		jQuery('.params').each(function() {
			var href = jQuery(this).prop('href');
			var pattern = /javascript/;
			if(!pattern.test(href)) {
				href+=param;
				jQuery(this).prop('href',href);
			}
		});
	}

	function createCookie(name,value,days) {
	    var expires = "";
	    if (days) {
	        var date = new Date();
	        date.setTime(date.getTime() + (days*24*60*60*1000));
	        expires = "; expires=" + date.toUTCString();
	    }
	    document.cookie = name + "=" + value + expires + "; path=/";
	}

	function claim_sub_domain(){
		var sub_domain = jQuery('#company-name').val();
		// console.log("@@@@@@@@@@@@@@@@@@@@@@@@@@@",sub_domain);
		createCookie('claim_sub_domain',sub_domain,3);
		window.location.href = "https://app.outgrow.co/signup";
	}

	function callGA(str) {
		switch(str) {
			case 'CANNOT WAIT CTA':
				ga('markettingteam.send', 'event', 'Signup', 'Click', 'LP_FirstFold');
				break;
			case 'WHY':
				ga('markettingteam.send', 'event', 'Header', 'Click', 'LP_Header_WhyCalc');
				break;
			case 'FEATURES':
				ga('markettingteam.send', 'event', 'Header', 'Click', 'LP_Header_Features');
				break;
			case 'PRICING':
				ga('markettingteam.send', 'event', 'Header', 'Click', 'LP_Header_Pricing');
				break;
			case 'USECASE':
				ga('markettingteam.send', 'event', 'Header', 'Click', 'LP_Header_UseCases');
				break;
			case 'LOGIN':
				ga('markettingteam.send', 'event', 'Login', 'Click', 'LP_Header_Login');
				break;
			case 'DASHBOARD':
				ga('markettingteam.send', 'event', 'DASHBOARD', 'Click', 'LP_Header_GO_TO_DASHBOARD');
				break;
			case 'FEATURESF':
				ga('markettingteam.send', 'event', 'Footer', 'Click', 'LP_Footer_Features');
				break;
			case 'USECASEF':
				ga('markettingteam.send', 'event', 'Footer', 'Click', 'LP_Footer_UseCases');
				break;
			case 'PRICINGF':
				ga('markettingteam.send', 'event', 'Footer', 'Click', 'LP_Footer_Pricing');
				break;
			case 'RESOURCEF':
				ga('markettingteam.send', 'event', 'Footer', 'Click', 'LP_Footer_Resouces');
				break;
			case 'ABOUTF':
				ga('markettingteam.send', 'event', 'Footer', 'Click', 'LP_Footer_About');
				break;
			case 'PRIVACYF':
				ga('markettingteam.send', 'event', 'Footer', 'Click', 'LP_Footer_Privacy');
				break;
			case 'TERMSF':
				ga('markettingteam.send', 'event', 'Footer', 'Click', 'LP_Footer_Terms');
				break;
		}
	}