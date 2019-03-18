@extends('_layouts.master')

@section('title', 'Interactive Calculators and Quizzes | Outgrow')

@section('metaDescription')
	<meta name="description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators."/>
	<link rel="canonical" href="http://outgrow.co/" />
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
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/navbar.css">
	<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

 @section('pageClass', '')

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
						<span class="font-semibold">Boost</span> Your Marketing with <span class="font-semibold">Highly Interactive Content</span>
					</h1>

					<div class="col-md-12 col-sm-12 col-xs-12 np home-imgs">
						<ul>
							<li>
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-calc.png" alt="Calculators">
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-calc1.png" alt="Calculators">
								Calculators</li>
							<li>
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-quizzes.png" alt="Quizzes">
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-quizzes1.png" alt="Quizzes">
								Quizzes</li>
							<li>
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-assessments.png" alt="Assessments">
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-assessments1.png" alt="Assessments">
								Assessments </li>
							<li class="recmd">
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-recom.png" alt="Recommendations">
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-recom1.png" alt="Recommendations">
								Recommendations</li>
							<li>
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-polls.png" class="polls" alt="Polls">
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-polls1.png" class="polls" alt="Polls">
								Polls</li>
							<li>
								<img src="{{ $page->baseUrl }}/images/img-home-chatbot.png" class="polls" alt="Polls">
								<img class="rs-hide" src="{{ $page->baseUrl }}/images/img-home-chatbot_big.png" class="chatbot" alt="Chatbot">
								Chatbots</li>
						</ul>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer startTrial-outer1">
							<i class="material-icons">email</i>
							<input class="lead-form-email1" name="emailId" type="email" placeholder="Please enter your work email">
							<span class="lead-form-btn">
								<a href="//app.outgrow.co/signup/?email=" class="lead-email1 btn-buildcal" onclick="callGA('CANNOT WAIT CTA'); ">
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
			
			document.getElementsByClassName('lead-form-email1')[0].onchange = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/?email=";
					document.getElementsByClassName('lead-email1')[0].href = href + email;
				}

				// document.getElementsByClassName('lead-form-email1')[1].onchange = function (e) {
				// 	let email = e.target.value;
				// 	let href = "//app.outgrow.co/?email=";
				// 	document.getElementsByClassName('lead-email1')[1].href = href + email;
				// }
				// window.callGA = function(a) {
				//     switch (a) {
				//         case "CANNOT WAIT CTA":
				//             console.log('CANNOT WAIT CTA')
				//             ga("send", "event", "Signup", "Click", "LP_FirstFold");
				//             break;
				//         }
				//     }

				document.getElementsByClassName('lead-form-email1')[0].onkeypress = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/?email=";
					if (e.keyCode == 13) {
						window.location.href = href+email;
					}
				}

				// document.getElementsByClassName('lead-form-email1')[1].onkeypress = function (e) {
				// let email = e.target.value;
				// let href = "//app.outgrow.co/?email=";
				// if (e.keyCode == 13) {
				// 	window.location.href = href+email;
				// }
				// }
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

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np">
		<div class="container custom-container  mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				A New Marketing Toolkit
			</div>
			<!-- <span class="marketing-tool">A New Marketing Toolset</span> -->
			<div class="interactive-outer-section">
				<div class="each-row">
						<div class="case-interactive-left-side">
								<div class="interactive-subinner-left-section">
									<span class="site-image">
									  <img alt="Boost Lead Generation" src="//dzvexx2x036l1.cloudfront.net/img-table1.png"/>
									</span>
								</div>
								<div class="interactive-subinner-right-section">
										<div class="interactive-content">
											<span class="tag1">Boost Lead Generation</span>
											<span class="tag2"></span>
											<span class="main-content">
												Calculators & quizzes engage customers at a psychological level. This leads to record conversion rates of over 60% consistently!
											</span>
										</div>
								</div>
						</div>
						<div class="case-interactive-right-Side">
									<div class="interactive-subinner-left-section">
									 <span class="site-image">
										<img alt="Add Value" src="//dzvexx2x036l1.cloudfront.net/img-table2.png"/> 
									 </span>
								</div>
								<div class="interactive-subinner-right-section">
									<div class="interactive-content">
										<span class="tag1">Add Value</span>
										<span class="main-content">
											Calculators give personalized answers to your customer’s most pressing questions about your industry.
										</span>
									</div>
								</div>

						</div>
				</div>
				<div class="each-row">
						<div class="case-interactive-left-side">
								<div class="interactive-subinner-left-section">
									 <span class="site-image">
										<img alt="Go Viral" src="//dzvexx2x036l1.cloudfront.net/img-entrepreneurs.png"/> 
									 </span>
								</div>
								<div class="interactive-subinner-right-section">
										<div class="interactive-content">
										<span class="tag1">Go Viral</span>
										<span class="main-content">
											Quizzes and calculators tend to go viral. You reach a wider audience, your brand gets noticed, and your referral traffic shoots through the roof.
										</span>
									</div>
								</div>
						</div>
						<div class="case-interactive-right-Side">
									<div class="interactive-subinner-left-section">
                                      <span class="site-image">
										  <img alt="Extract Intelligent Analytics" src="//dzvexx2x036l1.cloudfront.net/img-table4.png"/>
									  </span>
								</div>
								<div class="interactive-subinner-right-section">
									<div class="interactive-content">
										<span class="tag1 sit">Extract Intelligent Analytics</span>
										<span class="main-content">
											Which prospect is an Eagles fan? Who has more than 20 employees? Get customer insights without being pushy!
										</span>
									</div>
								</div>

						</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers">
		<div class="container custom-container  mobile-container">
			<div class="buzzfeed-left-section">
			  <img alt="Did you know?" src="//dzvexx2x036l1.cloudfront.net/uni6.png" class="uni1">
			</div>
			<div class="case-breathers-rightSide">
				<div class="heading fnt-chnge bu">Did you know?</div>
				<h5 class="subheading">
					<span class="font-semibold">7</span>
					of the <span class="font-semibold"> 20</span>
					most shared articles on <span class="font-semibold"> Buzzfeed</span> are
				    <span class="font-semibold">quizzes!</span>
				</h5>
				<a href="https://outgrow.co/blog/buzzfeed-style-howto-quizzes" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
			</div>
		</div>
	</div>

	<!-- Homepage section 3 end-->

	<section class="section">
		<div class="container mobile-container">
			<div class="section-2-heading">
				Beautiful Engaging Experiences <br/>Without Developers
			</div>
			<h5 class="section-2-subheading mk-animate-element scale-up">
				 Create beautiful experiences in minutes with our simple, yet powerful development studio.
			</h5>
		</div>
	</section>

	<!-- Homepage section 4 start-->
	<!-- <section class="section section-4">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 np section-4-right mk-animate-element fade-in rs-show">
				<div class="video-frame">
					<span class="circle"></span>
					<div class="embed-responsive embed-responsive-16by9">
						<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/1Bkoqqp1lro?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0?ecver=2" width="640" height="360" frameborder="0" gesture="media" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 section-4-left ">
				<h4 class="mk-animate-element right-to-left capt">
					Build Beautiful
				</h4>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">format_paint</i>
					<span><b>Appealing layouts</b> that set your UX apart</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">view_compact</i>
					<span>Showcase your brand with <b>quick customizations</b> </span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">developer_board</i>
					<span>Publish in minutes, with <b>no IT headache</b></span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 np section-4-right mk-animate-element fade-in rs-hide">
				<div class="video-frame">
					<span class="circle"></span>
					<div class="embed-responsive embed-responsive-16by9">
						<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/1Bkoqqp1lro?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0?ecver=2" width="640" height="360" frameborder="0" gesture="media" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Homepage section 4 end-->

	<!-- Homepage section 4 new start-->
	<section class="section section-4">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 np section-4-right mk-animate-element fade-in rs-show">
			<div class="video-img-wrapper video-frame">
					<span class="circle"></span>
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-web" id="video-mob" onclick="changeHeightWeb3()">
							<img alt="video thumbnail image" class="video-img" src="{{ $page->baseUrl }}/images/video-thumbnail-bb.jpg" data-src="{{ $page->baseUrl }}/images/video-thumbnail-bb.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
							<!-- <img class="video-arrow" src="//dzvexx2x036l1.cloudfront.net/video-arrow.png" /> -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 section-4-left ">
				<h4 class="mk-animate-element right-to-left capt">
					Build Beautiful
				</h4>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">format_paint</i>
					<span><b>Appealing layouts</b> that set your UX apart</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">view_compact</i>
					<span>Showcase your brand with <b>quick customizations</b> </span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">developer_board</i>
					<span>Publish in minutes, with <b>no IT headache</b></span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 np section-4-right mk-animate-element fade-in rs-hide">
				<div class="video-img-wrapper video-frame">
					<span class="circle"></span>
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-web" id="video" onclick="changeHeightWeb2()">
							<img alt="video thumbnail image" class="video-img" src="{{ $page->baseUrl }}/images/video-thumbnail-bb.jpg" data-src="{{ $page->baseUrl }}/images/video-thumbnail-bb.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon video-playIcon-bb">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
							<!-- <img class="video-arrow" src="//dzvexx2x036l1.cloudfront.net/video-arrow.png" /> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 4 new end-->

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img alt="Publish Anywhere" class="scrollimg1 mk-animate-element scale-up sec5-2-1" src="//dzvexx2x036l1.cloudfront.net/img-publishAnywhere.png" />
			</div>
			<div class="col-xs-12 col-sm-12 col-sm-push-9 col-md-3 section-5-left">
				<h4 class="mk-animate-element right-to-left publish">
					Publish Anywhere
				</h4>
				<span class="mk-animate-element right-to-left" >
					<i class="material-icons">public</i>
					<span>Publish on <b>your domain</b> or a URL of your choice.</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Embed beautifully in any <b>App, Webpage or CMS</b>.</span>
				</span>
				 <span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Present as a <b>Pop-up</b> or a <b>slide-in</b>. </span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-hide">
				<img alt="Publish Anywhere" class="scrollimg1 mk-animate-element scale-up sec5-2-1" src="//dzvexx2x036l1.cloudfront.net/img-publishAnywhere.png" />
			</div>
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<!-- Homepage section 6 start-->
	<section class="section section-6">
		<div class="container img-container">
			<div class="col-xs-12 col-sm-12 col-md-9 np mk-animate-element fade-in section-6-right rs-show">
				<img alt="Boost Growth" class="scrollimg1 mk-animate-element right-to-left sec6-2-1" src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-tab.png" />
				<img alt="Boost Growth" class="scrollimg1 sec6-2-2 mk-animate-element left-to-right" src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-mobile.png" />
			</div>
			<div class="col-xs-12 col-md-3 col-sm-12 section-6-left mobile-container">
				<h4 class="mk-animate-element left-to-right ">
					Boost Growth
				</h4>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">timeline</i>
					<span>See <b>record</b> conversion rates with interactive <b>lead generation</b> forms.</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">face</i>
					<span>Go <b>viral</b> with seamless <b>Facebook, Twitter and Linkedin</b> integrations.</span>
				</span>
			</div>
			<div class="col-xs-12 col-sm-9 np mk-animate-element fade-in section-6-right rs-hide">
				<img alt="Boost Growth" class="scrollimg1 mk-animate-element right-to-left"  src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-tab.png" />
				<img alt="Boost Growth" class="scrollimg1 sec4-2 mk-animate-element left-to-right" src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-mobile.png" />
			</div>
		</div>
	</section>

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img alt="Analyze & Improve" class="scrollimg1 mk-animate-element scale-up" src="//dzvexx2x036l1.cloudfront.net/img-analyze_improve.png" />
			</div>
			<div class="col-xs-12 col-sm-12 col-sm-push-9 col-md-3 section-5-left">
				<h4 class="mk-animate-element right-to-left publish">
					Analyze & Improve
				</h4>
				<span class="mk-animate-element right-to-left" >
					<i class="material-icons">public</i>
					<span>Hyper-targeted sales outreach with <b>rich customer data</b></span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Track <b>visits, conversions</b> and traffic from across all channels</span>
				</span>
				 <span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Easily integrate with <b>over 500 sales & marketing tools</b></span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-hide">
				<img alt="Analyze & Improve" class="scrollimg1 mk-animate-element scale-up" src="//dzvexx2x036l1.cloudfront.net/img-analyze_improve.png" />
			</div>

			<!-- <div class="col-xs-12 col-sm-12 text-center rs-hide">
				<a href="{{ $page->baseUrl }}/features"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Explore More Features</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div> -->
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers case-breathers-imgRight">
		<div class="container  custom-container mobile-container">

			   <img alt="Who could have guessed?" src="//dzvexx2x036l1.cloudfront.net/s1.png" class="rs-show uni3">

			<div class="case-breathers-rightSide new-yk">
				<div class="heading fnt-chnge">Who could have guessed?</div>
				<h5 class="subheading">
					<span class="font-semibold">New York Times,</span>
					most successful content is actually a <span class="font-semibold">quiz!</span>
				</h5>
				<a href="https://resources.outgrow.co/blog/top-viral-calculators" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
			</div>
			<div class="left-sec rs-hide">
			   <img alt="Who could have guessed?" src="//dzvexx2x036l1.cloudfront.net/s1.png">
			</div>
		</div>
	</div>

	<section class="section sec-integrations hide">
		<div class="container mobile-container">
			<div class="section-2-heading">
				Over 1000 integrations
			</div>
			<h5 class="section-2-subheading mk-animate-element scale-up">
				 Easily Integrate with Over 1000 sales & marketing tools
			</h5>
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-hide mk-in-viewport text-center">
				<!--<img class="mk-animate-element scale-up int-box-shadow"  data-src="//dzvexx2x036l1.cloudfront.net/img-integration-full.jpg" />-->
				<div class="img-int-wrapper">
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-res">
				<!--<img class="int-box-shadow" data-src="//dzvexx2x036l1.cloudfront.net/img-integration-resp.jpg">-->
				<div class="img-int-wrapper">
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-mob">
				<!--<img class="int-box-shadow"  src="//dzvexx2x036l1.cloudfront.net/img-integration-mob.jpg">-->
				<div class="img-int-wrapper">
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img alt="integration image" class="" src="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 6 end-->
	<div class="example-calc-outer">
		<section class="section section-5 sec-outgrowMagic-title">
			<div class="container mobile-container">
				<div class="section-2-heading mk-animate-element scale-up fnt-chnge uppercase">
					Interactive Content Examples in Your Industry! 
				</div>
				<h5 class="section-2-subheading mk-animate-element scale-up">
					Customise these templates to boost your marketing and engage your customers!
				</h5>
			</div>
		</section>

		<!-- start: example calc -->
		<section class="section example-calc">
			<div id="premade-loader-new" class="preloader">
				<div class="status">&nbsp;</div>
			</div>
			<div id="premade-content-new" class="tab-section hide">
				<div class="container-fluid">
						<!-- Nav tabs -->
					<!-- <ul class="nav nav-tabs premade-calc" role="tablist">
						<li role="presentation" class="tab-title active">
							<a id="Calculator" href="#numeric-calc" aria-controls="numeric-calc" class="res-tab" role="tab" data-toggle="tab"
							onclick="callGA('TYPE');setTimeout(()=>(changeTab('Calculator')))">
								Numerical Calculator
							</a>
						</li>
						<li role="presentation" class="tab-title">
							<a id="OutcomeQuiz" href="#outcome-quiz" aria-controls="outcome-quiz" role="tab" data-toggle="tab"
							onclick="callGA('INDUSTRY');setTimeout(()=>(changeTab('OutcomeQuiz')))">
								Outcome Quiz
							</a>
						</li>
						<li role="presentation" class="tab-title">
							<a id="GradedQuiz" href="#graded-quiz" aria-controls="graded-quiz" role="tab" data-toggle="tab"
							onclick="callGA('INDUSTRY');setTimeout(()=>(changeTab('GradedQuiz')))">
								Graded Quiz
							</a>
						</li>
						<li role="presentation" class="tab-title">
							<a id="Poll" href="#outcome-quiz" aria-controls="poll" role="tab" data-toggle="tab"
							onclick="callGA('INDUSTRY');setTimeout(()=>(changeTab('Poll')))">
								Poll
							</a>
						</li>
					</ul> -->

					<!-- Tab panes -->
					<div class="tab-content usecase">
						<div role="tabpanel" class="tab-pane active" id="numeric-calc">
							<div class="col-md-12 col-sm-12 col-xs-12 new-cards-section pre-card">
								<!-- <div class="preloader">
									<div class="status">&nbsp;</div>
								</div> -->
								<div class="premade-template-new">
									<div class="search-input">
										<!-- <h4>Select Your Industry</h4> -->
										<div class="input-group">
											<i class="material-icons">search</i>
											<input type="text" name="search" id="search-experience" oninput="filterList()" onkeyup = "searchList(event)" placeholder="Search Experiences by Keyword">
										</div>
										<div class="no-search hide">
											<i class="material-icons">error</i> You can see some generic examples below and you can reach out to us <a href="javascript:void(0);" onclick="sendMessageToIntercom('I would like some more ideas / examples')">here</a> for more specific examples or any other questions. 
										</div>
									</div>
									<div class="premade-template-left">

										<ul class="pre-temp-cat pre-temp-cat-new" id="calc-cats" data-simplebar data-simplebar-auto-hide="false">				
										</ul>
										<div class="form-group col-xs-12 np">
											<div class="selectize selectize-wrapper">
												<select id="select-list" placeholder="Select List">
													<option value="Auto">Auto</option>
													<option value="Education">Education</option>
													<option value="HealthFitness">Health & Fitness</option>
													<option value="Quintessential">Quintessential</option>
													<option value="RealEstateConstruction">Real Estate & Construction</option>
													<option value="MarketingAdvertising">Technology</option>
													<option value="Publishing">Publishing</option>
													<option value="Travel">Travel</option>
													<option value="TVandEntertainment">TV and Entertainment</option>
													<option value="Trending">Trending</option>

												</select>
											</div>
										</div>
									</div>
									 <div class="pre-temp-cont pre-temp-cont-new"> 
										<ul class="pre-temp-list" id="gallery-content-center">

											<!-- <li class="active filter-all filter-auto" id="calc-auto-loan">
												<a href="javascript:void(0)" onclick="markAsActive('calc-auto-loan')">Auto Loan Calculator</a>
											</li>
											<li class="All Financia filter-all filter-auto" id="calc-early-payment">
												<a href="javascript:void(0)" onclick="markAsActive('calc-early-payment')">Early Payment Calculator</a>
											</li>
											<li class="All Math filter-all filter-auto" id="calc-downpayment">
												<a href="javascript:void(0)" onclick="markAsActive('calc-downpayment')">How much should I put down?</a>
											</li>
											<li class="All Others filter-all filter-education" id="calc-student-budget"> 
												<a href="javascript:void(0)" onclick="markAsActive('calc-student-budget')">Student Budget Calculator</a>
											</li>
											<li class="All Math filter-all filter-education" id="calc-harward-score">
												<a href="javascript:void(0)" onclick="markAsActive('calc-harward-score')">What is a good enough score to get into Harvard with your background?</a>
											</li>
											<li class="All Math filter-all filter-finance" id="calc-home-budget">
												<a href="javascript:void(0)" onclick="markAsActive('calc-home-budget')">Home Budget Calculator</a>
											</li>
											<li class="All Others filter-all filter-health" id="calc-weight-loss">
												<a href="javascript:void(0)" onclick="markAsActive('calc-weight-loss')">Weight Loss Calculator</a>
											</li>
											<li class="All Financial filter-all filter-publishing" id="calc-trump-plan">
												<a href="javascript:void(0)" onclick="markAsActive('calc-trump-plan')">How will Trump's tax plan affect you?</a>
											</li> -->
										</ul>
										<div class="pre-temp-view">
											<!-- <div class="tag-exp"><i class="material-icons">star_rate</i><span class="tag-exp-text"> Customisable for the Auto Industry</span></div> -->
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
										</div>
									</div>
									<!-- <div class="no-match-found hide">
										<div class="no-match-found-inner"><i class="material-icons">warning</i>No Matches found!</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end: example calc -->
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers case-productHunt">
		<div class="container  custom-container  mobile-container">
			<div class="product-hunt-left">
				<img alt="It's your turn now!" src="//dzvexx2x036l1.cloudfront.net/uni4.png">
			</div>
			<div class="case-breathers-rightSide product-outer">
				<div class="heading fnt-chnge product-hunt hunt1">It's your turn now!</div>
				<h5 class="subheading">
					Calculators are amongst the highest rated products on <span class="font-semibold">Product Hunt.</span>
				</h5>
				<a href="https://resources.outgrow.co/blog/product-hunt-promotions-interactive-content" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
			</div>
		</div>
	</div>

	<!-- Homepage The Outgrow Magic -->
	<div class="section-main">
		<section class="section section-5 sec-outgrowMagic-title">
			<div class="container mobile-container">
				<div class="section-2-heading">
					Outgrow Embeds in Practice
				</div>
				<h5 class="section-2-subheading mk-animate-element scale-up">
					Presenting our highly optimized design layouts
				</h5>
			</div>
		</section>

		<section class="section section-5 sec-outgrowMagic">
			<div class="container-fluid np">
				<div class="col-xs-12 col-sm-12 col-md-12 np">
					<!--<div id="sticky-anchor"></div>-->
					<div class="tab-outer-frame col-xs-12 col-md-10 col-sm-12 text-center">
						<!--<span class="icon-webcam"></span>-->
						<div class="hrefTarget tab-inner-frame col-xs-12 col-md-12 col-sm-12">
							<iframe id="og-iframe" src="https://website.outgrow.us/website-64"></iframe>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-12 col-sm-12 mobile-container rs-hide calc-links text-center">
					<a href="javascript:void(0);" class="active"
						onclick="display('https://website.outgrow.us/website-64?vHeight=1')">
						<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc06.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/Which-engineering-major-is-right-for-you?vHeight=1')">
						<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc01.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/Cost-of-a-video-campaign-4?vHeight=1')">
						<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc02.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/What-is-your-risk-of-getting-a-heart-disease?vHeight=1')">
						<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc03.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/outgrow-roi?vHeight=1')">
						<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc04.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/build-an-app?vHeight=1')">
						<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc05.jpg" />
					</a>
				</div>

				<div class="col-xs-12 col-md-12 col-sm-12 section-6-left mobile-container rs-show text-center">
					<div class="col-md-12 col-sm-12 col-xs-12 np calc-links">
						<a href="https://website.outgrow.us/website-64?vHeight=1" class="col-sm-4 np calcembed active" target="_blank">
							<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc06.jpg" />
						</a>
						<a href="//website.outgrow.us/Which-engineering-major-is-right-for-you?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc01.jpg" />
						</a>
						<a href="//website.outgrow.us/Cost-of-a-video-campaign-4?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc02.jpg" />
						</a>
						<a href="//website.outgrow.us/What-is-your-risk-of-getting-a-heart-disease?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc03.jpg" />
						</a>
						<a href="//website.outgrow.us/outgrow-roi?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc04.jpg" />
						</a>
						<a href="//website.outgrow.us/build-an-app" class="col-sm-4 np calcembed" target="_blank">
							<img alt="Calculator thumb image" class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc05.jpg" />
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers case-chatbot">
		<div class="container  custom-container  mobile-container">
			<div class="product-hunt-left">
				<img alt="It's your turn now!" src="images/chatbot_divider.png">
			</div>
			<div class="case-breathers-rightSide product-outer">
				<div class="heading fnt-chnge product-hunt hunt1">Interactive Content Strategy for Your Industry </div>
				<!-- <h5 class="subheading">
					Calculators are amongst the highest rated products on <span class="font-semibold">Product Hunt.</span>
				</h5> -->
				<a href="https://get.outgrow.co/interactive-content-whitepaper-for-all-industries/" target="_blank" class="btn btn-readmore-link btn-hover">Check it Out <i class="material-icons">arrow_forward</i></a>
			</div>
		</div>
	</div>

	<section class="section section-reviews">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 hide" id="liveReviews">
			<div class="container mobile-container">
				<div class="section-2-heading" style="color: rgb(34, 34, 34);">
					Average Rating 4.9/5 <br/> 500+ Reviews
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
					Average Rating 4.9/5 <br/> 500+ Reviews
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
												<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="/images/testimonial-userImg-reenaJ.png">
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
												<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="/images/testimonial-userImg-robertP.png">
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
												<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="/images/testimonial-userImg-vickyS.png">
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
												<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="/images/testimonial-userImg-joakimT.png">
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
												<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="/images/testimonial-userImg-tomL.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end static HTML of fb, capterra and g2 crowd -->
	</section>

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
			},
			{
				id: 'template-nine',
				text: 'The New York'
			}
			];
			return templates.find(t => t.id.includes(template));
		}
		function getCalcType(type) {
			if (type === 'Calculator') {
				return 'CALC';
			} else if (type === 'Poll') {
				return 'POLL';
			} else if (type.toLowerCase().includes('graded')) {
				return 'TEST';
			} else if (type.toLowerCase().includes('outcome')) {
				return 'QUIZ';
			} else if (type.toLowerCase().includes('com')) {
				return 'ECOM'
			} else if (type.toLowerCase().includes('bot')) {
					return 'CHATBOT'
				}
		}
		window.onload = function () {
				let http = new XMLHttpRequest();
				let url1 = 'https://api.outgrow.co/api/v1/admin/getCalculators';
				http.open("POST", url1, true);

				http.onreadystatechange = function () {
					if (http.readyState === 4 && http.status === 200) {
						console.log("@@@@@@@@@@@@@@!!!!!!!!!!1")
						let res = JSON.parse(http.responseText);
						window.calcs = res.data.calculators;
						window.industries = res.data.industries;
						getExistingIndustries();
						window.specialEvents = res.data.events;
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
								// window.events.push(ev);
							}
							calc['type'] = getCalcType(calc['type']);
						});
						jQuery('.preloader').addClass('hide');
						jQuery('#premade-content-new').removeClass('hide')
						setPremade();
						shuffleCalcs('Auto');
					}
				};
				http.send();
            }
	</script>

	<!--section testimonial -->
	<!-- <div class="section-main">
		<section class="section section-7-top">
			<div class="container mobile-container">
				<h1 class="section-2-heading mk-animate-element scale-up">
					Check What Our Users Have To Say!
				</h1>
			</div>
		</section>
		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-show-less480 ">
			<div class="swiper-container swiper-container1 mk-animate-element scale-up">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile01.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile03.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile04.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile05.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile06.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile07.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile08.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
				</div>
			</div>

			<div class="swiper-pagination swiper-pagination1"></div>

			<div class="swiper-button-next swiper-button-next1"></div>
			<div class="swiper-button-prev swiper-button-prev1"></div>
		</div>

		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-show rs-hide-less480">
			<div class="swiper-container swiper-container2 mk-animate-element scale-up">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile01.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile01.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile03.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile03.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile04.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile04.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile05.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile05.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile06.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile06.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile07.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile07.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile08.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile08.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
				</div>
			</div>

			<div class="swiper-pagination swiper-pagination2"></div>

			<div class="swiper-button-next swiper-button-next2"></div>
			<div class="swiper-button-prev swiper-button-prev2"></div>
		</div>

		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-hide">
			<div class="swiper-container swiper-container3 mk-animate-element scale-up">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials01.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials01.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials03.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials03.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials04.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials04.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials05.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials05.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials06.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials06.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials07.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials07.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials08.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials08.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
				</div>
			</div>

			<div class="swiper-pagination swiper-pagination3"></div>

			<div class="swiper-button-next swiper-button-next3"></div>
			<div class="swiper-button-prev swiper-button-prev3"></div>
		</div>
		<script>
			var swipera = new Swiper('.swiper-container1', {
				pagination: '.swiper-pagination1',
				paginationClickable: true,
				nextButton: '.swiper-button-next1',
				prevButton: '.swiper-button-prev1',
				spaceBetween: 30,
				slidesPerView: 3,
				centeredSlides: true,
				autoplayDisableOnInteraction: false
			});

			var swiperb = new Swiper('.swiper-container2', {
				pagination: '.swiper-pagination2',
				paginationClickable: true,
				nextButton: '.swiper-button-next2',
				prevButton: '.swiper-button-prev2',
				spaceBetween: 30,
				slidesPerView: 3,
				centeredSlides: true,
				autoplayDisableOnInteraction: false
			});

			var swiperc = new Swiper('.swiper-container3', {
				pagination: '.swiper-pagination3',
				paginationClickable: true,
				nextButton: '.swiper-button-next3',
				prevButton: '.swiper-button-prev3',
				spaceBetween: 30,
				slidesPerView: 3,
				centeredSlides: true,
				autoplayDisableOnInteraction: false
			});
		</script>
	</div> -->
	<!--section testimonial -->

	<section class="section start-trial-cta free-trail mb0">
		<div class="start-free-trail np">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="">
					<div class="bg1-img">
						<a href="https://app.outgrow.co/" class="params trialLOL">
								<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn-buildcal btn-buildcal1 mk-animate-element fade-in">
								<img alt="Mouse Icon Image" src="//dzvexx2x036l1.cloudfront.net/icon-mouse.png">Get Started</button>
						</a>
						<div class=""><label>Try it Risk Free</label></div>
						<!-- <label>No Credit Card Required</label> -->
					</div>
				</div>
			</div>
	</section>

	<!-- <div id="video-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			Modal content
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" onclick="btnclose()" id="btn-close-mob" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="row">
						<div class="modal-video-full">
							<div class="tab-content">
								<div id="overview" class="tab-pane fade in active">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="outgrow-video outgrow-video-mob" src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3" data-src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<script>
	function debounced(delay, fn) {
			let timerId;
			return function (...args) {
				if (timerId) {
					clearTimeout(timerId);
				}
				timerId = setTimeout(() => {
					fn(...args);
					timerId = null;
				}, delay);
			}
		}

		window.filterList = function () {
			let list = jQuery('#calc-cats').children();
			list.each(function (index) {
				jQuery(this).removeClass('active');
			});
			debounced(500, searchCalc)();
		}
		window.searchList = function (event) {
			if (event.keyCode === 13) {
				filterList();
			}
		}
	</script>
@endsection

@section('inlinescripts')
@endsection


@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"index": "{{ $page->baseUrl }}/js/pageScripts/index.js",
		"navbar": "{{ $page->baseUrl }}/js/pageScripts/navbar.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
		"simplebar": "https://unpkg.com/simplebar@latest/dist/simplebar.js",
	}
@endsection