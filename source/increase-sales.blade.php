@extends('_layouts.master')

@section('title', 'Increase Online Sales | Outgrow')

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
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')

	<div class="header-logo">		
		<a href="https://outgrow.co/?utm_source=website&utm_medium=logo&utm_campaign=outgrow_sales_page" class="" target="_blank">
			<img src="{{ $page->baseUrl }}/images/lp-header-logo.png" alt="lp-header-logo image">
		</a>
	</div>

	<!-- start: landing page HTML  -->
	<section class="section section-banner section-banner-sales">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center">
				<h1 class="main-heading">Increase your Online Sales with Interactive Quizzes, Calculators and Assessments </h1>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 banner-inner">
				<div class="col-md-8 col-sm-7 col-xs-12 banner-jacket">
					<img src="{{ $page->baseUrl }}/images/lp-banner-og-builder.png" alt="lp-banner-og-builder image"> 
				</div>
				<div class="col-md-4 col-sm-5 col-xs-12 np banner-content">
					<p>“This tool was so easy to use. We've tried other calculator tools but Outgrow had a variety of templates and designs as well as the flexibility of making our own formulated results. Plus the customer support team was extremely helpful in getting our calculator perfected before launch.” </p>
					<span class="profile-detail">Katya S., Owner, Reach and Make Millions</span>
					<div class="company-detail">
						Katya’s company made over $10,000 in revenue in just a month of using an Outgrow business calculator.
					</div>
					<a href="https://app.outgrow.co/signup?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page">
						<button type="button" class="btn btn-white-new">Build Your First Interactive Experience <i class="material-icons">arrow_forward</i></button>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-second section-second-survey">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-heading">Generate More Revenue And Leads By Using Outgrow’s Sophisticated Quizzes, Calculators And Assessments. </div>
				<img class="rs-show" src="{{ $page->baseUrl }}/images/lp-section-second-img.png" alt="lp-section-second-img image">
				<ul>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Ready-to-use, customizable templates so that you don’t have to worry about design and code </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>All templates have been heavily optimize to improve conversion on both desktop and mobile </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>See record conversion rates with interactive lead generation forms </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Track visits, conversions and traffic across all channels </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Send and receive data from over 1000 apps with our powerful integrations </span> </li>
				</ul>
				<img class="rs-hide" src="{{ $page->baseUrl }}/images/lp-section-second-img.png" alt="lp-section-second-img image"> 
			</div>
		</div>
	</section>

	<section class="section section-premade-temp">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-heading text-center">Examples Of Revenue-Generating Outgrow Quizzes, Calculators Aand Assessments </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 section-premade-temp-inner">
				<!-- <div class="preloader">
					<div class="status">&nbsp;</div>
				</div> -->
				<div class="premade-template">
					<ul class="pre-temp-cat" id="calc-cats">
						<li>
							<a href="javascript:void(0)" id="Auto" onclick="shuffleCalcs('Auto')">Auto</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Education"
							   onclick="shuffleCalcs('Education')">Education</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Finance" onclick="shuffleCalcs('Finance')">Finance</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="marketing-advertising"
							   onclick="shuffleCalcs('marketing-advertising')">Marketing & Advertising</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Quintessential" onclick="shuffleCalcs('Quintessential')">Quintessential</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="construction" onclick="shuffleCalcs('construction')">Real
								Estate & Construction</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Technology"
							   onclick="shuffleCalcs('Technology')">Technology</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Entertainment" onclick="shuffleCalcs('Entertainment')">TV
								and Entertainment</a>
						</li>

					</ul>
					<div class="pre-temp-cont">
						<ul class="pre-temp-list" id="gallery-content-center">

							<li class="filter-all Auto active" id="new-car-used-car">
								<a href="javascript:void(0)" onclick="markAsActive('new-car-used-car')">
									Find out whether you should buy a used card or a new one.</a></li>
							<li class="filter-all Auto" id="buy-rent">
								<a href="javascript:void(0)" onclick="markAsActive('buy-rent')">
									Answer 6 questions to find out whether you should buy or lease your next car.</a>
							</li>
							<li class="filter-all Auto" id="auto-loan">
								<a href="javascript:void(0)" onclick="markAsActive('auto-loan')">
									Find out how much monthly installment you'll be paying on your auto loan.</a></li>
							<li class="filter-all Auto" id="early-payment">
								<a href="javascript:void(0)" onclick="markAsActive('early-payment')">
									How much extra monthly payment will you need to make to shorten your car loan
									term?</a></li>
							<li class="filter-all Auto" id="put-down">
								<a href="javascript:void(0)" onclick="markAsActive('put-down')">
									Find out the downpayment amount you'll need to purchase your new home.</a></li>
							<li class="filter-all Auto" id="type-car">
								<a href="javascript:void(0)" onclick="markAsActive('type-car')">
									Find out which car suits you the best.</a>
							</li>
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
										</p>
										<span id="premade-calc-layout">
											<strong>Layout:</strong> 
											The Londoner 
										</span>
									</h3>
									<a id="premade-preview-link" class="btn btn-red btn-hover" target="_blank" href="https://premade.outgrow.us/Auto-Loan-Calc">Preview</a>
									<a class="btn btn-red btn-hover" href="https://app.outgrow.co/signup?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page">Build your own</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-embeds">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 hide" id="liveReviews">
			<div class="container mobile-container">
				<div class="section-heading text-center">Average Rating 4.9/5. 450+ Reviews </div>
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
							<img alt="Google image" src="{{ $page->baseUrl }}/images/google_logo.png"/> 
							<img alt="Google image" src="{{ $page->baseUrl }}/images/google_hover.png" class="over over4"/> 
						</div>

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

		<!-- start static HTML of fb, capterra and g2 crowd -->
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np custom-embeds" id="staticReviews">
			<div class="container mobile-container">
				<div class="section-2-heading" style="color: rgb(34, 34, 34);">
					Critically Acclaimed
				</div>			

				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#fb-tab"></a></li>
					<li><a data-toggle="tab" href="#capterra-tab"></a></li>
					<li><a data-toggle="tab" href="#g2crowd-tab"></a></li>
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
												<img alt="Facebook logo image" src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg-dapo.png">
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
												<img alt="Facebook logo image" src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg-jona.png">
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
												<img alt="Facebook logo image" src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg-va.png">
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
												<img alt="Facebook logo image" src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg-bryce.png">
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
												<img alt="Facebook logo image" src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg-rachel.png">
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
												<img alt="Facebook logo image" src="images/testimonial-fb-mini.png">
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
												<!-- <img alt="G2 Crowd logo image" src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="images/testimonial-userImg1.jpg"> -->
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
												<!-- <img alt="G2 Crowd logo image" src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="images/testimonial-userImg1.jpg"> -->
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
												<!-- <img alt="G2 Crowd logo image" src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="images/testimonial-userImg1.jpg"> -->
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
												<!-- <img alt="G2Crowd logo image" src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg-ed.png"> 
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
												<!-- <img alt="G2 Crowd logo image" src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="images/testimonial-userImg1.jpg">  -->
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
												<!-- <img alt="G2 Crowd logo image" src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="images/testimonial-userImg1.jpg">  -->
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
												<img alt="G2Crwod logo image" src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg1.jpg">
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
												<img alt="G2Crowd logo image" src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg2.jpg">
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
												<img alt="G2 Crowd logo image" src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg3.jpg">
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
												<img alt="G2 Crowd logo image" src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg4.jpg">
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
												<img alt="G2 Crowd logo image" src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg5.jpg">
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
												<img alt="G2 Crowd logo image" src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="images/testimonial-userImg6.jpg">
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

            var head = document.querySelector('head');
            head.appendChild(gridJS);

            window.onload = function () {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function () {
                    if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                        window.calcs = JSON.parse(xmlHttp.responseText).data;
                        setPremade();
                        shuffleCalcs('Auto');
                    }
                }
                xmlHttp.open("GET", 'https://outgrow-api.herokuapp.com/api/v1/admin/getPreMadeTemp/conversion-landing', true);
                xmlHttp.send(null);
            }
		</script>

	</section>

	<section class="section section-bg-btn">
		<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
			<a href="https://app.outgrow.co/signup?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" class="params trialLOL">
				<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn btn-white-new">Start your journey to more sales with Outgrow <i class="material-icons">arrow_forward</i></button>
			</a>
		</div>		
	</section>

	<section class="section section-six section-six-survey">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-10 col-sm-10 col-xs-12">
					<div class="section-heading">Guide: Generate a New Revenue Stream with Interactive Content Marketing </div>
					<img class="rs-show" src="{{ $page->baseUrl }}/images/lp-section-six-img_increase-sales.png" alt="lp-section-six-img_increase-sales image"> 
					<ul>
						<li><i class="material-icons">keyboard_arrow_right</i> <span>Why Agencies Should Offer Interactive Content. </span> </li>
						<li><i class="material-icons">keyboard_arrow_right</i> <span>How Companies like New York Times and Buzzfeed are Crushing it with Interactive Content. </span> </li>
						<li><i class="material-icons">keyboard_arrow_right</i> <span>How to Pitch Interactive Content Marketing to Clients with Ready-to-Use Sales Email Templates, Case Studies, Decks & More. </span></li>
					</ul>
					<a href="https://get.outgrow.co/interactive-content-marketing-for-digital-agencies/?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" class="">
						<button class="btn btn-red-new">Learn More <i class="material-icons">arrow_forward</i></button>
					</a>
				</div>
				<img class="rs-hide" src="{{ $page->baseUrl }}/images/lp-section-six-img_increase-sales.png" alt="lp-section-six-img_increase-sales image"> 
			</div>
		</div>
	</section>

	<section class="section section-reading">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="section-heading text-center">Related Reading </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="{{ $page->baseUrl }}/images/lp-reading1_increase-sales.png" alt="lp-reading1_increase-sales image"> 
					</div>
					<div class="col-md-12 np reading-content">
						<h4>5 Signs You’re Being Too ‘Salesy’ and How to Sell Better </h4>
						<p>As a salesperson, you may not realize when you cross the thin line between selling and pushing your product/service into the prospect’s face. This post talks about how to avoid being too salesy </p>
						<a href="https://outgrow.co/blog/how-to-sell-better/?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="{{ $page->baseUrl }}/images/lp-reading2_increase_sales.png" alt="lp-reading2_increase-sales image"> 
					</div>
					<div class="col-md-12 np reading-content">
						<h4>Value Based Selling: How to Sell by Not Selling </h4>
						<p>How do you inform a prospect about your product, gauge their interest, and finally close the sale, if not through the traditional sales pitch? Find out how </p>
						<a href="https://outgrow.co/blog/value-based-selling/?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="{{ $page->baseUrl }}/images/lp-reading3_increase_sales.png" alt="lp-reading3_increase-sales image"> 
					</div>
					<div class="col-md-12 np reading-content">
						<h4>[Case Study] How Macroscape Helped Its Client Get a 36% Conversion Rate </h4>
						<p>Find out how a marketing consulting firm helped one of its clients clock 36% conversion rate using a quiz </p>
						<a href="https://outgrow.co/blog/macroscape-interactive-marketing-success-story?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-quotes section-quotes_increase-sales">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 np section-quotes-border">
				<blockquote>If you are currently generating leads using other products, you will see a slight dip in the volume of leads you gain but, a significantly higher yield in the quality of the leads. All in all, you would much rather call 10 and make 8 sales rather than calling 100 to make the same 8 sales. It's a winner. </blockquote>
				<span>- Charles Dohs, Marketing Coordinator - Digital, Commerce Home Mortgage </span>
			</div>
		</div>
	</section>

	<section class="section section-btn">
		<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
			<span>Plans start at $25 per month. No credit card required. </span>
			<a href="https://app.outgrow.co/signup?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" class="params trialLOL">
				<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn btn-red-new">Start your Free Trial! <i class="material-icons">arrow_forward</i></button>
			</a>
		</div>		
	</section>

	<!-- end: landing page HTML  -->

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
