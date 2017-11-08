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
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')
	<script src="{{ $page->baseUrl }}/js/swiper.min.js"></script>
	
	<section class="section section-1">
		<div class="container-fluid">
			<div class="col-md-12 col-xs-12 col-sm-12 section-1-left text-center">
				<div class="section1-left-cell">
					<!-- <h4 class="mk-animate-element fade-in">
						eBooks, blogs & whitepapers giving average results?
					</h4> -->
					<h3 class="section1-firsthead">
						<span class="font-semibold">Boost</span> Your Marketing with <span class="font-semibold">Highly Interactive Content</span>
					</h3>

					<div class="col-md-12 col-sm-12 col-xs-12 np home-imgs">
						<ul>	
							<li><img src="images/img-home-calc.png">Calculator</li>
							<li><img src="images/img-home-quizzes.png">Quizzes</li>
							<li><img src="images/img-home-assessments.png">Assessments </li>
							<li><img src="images/img-home-graders.png">Graders</li>
							<li><img src="images/img-home-polls.png">Polls</li>
						</ul>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer">
							<i class="material-icons">email</i>
							<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your email address">							
							<span class="lead-form-btn">
								<a href="//app.outgrow.co/signup/?email=" class="lead-email btn-buildcal" onclick="callGA('CANNOT WAIT CTA')">
									Start Free Trial
								</a>
								<span class="live-demo">OR <a href="javascript:void(0);" class="">TAKE A LIVE DEMO</a></span>
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

				document.getElementsByClassName('lead-form-email')[0].onkeypress = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/signup/?email=";
					if (e.keyCode == 13) {
						window.location.href = href+email;
					}
				}
			</script>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height video-img-shadow" id="video-main-rs-mob">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-mob">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon" data-toggle="modal" data-target="#video-modal">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height video-img-shadow" id="video-main-rs">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-res">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle" onclick="changeHeightRes()"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-hide text-center hide-height video-img-shadow" id="video-main">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-web" id="him1">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle" onclick="changeHeightWeb1()"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div>

			<script>
				document.getElementsByClassName("video-playIcon")[0].onclick = function () {
					console.log('Some cick');
					document.getElementsByClassName("outgrow-video-mob")[0].src = 'https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3'
				}
				function btnclose() {
					document.getElementsByClassName("outgrow-video-mob")[0].src = 'https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3'
				}
				function changeHeightRes () {
					console.log('Res');
					window.location.replace('#bfrVid')
					document.getElementsByClassName("video-img-inner-res")[0].innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main-rs');
					if (xDiv.style.height == '')
						xDiv.style.height = '460px';
					else
						xDiv.style.height = '';
				}
				function changeHeightWeb1 () {
					console.log('Tab');
					window.location.replace('#bfrVid')
					document.getElementById("him1").innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main');

					if (xDiv.style.height == '')
						xDiv.style.height = '600px';
					else
						xDiv.style.height = '';
				}
			</script>
		</div>
	</section>

	<section class="section sec-clients-logos">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-hide text-center">
				<div class="img-wrapper">
					<img class="scrollimg1"  src="images/clients-logos/adobe.png" />
					<img class="scrollimg1"  src="images/clients-logos/datavail.png" />
					<img class="scrollimg1"  src="images/clients-logos/statefarm.png" />
					<img class="scrollimg1"  src="images/clients-logos/florida-capital-bank.png" />
					<img class="scrollimg1"  src="images/clients-logos/catapult-system.png" />
					<img class="scrollimg1"  src="images/clients-logos/mulesoft.png" />
					<img class="scrollimg1"  src="images/clients-logos/radius.png" />
					<img class="scrollimg1"  src="images/clients-logos/golf-avenue.png" />
					<img class="scrollimg1"  src="images/clients-logos/agl.png" />
					<img class="scrollimg1"  src="images/clients-logos/the-offshore-group.png" />
					<img class="scrollimg1"  src="images/clients-logos/canvas-medical.png" />
					<img class="scrollimg1"  src="images/clients-logos/black-hawk.png" />
					<img class="scrollimg1"  src="images/clients-logos/sm.png" />
					<img class="scrollimg1"  src="images/clients-logos/currencyfair.png" />
					<img class="scrollimg1"  src="images/clients-logos/pinpoint-software.png" />
					<img class="scrollimg1"  src="images/clients-logos/temcoUK.png" />

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np scale-up rs-show text-center rs-hide-int-res">
				<div class="img-wrapper">
					<img class="scrollimg1"  src="images/clients-logos/adobe.png" />
					<img class="scrollimg1"  src="images/clients-logos/datavail.png" />
					<img class="scrollimg1"  src="images/clients-logos/statefarm.png" />
					<img class="scrollimg1"  src="images/clients-logos/florida-capital-bank.png" />
					<img class="scrollimg1"  src="images/clients-logos/catapult-system.png" />
					<img class="scrollimg1"  src="images/clients-logos/mulesoft.png" />
					<img class="scrollimg1"  src="images/clients-logos/radius.png" />
					<img class="scrollimg1"  src="images/clients-logos/golf-avenue.png" />
					<img class="scrollimg1"  src="images/clients-logos/agl.png" />
					<img class="scrollimg1"  src="images/clients-logos/the-offshore-group.png" />
					<img class="scrollimg1"  src="images/clients-logos/canvas-medical.png" />
					<img class="scrollimg1"  src="images/clients-logos/black-hawk.png" />
					<img class="scrollimg1"  src="images/clients-logos/sm.png" />
					<img class="scrollimg1"  src="images/clients-logos/currencyfair.png" />
					<img class="scrollimg1"  src="images/clients-logos/pinpoint-software.png" />
					<img class="scrollimg1"  src="images/clients-logos/temcoUK.png" />

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-show text-center rs-hide-int-mob">
				<div class="img-wrapper">
					<img class="scrollimg1"  src="images/clients-logos/adobe.png" />
					<img class="scrollimg1"  src="images/clients-logos/datavail.png" />
					<img class="scrollimg1"  src="images/clients-logos/statefarm.png" />
					<img class="scrollimg1"  src="images/clients-logos/florida-capital-bank.png" />
					<img class="scrollimg1"  src="images/clients-logos/catapult-system.png" />
					<img class="scrollimg1"  src="images/clients-logos/mulesoft.png" />
					<img class="scrollimg1"  src="images/clients-logos/radius.png" />
					<img class="scrollimg1"  src="images/clients-logos/golf-avenue.png" />
					<img class="scrollimg1"  src="images/clients-logos/agl.png" />
					<img class="scrollimg1"  src="images/clients-logos/the-offshore-group.png" />
					<img class="scrollimg1"  src="images/clients-logos/canvas-medical.png" />
					<img class="scrollimg1"  src="images/clients-logos/black-hawk.png" />
					<img class="scrollimg1"  src="images/clients-logos/sm.png" />
					<img class="scrollimg1"  src="images/clients-logos/currencyfair.png" />
					<img class="scrollimg1"  src="images/clients-logos/pinpoint-software.png" />
					<img class="scrollimg1"  src="images/clients-logos/temcoUK.png" />

				</div>
			</div>
		</div>
	</section>

	<!--<section class="section section-3 p20 calc-table">
		<div class="container">
			<h1 class="section-2-heading">
				Calculators & quizzes:<br/> The Next Big Thing in Marketing
			</h1>
			<div class="col-xs-12 mobile-sec3 rs-show">
				<div class="swiper-container-first">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="col-xs-12 sec3-box2 mk-animate-element scale-up">
								<h3>Add Real Value</h3>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Calculators</h5>
									<i class="material-icons hide">check_circle</i>
									<p>Answer your customers most pressing questions.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Ebooks</h5>
									<i class="material-icons hide">gesture</i>
									<p>Sure! But do people really have time to read?</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Marketing Pages</h5>
									<i class="material-icons hide">clear</i>
									<p>A marketing rant with click baits adds little value.</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="col-xs-12 sec3-box2 mk-animate-element scale-up">
								<h3>CONVERSION RATES</h3>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Calculators</h5>
									<h4 class="hide">High</h4>
									<p>Interactivity enhances conversion to over 40-50%</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Ebooks</h5>
									<h4 class="hide">Uninspiring</h4>
									<p>No instant gratification only allows for 10-20%.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Marketing Pages</h5>
									<h4 class="hide">eh!</h4>
									<p>You have to work hard to get 3-8%</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="col-xs-12 sec3-box2 mk-animate-element scale-up">
								<h3>TRAFFIC</h3>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Calculators</h5>
									<h4 class="hide">INHERENTLY VIRAL</h4>
									<p>Personalized responses encourage sharing.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Ebooks</h5>
									<h4 class="hide">Average </h4>
									<p>They can get shared. But viral? Hardly!</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Marketing Pages</h5>
									<h4 class="hide">Dead Cold</h4>
									<p>When was the last time you shared a landing page?</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="col-xs-12 sec3-box2 mk-animate-element scale-up">
								<h3>DATA</h3>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Calculators</h5>
									<h4 class="hide">RICH</h4>
									<p>Rich responses can help make sales more targeted.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Ebooks</h5>
									<h4 class="hide">Little</h4>
									<p>You can't do much with an email and name.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Marketing Pages</h5>
									<h4 class="hide">Little</h4>
									<p>When did you last submit a real email? ;)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 np rs-hide calc-table-inner">
				<div class="col-xs-12 col-sm-3 mk-animate-element scale-up">
					<div class="col-xs-12 np sec3-box1inner">
						<h4>Add Real Value</h4>
						<p>&nbsp; <br>&nbsp;</p>
					</div>
					<div class="col-xs-12 np sec3-box1inner">
						<h4>Conversion Rates</h4>
						<p>&nbsp; <br>&nbsp;</p>
					</div>
					<div class="col-xs-12 np sec3-box1inner">
						<h4>Traffic</h4>
						<p>&nbsp; <br>&nbsp;</p>
					</div>
					<div class="col-xs-12 np sec3-box1inner">
						<h4>Data</h4>
						<p>&nbsp; <br>&nbsp;</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 sec3-box2 mk-animate-element scale-up">
					<h3>Calculators</h3>
					<div class="col-xs-12 np sec3-box2inner">
						<i class="material-icons">check_circle</i>
						<p>Answer your customers most pressing questions.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>High</h4>
						<p>Interactivity enhances conversion to over 40-50%</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Inherently Viral</h4>
						<p>Personalized responses encourage sharing.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Rich</h4>
						<p>Rich responses can help make target sales.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 sec3-box3 mk-animate-element scale-up">
					<h3>eBooks</h3>
					<div class="col-xs-12 np sec3-box2inner">
						<i class="material-icons">gesture</i>
						<p>Sure! But do people really have time to read.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Uninspiring</h4>
						<p>No instant gratification only allows for 10-20%.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Average</h4>
						<p>They can get shared. But viral? Probably not.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Little</h4>
						<p>You can't do much with an email and name.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 sec3-box4 mk-animate-element scale-up">
					<h3>Marketing Pages</h3>
					<div class="col-xs-12 np sec3-box2inner">
						<i class="material-icons">clear</i>
						<p>A marketing rant with click baits adds little value.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>eh!</h4>
						<p>You have to work hard to get 3-8%</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Dead Cold</h4>
						<p>When was the last time you shared a landing page?</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Little</h4>
						<p>When did you last submit a real name, email?</p>
					</div>
				</div>
			</div>
			<script>
				var swiper = new Swiper('.swiper-container-first', {
					pagination: '.swiper-pagination',
					paginationClickable: true,
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					//spaceBetween: 30,
					//slidesPerView: 3,
					centeredSlides: true,
					// autoplay: 2500,
					speed:500,
					autoplayDisableOnInteraction: false
				});
			</script>
		</div>
	</section>-->
	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1">
		<div class="container custom-container  mobile-container">
			<h1 class="section-2-heading" style="color: rgb(34, 34, 34); text-transform:uppercase">
				Interactive Content
			</h1>
			<br><span class="marketing-tool">A New Marketing Toolset</span></br>
			<div class="interactive-outer-section">
				<div class="each-row">
						<div class="case-interactive-left-side">
								<div class="interactive-subinner-left-section">
									<span class="site-image">
									  <img src="{{ $page->baseUrl }}/images/scale.jpg"/> 
									</span>
								</div>
								<div class="interactive-subinner-right-section">
										<div class="interactive-content">
											<span class="tag1">For Boosting Lead Generation</span>
											<span class="tag2">Conversions</span>
											<span class="main-content">
												Calculators & quizzes engage customers at a psychological level. This leads to record conversion rates of over 60% consistently!
											</span>
										</div>
								</div>
						</div>
						<div class="case-interactive-right-Side">
								<div class="interactive-subinner-left-section">
									<div class="interactive-subinner-left-section">
									 <span class="site-image">
										<img src="{{ $page->baseUrl }}/images/scale2.jpg"/> 
									 </span>
								</div>
								</div>
								<div class="interactive-subinner-right-section">
									<div class="interactive-content">
											<span class="tag1">For Boosting Lead Generation</span>
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
									 <span class="site-image sitemg">
										<img src="{{ $page->baseUrl }}/images/scale3.png"/> 
									 </span>
								</div>
								<div class="interactive-subinner-right-section">
										<div class="interactive-content">
											<span class="tag1">For Enhancing Social Virality</span>
											<span class="main-content">
												Quizzes and calculators tend to go viral. You reach a wider audience, your brand gets noticed, and your referral traffic shoots through the roof.
										</div>
								</div>
						</div>
						<div class="case-interactive-right-Side">
								<div class="interactive-subinner-left-section">
									<div class="interactive-subinner-left-section">
                                      <span class="site-image">
										  <img src="{{ $page->baseUrl }}/images/scale10.jpg"/> 
									  </span>
								</div>
								</div>
								<div class="interactive-subinner-right-section">
									<div class="interactive-content">
											<span class="tag1">Extract Audience Analytics</span>
											<span class="main-content">
											Calculators & quizzes engage customers at a psychological level. This leads to record conversion rates of over 60% consistently!
											</span>
									</div>
								</div>
							
						</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <section class="section section-10 sec-grey">
		<div class="container container-center">
			<h1 class="section-2-heading">
				Calculators & quizzes:<br/> The Next Big Thing in Marketing
			</h1>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="col-md-4 col-xs-12 np text-center sec-new-table">
					<img src="//dzvexx2x036l1.cloudfront.net/img-table1.png">
					<span>Achieve Conversion Rates of Over 60%</span>
					<p class="">Calculators and quizzes are interactive experiences that engage the customers at a psychological level. This leads to record, never-seen-before conversion rates!</p>
				</div>
				<div class="col-md-4 col-xs-12 np text-center sec-new-table">
					<img src="//dzvexx2x036l1.cloudfront.net/img-table2.png">
					<span>ADD VALUE TO CUSTOMERS, INSTANTLY.</span>
					<p class="">Calculators and quizzes provide instant gratification and give personalized answers & recommendations to your customer's most pressing questions.</p>

				</div>
				<div class="col-md-4 col-xs-12 np text-center sec-new-table">
					<img src="//dzvexx2x036l1.cloudfront.net/img-table3.png">
					
					<span>GENERATE VIRAL REFERRAL TRAFFIC</span>
					<p class="">Given the engagement, quizzes and calculators tend to go viral. You reach a wider audience, your brand gets noticed, and your referral traffic shoots through the roof.</p>
				</div>
			</div>
		</div>
	</section> -->

