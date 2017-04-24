<!DOCTYPE html>
<html lang="en-US">

<head>

	<title>@yield('title')</title>

	<link rel="canonical" href="http://outgrow.co/" />

	@yield('css')

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators."/>
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Interactive Calculators | Outgrow" />
	<meta property="og:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta name="twitter:title" content="Interactive Calculators | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
	<link href='https://www.filepicker.io/api/file/Ay8X8PhXTdaClFdhsLeR' rel='shortcut icon'>

	@include('_partials.headscripts')
</head>

<body class="">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDL5P5M"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	@include ('_partials.navbar')

	{{ $page->getUrl('js/default.min.js') }}

	{{-- @yield('content') --}}

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script>
		jQuery.noConflict();
	</script>
	<script src='{{ $page->getUrl()."js/default_dynamic3f4f.js?ver=1470129303" }}'></script>
	<script src='{{ $page->getUrl()."js/plugins.js" }}'></script>
	<script src='{{ $page->getUrl()."js/default.min.js" }}'></script>
	<script src="{{ $page->getUrl()."js/bootstrap.min.js" }}"></script>
	<script src="{{ $page->getUrl()."js/material.min.js" }}"></script>
	<script src="{{ $page->getUrl()."js/custom.js" }}"></script>
	<script src="{{ $page->getUrl()."js/jquery.counterup.min.js" }}"></script>
	<script src="{{ $page->getUrl()."js/plans.js" }}"></script>
	<script src="{{ $page->getUrl()."js/footer.js" }}"></script>
	<script>
		jQuery.material.init();
	 jQuery(document).ready(function() {
		 //youtube video
		 jQuery('.close').click(function(){
			jQuery('iframe.outgrow-video').attr('src', jQuery('iframe.outgrow-video').attr('src'));
		});
		 jQuery('#video-modal').on('hidden.bs.modal', function (event) {
	     jQuery('#video-modal iframe').attr("src", jQuery("#video-modal  iframe").attr("src"));
	    });

		//embed web mobile js
		jQuery(".embed1-layout .em-moblink").click(function(){
			if(!jQuery(this).hasClass('active1'))
			jQuery(this).addClass('active1');
			jQuery('.em-weblink').removeClass('active1');
			jQuery("#em1").removeClass('embed-web');
			jQuery("#em1").addClass('embed-mobile');
			jQuery("#em1 .wrapper").addClass('wrapper-mobile');
		});

		jQuery(".embed1-layout .em-weblink").click(function(){
			if(!jQuery(this).hasClass('active1'))
			jQuery(this).addClass('active1');
			jQuery('.em-moblink').removeClass('active1');
			jQuery("#em1").addClass('embed-web');
			jQuery("#em1").removeClass('embed-mobile');
			jQuery("#em1 .wrapper").removeClass('wrapper-mobile');
		});


		jQuery(".embed2-layout .em-moblink").click(function(){
			if(!jQuery(this).hasClass('active2'))
			jQuery(this).addClass('active2');
			jQuery('.em-weblink').removeClass('active2');
			jQuery("#em2").removeClass('embed-web');
			jQuery("#em2").addClass('embed-mobile');
			jQuery("#em2 .wrapper").addClass('wrapper-mobile');
		});

		jQuery(".embed2-layout .em-weblink").click(function(){
			if(!jQuery(this).hasClass('active2'))
			jQuery(this).addClass('active2');
			jQuery('.em-moblink').removeClass('active2');
			jQuery("#em2").addClass('embed-web');
			jQuery("#em2").removeClass('embed-mobile');
			jQuery("#em2 .wrapper").removeClass('wrapper-mobile');
		});



		jQuery(".embed3-layout .em-moblink").click(function(){
			if(!jQuery(this).hasClass('active3'))
			jQuery(this).addClass('active3');
			jQuery('.em-weblink').removeClass('active3');
			jQuery("#em3").removeClass('embed-web');
			jQuery("#em3").addClass('embed-mobile');
			jQuery("#em3 .wrapper").addClass('wrapper-mobile');
		});

		jQuery(".embed3-layout .em-weblink").click(function(){
			if(!jQuery(this).hasClass('active3'))
			jQuery(this).addClass('active3');
			jQuery('.em-moblink').removeClass('active3');
			jQuery("#em3").addClass('embed-web');
			jQuery("#em3").removeClass('embed-mobile');
			jQuery("#em3 .wrapper").removeClass('wrapper-mobile');
		});

		if (document.documentElement.clientWidth < 1024) {
			jQuery(".embed-web").addClass('embed-mobile');
			jQuery(".wrapper").addClass('wrapper-mobile');
		}
	 	console.log('index document ready')

		//Intercom
		var url			=	window.location.href;
		var intercom_id	=	'om2goh5g';
		if (url.toLowerCase().indexOf("outgrow.co") >= 0){
			intercom_id	=	'r841gnag';
		}
		window.intercomSettings = {
			app_id: intercom_id
		};
		(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/r841gnag';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();

		jQuery('.mk-animate-element').viewportChecker({
			classToAdd: 'mk-in-viewport', // Class to add to the elements when they are visible
		});


		jQuery(".toggle-dots-white").click(function(){
			jQuery(".billing-grey-bottom").slideToggle('slow');
		});

		jQuery(".toggle-dots-grey").click(function(){
			jQuery(".billing-white-bottom").slideToggle('slow');
		});

		jQuery(".toggle-dots-white2").click(function(){
			jQuery(".billing-grey2").slideToggle('slow');
		});


		jQuery('.counter').counterUp({
			delay: 10,
			time: 1000
		});

		// simple slider js //
		var swiper = new Swiper('.swiper-container', {
			pagination: '.swiper-pagination',
			paginationClickable: true
		});

		var swiper = new Swiper('.swiper-container-first', {
			pagination: '.swiper-pagination',
			paginationClickable: true
		});
		appendParamsToUrl();
		var query_params = location.search.split('=');
		createCookie('referralCode',query_params[1],3);

	});

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

	function claim_sub_domain(){
		var sub_domain = jQuery('#company-name').val();
		// console.log("@@@@@@@@@@@@@@@@@@@@@@@@@@@",sub_domain);
		createCookie('claim_sub_domain',sub_domain,3);
		window.location.href = "https://app.outgrow.co/signup";
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


	</script>
	<script>
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > 70) {
				jQuery("nav").addClass('nav-boxshadow');

				//jQuery(".custom-navbar.navbar-default").css("padding","5px 25px 5px 10px")
			} else {
				jQuery("nav").removeClass('nav-boxshadow');
				//jQuery(".custom-navbar.navbar-default").css("padding","10px 25px 10px 10px")
			}
		});

		//navbar open and close
		jQuery( "#open" ).click(function() {
		  	jQuery(".menu-outer").addClass("is-active");
			jQuery(".backdrop-custom").addClass("is-active");
			//jQuery("html").css("overflow","hidden");
		});

		jQuery( ".close-menu" ).click(function() {
			jQuery(".menu-outer").removeClass("is-active");
			jQuery(".backdrop-custom").removeClass("is-active");
			//jQuery("html").css("overflow","auto");
		});


	</script>
	<!--<script type="text/javascript">
	//Usersnap
	(function() {
	var s = document.createElement("script");
	s.type = "text/javascript";
	s.async = true;
	s.src = '//api.usersnap.com/load/'+
			'261ef3ad-9942-4aa6-8418-c67c79aa25fe.js';
	var x = document.getElementsByTagName('script')[0];
	x.parentNode.insertBefore(s, x);
	})();
	</script>-->

	<script type="text/javascript">
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
	</script>

	<script>
(function (window, $) {
	$(function() {


	$('.ripple').on('click', function (event) {
	//event.preventDefault();
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
  </script>
	<script type="text/javascript">
	    myVid=document.getElementById("player");
	    myVid.muted=true;
	</script>
	<!-- <div class="footer-img-2">
		<script language="JavaScript" type="text/javascript">
			TrustLogo("https://outgrow.co/images/comodo_secure.png", "SC5", "none");
		</script>
		<a href="https://www.instantssl.com/wildcard-ssl.html" id="comodoTL"></a>
	</div> -->
</body>
</html>
