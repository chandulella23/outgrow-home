@extends('_layouts.master')

@section('title', 'Case Studies | Outgrow')

@section('metaDescription')
	<meta name="description" content="Because Customers want to be helped. Not Sold To."/>
	<link rel="canonical" href="http://outgrow.co/why_calculators.html" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Why Calculators? | Outgrow" />
	<meta property="og:description" content="Because Customers want to be helped. Not Sold To." />
	<meta property="og:url" content="https://outgrow.co/why_calculators.html" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Because Customers want to be helped. Not Sold To." />
	<meta name="twitter:title" content="Why Calculators? | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
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

	<div class="section-case-study-main">
		<section class="section section-page-heading">
			<div class="container-fluid">
				<h3>Case Studies</h3>
				<h5 class="section-2-subheading">Success stories of companies using Outgrow to grow their business </h5>
			</div>
		</section>
		<section class="section section-case-study">
			<div class="container case-study-tabs-container">
				<div class="col-md-12 col-sm-12 col-xs-12 np">
					<ul class="nav nav-pills">
						<li class="col-md-4 col-sm-4 col-xs-12 np case-study-tabs active">
							<a class="" data-toggle="pill" href="#tag">
								<img src="{{ $page->baseUrl }}/images/case_study_tag.png" alt="TAG Livros">
								<span>Case Study 1</span>
							</a>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-12 np case-study-tabs">
							<a class="" data-toggle="pill" href="#getPaid">
								<img src="{{ $page->baseUrl }}/images/case_study_get_paid1.png" alt="Get Paid For Your Pad">
								<span>Case Study 2</span>
							</a>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-12 np case-study-tabs">
							<a class=""  data-toggle="pill" href="#vp">
								<img src="{{ $page->baseUrl }}/images/case_study_vp1.png" alt="VenturePact">
								<span>Case Study 3</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<div class="tab-content">
			<div id="tag" class="tab-pane fade in active">
				<section class="section section-counter">
					<div class="container">
						<div class="section-2-heading">TAG Livros Generates 55K + Leads Using <br/>Interactive Experiences </div>
						<div class="col-md-12 col-sm-12 col-xs-12 np section-counter-inner">
							<div class="col-md-4 col-sm-4 col-xs-4 np text-center">
								<div class="counter counter-lined">55</div>
								<span>k</span>
								<span>Leads</span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 np text-center">
								<div class="counter counter-lined">196</div>
								<span>k</span>
								<span>Visits</span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 np text-center">
								<div class="counter counter-lined">28</div>
								<span>%</span>
								<span>Conversion Rate</span>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-companyInfo">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np companyInfo-table">
							<div class="col-md-6 col-sm-6 col-xs-12 np companyInfo-table-cell">
								<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_companyinfo.jpg" alt="TAG Livros Company">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 np companyInfo-table-cell">
								<h4>Company</h4>
								<p>TAG Livros is a book signing club which delivers a literary kit to all its members every month. </p>
								<h4>Background</h4>
								<p>Team TAG had been exploring ways to generate more leads and engage them better. However, just like any digital startup, they had a lean budget. Clearly, they needed a lead generation solution that not only had a higher ROI compared to standard inbound techniques, but was also cost effective. </p>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-experimenting">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<div class="section-2-heading">Experimenting With Interactive Content </div>
							<span class="section-subtitle">The TAG Livros team built an interactive quiz that would tell people about the best selling book from the year they were born - an interesting concept that would encourge people to engage with the quiz! </span>
							<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_experimenting.jpg" alt="Experimenting With Interactive Content">
						</div>
					</div>
				</section>
				<section class="section section-howOutgrowHelped">
					<div class="container">
						<div class="section-2-heading">How Outgrow Helped </div>
						<div class="col-md-12 col-sm-12 col-xs-12 np section-howOutgrowHelped-inner">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped1.png" alt="No Coding Required">
								<h5>No Coding Required </h5>
								<p>The team built an intutive quiz using Outgrow’s interactive pre-built templates. Thus, they did not have to write a single line of code, which reduced the development cost. </p>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped2.png" alt="High Completion Rate, More Shares">
								<h5>High Completion Rate, More Shares </h5>
								<p>The quiz had a simple landing page, and a single question, which could be answered using a drop down. This format increased their completion rate and their share rate. </p>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped3.png" alt="More Leads, Improved Conversions">
								<h5>More Leads, Improved Conversions </h5>
								<p>The quiz TAG built was interactive, engaged users, and provided instant gratification. Since it was about best-selling books, it was share-worthy. </p>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center img-wrapper">
							<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped4.jpg" alt="">
							<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped5.jpg" alt="">
							<button type="button" class="btn btn-red">Create your First Interactive Experience </button>
						</div>
					</div>
				</section>
				<section class="section section-companyReviews">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<blockquote>
								<span class="quote-left"></span>
									Outgrow’s well designed templates, allowed us to quickly build and launch experiences without writing a line of code. Their personalization features like logic jump and conditional call to actions helped us personalize the results for our users. 
								<span class="quote-right"></span>
							</blockquote>
							<span>Luise Spieweck Fialho <br/>Founder at TAG Livros </span>
						</div>
					</div>
				</section>
				<section class="section section-results">
					<div class="container">
						<div class="section-2-heading">Results </div>
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<p>
							Within a month, this quiz generated more than <b>72K visits, 23K leads, and 5K engagements. </b><br/><br/>
							The TAG Livros quiz engaged and entertained their audience and thus was a huge hit on social media. They posted on their Facebook page and ran targeted Facebook Ads.<br/>
							<b>You will see one of their Facebook posts below, which generated over 900 likes/reactions and over 120 shares. </b> <br/><br/>
							<b>Overall, they generated more than 55K leads and 196K visits in traffic.</b> And the interactive experience became a huge hit!
							</p>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center img-wrapper">
							<img class="" src="{{ $page->baseUrl }}/images/case_study_result1.jpg" alt="Result img">
							<img class="" src="{{ $page->baseUrl }}/images/case_study_result2.jpg" alt="Result img">
						</div>
					</div>
				</section>
				<section class="section section-whatsNext">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<div class="section-2-heading">What’s Next? </div>
							<span class="section-subtitle">Their initial successes have convinced TAG Livros to make interactive content an integral part of their marketing strategy. The team has created 11 experiences on Outgrow in their first month alone! </span>
						</div>
					</div>
				</section>
				<section class="section section-companyReviews section-white">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<blockquote>
								<span class="quote-left"></span>
									I would strongly recommend Outgrow to any digital marketer looking to generate more qualified leads - we generated over 55K leads in a month through the Outgrow platform!
								<span class="quote-right"></span>
							</blockquote>
						</div>
					</div>
				</section>
				<section class="section section-button">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<span>Free Trial. No credit card required!</span>
							<button type="button" class="btn btn-red">Generate leads with Outgrow </button>
						</div>
					</div>
				</section>
			</div>
			
			<div id="getPaid" class="tab-pane fade">
				<section class="section section-counter">
					<div class="container">
						<div class="section-2-heading">Get Paid for Your Pad (GBYP) Scored a Stellar 41% Conversion Rate with an Interactive Calculator! </div>
						<div class="col-md-12 col-sm-12 col-xs-12 np section-counter-inner">
							<div class="col-md-4 col-sm-4 col-xs-4 np text-center">
								<div class="counter counter-lined"><span data-from="1" data-to="60" data-refresh-interval="100" data-speed="2000">60</span>%</div>
								<span>Completion Rate</span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 np text-center">
								<div class="counter counter-lined"><span data-from="1" data-to="800" data-refresh-interval="100" data-speed="2000">800</span>+</div>
								<span>Conversions</span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 np text-center">
								<div class="counter counter-lined"><span data-from="1" data-to="41" data-refresh-interval="100" data-speed="2000">41</span>%</div>
								<span>Conversion Rate</span>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-companyInfo">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np companyInfo-table">
							<div class="col-md-6 col-sm-6 col-xs-12 np companyInfo-table-cell">
								<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_companyinfo.jpg" alt="TAG Livros Company">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 np companyInfo-table-cell">
								<h4>Company</h4>
								<p>Get Paid for Your Pad (GPYP) helps property owners become expert AirBnB hosts so they can maximize their returns. </p>
								<h4>Background</h4>
								<p>Jasper Ribbers, founder of GPYP, relied on paid search and some Facebook advertising to drive traffic to a lead generation form on his website. However, he was looking for something more interactive than a form. Something that would not only inspire customers but also provide insight into the host’s AirBnB profile, so he can customize his follow up emails to make them more relevant to his prospects. </p>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-experimenting">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<div class="section-2-heading">Creating an Interactive Assessment </div>
							<span class="section-subtitle">GPYP built an assessment that would help people understand how well their AirBnB listing is performing. Since their audience was mostly AirBnB hosts, this assessment was sure to lead to a lot of conversions. </span>
							<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_experimenting.jpg" alt="Experimenting With Interactive Content">
						</div>
					</div>
				</section>
				<section class="section section-howOutgrowHelped">
					<div class="container">
						<div class="section-2-heading">How Outgrow Helped </div>
						<div class="col-md-12 col-sm-12 col-xs-12 np section-howOutgrowHelped-inner">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped1.png" alt="Beautiful Templates and Codeless Editor">
								<h5>Beautiful Templates and Codeless Editor </h5>
								<p>Outgrow’s interactive content platform offered customizable, pre-built templates that let GPYP build the assessment in just a couple of hours without hiring expensive designers and developers. </p>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped2.png" alt="Multiple Question Types">
								<h5>Multiple Question Types </h5>
								<p>All the 9 questions in the assessment could be answered without typing anything on a keyboard, using multiple choice, dropdowns, and sliders. This meant that the majority of people who started the assessment actually finished it. </p>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped3.png" alt="Optimal Lead Generation">
								<h5>Optimal Lead Generation </h5>
								<p>The assessment had a form just before the results page. Thus, people had to fill the form to see their results. This led to a 40% conversion rate. In comparison, the previous form had never witnessed a double digit conversion rate! </p>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center img-wrapper">
							<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped4.jpg" alt="">
							<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped5.jpg" alt="">
							<button type="button" class="btn btn-red">Create your First Interactive Experience </button>
						</div>
					</div>
				</section>
				<section class="section section-companyReviews">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<blockquote>
								<span class="quote-left"></span>
									Outgrow was the perfect solution for what I was looking for
								<span class="quote-right"></span>
							</blockquote>
							<span>Jasper Ribbers <br/>Founder at Get Paid for Your Pad </span>
						</div>
					</div>
				</section>
				<section class="section section-results">
					<div class="container">
						<div class="section-2-heading">Results </div>
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<p>
							The assessment had a 60% completion rate i.e. the percentage of people who started the quiz and reached the last page.<br/><br/>
							GPYP ended up getting 800+ conversions at a 41% conversion rate.
							</p>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center img-wrapper">
							<img class="" src="{{ $page->baseUrl }}/images/case_study_result1.jpg" alt="Result img">
							<img class="" src="{{ $page->baseUrl }}/images/case_study_result2.jpg" alt="Result img">
						</div>
					</div>
				</section>
				<section class="section section-whatsNext">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<div class="section-2-heading">What’s Next? </div>
							<span class="section-subtitle">Currently, Jasper and his team at GPYP are working on creating three more experiences with Outgrow. </span>
						</div>
					</div>
				</section>
				<section class="section section-companyReviews section-white">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<blockquote>
								<span class="quote-left"></span>
									I would strongly recommend Outgrow to any digital marketer looking to generate more qualified leads - we generated over 55K leads in a month through the Outgrow platform!
								<span class="quote-right"></span>
							</blockquote>
						</div>
					</div>
				</section>
				<section class="section section-button">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<span>Free Trial. No credit card required!</span>
							<button type="button" class="btn btn-red">Generate leads with Outgrow </button>
						</div>
					</div>
				</section>
			</div>
			<div id="vp" class="tab-pane fade">
				<section class="section section-counter">
					<div class="container">
						<div class="section-2-heading">Venturepact Generated 11,592 Qualified Leads Using an <br/>Interactive Calculator </div>
						<div class="col-md-12 col-sm-12 col-xs-12 np section-counter-inner">
							<div class="col-md-4 col-sm-4 col-xs-4 np text-center">
								<div class="counter counter-lined"><span data-from="1" data-to="11,592" data-refresh-interval="100" data-speed="2000">11,592</span></div>
								<span>Leads</span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 np text-center">
								<div class="counter counter-lined"><span data-from="1" data-to="28" data-refresh-interval="100" data-speed="2000">28</span>%</div>
								<span>Conversions</span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 np text-center">
								<div class="counter counter-lined"><span data-from="1" data-to="15" data-refresh-interval="100" data-speed="2000">15</span>%</div>
								<span>Traffic</span>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-companyInfo">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np companyInfo-table">
							<div class="col-md-6 col-sm-6 col-xs-12 np companyInfo-table-cell">
								<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_companyinfo.jpg" alt="TAG Livros Company">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 np companyInfo-table-cell">
								<h4>Company</h4>
								<p>VenturePact is a software development marketplace which helps businesses find & engage developers & designers. </p>
								<h4>Background</h4>
								<p>The marketing team at VenturePact carefully crafted an inbound strategy that included blogs, ebooks, search engine optimization and social media, closely tied together. Although these tactics resulted in an increase in engagement over time, but the results were not enough to help them maintain a high growth rate. They clearly had to reinvent their marketing. </p>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-experimenting">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<div class="section-2-heading">Building an Interactive Calculator </div>
							<span class="section-subtitle">VenturePact built a mobile app calculator where a prospective customer could answer 8 questions about their app and get a cost estimate instantly. This calculator was interactive, could capture attention, and provide instant gratification. </span>
							<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_experimenting.jpg" alt="Experimenting With Interactive Content">
						</div>
					</div>
				</section>
				<section class="section section-howOutgrowHelped">
					<div class="container">
						<div class="section-2-heading">How Outgrow Helped </div>
						<div class="col-md-12 col-sm-12 col-xs-12 np section-howOutgrowHelped-inner">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped1.png" alt="Simple, High-Converting Landing Page">
								<h5>Simple, High-Converting Landing Page </h5>
								<p>VenturePact used the Outgrow platform to create a simple and attractive landing page for their calculator. The landing page proved to be really high-converting with a click-through rate of 66%. </p>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped2.png" alt="In-Built Virality">
								<h5>In-Built Virality </h5>
								<p>The lead generation form asked for not only your email but also email of people who you’d recommend the calculator to. This ensured that the calculator had a viral component in-built. In fact, the conversion rate on this form was a staggering 40%. </p>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped3.png" alt="Optimal Results Page">
								<h5>Optimal Results Page </h5>
								<p>Users got real-time results with a clear onward call to action. Approximately 4% of users clicked on the CTA and went to the company website. </p>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center img-wrapper">
							<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped4.jpg" alt="">
							<img class="img-shadow" src="{{ $page->baseUrl }}/images/case_study_howOutgrowHelped5.jpg" alt="">
							<button type="button" class="btn btn-red">Create your First Interactive Experience </button>
						</div>
					</div>
				</section>
				<section class="section section-companyReviews">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<blockquote>
								<span class="quote-left"></span>
									Our goal was to generate more leads, and improve the level of customer interaction but our inbound strategies were giving lukewarm results at best. We had to reinvent marketing and needed something that could provide instant gratification. 
								<span class="quote-right"></span>
							</blockquote>
							<!-- <span>Luise Spieweck Fialho <br/>Founder at TAG Livros </span> -->
						</div>
					</div>
				</section>
				<section class="section section-results">
					<div class="container">
						<div class="section-2-heading">Results </div>
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<p>
								Within 2 weeks of launching, the calculator boosted <b>traffic by 15% </b>and increased <b>conversion rate by 28%.</b><br/><br/>
								Overall, <b>the company generated 11,592 qualified leads (and counting) with this single interactive calculator. </b><br/><br/>
								In addition, the calculator also helped VenturePact become a thought leader in its space. People always had questions about how much their app will cost. So, when VenturePact came up with a tool that could help answer this question, people were more likely to share it on social media. This helped the company get word-of-mouth traffic.
							</p>							
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center img-wrapper">
							<img class="" src="{{ $page->baseUrl }}/images/case_study_result1.jpg" alt="Result img">
							<img class="" src="{{ $page->baseUrl }}/images/case_study_result2.jpg" alt="Result img">
						</div>
					</div>
				</section>
				<section class="section section-whatsNext">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<div class="section-2-heading">What’s Next? </div>
							<span class="section-subtitle">
								VenturePact’s leads have grown enormously ever since the calculator went viral. Its other content is garnering more attention and VenturePact is becoming an authority in the market with the founders being invited to speak at software development events.<br/><br/>
								VenturePact is currently working with Outgrow to launch 3 new calculators for estimating design work, WordPress website development and security budgets.
							</span>
						</div>
					</div>
				</section>
				<section class="section section-companyReviews section-white">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<blockquote>
								<span class="quote-left"></span>
									The calculator going viral has made us more visible. With so many prospects already using it, we know our work is being valued. Now that we know what works with the target audience, we can focus our efforts on the same line.
								<span class="quote-right"></span>
							</blockquote>
						</div>
					</div>
				</section>
				<section class="section section-button">
					<div class="container">
						<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
							<span>Free Trial. No credit card required!</span>
							<button type="button" class="btn btn-red">Generate leads with Outgrow </button>
						</div>
					</div>
				</section>
			</div>
		</div>

	</div>


@endsection

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"whypage": "{{ $page->baseUrl }}/js/pageScripts/whypage.js",
		"casestudies": "{{ $page->baseUrl }}/js/pageScripts/case-studies.js",
	}
@endsection