<!-- 	
	<div class="col-md-12 col-sm-12 col-xs-12 text-center np">
		<div class="start-trial-cta">
			<a href="/calculators-vs-ebooks">
				<button class="btn-buildcal">
					<i class="material-icons">view_compact</i>
					See why calculators are better than ebooks
				</button>
			</a>
		</div>
	</div> -->
	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1">
		<div class="container custom-container  mobile-container">
			<div class="site-bottom-section">
               <div class="each-content-section">
				    <span  class="site-image1">
					 <img src="{{ $page->baseUrl }}/images/scale5.png"/>
					</span>
				   <div class="inner-figure">
					   <span class="figure-head">Run Recommendation Engines</span>
					   <span class="outer-boundary">
							<span class="bottom-figure-content">
								You can Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
							</span>
						</span>
				   </div>
			   </div>
			    <div class="each-content-section">
					<span  class="site-image1">
					   <img src="{{ $page->baseUrl }}/images/scale7.png"/>
					</span>
				    <div class="inner-figure">
					  <span class="figure-head">Engage with Contests</span>
					    <span class="bottom-figure-content">
						 Calculators & quizzes engage customers at a psychological level. This leads to record conversion rates of over 60%. consistently!
					    </span>
				   </div>
			   </div>
			    <div class="each-content-section">
					<span  class="site-image1">
						<img src="{{ $page->baseUrl }}/images/scale8.png"/>
					</span>
				    <div class="inner-figure">
					   <span class="figure-head">Provide self serve quoting</span>
					    <span class="bottom-figure-content">
						   Calculators & quizzes engage customers at a psychological level. This leads to record conversion rates of over 60% consistently!
					   </span>
				   </div>
			   </div>
			    <div class="each-content-section">
					<span  class="site-image1">
						 <img src="{{ $page->baseUrl }}/images/scale9.png"/>
					</span>
				   <div class="inner-figure">
					  <span class="figure-head">Create Polls</span>
					  <span class="bottom-figure-content">
						  Calculators & quizzes engage customers at a psychological level. This leads to record conversion rates of over 60%. consistently!
					 </span>
				   </div>
			   </div>
			   
			</div>
		</div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers">
		<div class="container mobile-container">
			<img src="images/img-buzzfeed.jpg">
			<div class="case-breathers-rightSide">
				<h1 class="heading">Buzzfeed</h1>
				<h5 class="subheading">
					<span class="font-semibold">7</span> 
					of the <span class="font-semibold">20</span> 
					most shared articles on <span class="font-semibold">Buzzfeed</span> are 
					<span class="font-semibold">quizzes!</span>
				</h5>
				<button class="btn-readmore">Read more<i class="material-icons">arrow_forward</i></button>
			</div>
		</div>
	</div>

	<!-- Homepage section 3 end-->

	<section class="section">
		<div class="container mobile-container">
			<h1 class="section-2-heading mk-animate-element scale-up ">
				Beautiful calculators and quizzes. <br/> Without developers.
			</h1>
			<h5 class="section-2-subheading mk-animate-element scale-up">
				 Create beautiful experiences in minutes with our simple, yet powerful development studio.
			</h5>
		</div>
	</section>

	<!-- Homepage section 4 start-->
	<section class="section section-4">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 np section-4-right mk-animate-element fade-in rs-show">
				<div class="video-frame">
					<span class="circle"></span>
					<div class="embed-responsive embed-responsive-16by9">
						<video width="1324" height="607" autoplay loop>
							<source src="//dzvexx2x036l1.cloudfront.net/Outgrow-demo.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 section-4-left ">
				<h4 class="mk-animate-element right-to-left">
					Build Beautiful
				</h4>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">format_paint</i>
					<span><b>Appealing templates</b> that set your UX apart</span>
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
						<video width="1324" height="607" autoplay loop>
							<source src="//dzvexx2x036l1.cloudfront.net/Outgrow-demo.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 4 end-->

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img class="scrollimg1 mk-animate-element scale-up sec5-2-1" src="//dzvexx2x036l1.cloudfront.net/img-publishAnywhere.png" />
			</div>
			<div class="col-xs-12 col-sm-12 col-sm-push-9 col-md-3 section-5-left">
				<h4 class="mk-animate-element right-to-left">
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
				<img class="scrollimg1 mk-animate-element scale-up sec5-2-1" src="//dzvexx2x036l1.cloudfront.net/img-publishAnywhere.png" />
			</div>
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<!-- Homepage section 6 start-->
	<section class="section section-6">
		<div class="container img-container">
			<div class="col-xs-12 col-sm-12 col-md-9 np mk-animate-element fade-in section-6-right rs-show">
				<img class="scrollimg1 mk-animate-element right-to-left sec6-2-1" src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-tab.png" />
				<img class="scrollimg1 sec6-2-2 mk-animate-element left-to-right" src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-mobile.png" />
			</div>
			<div class="col-xs-12 col-md-3 col-sm-12 section-6-left mobile-container">
				<h4 class="mk-animate-element left-to-right">
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
				<img class="scrollimg1 mk-animate-element right-to-left"  src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-tab.png" />
				<img class="scrollimg1 sec4-2 mk-animate-element left-to-right" src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-mobile.png" />
			</div>
		</div>
	</section>

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img class="scrollimg1 mk-animate-element scale-up" src="//dzvexx2x036l1.cloudfront.net/img-analyze_improve.png" />
			</div>
			<div class="col-xs-12 col-sm-12 col-sm-push-9 col-md-3 section-5-left">
				<h4 class="mk-animate-element right-to-left">
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
				<img class="scrollimg1 mk-animate-element scale-up" src="//dzvexx2x036l1.cloudfront.net/img-analyze_improve.png" />
			</div>

			<!-- <div class="col-xs-12 col-sm-12 text-center rs-hide">
				<a href="{{ $page->baseUrl }}/features"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Explore More Features</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div> -->
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers case-breathers-imgRight">
		<div class="container mobile-container">
			<img src="images/img-newyorktimes.jpg" class="rs-show">
			<div class="case-breathers-rightSide">
				<h1 class="heading">New York Times</h1>
				<h5 class="subheading">
					<span class="font-semibold">NY Times,</span> 
					most successful article is a <span class="font-semibold">calculator </span> 
					not a <span class="font-semibold">Quiz.</span>
				</h5>
				<button class="btn-readmore">Read more<i class="material-icons">arrow_forward</i></button>
			</div>
			<img src="images/img-newyorktimes.jpg" class="rs-hide">
		</div>
	</div>

	<section class="section sec-integrations hide">
		<div class="container mobile-container">
			<h1 class="section-2-heading mk-animate-element scale-up ">
				Over 500 integrations
			</h1>
			<h5 class="section-2-subheading mk-animate-element scale-up">
				 Easily Integrate with Over 500 sales & marketing tools
			</h5>
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-hide mk-in-viewport text-center">
				<!--<img class="mk-animate-element scale-up int-box-shadow"  data-src="//dzvexx2x036l1.cloudfront.net/img-integration-full.jpg" />-->
				<div class="img-int-wrapper">
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-res">
				<!--<img class="int-box-shadow" data-src="//dzvexx2x036l1.cloudfront.net/img-integration-resp.jpg">-->
				<div class="img-int-wrapper">
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-mob">
				<!--<img class="int-box-shadow"  src="//dzvexx2x036l1.cloudfront.net/img-integration-mob.jpg">-->
				<div class="img-int-wrapper">
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 6 end-->

	<!-- Homepage The Outgrow Magic -->
	<div class="section-main">
		<section class="section section-5 sec-outgrowMagic-title">
			<div class="container mobile-container">
				<h1 class="section-2-heading mk-animate-element scale-up">
					Outgrow In Practice
				</h1>
				<h5 class="section-2-subheading mk-animate-element scale-up">
					Get inspired by some of our most successful calculators & quizzes!
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
							<iframe id="og-iframe" data-calc="//website.outgrow.us/build-a-startup?vHeight=1"></iframe>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-12 col-sm-12 mobile-container rs-hide calc-links text-center">
					<a href="javascript:void(0);" class="active"
						onclick="display('//website.outgrow.us/build-a-startup?vHeight=1')">
						<img class="thumb-calc" src="images/calc06.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/Which-engineering-major-is-right-for-you?vHeight=1')">
						<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc01.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/Cost-of-a-video-campaign-4?vHeight=1')">
						<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc02.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/What-is-your-risk-of-getting-a-heart-disease?vHeight=1')">
						<img class="thumb-calc" src="images/calc03.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/outgrow-roi?vHeight=1')">
						<img class="thumb-calc" src="images/calc04.jpg" />
					</a>
					<a href="javascript:void(0);" class=""
						onclick="display('//website.outgrow.us/build-an-app?vHeight=1')">
						<img class="thumb-calc" src="images/calc05.jpg" />
					</a>
				</div>

				<div class="col-xs-12 col-md-12 col-sm-12 section-6-left mobile-container rs-show text-center">
					<div class="col-md-12 col-sm-12 col-xs-12 np calc-links">
						<a href="//website.outgrow.us/build-a-startup?vHeight=1" class="col-sm-4 np calcembed active" target="_blank">
							<img class="thumb-calc" src="images/calc06.jpg" />
						</a>
						<a href="//website.outgrow.us/Which-engineering-major-is-right-for-you?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="images/calc01.jpg" />
						</a>
						<a href="//website.outgrow.us/Cost-of-a-video-campaign-4?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="images/calc02.jpg" />
						</a>
						<a href="//website.outgrow.us/What-is-your-risk-of-getting-a-heart-disease?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="images/calc03.jpg" />
						</a>
						<a href="//website.outgrow.us/outgrow-roi?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="images/calc04.jpg" />
						</a>
						<a href="//website.outgrow.us/build-an-app" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="images/calc05.jpg" />
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers case-productHunt">
		<div class="container mobile-container">
			<img src="images/img-productHunt.jpg">
			<div class="case-breathers-rightSide">
				<h1 class="heading">Product Hunt</h1>
				<h5 class="subheading">
					Several calculators have recieved over <span class="font-semibold">500 upvotes</span> 
					on <span class="font-semibold">Product Hunt</span>
				</h5>
				<button class="btn-readmore">Read more<i class="material-icons">arrow_forward</i></button>
			</div>
		</div>
	</div>

	<!--section testimonial -->
	<div class="section-main hide">
		<section class="section section-7-top">
			<div class="container mobile-container">
				<h1 class="section-2-heading mk-animate-element scale-up">
					Check what our users have to say!
				</h1>
			</div>
		</section>
		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-show-less480 ">
			<div class="swiper-container mk-animate-element scale-up">
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
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-show rs-hide-less480">
			<div class="swiper-container mk-animate-element scale-up">
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
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-hide">
			<div class="swiper-container mk-animate-element scale-up">
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
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<script>
			var swiper = new Swiper('.swiper-container', {
				pagination: '.swiper-pagination',
				paginationClickable: true,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				spaceBetween: 30,
				slidesPerView: 3,
				centeredSlides: true,
				autoplayDisableOnInteraction: false
			});
		</script>
	</div>
	<!--section testimonial -->

	<!--section testimonial -->
	<div class="section-main hide">
		<section class="section section-7-top">
			<div class="container mobile-container">
				<h1 class="section-2-heading">
					Top Notch Reviews!
				</h1>
			</div>
		</section>
		<div class="col-xs-12 col-sm-12 np text-center social-embeds">
			<!-- Load Facebook SDK for JavaScript -->
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10';
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			<div class="swiper-container">
				<!-- Your embedded comments code -->
				<div class="fb-comment-embed swiper-wrapper">
					<div class="swiper-slide">
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ftristinroney%2Fposts%2F10103889216820289%3A0&width=350&show_text=true&height=507&appId" width="350" height="507" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
					<div class="swiper-slide">
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcarlosrenato.dias%2Fposts%2F1901387873205496%3A0&width=350&show_text=true&height=482&appId" width="350" height="482" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
					<div class="swiper-slide">
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkawika.maszak%2Fposts%2F10212326308887611%3A0&width=350&show_text=true&height=608&appId" width="350" height="608" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
					<div class="swiper-slide">
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fweflyfishdude%2Fposts%2F10213020644965378%3A0&width=350&show_text=true&height=532&appId" width="350" height="532" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
					<div class="swiper-slide">
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Famy.mcmurray.9%2Fposts%2F984728605556%3A0&width=350&show_text=true&height=463&appId" width="350" height="463" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
					<div class="swiper-slide">
						<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FEddieOneMoment%2Fposts%2F10154798800971921%3A0&width=350&show_text=true&height=482&appId" width="350" height="482" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<!-- <div class="swiper-pagination"></div> -->
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>

			<!-- <script>
				var swiper = new Swiper('.swiper-container', {
					pagination: '.swiper-pagination',
					paginationClickable: true,
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					spaceBetween: 30,
					slidesPerView: 3,
					centeredSlides: true,
					autoplayDisableOnInteraction: false
				});
			</script>  -->

			 <!-- Initialize Swiper -->
			<script>
				var swiper = new Swiper('.swiper-container', {
					pagination: '.swiper-pagination',
					paginationClickable: true,
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					slidesPerView: 3,
					spaceBetween: 30,
					centeredSlides: true,
					// pagination: {
					// 	el: '.swiper-pagination',
					// 	clickable: true,
					// },
				});
			</script>

		</div>
	</div>
	<!--section testimonial -->

	<!-- <section class="section section-startFreeTrial-btn text-center">
		<a href="//app.outgrow.co" class="params trialLOL">
			<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn-buildcal mk-animate-element fade-in">
			<img src="//dzvexx2x036l1.cloudfront.net/icon-mouse.png">Start Free Trial</button>
		</a>
		<div class=""><label>Plans Start at $25/month</label></div>
	</section> -->
	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1">
		<div class="container  mobile-container">
			<h1 class="section-2-heading" style="color: rgb(34, 34, 34); text-transform:uppercase">
				Top Notch Reviews!
			</h1>
			<div class="social-media-section">
				<div class="each-arrow-section">
						<div class="arrow_box">
								gfhhgf
						</div>
				   <div class="each-arrow-section">
						<div class="arrow_box">
								gfhgf
						</div>
				   <div class="each-arrow-section">
						<div class="arrow_box">
                              gfhgfhgfhgf
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="video-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<!-- Modal content-->
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
	</div>
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
