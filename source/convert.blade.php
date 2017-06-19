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
					<h4 class="mk-animate-element fade-in">
						eBooks, blogs & whitepapers giving average results?
					</h4>
					<h3 class="mk-animate-element fade-in section1-firsthead">
						Boost your marketing with highly <br/>converting <b>calculators</b> and viral <b>quizzes</b>.
					</h3>

					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-12 col-xs-12 col-sm-12 np text-center col-sm-offset-3 startTrial-outer">
							<i class="material-icons">email</i>
							<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your Email ID">
							<a href="javascript:void(0)" class="">
								<button onclick="callGA('CANNOT WAIT CTA')" class="btn-buildcal fade-in lead-form-btn">
									<!--<img src="https://s3.amazonaws.com/outgrow-assets/site/images/icon-mouse.png">-->
									Start Free Trial
								</button>
								<div class="btn-bottominfo fade-in">
									<label>*Plans Start at $25/month</label>
								</div>
							</span>
							<div id="bfrVid"></div>
						</div>
					</div>
				</div>
			</div>

			<script>
				document.getElementsByClassName('lead-form-btn')[0].onclick = function (e) {
					var email = document.getElementsByClassName('lead-form-email')[0].value;
					if (!email) {
						alert('Enter an email');
						return false;
					}
					var host = window.location.hostname.match(/localhost/) ? 'rely.co' : window.location.hostname;
					var signupUrl = '//app.' + host + '/signup?email=' + email;
					console.log(signupUrl);
					submitLeadForm(email, signupUrl);
				}
				function submitLeadForm (email, signupUrl) {
					console.log('Submit lead form called');
					jQuery.ajax({
						url: './js/ebookhandler.php',
						data: { email: email },
						type: 'POST',
						success: function (res) {
							console.log(res);
							window.location.href = signupUrl;
						},

						error: function (err) {
							console.log(err);
							window.location.href = signupUrl;
						}
					})
				}
			</script>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height" id="video-main-rs-mob">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-mob">
							<img class="video-img" src="https://s3.amazonaws.com/outgrow-assets/site/images/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon" data-toggle="modal" data-target="#video-modal">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height" id="video-main-rs">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-res">
							<img class="video-img" src="https://s3.amazonaws.com/outgrow-assets/site/images/video-thumbnail.jpg" data-src="https://s3.amazonaws.com/outgrow-assets/site/images/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle" onclick="changeHeightRes()"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-hide text-center hide-height" id="video-main">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-web" id="him1">
							<img class="video-img" src="https://s3.amazonaws.com/outgrow-assets/site/images/video-thumbnail.jpg" data-src="https://s3.amazonaws.com/outgrow-assets/site/images/video-thumbnail.jpg" />
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

	<section class="section section-3 sec-craftedTemps">
		<div class="container-fluid">
			<div class="vc_row wpb_row section vc_row-fluid  vc_custom_1469808665479" style=' text-align:center;'>
				<h1 class="section-2-heading">
					Beautifully crafted templates
				</h1>
				<h5 class="section-2-subheading mk-animate-element scale-up mk-in-viewport full-visible">
					Get new customers with powerful and easy to configure interactive calculators and quizzes.
				</h5>
				<div class=" full_section_inner clearfix">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div class='qode-expanding-images'>
									<div class='qode-expanding-images-inner mk-animate-element scale-up'>
										<img class='qode-frame-image' src="https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-tab.png" alt='laptop frame' />
										<div class="fadein">
											<img id="f4" src="https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-tab04.png" data-src="https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-tab04.png">
											<!--<img id="f3" src="https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-tab03.png" data-src="https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-tab03.png">-->
											<img id="f2" src="https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-tab02.png" data-src="https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-tab02.png">
											<img id="f1" src="https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-tab.png" data-src="https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-tab.png">
										</div>
									</div>
									<div class='qode-side-images'>
										<a class='qode-side-image-link mk-animate-element scale-up' href=javascript:void(0);>
											<div data-bottom='transform:translate3d(70%,25%,0)' data--150-bottom='transform:translate3d(0,0,0)'
												class='qode-side-image qode-side-image-1 qode-lazy-image qode-side-image-inner'
												data-image='https://s3.amazonaws.com/outgrow-assets/site/images/ct02.jpg' data-lazy='true'></div>
										</a>
										<a class='qode-side-image-link mk-animate-element scale-up' href=javascript:void(0);>
											<div data-100-bottom='transform:translate3d(70%,-25%,0)' data--50-bottom='transform:translate3d(0,0,0)'
												class='qode-side-image qode-side-image-2 qode-lazy-image qode-side-image-inner'
												data-image='https://s3.amazonaws.com/outgrow-assets/site/images/ct04.jpg'
												data-lazy='true'></div>
										</a>
										<a class='qode-side-image-link mk-animate-element scale-up' href=javascript:void(0);>
											<div data-bottom='transform:translate3d(-70%,25%,0)' data--150-bottom='transform:translate3d(0,0,0)'
												class='qode-side-image qode-side-image-3 qode-lazy-image qode-side-image-inner'
												data-image='https://s3.amazonaws.com/outgrow-assets/site/images/ct05.jpg'
												data-lazy='true'></div>
										</a>
										<a class='qode-side-image-link mk-animate-element scale-up' href=javascript:void(0);>
											<div data-100-bottom='transform:translate3d(-70%,-25%,0)' data--50-bottom='transform:translate3d(0,0,0)'
												class='qode-side-image qode-side-image-4 qode-lazy-image qode-side-image-inner'
												data-image='https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-right2.jpg'
												data-lazy='true'></div>
										</a>
										<a class='qode-side-image-link mk-animate-element scale-up' href=javascript:void(0);>
											<div data-bottom='transform:translate3d(180%,35%,0)' data--150-bottom='transform:translate3d(0,0,0)'
												class='qode-side-image qode-side-image-5 qode-lazy-image qode-side-image-outer'
												data-image='https://s3.amazonaws.com/outgrow-assets/site/images/ct01.jpg'
												data-lazy='true'></div>
										</a>
										<a class='qode-side-image-link mk-animate-element scale-up' href=javascript:void(0);>
											<div data-100-bottom='transform:translate3d(180%,-35%,0)' data--50-bottom='transform:translate3d(0,0,0)'
												class='qode-side-image qode-side-image-6 qode-lazy-image qode-side-image-outer'
												data-image='https://s3.amazonaws.com/outgrow-assets/site/images/ct03.jpg'
												data-lazy='true'></div>
										</a>
										<a class='qode-side-image-link mk-animate-element scale-up' href=javascript:void(0);>
											<div data-bottom='transform:translate3d(-180%,25%,0)' data--150-bottom='transform:translate3d(0,0,0)'
												class='qode-side-image qode-side-image-7 qode-lazy-image qode-side-image-outer'
												data-image='https://s3.amazonaws.com/outgrow-assets/site/images/ct06.jpg'
												data-lazy='true'></div>
										</a>
										<a class='qode-side-image-link mk-animate-element scale-up' href=javascript:void(0);>
											<div data-100-bottom='transform:translate3d(-180%,-25%,0)' data--50-bottom='transform:translate3d(0,0,0)'
												class='qode-side-image qode-side-image-8 qode-lazy-image qode-side-image-outer'
												data-image='https://s3.amazonaws.com/outgrow-assets/site/images/img-craftedtemp-right4.jpg'
												data-lazy='true'></div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-10 sec-grey">
		<div class="container container-center">
			<h1 class="section-2-heading">
				Why calculators outperform <br/>ebooks & marketing Pages?
			</h1>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="col-md-4 col-xs-12 np text-center sec-new-table">
					<img src="{{ $page->baseUrl }}/images/img-table1.png">
					<span>Get Conversion Rates of Over 60%</span>
					<p class="">Interactive calculators and quizzes facilitate two way communication and answer your customers' most pressing questions. Result? Better engagement and more conversions.</p>
				</div>
				<div class="col-md-4 col-xs-12 np text-center sec-new-table">
					<img src="{{ $page->baseUrl }}/images/img-table2.png">
					<span>Get Referral Traffic Like Never Before</span>
					<p class="">Given the value they add, quizzes and calculators are shared and go viral. You reach a wider audience, your brand gets noticed, and your referral traffic improves considerably.</p>
				</div>
				<div class="col-md-4 col-xs-12 np text-center sec-new-table">
					<img src="{{ $page->baseUrl }}/images/img-table3.png">
					<span>Add Value to Customers, Instantly</span>
					<p class="">Calculators and quizzes provide instant gratification and give personalized answers/recommendations to your customers, thus adding value.</p>
				</div>
			</div>
		</div>
	</section>
	
	<div class="col-md-12 col-sm-12 col-xs-12 text-center np">
		<div class="start-trial-cta">
			<a href="/calculators-vs-ebooks">
				<button class="btn-buildcal">
					<i class="material-icons">view_compact</i>
					See how calculators compare to ebooks etc
				</button>
			</a>
		</div>
	</div>

	<!--<h1 class="section-2-heading mk-animate-element scale-up mk-in-viewport full-visible">
		Why calculators outperform <br/> ebooks &amp; marketing Pages?
	</h1>
	<section class="section section-3 mt7 p20">
		<div class="container">
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
			<div class="col-xs-12 col-sm-12 np rs-hide">
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

	<!-- Homepage section 3 end-->

	<section class="section">
		<div class="container mobile-container">
			<h1 class="section-2-heading mk-animate-element scale-up ">
				Beautiful calculators and quizzes. <br/> Without Developers.
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
				<div class="embed-responsive embed-responsive-16by9">
					<video width="1324" height="607" autoplay loop>
						<source src="https://s3.amazonaws.com/outgrow-assets/site/images/Outgrow-demo.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 section-4-left ">
				<h4 class="mk-animate-element right-to-left">
					Build Beautiful
				</h4>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">format_paint</i>
					<span><b>Appealing Templates</b> that Set Your UX Apart</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">view_compact</i>
					<span>Showcase Your Brand with <b>Quick Customizations</b> </span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">developer_board</i>
					<span>Publish Within Minutes, with <b>No IT Headache</b> including <b>Charts and Graphs</b></span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 np section-4-right mk-animate-element fade-in rs-hide">
				<div class="embed-responsive embed-responsive-16by9">
					<video width="1324" height="607" autoplay loop>
						<source src="https://s3.amazonaws.com/outgrow-assets/site/images/Outgrow-demo.mp4" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 4 end-->

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img class="scrollimg mk-animate-element scale-up sec5-2-1" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-publishAnywhere.png" />
			</div>
			<div class="col-xs-12 col-sm-12 col-sm-push-9 col-md-3 section-5-left">
				<h4 class="mk-animate-element right-to-left">
					Publish Anywhere
				</h4>
				<span class="mk-animate-element right-to-left" >
					<i class="material-icons">public</i>
					<span>Publish on <b>Your Domain</b> or a URL of your choice.</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Embed Beautifully in Any <b>App, Webpage or CMS</b>.</span>
				</span>
				 <span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Present as a <b>Pop-up</b> or a <b>Slide-in</b>. </span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-hide">
				<img class="scrollimg mk-animate-element scale-up sec5-2-1" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-publishAnywhere.png" />
			</div>
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<!-- Homepage section 6 start-->
	<section class="section section-6">
		<div class="container img-container">
			<div class="col-xs-12 col-sm-12 col-md-9 np mk-animate-element fade-in section-6-right rs-show">
				<img class="scrollimg mk-animate-element right-to-left sec6-2-1" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-boostgrowth-tab.png" />
				<img class="scrollimg sec6-2-2 mk-animate-element left-to-right" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-boostgrowth-mobile.png" />
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
				<img class="scrollimg mk-animate-element right-to-left" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-boostgrowth-tab.png" />
				<img class="scrollimg sec4-2 mk-animate-element left-to-right" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-boostgrowth-mobile.png" />
			</div>
		</div>
	</section>

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img class="scrollimg mk-animate-element scale-up" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-analyze_improve.png" />
			</div>
			<div class="col-xs-12 col-sm-12 col-sm-push-9 col-md-3 section-5-left">
				<h4 class="mk-animate-element right-to-left">
					Analyze & Improve
				</h4>
				<span class="mk-animate-element right-to-left" >
					<i class="material-icons">public</i>
					<span>Hyper-targeted Sales Outreach with <b>Rich Customer Data</b></span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Track <b>Visits, Conversions</b> and Traffic from Across All Channels</span>
				</span>
				 <span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Easily Integrate with <b>Over 500 sales & marketing tools</b></span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-hide">
				<img class="scrollimg mk-animate-element scale-up" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-analyze_improve.png" />
			</div>

			<div class="col-xs-12 col-sm-12 text-center rs-hide">
				<a href="{{ $page->baseUrl }}/features"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Explore More Features</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div>
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<section class="section sec-integrations">
		<div class="container mobile-container">
			<h1 class="section-2-heading mk-animate-element scale-up ">
				Over 500 integrations
			</h1>
			<h5 class="section-2-subheading mk-animate-element scale-up">
				 Easily Integrate with Over 500 sales & marketing tools
			</h5>
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-hide mk-in-viewport text-center">
				<!--<img class="mk-animate-element scale-up int-box-shadow" src=""  data-src="https://s3.amazonaws.com/outgrow-assets/site/images/img-integration-full.jpg" />-->
				<div class="img-int-wrapper">
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-1.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-2.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-3.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-4.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-5.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-6.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-7.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-8.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-9.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-10.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-11.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-res">
				<!--<img class="int-box-shadow" src="" data-src="https://s3.amazonaws.com/outgrow-assets/site/images/img-integration-resp.jpg">-->
				<div class="img-int-wrapper">
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-1.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-2.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-3.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-4.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-5.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-6.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-7.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-8.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-9.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-10.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-11.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-mob">
				<!--<img class="int-box-shadow" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-integration-mob.jpg">-->
				<div class="img-int-wrapper">
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-1.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-2.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-3.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-4.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-5.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-6.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-7.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-8.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-9.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-10.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-11.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/img-int-12.jpg" />
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
					The Outgrow Magic
				</h1>
				<h5 class="section-2-subheading mk-animate-element scale-up">
					Get inspired by some of our most successful calculators & quizzes!
				</h5>
			</div>
		</section>

		<section class="section section-5 sec-outgrowMagic">
			<div class="container-fluid np">
				<div class="col-xs-12 col-md-3 col-sm-12 section-6-left mobile-container rs-hide calc-links">
					<a href="javascript:void(0);" target="_blank" class="active"
						onclick="display('https://website.outgrow.co/Which-engineering-major-is-right-for-you?vHeight=1')">
						<img class="scrollimg mk-animate-element scale-up thumb-calc" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/calc01.jpg" />
					</a>
					<a href="javascript:void(0);" target="_blank" class=""
						onclick="display('https://website.outgrow.co/Cost-of-a-video-campaign-4?vHeight=1')">
						<img class="scrollimg mk-animate-element scale-up thumb-calc" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/calc02.jpg" />
					</a>
					<a href="javascript:void(0);" target="_blank" class=""
						onclick="display('https://website.outgrow.co/What-is-your-risk-of-getting-a-heart-disease?vHeight=1')">
						<img class="scrollimg mk-animate-element scale-up thumb-calc" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/calc03.jpg" />
					</a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9 np">
					<!--<div id="sticky-anchor"></div>-->
					<div class="tab-outer-frame col-xs-12 col-md-12 col-sm-12 text-center">
						<!--<span class="icon-webcam"></span>-->
						<div class="hrefTarget tab-inner-frame col-xs-12 col-md-12 col-sm-12">
							<iframe id="og-iframe" src="" data-calc="https://website.outgrow.co/Which-engineering-major-is-right-for-you?vHeight=1"></iframe>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-12 col-sm-12 section-6-left mobile-container rs-show text-center">
					<div class="col-md-12 col-sm-12 col-xs-12 np calc-links">
						<a href="https://website.outgrow.co/Which-engineering-major-is-right-for-you?vHeight=1" class="col-sm-4 np calcembed active" target="_blank">
							<img class="scrollimg mk-animate-element scale-up thumb-calc" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/calc01.jpg" />
						</a>
						<a href="https://website.outgrow.co/Cost-of-a-video-campaign-4?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="scrollimg mk-animate-element scale-up thumb-calc" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/calc02.jpg" />
						</a>
						<a href="https://website.outgrow.co/What-is-your-risk-of-getting-a-heart-disease?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="scrollimg mk-animate-element scale-up thumb-calc" src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/calc03.jpg" />
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!--section testimonial -->
	<div class="section-main">
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
						<img src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile01.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile03.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile04.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile05.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile06.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile07.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile08.jpg" alt="" class="scrollimg qode-lazy-image" />
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
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile01.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile01.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile03.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile03.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile04.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile04.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile05.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile05.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile06.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile06.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile07.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile07.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile08.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonialsMobile08.jpg" alt="" class="scrollimg qode-lazy-image" />
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
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials01.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials01.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials03.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials03.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials04.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials04.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials05.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials05.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials06.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials06.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials07.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials07.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials08.jpg" data-scroll-img="https://s3.amazonaws.com/outgrow-assets/site/images/testimonials08.jpg" alt="" class="scrollimg qode-lazy-image" />
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
				// autoplay: 2500,
				// speed:500,
				autoplayDisableOnInteraction: false
			});
		</script>
	</div>
	<!--section testimonial -->

	<section class="section section-startFreeTrial-btn text-center">
		<a href="//app.outgrow.co" class="params trialLOL">
			<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn-buildcal mk-animate-element fade-in">
			<img src="" data-src="https://s3.amazonaws.com/outgrow-assets/site/images/icon-mouse.png">Start Free Trial</button>
		</a>
		<div class=""><label>Plans Start at $25/month</label></div>
	</section>
	<!-- Homepage section 13 end-->

	<!-- Start: Modal Video -->
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
	<!-- End: Modal Video -->
	<!-- Start: Modal calcEmbed1 -->
	<!--<div id="calcEmbed-modal1" class="modal fade calcEmbed-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="col-md-12 np">
						<iframe class="og-iframe-res" src="" data-calc="https://website.outgrow.co/Which-engineering-major-is-right-for-you?vHeight=1"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End: Modal calcEmbed1 -->

	<!-- Start: Modal calcEmbed2 -->
	<!--<div id="calcEmbed-modal2" class="modal fade calcEmbed-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="col-md-12 np">
						<iframe class="og-iframe-res" src="" data-calc="https://website.outgrow.co/Cost-of-a-video-campaign-4?vHeight=1"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End: Modal calcEmbed2 -->

	<!-- Start: Modal calcEmbed3 -->
	<!--<div id="calcEmbed-modal3" class="modal fade calcEmbed-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="col-md-12 np">
						<iframe class="og-iframe-res" src="" data-calc="https://website.outgrow.co/What-is-your-risk-of-getting-a-heart-disease?vHeight=1"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End: Modal calcEmbed3 -->
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