@extends('_layouts.lp')

@section('title', 'Outgrow Chatbots | Outgrow')

@section('metaDescription')
	<meta name="description" content="Increase your online sales with interactive quizzes, calculators and assessments. Build your first interactive experience. Start your free trial."/>
	<link rel="canonical" href="http://outgrow.co/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Interactive Calculators | Outgrow" />
	<meta property="og:description" content="Increase your online sales with interactive quizzes, calculators and assessments. Build your first interactive experience. Start your free trial." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Increase your online sales with interactive quizzes, calculators and assessments. Build your first interactive experience. Start your free trial." />
	<meta name="twitter:title" content="Interactive Calculators | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/custom-sa.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/navbar.css">
	<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />

	<link href="https://dyv6f9ner1ir9.cloudfront.net/assets/css/shared/chat.css" rel="stylesheet"><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><a href="javascript:void(0);" style="background-color: #Fb5f66" class="bot-circle right" id="bot-circle" onclick="ogAnimationInit()"><div class="bot-circle-icon-open"><i style="color: #ffffff" class="material-icons">chat</i></div><div class="bot-circle-icon-close"><i style="color: #ffffff" class="material-icons">close</i></div><div class="og-chat-tooltip"><p>Talk to an Outgrow Chatbot</p></div></a><div class="og-chat-box-outer"><div class="og-chat-box no-animation" id="og-chat-box"><div class="og-chat-box-top" style="background-color: #Fb5f66"><a href="javascript:void(0);" class="bot-circle-mobile" id="bot-circle-mobile" onclick="ogAnimationClose()"><div class="bot-circle-icon-close"><i style="color: #ffffff" class="material-icons">close</i></div></a></div><iframe src="https://influencers.outgrow.us/5c91ffff550bfd5005e995d0" width="100%" height="100%"></iframe></div></div><script src="https://dyv6f9ner1ir9.cloudfront.net/assets/js/chat.js"></script>
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')

<section class="section intercom ">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center inter1">
			   <h1 class="chatbot-heading bot-head"> Turn Every Website Visitor Into A Lead With Chatbots</h1>

		  </div>

		  <!-- <div class="chatbots-image-section">
           <div class="bots-inner">
		   <img src="/images/chatbot-11.png" class="first" alt="">
		   <div class="animated-img-outer">
		   <img src="/images/robo_small.gif" class="second" alt="">
		   <div class="shadow"></div>
		</div>
		   
		   </div> -->

		   <div class="sec-w-img">
		   <img src="/images/chatbot-11.png" class="first" alt="">
		   <div class="img-outer">
		   <img src="/images/robo_small.gif" class="second" alt="">
		   <div class="shadow"></div>
			</div>

		   </div>
 

		  </div>
		 
		  <div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer inter-bot">
		  <div class="interbot-content">
			<i class="material-icons">email</i>
			<input class="lead-form-email-1" name="emailId" type="email" placeholder="Please enter your email address">
			<span class="lead-form-btn">
				<a href="//app.outgrow.co/signup/?email=" class="lead-email-1 btn-buildcal">
				Try Chatbots for free
				</a>

					<script src="{{ $page->baseUrl }}/js/pageScripts/index.js"></script>
					<script src="{{ $page->baseUrl }}/js/pageScripts/lead-form.js"></script>
				<script>
				document.getElementsByClassName('lead-form-email-1')[0].onchange = function (e) {
							let email = e.target.value;
							let href = "//app.outgrow.co/?email=";
							document.getElementsByClassName('lead-email-1')[0].href = href + email;
						}
			document.getElementsByClassName('lead-form-email-1')[0].onkeypress = function (e) {
							let email = e.target.value;
							let href = "//app.outgrow.co/?email=";
							if (e.keyCode == 13) {
								window.location.href = href+email;
							}
						}
					</script>
			</span>
		
		
		</div>
		</div>
