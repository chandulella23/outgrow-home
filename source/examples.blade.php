@extends('_layouts.master')

@section('title', 'Examples | Outgrow')

@section('metaDescription')
	<meta name="description" content="Services, SAAS, Education, Healthcare, Construction, Travel & Hospitality, Finance, Manufacturing, Publishing. There is a Calculator for that!"/>
	<link rel="canonical" href="http://outgrow.co/examples.html" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Examples | Outgrow" />
	<meta property="og:description" content="Services, SAAS, Education, Healthcare, Construction, Travel & Hospitality, Finance, Manufacturing, Publishing. There is a Calculator for that!" />
	<meta property="og:url" content="https://outgrow.co/examples.html" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Services, SAAS, Education, Healthcare, Construction, Travel & Hospitality, Finance, Manufacturing, Publishing. There is a Calculator for that!" />
	<meta name="twitter:title" content="Examples | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('inlinescripts')
	<script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/selectize.min.js"></script>
@endsection

@section('css')
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/animations.css">
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/custom-sa.css">
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/sahil-hover.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/home-responsive.css">
	<link rel='stylesheet' href="{{ $page->baseUrl }}/css/stylesheet.min.css" type="text/css" media='all'  />
	<link rel='stylesheet' href="{{ $page->baseUrl }}/css/js_composer.mina752.css?ver=4.11.2.1" type='text/css' media='all' />
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/useCase.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/animated-masonry-gallery.css" type="text/css" />
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/useCase-responsive.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/navbar.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/selectize.default.css">	
	<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />


@endsection

@section('pageClass', 'usecase')

@section('pageId', '')

