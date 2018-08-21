@extends('_layouts.master')

@section('title', 'Ecommerce Recommendations | Outgrow')

@section('metaDescription')
	<meta name="description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators."/>
	<link rel="canonical" href="http://outgrow.co/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Ecommerce Recommendations | Outgrow" />
	<meta property="og:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta name="twitter:title" content="Ecommerce Recommendations | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
@endsection

@section('pageClass', 'ecomm')

@section('pageId', '')

@section('content')

	<script src="{{ $page->baseUrl }}/js/swiper.min.js"></script>

	<section class="section section-1">
		<div class="container-fluid">
			<div class="col-md-12 col-xs-12 col-sm-12 section-1-left text-center">
				<div class="section1-left-cellnoab">
					<!-- <h4 class="mk-animate-element fade-in">
						eBooks, blogs & whitepapers giving average results?
					</h4> -->
					<h1 class="section1-firstheadnoab">
						<span class="font-semibold">Increase Ecommerce Sales with Interactive <br/>Product Recommendations</span>
					</h1>

					<div class="col-md-12 col-sm-12 col-xs-12 np home-imgs">
						<ul>
							<li>
								<img src="{{ $page->baseUrl }}/images/ecom_landing-top1.png" alt="Unique Shopping Experience">
								<img class="rs-hide" src="{{ $page->baseUrl }}/images/ecom_landing-top1.png" alt="Unique Shopping Experience">
								Unique Shopping <br/>Experience</li>
							<li>
								<img src="{{ $page->baseUrl }}/images/ecom_landing-top2.png" alt="Improved Customer Engagement">
								<img class="rs-hide" src="{{ $page->baseUrl }}/images/ecom_landing-top2.png" alt="Improved Customer Engagement">
								Improved Customer <br/>Engagement</li>
							<li>
								<img src="{{ $page->baseUrl }}/images/ecom_landing-top3.png" alt="Higher Average Order Value (AOV)">
								<img class="rs-hide" src="{{ $page->baseUrl }}/images/ecom_landing-top3.png" alt="Higher Average Order Value (AOV)">
								Higher Average <br/>Order Value (AOV) </li>
							<li class="recmd">
								<img src="{{ $page->baseUrl }}/images/ecom_landing-top4.png" alt="Eliminate Abandoned Carts">
								<img class="rs-hide" src="{{ $page->baseUrl }}/images/ecom_landing-top4.png" alt="Eliminate Abandoned Carts">
								Eliminate Abandoned <br/>Carts</li>
						</ul>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer startTrial-outer1">
							<i class="material-icons">email</i>
							<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your work email">
							<span class="lead-form-btn">
								<a href="//app.outgrow.co/signup/?email=" class="lead-email btn-buildcal" onclick="callGA('CANNOT WAIT CTA'); ">
									Get Started for free
								</a>

								
								<span class="live-demo">OR <a href="https://sample.outgrow.co/builder-demo/sample-calculator" class="">TAKE A LIVE DEMO</a></span>
							</span>
							<div id="bfrVid"></div>
						</div>
					</div>

					<!-- <div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer">
							<i class="material-icons">email</i>
							<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your email address">
							<a href="//app.outgrow.co/signup/?email=" class="lead-email" onclick="callGA('CANNOT WAIT CTA')">
								<span class="btn-buildcal fade-in lead-form-btn btn-claimSubDomain">
									Claim your Sub Domain
								</span>
							</a>
							<div id="bfrVid"></div>
					</div> -->

				</div>
			</div>

			<script>

			document.getElementsByClassName('lead-form-email')[0].onchange = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/signup/?email=";
					document.getElementsByClassName('lead-email')[0].href = href + email;
				}

				document.getElementsByClassName('lead-form-email')[1].onchange = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/signup/?email=";
					document.getElementsByClassName('lead-email')[1].href = href + email;
				}
				// window.callGA = function(a) {
				//     switch (a) {
				//         case "CANNOT WAIT CTA":
				//             console.log('CANNOT WAIT CTA')
				//             ga("send", "event", "Signup", "Click", "LP_FirstFold");
				//             break;
				//         }
				//     }

				document.getElementsByClassName('lead-form-email')[0].onkeypress = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/signup/?email=";
					if (e.keyCode == 13) {
						window.location.href = href+email;
					}
				}

				document.getElementsByClassName('lead-form-email')[1].onkeypress = function (e) {
				let email = e.target.value;
				let href = "//app.outgrow.co/signup/?email=";
				if (e.keyCode == 13) {
					window.location.href = href+email;
				}
				}
			</script>

			<!-- <div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height video-img-shadow" id="video-main-rs-mob">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-mob" data-toggle="modal" data-target="#video-modal">
							<img alt="video thumbnail image" class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div> -->

			<!-- <div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height video-img-shadow" id="video-main-rs">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-res" onclick="changeHeightRes()">
							<img alt="video thumbnail image" class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div> -->

			<div class="col-md-12 col-sm-12 col-xs-12 np text-center hide-height video-img-shadow" id="video-main">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-web" id="him1" onclick="changeHeightWeb1()">
							<img alt="video thumbnail image" class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
							<!-- <img class="video-arrow" src="//dzvexx2x036l1.cloudfront.net/video-arrow.png" /> -->
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide text-center hide-height" id="video-main-xl">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-web" id="him1-xl" onclick="changeHeightWebXL()">
							<img alt="video thumbnail image" class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div> -->

			<script>
				document.getElementsByClassName("video-playIcon")[0].onclick = function () {
					console.log('Some cick');
					document.getElementsByClassName("outgrow-video-mob")[0].src = 'https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3'
				}
				function btnclose() {
					document.getElementsByClassName("outgrow-video-mob")[0].src = 'https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3'
				}
				// function changeHeightRes () {
				// 	console.log('Res');
				// 	window.location.replace('#bfrVid')
				// 	document.getElementsByClassName("video-img-inner-res")[0].innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
				// 	var xDiv = document.getElementById('video-main-rs');
				// 	if (xDiv.style.height == '')
				// 		xDiv.style.height = '460px';
				// 	else
				// 		xDiv.style.height = '';
				// }
				function changeHeightWeb1 () {
					console.log('Tab');
					window.location.replace('#bfrVid')
					document.getElementById("him1").innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main');

					if (xDiv.style.height == '')
						xDiv.style.height = '574px';
					else
						xDiv.style.height = '';
				}

				function changeHeightWeb2 () {

					window.location.replace('#video')
					document.getElementById("video").innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/1Bkoqqp1lro?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main');

					// if (xDiv.style.height == '')
					// 	xDiv.style.height = '574px';
					// else
					// 	xDiv.style.height = '';
				}

				function changeHeightWeb3 () {

					window.location.replace('#video-mob')
					document.getElementById("video-mob").innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/1Bkoqqp1lro?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main');

					// if (xDiv.style.height == '')
					// 	xDiv.style.height = '574px';
					// else
					// 	xDiv.style.height = '';
				}

				// function changeHeightWebXL () {
				// 	console.log('Tab');
				// 	window.location.replace('#bfrVid')
				// 	document.getElementById("him1-xl").innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
				// 	var xDiv = document.getElementById('video-main-xl');

				// 	if (xDiv.style.height == '')
				// 		xDiv.style.height = '1160px';
				// 	else
				// 		xDiv.style.height = '';
				// }
			</script>
		</div>
	</section>

	<section class="section sec-clients-logos">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-hide text-center">
				<div class="img-wrapper">
					<img alt="adobe" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/adobe.png" />
					<img alt="datavail" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/datavail.png" />
					<img alt="statefarm" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/statefarm.png" />
					<!-- <img alt="lockheed-martin" class="scrollimg1"  src="images/clients-logos/lockheed-martin.png" /> -->
					<img alt="florida-capital-bank" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/florida-capital-bank.png" />
					<img alt="catapult-system" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/catapult-system.png" />
					<img alt="mulesoft" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/mulesoft.png" />
					<img alt="radius" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/radius.png" />
					<img alt="golf-avenue" class="scrollimg1"  src="https://dzvexx2x036l1.cloudfront.net/golf-avenue.png" />
					<img alt="abl" class="scrollimg1 abl"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/abl.png" />
					<img alt="agl" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/agl.png" />
					<img alt="the-offshore-group" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/the-offshore-group.png" />
					<img alt="canvas-medical" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/canvas-medical.png" />
					<img alt="black-hawk" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/black-hawk.png" />
					<img alt="sm" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/sm.png" />
					<img alt="currencyfair" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/currencyfair.png" />
					<img alt="winter-olympics" class="scrollimg1 wo"  src="https://dzvexx2x036l1.cloudfront.net/winter-olympics.png" />
					<img alt="pinpoint-software" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/pinpoint-software.png" />
					<img alt="temcoUK" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/temcoUK.png" />
					<img alt="ladder" class="scrollimg1 abl"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/ladder.png" />

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np scale-up rs-show text-center rs-hide-int-res">
				<div class="img-wrapper">
					<img alt="adobe" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/adobe.png" />
					<img alt="datavail" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/datavail.png" />
					<img alt="statefarm" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/statefarm.png" />
					<!-- <img alt="lockheed-martin" class="scrollimg1"  src="images/clients-logos/lockheed-martin.png" /> -->
					<img alt="florida-capital-bank" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/florida-capital-bank.png" />
					<img alt="catapult-system" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/catapult-system.png" />
					<img alt="mulesoft" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/mulesoft.png" />
					<img alt="radius" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/radius.png" />
					<img alt="golf-avenue" class="scrollimg1"  src="https://dzvexx2x036l1.cloudfront.net/golf-avenue.png" />
					<img alt="abl" class="scrollimg1 abl"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/abl.png" />
					<img alt="agl" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/agl.png" />
					<img alt="the-offshore-group" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/the-offshore-group.png" />
					<img alt="canvas-medical" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/canvas-medical.png" />
					<img alt="black-hawk" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/black-hawk.png" />
					<img alt="sm" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/sm.png" />
					<img alt="currencyfair" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/currencyfair.png" />
					<img alt="winter-olympics" class="scrollimg1 wo"  src="https://dzvexx2x036l1.cloudfront.net/winter-olympics.png" />
					<img alt="pinpoint-software" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/pinpoint-software.png" />
					<img alt="temcoUK" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/temcoUK.png" />
					<img alt="ladder" class="scrollimg1 abl"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/ladder.png" />

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-show text-center rs-hide-int-mob">
				<div class="img-wrapper">
					<img alt="adobe" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/adobe.png" />
					<img alt="datavail" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/datavail.png" />
					<img alt="statefarm" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/statefarm.png" />
					<!-- <img alt="lockheed-martin" class="scrollimg1"  src="images/clients-logos/lockheed-martin.png" /> -->
					<img alt="florida-capital-bank" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/florida-capital-bank.png" />
					<img alt="catapult-system" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/catapult-system.png" />
					<img alt="mulesoft" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/mulesoft.png" />
					<img alt="radius" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/radius.png" />
					<img alt="golf-avenue" class="scrollimg1"  src="https://dzvexx2x036l1.cloudfront.net/golf-avenue.png" />
					<img alt="abl" class="scrollimg1 abl"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/abl.png" />
					<img alt="agl" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/agl.png" />
					<img alt="the-offshore-group" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/the-offshore-group.png" />
					<img alt="canvas-medical" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/canvas-medical.png" />
					<img alt="black-hawk" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/black-hawk.png" />
					<img alt="sm" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/sm.png" />
					<img alt="currencyfair" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/currencyfair.png" />
					<img alt="winter-olympics" class="scrollimg1 wo"  src="https://dzvexx2x036l1.cloudfront.net/winter-olympics.png" />
					<img alt="pinpoint-software" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/pinpoint-software.png" />
					<img alt="temcoUK" class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/temcoUK.png" />
					<img alt="ladder" class="scrollimg1 abl"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/ladder.png" />

				</div>
			</div>
		</div>
	</section>

	<section class="section ecomm-growth">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np">
			<div class="container custom-container mobile-container">
				<div class="section-2-heading" style="color: rgb(34, 34, 34);">
					A New Marketing Toolkit for <br/>Ecommerce Growth
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 np ecomm-outer">
					<div class="col-sm-6">
						<div class="pre-temp-view">
							<div class="temp-preview">
								<span class="image-bg1">
									<span class="image-scroll1">
										<img id="premade-gif" src="{{ $page->baseUrl }}/images/img-ecomm-growth1.jpg" />
									</span>
								</span>
								<div class="content temp-info">
									<h3>
										<p id="premade-calc-name">
											1. Add products from Shopify, RSS, Excel or manually
										</p>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="pre-temp-view">
							<div class="temp-preview">
								<span class="image-bg1">
									<span class="image-scroll1">
										<img id="premade-gif" src="{{ $page->baseUrl }}/images/img-ecomm-growth2.jpg" />
									</span>
								</span>
								<div class="content temp-info">
									<h3>
										<p id="premade-calc-name">
											2. Create Questions for your Store Visitors
										</p>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="pre-temp-view">
							<div class="temp-preview">
								<span class="image-bg1">
									<span class="image-scroll1">
										<img id="premade-gif" src="{{ $page->baseUrl }}/images/img-ecomm-growth3.jpg" />
									</span>
								</span>
								<div class="content temp-info">
									<h3>
										<p id="premade-calc-name">
											3. Recommend Products based on Question Responses
										</p>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="pre-temp-view">
							<div class="temp-preview">
								<span class="image-bg1">
									<span class="image-scroll1">
										<img id="premade-gif" src="{{ $page->baseUrl }}/images/img-ecomm-growth4.jpg" />
									</span>
								</span>
								<div class="content temp-info">
									<h3>
										<p id="premade-calc-name">
											4. Automatically link products recommended to their specific Product Pages
										</p>
									</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="pre-temp-view col-sm-6 np">
						<div class="temp-preview">
							<span class="image-bg1">
								<span class="image-scroll1">
									<img id="premade-gif" src="https://dzvexx2x036l1.cloudfront.net/calc_images/auto+loan+calculator.gif" />
								</span>
							</span>
							<div class="content temp-info">
								<h3>
									<p id="premade-calc-name">
										<i class="material-icons">&#xE80E;</i>
										AUTO LOAN CALCULATOR
									</p>
									<span id="premade-calc-layout">
										<strong>Layout:</strong> 
										The Londoner 
									</span>
								</h3>
								<a id="premade-preview-link" class="btn btn-red btn-hover" target="_blank" href="https://premade.outgrow.us/Auto-Loan-Calc">Preview</a>
								<a class="btn btn-red btn-hover" href="//app.outgrow.co/signup">Build your own</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<section class="section col-md-12 col-sm-12 col-xs-12 text-center np sec-ecomm">
		<div class="container custom-container mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				Beautiful High-Converting Ecommerce Quizzes, <br/>Built with Outgrow
			</div>
			<!-- <div class="col-md-12 col-sm-12 col-xs-12 np ecomm-outer">
				<div class="col-sm-6">
					<div class="pre-temp-view">
						<div class="temp-preview">
							<span class="image-bg1">
								<span class="image-scroll1">
									<img id="premade-gif" src="https://dzvexx2x036l1.cloudfront.net/calc_images/auto+loan+calculator.gif" />
								</span>
							</span>
							<div class="content temp-info">
								<h3>
									<p id="premade-calc-name">
										The Greek
									</p>
								</h3>
								<a id="premade-preview-link" class="btn btn-red btn-hover" target="_blank" href="https://premade.outgrow.us/Auto-Loan-Calc">Preview</a>
								<a class="btn btn-red btn-hover" href="//app.outgrow.co/signup">Build your own</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="pre-temp-view">
						<div class="temp-preview">
							<span class="image-bg1">
								<span class="image-scroll1">
									<img id="premade-gif" src="https://dzvexx2x036l1.cloudfront.net/calc_images/auto+loan+calculator.gif" />
								</span>
							</span>
							<div class="content temp-info">
								<h3>
									<p id="premade-calc-name">
										The Madrid
									</p>
								</h3>
								<a id="premade-preview-link" class="btn btn-red btn-hover" target="_blank" href="https://premade.outgrow.us/Auto-Loan-Calc">Preview</a>
								<a class="btn btn-red btn-hover" href="//app.outgrow.co/signup">Build your own</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="pre-temp-view">
						<div class="temp-preview">
							<span class="image-bg1">
								<span class="image-scroll1">
									<img id="premade-gif" src="https://dzvexx2x036l1.cloudfront.net/calc_images/auto+loan+calculator.gif" />
								</span>
							</span>
							<div class="content temp-info">
								<h3>
									<p id="premade-calc-name">
										The Stockholm
									</p>
								</h3>
								<a id="premade-preview-link" class="btn btn-red btn-hover" target="_blank" href="https://premade.outgrow.us/Auto-Loan-Calc">Preview</a>
								<a class="btn btn-red btn-hover" href="//app.outgrow.co/signup">Build your own</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="pre-temp-view">
						<div class="temp-preview">
							<span class="image-bg1">
								<span class="image-scroll1">
									<img id="premade-gif" src="https://dzvexx2x036l1.cloudfront.net/calc_images/auto+loan+calculator.gif" />
								</span>
							</span>
							<div class="content temp-info">
								<h3>
									<p id="premade-calc-name">
									The Venice
									</p>
								</h3>
								<a id="premade-preview-link" class="btn btn-red btn-hover" target="_blank" href="https://premade.outgrow.us/Auto-Loan-Calc">Preview</a>
								<a class="btn btn-red btn-hover" href="//app.outgrow.co/signup">Build your own</a>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="col-md-12 col-sm-12 col-xs-12 np ecomm-outer">
				<div class="col-md-6 col-sm-6 col-xs-12 temp-demo-outer inline-temp-new">
					<div class="temp-demo">
						<a class="" href="javascript:void(0);" target="_blank">
							<span class="image-bg">
								<span class="image-scroll temp-img" style="background-image: url(&quot;https://dlvkyia8i4zmz.cloudfront.net/FwsbivWETQucKe6eiPsd_numerical.jpg&quot;);"></span>
							</span>
						</a>
						<div class="content">
							<span class="content-sec col-sm-8 col-xs-8 np">
								<button class="btn btn-red btn-hover rs-show" type="button">
									<!----> Use Template</button>
								<h2>The Greek </h2>
								<span class="hide">
									SUPPORTS:
									<!----><span>
									<span class="dot"></span>a </span><span>
									<span class="dot"></span>b </span><span>
									<span class="dot"></span>c </span>
								</span>
							</span>
							<button class="btn btn-red btn-hover rs-hide" type="button" onclick="location.href = '//app.outgrow.co/signup'">
							<!----> Use Layout</button>
							<a class="btn btn-red btn-hover rs-hide temp-iframe-preview" target="_blank" href="https://premade.outgrow.us/premade-1038">
							Preview</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 temp-demo-outer template-five">
					<div class="temp-demo">
						<a class="" href="javascript:void(0);" target="_blank">
							<span class="image-bg">
							<span class="image-scroll temp-img" style="background-image: url(&quot;https://dlvkyia8i4zmz.cloudfront.net/PniTHStMS9WrAy8sGNSy_numerical.jpg&quot;);"></span>
							</span>
						</a>
						<div class="content">
							<span class="content-sec col-sm-8 col-xs-8 np">
							<button class="btn btn-red btn-hover rs-show" type="button">
								<!----> Use Template</button>
							<h2>The Madrid </h2>
							<span class="hide">
								SUPPORTS:
								<!----><span>
								<span class="dot"></span>a </span><span>
								<span class="dot"></span>b </span><span>
								<span class="dot"></span>c </span>
							</span>
							</span>
							<button class="btn btn-red btn-hover rs-hide" type="button" onclick="location.href = '//app.outgrow.co/signup'">
							<!----> Use Layout</button>
							<a class="btn btn-red btn-hover rs-hide temp-iframe-preview" target="_blank" href="https://premade.outgrow.us/premade-1044">
							Preview</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 temp-demo-outer template-six">
					<div class="temp-demo">
						<a class="" href="javascript:void(0);" target="_blank">
							<span class="image-bg">
							<span class="image-scroll temp-img" style="background-image: url(&quot;https://dlvkyia8i4zmz.cloudfront.net/gf3NAt9QTaqRtVWpxsmE_Numercal.jpg&quot;);"></span>
							</span>
						</a>
						<div class="content">
							<span class="content-sec col-sm-8 col-xs-8 np">
							<button class="btn btn-red btn-hover rs-show" type="button">
								<!----> Use Template</button>
							<h2>The Stockholm </h2>
							<span class="hide">
								SUPPORTS:
								<!----><span>
								<span class="dot"></span>a </span><span>
								<span class="dot"></span>b </span><span>
								<span class="dot"></span>c </span>
							</span>
							</span>
							<button class="btn btn-red btn-hover rs-hide" type="button" onclick="location.href = '//app.outgrow.co/signup'">
							<!----> Use Layout</button>
							<a class="btn btn-red btn-hover rs-hide temp-iframe-preview" target="_blank" href="https://premade.outgrow.us/premade-1051">
							Preview</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 temp-demo-outer template-eight">
					<div class="temp-demo">
						<a class="" href="javascript:void(0);" target="_blank">
							<span class="image-bg">
							<span class="image-scroll temp-img" style="background-image: url(&quot;https://cdn.filestackcontent.com/o3RKaOxTaugRnNy2lPL3&quot;);"></span>
							</span>
						</a>
						<div class="content">
							<span class="content-sec col-sm-8 col-xs-8 np">
							<button class="btn btn-red btn-hover rs-show" type="button">
								<!----> Use Template</button>
							<h2>The Venice </h2>
							<span class="hide">
								SUPPORTS:
								<!----><span>
								<span class="dot"></span>a </span><span>
								<span class="dot"></span>b </span><span>
								<span class="dot"></span>c </span>
							</span>
							</span>
							<button class="btn btn-red btn-hover rs-hide" type="button" onclick="location.href = '//app.outgrow.co/signup'">
							<!----> Use Layout</button>
							<a class="btn btn-red btn-hover rs-hide temp-iframe-preview" target="_blank" href="https://premade.outgrow.us/premade-1056">
							Preview</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section sec-recom-quiz">
		<div class="container custom-container mobile-container">
			<div class="section-2-heading">
			Get Started Building Interactive Product <br/>Recommendation Quizzes
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer startTrial-outer1">
					<i class="material-icons">email</i>
					<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your work email">
					<span class="lead-form-btn">
						<a href="//app.outgrow.co/signup/?email=" class="lead-email btn-buildcal" onclick="callGA('CANNOT WAIT CTA'); ">
							Start Free Trial
						</a>	
					</span>
					<span class="no-card">No Credit Card Required</span>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-reading">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="section-heading text-center">Learn More About Ecommerce Growth Strategies </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading1.png" alt="How to make Buzzfeed-style quizzes">
					</div>
					<div class="col-md-12 np reading-content">
						<h4>How to make Buzzfeed-style quizzes</h4>
						<p>Is there a magical formula to creating BuzzFeed's wildly popular quizzes? Of course there is and here's our guide on how to make them. </p>
						<a href="https://outgrow.co/blog/how-to-make-buzzfeed-style-quizzes?utm_source=website&utm_medium=link&utm_campaign=outgrow_quiz_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading2.png" alt="Principles of Persuasion to Make Engaging Interactive Content">
					</div>
					<div class="col-md-12 np reading-content">
						<h4>Using the Principles of Persuasion to Make Engaging Interactive Content </h4>
						<p>Find out what each principle means and learn how to apply those principles to get more results out of quizzes. </p>
						<a href="https://outgrow.co/blog/interactive-content-engagement-tips?utm_source=website&utm_medium=link&utm_campaign=outgrow_quiz_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading3.png" alt="TAG Livros Case Study">
					</div>
					<div class="col-md-12 np reading-content">
						<h4>[Case Study] How TAG Livros Generated 55K+ Leads Within a Month </h4>
						<p>In this interactive marketing success story, find out how a book signing club, generated more than 55K leads using interactive content. </p>
						<a href="https://outgrow.co/blog/tag-livros-interactive-marketing-success-story?utm_source=website&utm_medium=link&utm_campaign=outgrow_quiz_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 np">			
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading1_survey.png" alt="Customer Engagement 101 using Interactive Content"> 
					</div>
					<div class="col-md-12 np reading-content">
						<h4>Customer Engagement 101 using Interactive Content </h4>
						<p>Learn how to use surveys, quizzes and calculators to bring your customer engagement strategy into 2018. </p>
						<a href="https://outgrow.co/blog/customer-engagement-using-interactive-content?utm_source=website&utm_medium=link&utm_campaign=outgrow_survey_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading2_survey.png" alt="3 Ingenious Ways to Capture Leads Through Content"> 
					</div>
					<div class="col-md-12 np reading-content">
						<h4>3 Ingenious Ways to Capture Leads Through Content </h4>
						<p>Read about three ingenious ways to capture leads by making your content more engaging: interactive content, gated visual content and direct prospect engagement. </p>
						<a href="https://outgrow.co/blog/how-to-generate-leads-content-marketing?utm_source=website&utm_medium=link&utm_campaign=outgrow_survey_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading3_survey.png" alt="Re-energize Marketing Automation with Interactive Content"> 
					</div>
					<div class="col-md-12 np reading-content">
						<h4>Re-energize Marketing Automation with Interactive Content </h4>
						<p>Stay ahead of the curve by including interactive elements in your marketing automation machine. </p>
						<a href="https://outgrow.co/blog/marketing-automation-interactive-content?utm_source=website&utm_medium=link&utm_campaign=outgrow_survey_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 hide" id="liveReviews">
		<div class="container mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				Average Rating 4.9/5. 500+ Reviews
			</div>
			<div class="social-media-section">
				<div class="each-arrow-section">
					<div id="fb-img" class="arrow_box testactive" onclick="openTestimonial('fb')">
						<img alt="Facebook image" src="//dzvexx2x036l1.cloudfront.net/facebookim.png"/>
						<img alt="Facebook image" src="//dzvexx2x036l1.cloudfront.net/facebookh.png" class="over over1"/>
					</div>

					<div id="capterra-img" class="arrow_box" onclick="openTestimonial('capterra')">
						<img alt="Capterra image" src="//dzvexx2x036l1.cloudfront.net/capterraimg.png"/>
						<img alt="Capterra image" src="//dzvexx2x036l1.cloudfront.net/capterah.png" class="over over2"/>
					</div>

					<div id="g2-img" class="arrow_box" onclick="openTestimonial('g2')">
						<img alt="G2 Crowd image" src="//dzvexx2x036l1.cloudfront.net/crowd.png"/>
						<img alt="G2 Crowd image" src="//dzvexx2x036l1.cloudfront.net/crowdh.png" class="over over3"/>
					</div>

					<div id="google-img" class="arrow_box" onclick="openTestimonial('google')">
						<img alt="Google image" src="https://dzvexx2x036l1.cloudfront.net/google_logo.png"/>
						<img alt="Google image" src="https://dzvexx2x036l1.cloudfront.net/google_hover.png" class="over over4"/>
					</div>

				</div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1">
			<div class="container mobile-container protfolio-section">

				<div id="fb" class="protfolio-inner-section" data-repuso-grid="4406" data-website-id="0"></div>

				<div id="capterra" class="protfolio-inner-section testhide" data-repuso-grid="4407" data-website-id="0"></div>

				<div id="g2" class="protfolio-inner-section testhide" data-repuso-grid="4320" data-website-id="0"></div>

				<div id="google" class="protfolio-inner-section testhide" data-repuso-grid="5402" data-website-id="0"></div>
			</div>
		</div>
	</div>

	<!-- start static HTML of fb, capterra and g2 crowd -->
	<div class="col-md-12 col-sm-12 col-xs-12 text-center np custom-embeds" id="staticReviews">
		<div class="container mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				Average Rating 4.9/5. 500+ Reviews
			</div>

			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#fb-tab"></a></li>
				<li><a data-toggle="tab" href="#capterra-tab"></a></li>
				<li><a data-toggle="tab" href="#g2crowd-tab"></a></li>
				<li><a data-toggle="tab" href="#google-tab"></a></li>
			</ul>

			<div class="tab-content">
				<div id="fb-tab" class="tab-pane fade in active">
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">If you are an A+ marketer, you will love this beast! It looks simple but the intelligence you get out of it is incredible. Makes generation of qualified leads a lot easier and even fun. A lot of thought has gone into building this piece of software. For sure.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Dapo Bankole</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-dapo.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Such a great idea for conversion rate optimization on landing pages! These are the benefits that I found were great for us: - When you've maximized good quality traffic, this is a great idea to optimize conversion rates on your landing pages - When used intelligently, visual content mixed with calculators and quizzes leads to better engagement and completion rates - Integrates with most important tools out there. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Jonathan Naccache</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-jona.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Great calculator quiz building tool with various field types and well-designed modern templates. The resources section and support is great too. Very happy with the software.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Va Barber Hua</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-va.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">You can't beat outgrow for creating advanced quizzes that help you generate leads. It's like the facebook quizzes we used to do for fun, but now you can use them to generate top quality leads for your business. If you do some thinking, you'd be shocked how many different quizzes you can come up with. Super customisable and easy to use, would definitely recommend checking it out!</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Bryce York</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-bryce.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">These guys are so cool! Their product is fun and easy to use and obviously developed by a team of creative geniuses that care about their customers.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Rachel Kornak</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-rachel.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">The next generation of content marketing This software is extremely agile and allows us to build any type of calculator or quiz we can imagine. This is one of the best options out there to create engaging content, especially in a time when blog posts are being dull.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Jake Anderson</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="images/testimonial-userImg-jake.png">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="capterra-tab" class="tab-pane fade">
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Such a great idea for conversion rate optimization
								Pros: - When you've maximized good quality traffic, this is a great idea to optimize conversion rates on your landing pages - When used intelligently, visual content mixed with calculators and quizzes leads to better engagement and completion rates - Integrates with most important tools out there
								Cons: - Wish there was more visual mapping for different outcomes, but I am confident this will be available in the near future.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Verified Reviewer</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg"> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">You can't beat Outgrow for quizzes
							Pros: You can't beat Outgrow for creating advanced quizzes that help you generate leads. It's like the facebook quizzes we used to do for fun, but now you can use them to generate top quality leads for your business. Highly recommend testing it out.
							Cons: It can be a little expensive (especially if you want the more advanced features), but if you're using it properly it'll pay for itself in no time.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Verified Reviewer</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg"> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Easy to Set-up, Great Converter
							Pros: Converting visitors to leads at a rate of 10x vs. not using Outgrow. Further, we're dropping these leads into a drip campaign specific to the results of their quiz.
							Cons: Cosmetically the tempalte we are using has shadows. Outgrow was quick to suggest an alternative template.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Ryan Zagata</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg"> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Outgrow is on to having a great product!
							Pros: I love that I can build a quiz in minutes. I love that I can mix different types of questions: Multiple choice, open ended, or select all that apply.
							Cons: I would like more page editing features rather than to depend on templates. Also, when I want to embed the Quiz on one of my pages I cannot (I don't know CSS or am a programmer) change the background color of the Quiz to reflect my site colors. This would be nice to do. I hear the new version coming out may solve this...
							Overall: Quizzes are the future of internet marketing. People love quizzes and they help you build a relationship with someone easier. If you don't use quizzes you are missing a great tool to market your products.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Ed Ferrigan</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									 <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-ed.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Pros: The Outgrow software is something I have been looking for in the market for a long time. However, I could only find unglamorous, 'ugly' designs and bad user interfaces.... Then, I found Outgrow. Outgrow provide a really easy solution to the problems of marketing and engaging with consumers in 2017. The team are a really dedicated support who get back to you within a few minutes on live chat.
							Cons: Nothing. Everything is great. I would like to see more features being added though, to add even more value, but otherwise really great!
							Overall: Being able to really engage with my consumers and give them fun ways to know more about my brand.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<!-- <span class="testi-desig ellipsis"></span> -->
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									 <!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg">  -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">The next generation of content marketing
							Pros: This software is extremely agile and allows us to build any type of calculator or quiz we can imagine. This is one of the best options out there to create engaging content, especially in a time when blog posts are being dull.
							Cons: I wish the lead generation module was more agile in terms of placement. Also I would like to see an advanced drag and drop editor.
							Overall: Generate more leads. Capture the attention of my customers and build goodwill with great content.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										 <span class="testi-desig ellipsis">Jake Anderson</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									 <!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg">  -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="g2crowd-tab" class="tab-pane fade">
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div>
							<div class="testimonial-answer">I think these quizzes are fabulous! I can do a variety of quizzes to intrigue my blog readers, and make different ones to fit the need at that time. Sometimes humorous, serious, or simply interesting. I love the social share so once the reader gets their outcome, they can share on social media. Also, it can take them back directly to my website. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2Crwod logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div>
							<div class="testimonial-answer">Outgrow is the gamification of online customer engagement, a conversion machine that improves the experience of our visitors. At Bazaar10X.com we track the most effective growth strategies and Outgrow comes at the top of our list for online marketing and customer engagement. Their platform is flexible, easy to use and fully customizable making every experience unique and relevant to our target audience. We use Outgrow to drive conversion, add value or educate our audience and to pre-qualify leads. The follow-up process for our leads is much more targetted with Outgrow because we already collected key information to make the content and value proposition more relevant. We collect more leads with more relevant info. I term of SEO, the platform includes all the bells and whistles to rank and it can be used both as a standalone landing page or embedded on a website. All and all relly impressed with Outgrow, right now at the centre of our online engagement strategy. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg2.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div>
							<div class="testimonial-answer">Outgrow is best thought of as a very powerful calculator. Imagine a very intelligent person sitting across from you with a computer asking questions, calculating results, and feeding the results back to you in an easy-to-understand form. Outgrow is all of that and more. The best part about Outgrow is that it is equally useful for beginners and advanced users alike. You can get started creating simple calculators and quizzes in no time. You can make those calculators and quizzes gorgeous with little effort. You can do it in less than 15 minutes. But it doesn't stop there. The advanced calculation features allow you to design highly complex apps without needing to do any coding. The possibilities for lead magnets and premium products are infinite and exciting. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg3.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div>
							<div class="testimonial-answer">I like to use my time to work on my business but tactical are just as important so being able to learn a piece of software in the shortest space of time make sense. But that's not all. I have used all sorts of software , from page builders, to trackers, to heatmappers, to webinars software. What impresses me most about Outgrow is that it delivers on it's promises. All functionalities work and the support turnaround is fast and personal. I find i am not wasting time waiting 2 months plus for bug fixes and poor excuses. When i have an issue or i am not sure about a particular function - i just send a chat ticket and invariably it gets answered with 40 minutes. Money likes speed and money is fuel for a business. I like things that work! </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg4.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div>
							<div class="testimonial-answer">This tool was so easy to use. We've tried other calculator tools but Outgrow had a variety of templates and designs as well as the flexibility of making our own formulated results. Plus the customer support team was extremely helpful in getting our calculator perfected before launch. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg5.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div>
							<div class="testimonial-answer">Their customization was really great, their template selection was excellent as it let me customize my quiz exactly the way I wanted. Their drag and drip feature made it really easy for anyone in my team to be able to modify the quiz and customize it to our needs. At one point I had some questions about the platform and needed technical support, they were very helpful through the phone and were willing to work with me. The fact that the sales rep had researched my company prior to our call and gave us suggestions as to how to better implement Outgrow into our website to increase our leads was impressive. I don't think I've had a company do its research on a customer before jumping on a call. It also really helped in terms of context, since I avoided having to explain who we are and what we do. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg6.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="google-tab" class="tab-pane fade">
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">Love Outgrow as the marketing tool to get profile and health profiling of our customers. Getting to know our Health Bootcamp members well is critical as it enables us to customize the experience. Our success depends on how well we know the issues they are facing. Outgrow has great templates and branded designs as well as a very simple beautiful user experience. We have had 96% response rate using Outgrow Quiz. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Reena Jadhav</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-reenaJ.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">We've been using Outgrow to create interactive content for a range of clients. It's a great tool for creating interesting ways to add leads to the top of the funnel, whilst staying away from the overused free PDF guides, etc. The content builder is very easy to use, but extremely powerful. The scoring logic is really useful, especially the "if most answers are A, give the outcome X". There are a number of potential integrations, including to the most popular email marketing systems. The native integration with Active Campaign was perfect for our clients. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Robert Peters</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-robertP.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">Put simply - why will your audience leave - once they start interacting with an Outgrow calculator. Simply outstanding .. guys you have created an amazing engaging platform where the clients get massive value. Also 24 hrs support and simply superb. great to see a company investing in great platform but also on customer service .. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Vicky Singh</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-vickyS.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">Love the easy function for building a Quiz and the ability for branding. Your new leads are coming! We have searched for this for a couple of years and now it´s here. Thanks, Outgrow! Fantastic software. Easy to use, meet needs and are enjoyable! The customer service is fast with high knowledge and flexible mindset. To fully meet our brand book, and tone of voice, there have to be more fonts. Such as Open Sans and top Google font family. Meet needs, easy to use and enjoyable! </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Joakim Thörn</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-joakimT.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">Great product for creating quizzes, surveys with viral power. Love the calculator option, we can create powerful assessments for our clients which calculate scores, then use that score to assign an assessment or gap value. Amazingly powerful. Support is great, really great, they always answer, always help with things we are doing even when it's a weird request. Not many cons, new features show up, but it's pretty powerful now. We've had a few growing pains as we learn to create assessments and quizzes, but support has helped us through them. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Tom Lyons </span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-tomL.png">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end static HTML of fb, capterra and g2 crowd -->

	<script>
		function triggerLiveStaticReviews () {
			var url = 'https://api.repuso.com/v1/widgets/posts/4406?callback=jQuery111205308389182797406_1512564953651&website_id=0&_=1512564953652';
			var live = document.querySelector('#liveReviews');
			var static = document.querySelector('#staticReviews');

			var xhr = new XMLHttpRequest;
			xhr.onreadystatechange = function () {
				console.log('Ready state changed');
				if (this.status == 200) {
					live.classList.remove('hide');
					static.classList.add('hide');
				}
				else {
					static.classList.remove('hide');
					live.classList.add('hide');
				}
			}
			xhr.open("GET", url, true);
			xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
			xhr.send();
		}

		var gridJS = document.createElement('script');
		gridJS.src = 'https://repuso.com/widgets/grid.js';

		gridJS.onload = triggerLiveStaticReviews;

		var head = document.querySelector('head');
		head.appendChild(gridJS);
	</script>

	<section class="section sec-last">
		<div class="container custom-container mobile-container">
			<div class="section-2-heading">
			Interactive Product Recommendations & Product <br/>Finders for Increased Engagement and Sales
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer startTrial-outer1">
					<i class="material-icons">email</i>
					<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your work email">
					<span class="lead-form-btn">
						<a href="//app.outgrow.co/signup/?email=" class="lead-email btn-buildcal" onclick="callGA('CANNOT WAIT CTA'); ">
							Start Free Trial
						</a>	
					</span>
					<span class="no-card">No Credit Card Required</span>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('inlinescripts')
@endsection


@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"index": "{{ $page->baseUrl }}/js/pageScripts/index.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
	}
@endsection