</div>
</section>
<section class="section sec-chatbot section-premade-temp">
		<div class="container-fluid">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-heading text-center">Examples Of <span class="intercom-chatbot">Chatbots</span> You Can Make With Outgrow </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 section-premade-temp-inner">
				<div id="premade-loader-new" class="preloader">
					<div class="white-wrapper">
						<div class="status">&nbsp;</div>
					</div>
				</div>
				<div class="premade-template-new hide">
					<div class="search-input">
						<!-- <h4>Select Your Industry</h4> -->
						<div class="input-group">
							<i class="material-icons">search</i>
							<input type="text" name="search" id="search-experience" oninput="filterList()" onkeyup = "searchList(event)" placeholder="Search Experiences by Keyword">
						</div>
						<div class="no-search hide">
							<i class="material-icons">error</i> You can see some generic examples below and you can reach out to us <a href="javascript:void(0);" id="intercom_trigger" class="intercom_trigger">here</a> for more specific examples or any other questions. 
						</div>
					</div>
					<div class="premade-template-left">

						<ul class="pre-temp-cat pre-temp-cat-new" id="calc-cats">
							{{-- <li class="active">
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
								<a href="javascript:void(0)" id="Funnels" onclick="shuffleCalcs('Funnels')">
								Funnels
								</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Trending" onclick="shuffleCalcs('Trending')">
								Trending
								</a>
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
							</li> --}}
						</ul>
						<div class="form-group col-xs-12 np">
							<div class="selectize selectize-wrapper">
								<select id="select-list" placeholder="Select List">
									<option value="Auto">Auto</option>
									<option value="Education">Education</option>
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
</section>

<section class="section sec-chatbot section-whyMerticsAwesome">
		<div class="container">
			<div class="section-2-heading bot-head">Why Chatbots? </div>	
			<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner">
				<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner-row">
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-left">
						<img src="{{ $page->baseUrl }}/images/chatbot-1.png" alt="Unlike Ads, Calculators Add Real Value">
						
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 np whyMerticsAwesome-inner-right">
						<h3 class="section-subheading bot-heading">Make communicating <b>Fun</b> and <b>Seamless </b> </h3>
						<div class="intercom-para-content"><p class="intercom-para">With chatbots, be available 24/7 to your users and visitors. Now, your sales and customer service teams can focus on more complex tasks while the chatbot guides people down the funnel.</p></div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner-row">
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-right rs-show">
						<img src="{{ $page->baseUrl }}/images/chatbot-2.png" alt="Calculators Bring New Traffic">
						
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 np whyMerticsAwesome-inner-left ">
						<h3 class="section-subheading bot-heading">Generate and qualify Leads Easily so you can <b>Sell Better</b> </h3>
						<div class="intercom-para-content"><p class="intercom-para">Capture your visitors’ lead info and ask them followup questions like "How many people work at your company?" to help your sales team get more info about the prospect.</p></div>
					</div>

					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-right rs-hide">
						<img src="{{ $page->baseUrl }}/images/chatbot-2.png" alt="Calculators Bring New Traffic">
						
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner-row">
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-left">
						<img src="{{ $page->baseUrl }}/images/chatbot-3.png" alt="Calculators Increase Engagement & Conversion">
						
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 np whyMerticsAwesome-inner-right">
						<h3 class="section-subheading bot-heading">Segment and Analyze your <b>Chatbot Data </b> to <b>Gain Visitors Insights</b> </h3>
						<div class="intercom-para-content"><p class="intercom-para"> Build your visitors’ persona and find key patterns by analyzing and segmenting chatbot data by demographics, user responses etc.</p></div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner-row">
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-right rs-show">
						<img src="{{ $page->baseUrl }}/images/chatbot-4.png" alt="Audience Segmentation and Targeted Sales">
					
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 np whyMerticsAwesome-inner-left ">
						<h3 class="section-subheading bot-heading">Plug the Chatbot into your Business Workflow with <b>1000+ integrations</b> </h3>
						<div class="intercom-para-content"><p class="intercom-para">Take your business to the next level by integrating the chatbot with your sales, marketing and service tools.</p></div>
					</div>
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-right rs-hide">
						<img src="{{ $page->baseUrl }}/images/chatbot-4.png" alt="Audience Segmentation and Targeted Sales">
						
					</div>
				</div>
			</div>
		</div>
	</section>

<section class="section sec-chatbot intercom ns">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center inter1">
			   <h1 class="chatbot-heading">Turn Every Website Visitor Into A Lead With Chatbots</h1>

		  </div>
		 
		  <div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer inter-bot">
		  <div class="interbot-content">
			<i class="material-icons">email</i>
			<input class="lead-form-email-2" name="emailId" type="email" placeholder="Please enter your email address">
			<span class="lead-form-btn">
				<a href="//app.outgrow.co/signup/?email=" class="lead-email-2 btn-buildcal">
					Try Chatbots for free
				</a>
				<script src="{{ $page->baseUrl }}/js/pageScripts/index.js"></script>
					<script src="{{ $page->baseUrl }}/js/pageScripts/lead-form.js"></script>
				<script>
				document.getElementsByClassName('lead-form-email-2')[0].onchange = function (e) {
							let email = e.target.value;
							let href = "//app.outgrow.co/?email=";
							document.getElementsByClassName('lead-email-2')[0].href = href + email;
						}
			document.getElementsByClassName('lead-form-email-2')[0].onkeypress = function (e) {
							let email = e.target.value;
							let href = "//app.outgrow.co/?email=";
							if (e.keyCode == 13) {
								window.location.href = href+email;
							}
						}
					</script>
			</span>
		
		
		</div>
		</div>
   </div>