@section('content')
	<script src="{{ $page->baseUrl }}/js/swiper.min.js"></script>
	<!--  top section-->
	<div class="section-main sec-example">

		<!-- hiding the top red bar of each page -->
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
		<!-- end: hiding the top red bar of each page -->

		<!-- start: example calc old -->
		<!-- <section class="section example-calc hide">
			<div id="premade-loader" class="preloader">
				<div class="status">&nbsp;</div>
			</div>
			<div id="premade-content" class="tab-section hide">
				<div class="container-fluid">
					
					<ul class="nav nav-tabs premade-calc" role="tablist">
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
					</ul>

					<div class="tab-content usecase">
						<div role="tabpanel" class="tab-pane active" id="numeric-calc">
							<div class="col-md-12 col-sm-12 col-xs-12 new-cards-section pre-card">
							
								<div class="premade-template">
									<ul class="pre-temp-cat" id="calc-cats">
										<li class="active">
											<a href="javascript:void(0)" id="Auto" onclick="shuffleCalcs('Auto')">Auto</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="Education" onclick="shuffleCalcs('Education')">Education</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="Finance" onclick="shuffleCalcs('Finance')">Finance</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="MarketingAdvertising"
											onclick="shuffleCalcs('MarketingAdvertising')">Marketing & Advertising</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="HealthFitness"
											onclick="shuffleCalcs('HealthFitness')">Health & Fitness</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="Legal"
											onclick="shuffleCalcs('Legal')">Legal</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="Quintessential"
											onclick="shuffleCalcs('Quintessential')">Quintessential</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="RealEstateConstruction"
											onclick="shuffleCalcs('RealEstateConstruction')">Real Estate &
												Construction</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="Technology"
											onclick="shuffleCalcs('Technology')">Technology</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="Travel"
											onclick="shuffleCalcs('Travel')">Travel</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="Publishing"
											onclick="shuffleCalcs('Publishing')">Publishing</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="TVandEntertainment"
											onclick="shuffleCalcs('TVandEntertainment')">TV and Entertainment</a>
										</li>
										<li>
											<a href="javascript:void(0)" id="Trending" onclick="shuffleCalcs('Trending')">Trending</a>
										</li>
									</ul>
									<div class="pre-temp-cont">
										<ul class="pre-temp-list" id="gallery-content-center">

											<li class="active filter-all filter-auto" id="calc-auto-loan">
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
											</li>-

										</ul>
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
															<i class="material-icons">&#xE80E;</i>
															AUTO LOAN CALCULATOR
							\							</p>
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- end: example calc old -->

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

		<section class="section section-recentNews">
			<div class="container">
				<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
					<div class="section-2-heading">Happening @ Outgrow</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 np">
					<div class="col-md-4 col-sm-4 col-xs-12 np recentNews-outer fixed-width">
						<h4>Trending Content</h4>
						<div class="recentNews-inner">
							<div class="swiper-container-recentNews" id="trendingC">
								<!-- <div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_trending1.png" /></div>
											<div class="recentNews-text">
												<h5>Laurel or Yanny: Take the Poll </h5>
												<span>Poll </span>
												<p class="">Eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
												<div class="button-wrapper">
													<button type="button" class="btn btn-preview btn-hover">Preview</button>
													<button type="button" class="btn btn-useTemp btn-hover">Use Template</button>
												</div>
											</div>
										</div>
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_trending2.png" /></div>
											<div class="recentNews-text">
												<h5>Is Your Humour as Deadly as Deadpool's? </h5>
												<span>Outcome Quiz </span>
												<p class="">Aipisicing elit, sed Lorem ipsum dolor sit amet, consectetur ad. </p>
												<div class="button-wrapper">
													<button type="button" class="btn btn-preview btn-hover">Preview</button>
													<button type="button" class="btn btn-useTemp btn-hover">Use Template</button>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_trending1.png" /></div>
											<div class="recentNews-text">
												<h5>Laurel or Yanny: Take the Poll </h5>
												<span>Poll </span>
												<p class="">Eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
												<div class="button-wrapper">
													<button type="button" class="btn btn-preview btn-hover">Preview</button>
													<button type="button" class="btn btn-useTemp btn-hover">Use Template</button>
												</div>
											</div>
										</div>
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_trending2.png" /></div>
											<div class="recentNews-text">
												<h5>Is Your Humour as Deadly as Deadpool's? </h5>
												<span>Outcome Quiz </span>
												<p class="">Aipisicing elit, sed Lorem ipsum dolor sit amet, consectetur ad. </p>
												<div class="button-wrapper">
													<button type="button" class="btn btn-preview btn-hover">Preview</button>
													<button type="button" class="btn btn-useTemp btn-hover">Use Template</button>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_trending1.png" /></div>
											<div class="recentNews-text">
												<h5>Laurel or Yanny: Take the Poll </h5>
												<span>Poll </span>
												<p class="">Eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
												<div class="button-wrapper">
													<button type="button" class="btn btn-preview btn-hover">Preview</button>
													<button type="button" class="btn btn-useTemp btn-hover">Use Template</button>
												</div>
											</div>
										</div>
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_trending2.png" /></div>
											<div class="recentNews-text">
												<h5>Is Your Humour as Deadly as Deadpool's? </h5>
												<span>Outcome Quiz </span>
												<p class="">Aipisicing elit, sed Lorem ipsum dolor sit amet, consectetur ad. </p>
												<div class="button-wrapper">
													<button type="button" class="btn btn-preview btn-hover">Preview</button>
													<button type="button" class="btn btn-useTemp btn-hover">Use Template</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-pagination"></div> -->
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 np recentNews-outer fixed-width">
						<h4>Blog</h4>
						<div class="recentNews-inner">
							<div class="swiper-container-blog" id="postt">
								<!-- <div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_blog1.png" /></div>
											<div class="recentNews-text">
												<h5>How to Build an Auto-Loan Calculator? </h5>
												<p class="line-clamp">Cars! They are fast, they’re fabulous and they’re exciting. Unfortunately, car-loans aren’t. As long as cars </p>
												<a href="javascript:void(0);" target="_blank" class="readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
											</div>
										</div>
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_blog2.png" /></div>
											<div class="recentNews-text"> 
												<h5>5  Underrated Content Marketing Platforms </h5>
												<p class="line-clamp">This post is for those of you who go, "Dear internet, this is what I have to say..." but don’t know where to start. </p>
												<a href="javascript:void(0);" target="_blank" class="readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_blog1.png" /></div>
											<div class="recentNews-text">
												<h5>How to Build an Auto-Loan Calculator? </h5>
												<p class="line-clamp">Cars! They are fast, they’re fabulous and they’re exciting. Unfortunately, car-loans aren’t. As long as cars </p>
												<a href="javascript:void(0);" target="_blank" class="readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
											</div>
										</div>
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_blog2.png" /></div>
											<div class="recentNews-text"> 
												<h5>5  Underrated Content Marketing Platforms </h5>
												<p class="line-clamp">This post is for those of you who go, "Dear internet, this is what I have to say..." but don’t know where to start. </p>
												<a href="javascript:void(0);" target="_blank" class="readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_blog1.png" /></div>
											<div class="recentNews-text">
												<h5>How to Build an Auto-Loan Calculator? </h5>
												<p class="line-clamp">Cars! They are fast, they’re fabulous and they’re exciting. Unfortunately, car-loans aren’t. As long as cars </p>
												<a href="javascript:void(0);" target="_blank" class="readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
											</div>
										</div>
										<div class="recentNews-inner-row">
											<div class="img-section"><img src="{{ $page->baseUrl }}/images/examples_blog2.png" /></div>
											<div class="recentNews-text"> 
												<h5>5  Underrated Content Marketing Platforms </h5>
												<p class="line-clamp">This post is for those of you who go, "Dear internet, this is what I have to say..." but don’t know where to start. </p>
												<a href="javascript:void(0);" target="_blank" class="readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-pagination"></div> -->
							</div>
							<script type="text/javascript">
								let CLIENT_ID = '370027192517-p99ot4299pu718rf5o7cl29unpefu48t.apps.googleusercontent.com';
								let API_KEY = 'AIzaSyCU2M3qcF0uBORatBRSMkBOY5wlHxEvx_Q';
								let DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];
								let SCOPES = "https://www.googleapis.com/auth/calendar";

								function handleClientLoad() {
									gapi.load('client:auth2', initClient);
								}

								function initClient() {
									gapi.client.init({
										apiKey: API_KEY,
										clientId: CLIENT_ID,
										discoveryDocs: DISCOVERY_DOCS,
										scope: SCOPES
									}).then(function () {
										gapi.auth2.getAuthInstance().signIn();
										gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);
										updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
									}, function (error) {
										console.log(JSON.stringify(error, null, 2));
									});
								}

								function updateSigninStatus(isSignedIn) {
									if (isSignedIn) {
										addUpcomingEvent();
									} else {
									}
								}

								function addUpcomingEvent() {
									for(let i=0; i<window.selectedEventForCalender.length;i++) {
										gapi.client.calendar.events.list({
											'calendarId': 'primary',
											'timeMin': (new Date()).toISOString(),
											'summary': window.selectedEventForCalender[i].EventName,
											'showDeleted': false,
											'singleEvents': true,
											'orderBy': 'startTime'
										}).
										then(function(response) {
											let events = response.result.items;
											if (events.length > 0) {
											} else {
												let date = window.selectedEventForCalender[i].Date;
												let month = ("0" + (date.getMonth()+1)).slice(-2);
												let day  = ("0" + date.getDate()).slice(-2);
												let startTime = [ date.getFullYear(), month, day ].join("-") + 'T00:00:00-00:00'
												let endTime = [ date.getFullYear(), month, day ].join("-") + 'T23:59:00-00:00'
												var event = {
													'summary': window.selectedEventForCalender[i].EventName,
													'location': 'New York City, New York, United States, 10005',
													'description': window.selectedEventForCalender[i].Description,
													'start': {
													'dateTime': startTime,
													'timeZone': 'America/New_York'
												},
												'end': {
													'dateTime': endTime,
													'timeZone': 'America/New_York'
												},
												'attendees': [
													{ 'email': 'questions@outgrow.co' },
												],
												'reminders': {
													'useDefault': false,
													'overrides': [
														{ 'method': 'email', 'minutes': 24 * 60 },
														{ 'method': 'popup', 'minutes': 10 }
													]
												}
												};
												gapi.client.calendar.events.insert({
													'calendarId': 'primary',
													'resource': event
												}).then(function (response) {
													// console.log("@@@@@@@@@@@",response)
												});
											}
										});
									}
								}
								

							</script>
							<script async defer src="https://apis.google.com/js/api.js">
								// var swiper = new Swiper('.swiper-container-blog', {
								// 	pagination: '.swiper-pagination',
								// 	paginationClickable: true,
								// 	nextButton: '.swiper-button-next',
								// 	prevButton: '.swiper-button-prev',
								// 	//spaceBetween: 30,
								// 	//slidesPerView: 3,
								// 	centeredSlides: true,
								// 	// autoplay: 2500,
								// 	speed:500,
								// 	autoplayDisableOnInteraction: false
								// });
							</script>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 np recentNews-outer calendar-wrapper fixed-width">
						<h4 ><div class="popover-base">Upcoming Marketing Events</div> 
						<div class="base">
						<i class="material-icons ">info_outline</i>
						<span class="popover-block-new">
						Right Click on Any Event to Add It to Your Google Calendar
						</span>
								</div>
					</h4>
						<div class="recentNews-inner calender-outer">
							<div class="inner-box" data-simplebar data-simplebar-auto-hide="false">
								<div id="calendar"> </div>							
								<div id="selEvents">
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-5 sec-outgrowMagic">
			<div class="container-fluid np">
				<div class="col-xs-12 col-sm-12 col-md-12 np">
					<!--<div id="sticky-anchor"></div>-->
					<div class="section-2-heading">
						Outgrow Embeds in Practice
					</div>
					<div class="tab-outer-frame col-xs-12 col-md-10 col-sm-12 text-center">
						<!--<span class="icon-webcam"></span>-->
						<div class="hrefTarget tab-inner-frame col-xs-12 col-md-12 col-sm-12">
							<iframe id="og-iframe" src="//website.outgrow.us/build-a-startup?vHeight=1"></iframe>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-12 col-sm-12 mobile-container rs-hide calc-links text-center">
					<a href="javascript:void(0);" class="active"
						onclick="display('//website.outgrow.us/build-a-startup?vHeight=1')">
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
						<a href="//website.outgrow.us/build-a-startup?vHeight=1" class="col-sm-4 np calcembed active" target="_blank">
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
	<!-- Start Trial CTA-->
	<!--<section class="section start-trial-cta">
		<div class="container-fluid np">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="bg2-img">
					<h3>Generate Ideas</h3>
					<a href="{{ $page->baseUrl }}/idea-generation?get-started" class="params trialLOL">
						<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn-buildcal">
						<img src="" data-src="//dzvexx2x036l1.cloudfront.net/icon-mouse.png"> &nbsp;Get Started</button>
					</a>
				</div>
			</div>
		</div>
	</section> -->

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers">
		<div class="container custom-container mobile-container">
			<div class="case-breathers-leftSide">
			  <img src="{{ $page->baseUrl }}/images/example-breather-img.png" class="uni1">
			</div>
			<div class="case-breathers-rightSide">
				<h1 class="heading">Generate interactive content ideas for your company using our Idea Generator</h1>
				<a href="http://outgrow.co/idea-generation" target="_blank" class="btn btn-download btn-hover">Try out our Idea Generator <i class="material-icons">arrow_forward</i></a>
			</div>
		</div>
	</div>

	<!-- <section class="section">
		<div class="container">
			<div id="premade-heading" class="useCase-heading">
				There is a Calculator for that!
			</div>
		</div>
	</section> -->
    <!--  section end-->

	<!-- tab-section Start -->
	<section class="section hide">
		<div class="tab-section">
			<div class="container-fluid">
					<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="tab-title active">
						<a href="#industry" aria-controls="industry" class="res-tab" role="tab" data-toggle="tab" onclick="callGA('TYPE')">
							<i class="material-icons">done</i> By Type
						</a>
					</li>
					<li role="presentation" class="tab-title">
						<a href="#category" aria-controls="category" role="tab" data-toggle="tab" onclick="callGA('INDUSTRY')">
							<i class="material-icons">done</i> By Industry
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content usecase">
					<div role="tabpanel" class="tab-pane active" id="industry">
						<div class="gallery">
							<div class="gallery-header hide">
								<div class="gallery-header-center">
									<div id="gallery-header-center-left">
									</div>

								</div>
							</div>
							<div class="gallery-content">
								<div class="gallery-content-center">
										<div class="usecase-industry abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-sm-12 col-md-6 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Cost Calculators
													</h4>
													<p>More often than not, first question customers have is "how much will this cost me?", especially in services business like video production , software development or real estate.</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much will it cost to run a video marketing campaign?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the cost of app development in different countries.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the total REAL net cost of your college degree.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much would it cost me to invest in an index fund?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to climb mount everest?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much will I pay in broker fees to sell my home?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to build a pool?</span>
														</span>
													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide  mk-animate-element right-to-left">
													<img alt="Cost Calculators" src="//dzvexx2x036l1.cloudfront.net/banner2.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show  mk-animate-element right-to-left">
													<img alt="Cost Calculators" src="//dzvexx2x036l1.cloudfront.net/banner2.jpg" class= "img-pos box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img alt="Savings Calculators" src="//dzvexx2x036l1.cloudfront.net/slide5-new.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Savings Calculators
													</h4>
													<p>Customers LOVE Savings. Illustrating how much your tool or service can save them can go a long way in building a strong case for your product and triggering a purchase.</p>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how much hiring an expert consultant will save you versus running PPC in house. </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much you can save by streamlining collaboration between your team members.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the tax rebates you can earn by investing in education non-profits.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by using physical therapy for my knee versus a knee replacement surgery? </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can you save in building cost by "daylighting" (strategic placement of windows)?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much do you save in the long term with property insurance?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img alt="Savings Calculators" src="//dzvexx2x036l1.cloudfront.net/slide5-new.jpg" class= "box-shadow img-res" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Diagnostic Calculators
													</h4>
													<p>Diagnose issues, qualities and concerns that are on the top of your customer's mind. A tool that assesses how well or badly they are doing (especially as compared to the competition) is almost guaranteed to get a click.</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your digital quotient?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How valuable is my brand?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculatate how much efficiency you stand gain by shifting to SaaS </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your health rating as compared to an average adult? </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much you spend on impulse purchases?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How well are you running your PPC campaign?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Check if you understand investing in bonds.</span>
														</span>
													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img alt="Diagnostic Calculators" src="//dzvexx2x036l1.cloudfront.net/banner7-ex.jpg" class="box-shadow" />
												</div>

												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img alt="Diagnostic Calculators" src="//dzvexx2x036l1.cloudfront.net/banner7-ex.jpg" class="box-shadow" />

												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img alt="Competitor Calculators" src="//dzvexx2x036l1.cloudfront.net/homepage-2.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Competitor Calculators
													</h4>
													<p>Over 93% of customers will check at least 4 options before making a purchase. Why not make it easy for them to make the comparison (and make an implicit case for your product or service)?</p>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Considering hiring an agency? Compare how cheap we are as compared to our competitors.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Find out how much you can save by studying abroad vs studying in the US.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Already use a affiliate management tool? Calculate how much you can save by shifting to our tool?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Compare cost of building an office building with us versus another local builder. </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How does my financial advisory fees compare with others?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Compare our price with other hotels in the area.</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img alt="Competitor Calculators" src="//dzvexx2x036l1.cloudfront.net/homepage-2.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Alternate Choice Calculators
													</h4>
													<p>A customer is a highly conflicted being. Not only does he or she have to decide between competitors, but also alternative ways of solving (or living with) their problems. Tell them why your solution is the best choice!</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much it would cost to build an in house team to run all your marketing and advertising.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how your earnings will differ if you decide to skip college.</span>
														</span>

														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Find out how much it would cost to invest on your own as compared to using an advisor.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Estimate how much it would cost you to rent instead of buying a home.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much it would cost to manufacture widgets in house versus outsource?</span>
														</span>
													</div>

												</div>

												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img alt="Alternate Choice Calculators" src="//dzvexx2x036l1.cloudfront.net/banner5-new.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img alt="Alternate Choice Calculators" src="//dzvexx2x036l1.cloudfront.net/banner5-new.jpg" class="box-shadow" />

												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">

												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img alt="Time Calculators" src="//dzvexx2x036l1.cloudfront.net/slide3.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Time Calculators
													</h4>
													<p>After price, time is the second biggest concern that customers have. In fact, it is the biggest reason that cause customers anxiety! </p>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much time will you save in a year by hiring our agency?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much development time will you save by choosing our SaaS tool.</span>
														</span>
													<!-- 	<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long will it take to shift from your legacy systems to new SaaS based cloud solution.</span>
														</span> -->
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long will it take you to recover from a heart surgery?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long will it take for you to build an office building?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take to double my money?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How many years should it take to prepare for retirement?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much time does it take to visit all major museums in Berlin?</span>
														</span>

													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img alt="Time Calculators" src="//dzvexx2x036l1.cloudfront.net/slide3.jpg" class="box-shadow img-res" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Grade Based Calculators
													</h4>
													<p>As human beings, we are highly sensitive to grades and can work relentlessly to get that A. You can expect grading calculators to be used as benchmarks by CEOs to set goals for their teams.</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Have an in-house marketing team? See how well it is doing.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you leveraging SaaS right? Calculate the efficacy of your tech dollars.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How prepared are you for the LSAT exam?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How prepared am I for retirement?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How well am I managing my money?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How valuable is your current health insurance plan?</span>
														</span>
													</div>

												</div>

												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img alt="Grade Based Calculators" src="//dzvexx2x036l1.cloudfront.net/banner4-new.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img alt="Grade Based Calculators" src="//dzvexx2x036l1.cloudfront.net/banner4-new.jpg" class="box-shadow" />

												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img alt="Risk Calculators" src="//dzvexx2x036l1.cloudfront.net/banner6.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Risk calculators
													</h4>
													<p>Customers are extremely risk averse. But what if they do not understand the risks? Making them aware of their risks can create trust and form a very strong rapport.</p>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate your risk of falling behind on the digital curve.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how much you stand to lose by not leveraging Cloud.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your risk of getting a diabetes?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the risk of renting using Airbnb versus a hotel?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you at risk of severe hurricane damage?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img alt="Risk Calculators" src="//dzvexx2x036l1.cloudfront.net/banner6.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>

									<div class="usecase-category abc">
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">

												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Industry Metrics Calculators
													</h4>
													<p>Help your audience easily calculate numbers and metrics that are important to them or their industry. Metrics calculators can help build a relationship based on trust and helpfulness.</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the life time value of your average cusomter's account.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the expected revenue from a native advertisement on my blog?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is a fair premium for homeowners insurance?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the average cap rate on a home in Texas?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the average CTR on a display ad?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img alt="Industry Metrics Calculators" src="//dzvexx2x036l1.cloudfront.net/banner8-ex.jpg" class="box-shadow" />

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img alt="Industry Metrics Calculators" src="//dzvexx2x036l1.cloudfront.net/banner8-ex.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc hide" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-5 col-sm-12 section-usecase2-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Customize as
														per your
														Brand
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">trending_up</i>
															<span>Conversion </span>
														</span>
														<span class="">
															<i class="material-icons">ac_unit</i>
															<span>Engagement</span>
														</span>
														<span class="">
															<i class="material-icons">devices</i>
															<span>All screen sizes </span>
														</span>
													</div>
													<span class="">
														<span>Add your logo and brand's colors to customize the look and feel! </span>
													</span>

												</div>
												<div class="col-xs-12 col-md-7 col-sm-12 np rs-hide">
													<img alt="Customize as per your Brand" src="//dzvexx2x036l1.cloudfront.net/banner10.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show">
													<img alt="Customize as per your Brand" src="//dzvexx2x036l1.cloudfront.net/banner10.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- second tab -->
					<div role="tabpanel" class="tab-pane" id="category">
						<div class="gallery">
							<div class="gallery-header hide">
								<div class="gallery-header-center">
									<div class="gallery-header-center-left">
									</div>
								</div>
							</div>
							<div class="gallery-content">
								<div class="gallery-content-center">
									<div class="usecase-category abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide">
													<img alt="Software as a Service" src="//dzvexx2x036l1.cloudfront.net/new-collag3.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Software as a Service
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Find out how much you can save by using SaaS versus building the tool in-house.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the RoI on using an email marketing SaaS platform.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how much efficiency you stand to gain by shifting to an automated payroll solution.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the wasted spend on your current SaaS tool.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long will it take to shift from your legacy systems to a new SaaS based cloud solution?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you leveraging SaaS right? Calculate the ROI of your tech dollars.</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="//dzvexx2x036l1.cloudfront.net/new-collag3.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Marketing Agency
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how much hiring an expert consultant will save you versus running PPC in house. </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See if you can save upto $4000 monthly with our expert services.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate your potential RoI on Facebook video advertisements. </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your digital quotient?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Considering hiring an agency? Compare how cheap we are as compared to our competitors.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Have a in house marketing team? See how well it is doing.</span>
														</span>

													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img alt="Marketing Agency" src="//dzvexx2x036l1.cloudfront.net/banner7-ex.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img alt="Marketing Agency" src="//dzvexx2x036l1.cloudfront.net/banner7-ex.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img alt="Education" src="//dzvexx2x036l1.cloudfront.net/slide5-new.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Education
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the total REAL net cost of your college degree.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate your living expenditure while at college.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is a good enough score to get into Harvard with your background?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much time do you have to study to pass the BAR exam?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how your salary differs if you decide to skip college.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Find out how much you can save by studying abroad.</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="//dzvexx2x036l1.cloudfront.net/slide5-new.jpg" class="box-shadow img-res" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Healthcare & Insurance
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by using telemedicine?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by using physical therapy for my knee versus a knee replacement surgery?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much it would cost you to delay addressing your shoulder injury.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the average number of days in the hospital for an open heart surgery?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your risk of getting a heart disease?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you susceptible to Zika?</span>
														</span>
													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img alt="Healthcare & Insurance" src="//dzvexx2x036l1.cloudfront.net/banner6.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img alt="Healthcare & Insurance" src="//dzvexx2x036l1.cloudfront.net/banner6.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img alt="Construction & Real Estate" src="//dzvexx2x036l1.cloudfront.net/Construction.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Construction & Real Estate
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much land do you need to construct a 10 story office building in LA?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the risk of a large earthquake impacting your building?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you at risk of severe hurricane damage?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to build a pool?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the ROI of buying a 2 bedroom apartment in New York?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much it would cost you to rent instead of buying a home.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can you save in electricity bills by using solar panels as a roof?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take to get approved for a mortgage?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the average Loan to Value ratio for a mall in California?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img alt="Construction & Real Estate" src="//dzvexx2x036l1.cloudfront.net/Construction.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Finance
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much would I save for retirement if I started max contributions into my retirement account today?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How does my financial advisory fees compare with others?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See much it would cost to hire an financial advisor.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take to double my money? (questions here regarding where the person invests their money)</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much would it cost me to invest in an index fund?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How valuable is your current health insurance plan?</span>
														</span>
													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img alt="Finance" src="//dzvexx2x036l1.cloudfront.net/banner8-ex.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img alt="Finance" src="//dzvexx2x036l1.cloudfront.net/banner8-ex.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img alt="Travel & Hospitality" src="//dzvexx2x036l1.cloudfront.net/banner2.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Travel & Hospitality
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by staying in a hostel versus a hotel?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much it would cost to book each part of the tour separately versus with all together with a travel agency.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to go to Brazil for the Olympics?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the risk of renting using Airbnb versus a hotel?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to climb mount everest?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img alt="Travel & Hospitality" src="//dzvexx2x036l1.cloudfront.net/banner2.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Manufacturing
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by moving my manufacturing facility from the US to china?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take to fulfill an order of 5000 widgets?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to build an aluminium die?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the RoI on Outsourcing product development to China?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take for a shipment to arrive from China?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the risk that my Chinese manufacturer will delay the delivery?</span>
														</span>

													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img alt="Manufacturing" src="//dzvexx2x036l1.cloudfront.net/manufacturing.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img alt="Manufacturing" src="//dzvexx2x036l1.cloudfront.net/manufacturing.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc">
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img alt="Publishing" src="//dzvexx2x036l1.cloudfront.net/banner9-ex.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Publishing
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Is your neighborhood at risk of a terrorist attack?[Supplement to a news article about a terrorist attack]</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the probability that you will lose your job? [Supplement ot an article or video about unemployment]</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What are the chances of Donald Trump winning your state? [Supplement to a news about the elections]</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What are your chances of becoming President? [This fun calculator can go along a news piece about elections]</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the probability that you will default on your student debt? [Can go with an article about rising student debt]</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img alt="Publishing" src="//dzvexx2x036l1.cloudfront.net/banner9-ex.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- tab-section end -->
	
	<!-- Start Trial CTA-->
	<section class="section start-trial-cta mb0">
		<div class="container-fluid np">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="bg1-img">
					<a href="//app.outgrow.co" id="trialAnchor">
						<button class="btn-buildcal mk-animate-element left-to-right mk-in-viewport full-visible ripple">
							<i class="material-icons">view_compact</i>
							<p>Build Interactive Content</p>
						</button>
					</a>
					<!-- <label>No Credit Card Required</label> -->
				</div>
			</div>
		</div>
	</section>
	
	<!-- Start: Modal calcEmbed1 -->
	<div id="calcEmbed-modal1" class="modal fade calcEmbed-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="col-md-12 np">
						<iframe class="og-iframe-res" src="" data-calc="//website.outgrow.us/Which-engineering-major-is-right-for-you?vHeight=1"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End: Modal calcEmbed1 -->

	<!-- Start: Modal calcEmbed2 -->
	<div id="calcEmbed-modal2" class="modal fade calcEmbed-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="col-md-12 np">
						<iframe class="og-iframe-res" src="" data-calc="//website.outgrow.us/Cost-of-a-video-campaign-4?vHeight=1"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End: Modal calcEmbed2 -->

	<!-- Start: Modal calcEmbed3 -->
	<div id="calcEmbed-modal3" class="modal fade calcEmbed-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="col-md-12 np">
						<iframe class="og-iframe-res" src="" data-calc="//website.outgrow.us/What-is-your-risk-of-getting-a-heart-disease?vHeight=1"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End: Modal calcEmbed3 -->
@endsection

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"calendar": "{{ $page->baseUrl }}/js/pageScripts/calendar.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
		"examples": "{{ $page->baseUrl }}/js/pageScripts/example.js",
		"navbar": "{{ $page->baseUrl }}/js/pageScripts/navbar.js",
		"simplebar": "https://unpkg.com/simplebar@latest/dist/simplebar.js",

	}
@endsection