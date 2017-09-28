@extends('_layouts.master')

@section('title', 'Calculator Vs Ebook Vs Landing Page | Outgrow')

@section('metaDescription')
	<meta property="og:title" content="Calculator Vs Ebook Vs Landing Page | Outgrow" />
@endsection

@section('inlinescripts')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/custom-sa.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/sahil-hover.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/home-responsive.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/why-responsive.css">
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/stylesheet.min.css' type='text/css' media='all'  />
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/js_composer.mina752.css?ver=4.11.2.1' type='text/css' media='all' />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('pageClass', '')

@section('pageId', 'why')

@section('content')
	<script src="{{ $page->baseUrl }}/js/swiper.min.js"></script>
    <section class="section section-top-why">
		<div class="container-fluid">
			<div class="feature-heading-1 mk-animate-element scale-up">
				<h3>
					Because Customers want to be helped.<br> Not Sold To.
				</h3>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 np p-img">
				<img class="sec4-2-new mk-animate-element scale-up" src="//dzvexx2x036l1.cloudfront.net/google-search-1.png" />
			</div>
	</section>

	<section class="section section-3 mt7 p20 calc-table">
		<div class="container">
			<!--<h1 class="section-2-heading">
				Calculators & quizzes:<br/> The Next Big Thing in Marketing
			</h1>-->
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

		</div>
	</section>
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

    <section class="section start-trial-cta">
		<div class="container-fluid np">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="bg1-img">
					<a href="//app.outgrow.co" id="trialAnchor">
						<button class="btn-buildcal mk-animate-element left-to-right mk-in-viewport full-visible ripple">
							<i class="material-icons">view_compact</i>
							<p>Build Your interactive experience</p>
						</button>
					</a>
					<!-- <label>No Credit Card Required</label> -->
				</div>
			</div>
		</div>
	</section>

@endsection

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
	}
@endsection