</section>
<section class="section sec-chatbot section-reading">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="section-heading text-center">Learn More About Chatbots </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
			  <div class="chatbot-readingsec-row">
				 <div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
				 <a href="https://outgrow.co/blog/vital-chatbot-statistics" target="_blank">
					 <div class="img-scaler chatbot-img">
						<img src="/images/chatbot-5.png" alt="5 Signs You’re Being Too ‘Salesy"> 
					</div>
					 </a>
					<div class="col-md-12 np reading-content">
						<h4>21 Vital Chatbot Statics </h4>
						<p>The growing need for quick, easy and effective result has resulted in you guessed it the rise of chatbots. Here are 21 Vital Chatbot Statistics that will  give </p>
						<a href="https://outgrow.co/blog/vital-chatbot-statistics" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
				<a href="https://outgrow.co/blog/best-practices-for-chatbots" target="_blank">
					<div class="img-scaler chatbot-img">
						<img src="/images/chatbot-6.png" alt="Value Based Selling"> 
					</div>
					</a>
					<div class="col-md-12 np reading-content">
						<h4>6 Best practices for Chatbots</h4>
						<p>Looking to optimize your chatbots for best results? What better place to start than to read up on all the best practices for chatbots! </p>
						<a href="https://outgrow.co/blog/best-practices-for-chatbots" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
				<a href="https://outgrow.co/blog/best-website-chatbot-examples" target="_blank">
					<div class="img-scaler chatbot-img">
						<img src="/images/chatbot-7.png" alt="How Macroscape Helped Its Client get a 36% Conversion Rate"> 
					</div>
					</a>
					<div class="col-md-12 np reading-content">
						<h4>6 Best Website Chatbot Examples </h4>
						<p>Chatbots are the present and future of digital marketing. If you still haven't made a chatbot or looking to improve one here's some inspiration. </p>
						<a href="https://outgrow.co/blog/best-website-chatbot-examples" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				</div>
				<div class="chatbot-readingsec-row">
			 	    <div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler chatbot-img"  data-toggle="modal" data-target="#myModal">
						<img src="https://i.ytimg.com/vi/R9RPhj2aue8/hqdefault.jpg" alt=""> 
						<button class="ytp-large-play-button ytp-button" aria-label="Play"><svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#fb5f66" 
						 
						></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg></button>
						<!-- fill-opacity="0.8" -->
					</div>
			

					<div class="col-md-12 np reading-content">
						<h4>Video Tutorial: How to Make a Chatbot on Outgrow</h4>
						<p>In this video we take a look at how you can make (and embed) a chatbot for the pricing page of your website.</p>
						<a href="https://www.youtube.com/watch?v=R9RPhj2aue8" target="_blank" class="btn btn-readmore-link">Watch video <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
				<a href=" https://outgrow.co/blog/create-feedback-chatbots" target="_blank">
					<div class="img-scaler chatbot-img">
						<img src="/images/chatbot-9.png" alt="How Macroscape Helped Its Client get a 36% Conversion Rate"> 
					</div>
					</a>
					<div class="col-md-12 np reading-content">
						<h4>How to Create Feedback Chatbots on Outgrow </h4>
						<p>In order to stay on trend with the latest marketing developments as well as create a survey that is fun and easy to </p>
						<a href=" https://outgrow.co/blog/create-feedback-chatbots" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
				<a href="https://outgrow.co/blog/create-service-chatbots" target="_blank">
					<div class="img-scaler chatbot-img">
						<img src="/images/chatbot-10.png" alt="How Macroscape Helped Its Client get a 36% Conversion Rate"> 
					</div>
					</a>
					<div class="col-md-12 np reading-content">
						<h4>How to Create Service Chatbots on Outgrow </h4>
						<p>A service Chatbot can resolve your leads queries instantly in comparison to human client support. result:Higher </p>
						<a href="https://outgrow.co/blog/create-service-chatbots" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section sec-chatbot sec-clients-logos">
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
	<section class="section sec-chatbot section-reviews">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 intercom-chat" id="liveReviews">
			<div class="container mobile-container">
				<div class="section-2-heading chatbot-red" style="color: rgb(34, 34, 34);">
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
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np custom-embeds intercom-chat hide" id="staticReviews">
			<div class="container mobile-container">
				<div class="section-2-heading  chatbot-red" style="color: rgb(34, 34, 34);">
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
	<section class="section sec-chatbot intercom ns inter3">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center inter1">
			   <h1 class="chatbot-heading">Try Outgrow Chatbots To Turn Your Website Into a Lead Generating And Feedback Collecting Machine</h1>

		  </div>
		 
		  <div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer inter-bot">
		  <div class="interbot-content">
			<i class="material-icons">email</i>
			<input class="lead-form-email-3" name="emailId" type="email" placeholder="Please enter your email address">
			<span class="lead-form-btn">
				<a href="//app.outgrow.co/signup/?email=" class="lead-email-3 btn-buildcal">
				Try Chatbots for free
				</a>
				<script src="{{ $page->baseUrl }}/js/pageScripts/index.js"></script>
					<script src="{{ $page->baseUrl }}/js/pageScripts/lead-form.js"></script>
				<script>
				document.getElementsByClassName('lead-form-email-3')[0].onchange = function (e) {
							let email = e.target.value;
							let href = "//app.outgrow.co/?email=";
							document.getElementsByClassName('lead-email-3')[0].href = href + email;
						}
			document.getElementsByClassName('lead-form-email-3')[0].onkeypress = function (e) {
							let email = e.target.value;
							let href = "//app.outgrow.co/?email=";
							if (e.keyCode == 13) {
								window.location.href = href+email;
							}
						}
					</script>
			</span>
		
		
		</div>
		</div>
</div>
</section>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog  modal-lg mdl-log">
    <button class="close close-position" onclick="stopVideo()" data-dismiss="modal" type="button"><i class="material-icons">close</i></button>
			<!-- Modal content-->
	
      <div class="modal-content">
     
        <div class="modal-body modal-ng" >
				<div id="player"></div>

    <script>
      // This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      // This function creates an <iframe> (and YouTube player) after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '450',
          width: '100%',
					videoId: 'R9RPhj2aue8',
					playerVars: { 'controls': 1, rel: 0 , 'start':0},
          events: {
            'onClick': onPlayerReady,
            'onStateChange': onPlayerStateChange
					}
					
        });
      }
      // The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        player.playVideo();
      }

      // The API calls this function when the player's state changes.
      // The function indicates that when playing a video (state=1),
      // the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          // setTimeout(stopVideo, 0);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
				<!-- <iframe id="yt-player" class="youtube-video" allowfullscreen="1" allowtransparency="true" title="YouTube video player"
				 src="https://www.youtube.com/embed/R9RPhj2aue8?enablejsapi=1&rel=0&playerapiid=ytplayer" width="100%" height="450" frameborder="0"></iframe>
				 -->
				
        </div>
       
      </div>
      
    </div>
  </div>

<script>
// hiding intercom
var intercomVal=setInterval(() => {
	if(document.getElementById('intercom-container')){
		console.log("00000000000000000000");
	document.getElementById('intercom-container').classList.add("hide");
	clearInterval(intercomVal);
	}
}, 0);
setInterval(() => {
	var cookieSection = document.querySelector('.section.sec-cookies');
	if (!cookieSection.classList.contains('hide')) {
	if(document.getElementById('bot-circle')){
		document.getElementById('bot-circle').classList.add("with-bar");	
		document.querySelector('.og-chat-box-outer').classList.add("with-bar-new");
	}
	}else{
		if(document.getElementById('bot-circle')){
		document.getElementById('bot-circle').classList.remove("with-bar");	
		document.querySelector('.og-chat-box-outer').classList.remove("with-bar-new");
	}
	}
}, 0);

// intercom hiding ends
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
						let res = JSON.parse(http.responseText);
						window.calcs = res.data.calculators;
						// window.calcs.forEach(element => {
						// 	console.log("--",element.type);
						// });
						window.calcs = window.calcs.filter(calc=>calc.type === 'Chatbot')
						window.industries = res.data.industries;
						getExistingIndustries();
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
							calc['type'] = getCalcType(calc['type']);
						});
						jQuery('.preloader').addClass('hide');
						jQuery('.premade-template-new').removeClass('hide')
						setPremade();
						let $select = jQuery("#select-list").selectize();
						let selectize = $select[0].selectize;
						selectize.setValue('Quintessential');
						shuffleCalcs('Quintessential');
					}
				};
				http.send();
			}
			let navgetinspired = document.getElementById('nav-get-inspired');
		navgetinspired.classList.add("active")
			
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
			</script>
	@endsection
		
@section('inlinescripts')
@endsection

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"index": "{{ $page->baseUrl }}/js/pageScripts/index.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
		"navbar": "{{ $page->baseUrl }}/js/pageScripts/navbar.js",
		"simplebar": "https://unpkg.com/simplebar@latest/dist/simplebar.js",
	}
@endsection
