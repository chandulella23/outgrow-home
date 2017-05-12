@extends('_layouts.master')

@section('title', 'Interactive Calculators and Quizzes | Outgrow')

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')
<!-- Homepage section 1 start-->
<section class="section section-1">
	<div class="container-fluid">
		<div class="col-md-5 col-xs-12 col-sm-6 section-1-left">
			<div class="section1-left-cell">
				  <h4 class="mk-animate-element fade-in">
					eBooks, blogs & whitepapers giving <b>average</b> results?
				</h4>
				<h3 class="mk-animate-element fade-in section1-firsthead">
					Boost your marketing with highly converting <b>calculators</b> and viral <b>quizzes</b>.
				</h3>
				<!-- Video buttons-->
				<div class="col-md-12 col-sm-12 col-xs-12 np">
					<div class="col-xs-12 col-sm-6 np" id="btnBuildCalc1">


					</div>
					<div class="col-xs-12 col-sm-6 np" id="video-link">
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 rs-show np">
			<div class="sec1-box-left">
				<div class="sec1-box1 mk-animate-element left-to-right">
					<img src="" data-src="{{ $page->baseUrl }}/images/new-collag1.jpg" />
				</div>
				<div class="sec1-box2  mk-animate-element left-to-right">
					<img src="" data-src="{{ $page->baseUrl }}/images/new-collag4_edited.jpg"/>
				</div>
			</div>
			<div class="sec1-box-right">
				<div class="sec1-box3 mk-animate-element right-to-left">
					<img src="" data-src="{{ $page->baseUrl }}/images/homepage-soccer1.jpg"/>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-7 section-1-right">
			<div class="collag-right rs-hide">
				<a class="collag1 mk-animate-element fade-in" href="javascript:void(0);">
					<div class="collag1-img"></div>
				</a>
			</div>
			<div class="collag-left rs-hide">
				<div class="col-sm-12">
					<a class="collag3 mk-animate-element fade-in" href="javascript:void(0);">
						<div class="collag3-img"></div>
					</a>
				</div>
				<div class="col-sm-12">
					<a class="collag4 mk-animate-element fade-in" href="javascript:void(0);">
						<div class="collag4-img"></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Homepage section 1 end-->
<section class="section section-2">
	<div class="container mobile-container">
		<h1 class="section-2-heading mk-animate-element scale-up">
			Where will you click?
		</h1>
		<h2 class="section-2-subheading mk-animate-element scale-up show">
			Customers want to be helped. Not sold to. Quizzes & Calculators build trust by answering your customer's most pressing questions.
		</h2>
	</div>
</section>
<!-- Homepage section 2 start-->
<!-- Homepage section 2 end-->
<!-- Homepage section 3 start-->
<section class="section section-3">
	<div class="container mobile-container">
		<div class="col-xs-12 col-sm-12 col-md-12 np outer-container text-center">
			<div class="col-md-6 col-sm-12 col-xs-12 np rs-hide">
				<img class="img-1 mk-animate-element right-to-left" src="" data-src="{{ $page->baseUrl }}/images/sec3-img1-edited.png" />
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 np rs-hide">
				<img src="" data-src="{{ $page->baseUrl }}/images/sec3-img2-edited.png" class="mk-animate-element left-to-right img-2" />
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 np rs-show">
				<img src="" data-src="{{ $page->baseUrl }}/images/sec3-img2-edited.png"class="mk-animate-element left-to-right img-2" />
			</div>
		</div>
	</div>
</section>
<!-- Homepage section 3 end-->
<section class="section">
	<div class="container mobile-container">
		<h1 class="section-2-heading mk-animate-element scale-up ">
			Beautiful calculators and quizzes. Without Developers.
		</h1>
		<h2 class="section-2-subheading mk-animate-element scale-up">
			 Create beautiful experiences in minutes with our simple, yet powerful development studio.
		</h2>
	</div>
</section>

<!-- Homepage section 4 start-->
<section class="section section-4">
	<div class="container mobile-container">
		<div class="col-xs-12 col-sm-12 np section-4-right mk-animate-element fade-in rs-show">
			<div class="embed-responsive embed-responsive-16by9 lazyLoad1">

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
				<span>Publish Within Minutes, with <b>No IT Headache</b> </span>
			</span>

		</div>
		<div class="col-xs-12 col-sm-9 np section-4-right mk-animate-element fade-in rs-hide">
			<div class="embed-responsive embed-responsive-16by9 lazyLoad2">

			</div>
		</div>
	</div>
</section>
<!-- Homepage section 4 end-->

<!-- Homepage section 5 start-->
<section class="section section-5">
	<div class="container mobile-container">
		<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
			<img class="mk-animate-element scale-up sec5-2-1" src="" data-src="{{ $page->baseUrl }}/images/sec5-1.png" />
			<img class="sec5-2 mk-animate-element left-to-right" src="" data-src="{{ $page->baseUrl }}/images/sec5-2-new.png" />
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
			<img class="mk-animate-element scale-up sec5-2-1" src="" data-src="{{ $page->baseUrl }}/images/sec5-1.png" />
			<img class="sec5-2 mk-animate-element left-to-right" src="" data-src="{{ $page->baseUrl }}/images/sec5-2-new.png" />
		</div>
	</div>
</section>
<!-- Homepage section 5 end-->

<!-- Homepage section 6 start-->
<section class="section section-6">
	<div class="container img-container">
		<div class="col-xs-12 col-sm-12 col-md-9 np mk-animate-element fade-in section-6-right rs-show ">
			<img class="mk-animate-element right-to-left sec6-2-1" src="" data-src="{{ $page->baseUrl }}/images/share-img.png"/>
			<img class="sec6-2-2 mk-animate-element left-to-right" src="" data-src="{{ $page->baseUrl }}/images/lead-sec.png" />
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
			<img class="mk-animate-element right-to-left " src="" data-src="{{ $page->baseUrl }}/images/share-img.png"/>
			<img class="sec4-2 mk-animate-element left-to-right" src="" data-src="{{ $page->baseUrl }}/images/lead-sec.png"/>
		</div>
	</div>
</section>



<!-- Homepage section 5 start-->
<section class="section section-5">
	<div class="container mobile-container">
		<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
			<img class="mk-animate-element scale-up box-shadow" src="" data-src="{{ $page->baseUrl }}/images/graph-2-updated.jpg"/>
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
			<img class="mk-animate-element scale-up box-shadow" src="" data-src="{{ $page->baseUrl }}/images/graph-2-updated.jpg"/>
		</div>

		<div class="col-xs-12 col-sm-12 text-center rs-hide">
			<a href="features.html"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Explore More Features</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
		</div>
	</div>
</section>
<!-- Homepage section 5 end-->



<!-- Homepage section 10 start-->
<section class="section section-10">
	<div class="container-fluid">
		<div class="sec10-testimonial mk-animate-element left-to-right">
			<div class="sec10-tes-inner">
				<em class="sec10-em1">“</em>
				<span>I am on my third calculator already. The first two were organically shared on a popular industry mailing list and fetched us over 5000 highly targeted leads!</span>

			</div>
			<div class="sec10-testname">
				<h5>Hillary Hunt</h5>
				</div>
			<a class="sec10-testimonial-link">Marketing Manager</a>
		</div>
	</div>
</section>
<!-- Homepage section 10 end-->


<!-- Homepage section 6 end-->

<section class="section section-7-top">
	<div class="container mobile-container">
		<h1 class="section-2-heading mk-animate-element scale-up">
			 The Outgrow Magic
		</h1>
		<h2 class="section-2-subheading mk-animate-element scale-up">
			 Get inspired by some of our most successful calculators & quizzes!
		</h2>
	</div>
</section>
<!-- Homepage section 7 start-->
<section class="section section-7">
	<div class="container-fluid np">
		<div class="col-xs-12 col-md-6 col-sm-12 section-9-right col-sm-push-6 ">
			<div class="col-xs-12 col-sm-12 slider-sa text-center">
				<div class="rs-show">
						<div class="swiper-container box-shadow  mk-animate-element scale-up rs-show">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="" data-src="{{ $page->baseUrl }}/images/em1-3.jpg" alt="" class="qode-lazy-image" />
								</div>
								<div class="swiper-slide">
									<img src="" data-src="{{ $page->baseUrl }}/images/em1-2.jpg" alt="" class="qode-lazy-image" />
								</div>
							</div>
							<!-- Add Pagination -->
						</div>
						<div class="swiper-pagination"></div>
					</div>
					<div class="qode-cards-gallery-holder left rs-hide" data-side=left>
						<div class="qode-cards-gallery">
							<div class="card" style="background-color:#f3f3f3">
								<a href="http://resources.outgrow.co/what-kind-of-engineer-you-should-be/ " target="_blank">  <img src="#" alt="" class="qode-lazy-image" data-image="{{ $page->baseUrl }}/images/em1-2.jpg"
										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
									/> </a>
							</div>
							<div class="card" style="background-color:#f3f3f3">
								<a href="http://resources.outgrow.co/what-kind-of-engineer-you-should-be/ " target="_blank">  <img src="#" alt="" class="qode-lazy-image" data-image="{{ $page->baseUrl }}/images/em1-3.jpg"
										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
									/> </a>
							</div>
					 </div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 section-9-left col-sm-pull-6 ">
			<h4 class="mk-animate-element left-to-right">
				What kind of engineer should you be?
			</h4>
			<div class="sec9-test mk-animate-element left-to-right">
				<em class="left">“</em>
				<p>
					The first question prospective students ask is: 'which major is right for me'? This calculator lets us answer such questions and build relationships early on. The bounce rates were < 10% - something I haven't seen after spending over $10M in online ads.
					<em class="right">”</em>
				</p>
				<span class="text-1">Head of Admissions,</span>
				<span class="text-2">Top Ranked Online University</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-11 np">
				<div class="circle-value mk-animate-element left-to-right">
					<em class="">k</em>
					<label class="counter">22</label>
					<p>Unique Views</p>
				</div>
				<div class="circle-value mk-animate-element left-to-right">
					<em class="">k</em>
					<label class="counter">12</label>
					<p>Leads</p>
				</div>
				<div class="circle-value mk-animate-element left-to-right">
					<em class="">%</em>
					<label  class="counter">98</label>
					<p>Conversion Rate</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-11 np rs-hide">
				<a href="http://resources.outgrow.co/what-kind-of-engineer-you-should-be/ " target="_blank"> <button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div>
			<div class="col-xs-12 col-sm-11 np rs-show">
				<a href="https://website.outgrow.co/Which-engineering-major-is-right-for-you" target="_blank"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Quiz</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div>
		</div>
	</div>
</section>
<!-- Homepage section 7 end-->

<!-- Homepage section 8 start-->
<section class="section section-8">
	<div class="container-fluid np">
		<div class="col-xs-12 col-sm-12 col-md-6 section-7-left1">
			<div class="col-xs-12 col-sm-12 slider-sa text-center">
				<div class="rs-show">
						<div class="swiper-container box-shadow  mk-animate-element scale-up">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="" data-src="{{ $page->baseUrl }}/images/em2-1.jpg" alt="" class="qode-lazy-image" />
								</div>
								<div class="swiper-slide">
									<img src="" data-src="{{ $page->baseUrl }}/images/em2-2.jpg" alt="" class="qode-lazy-image" />
								</div>
							</div>
							<!-- Add Pagination -->
						</div>
						<div class="swiper-pagination"></div>
					</div>
					<div class="qode-cards-gallery-holder right rs-hide" data-side=right>
						<div class="qode-cards-gallery">
							<div class="card" style="background-color:#f3f3f3">
								<a href="https://website.outgrow.co/5875396fe62e5172076953fe" class="embed-modal2" target="_blank" > <img src="#" alt="" class="qode-lazy-image" data-image="{{ $page->baseUrl }}/images/em2-1.jpg"
										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
									/> </a>
							</div>
							<div class="card" style="background-color:#f3f3f3">
								<a href="https://website.outgrow.co/5875396fe62e5172076953fe" class="embed-modal2" target="_blank"> <img src="#" alt="" class="qode-lazy-image" data-image="{{ $page->baseUrl }}/images/em2-2.jpg"
										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true" /> </a>
							</div>
					 </div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 section-7-left">
			<h4 class="mk-animate-element right-to-left">
				How much should you pay for a video campaign ?
			</h4>
			<div class="sec9-test mk-animate-element right-to-left">
				<em class="left">“</em>
				<p>
					The video cost calculator helped us create a brand centered around transparency. It soon became the go-to tool for advertisers to assess production costs (even when they were considering our competitors). Not surprisingly, today, it is our <b>#1 source of leads</b>.
					<em class="right">”</em>
				</p>
				<span class="text-1">Chief Creative Officer, </span>
				<span class="text-2">Top Hollywood Ad Agency</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-11 np">
				<div class="circle-value mk-animate-element right-to-left">
					<em class="">k</em>
					<label class="counter">56</label>
					<p>Unique Visits</p>
				</div>
				<div class="circle-value mk-animate-element right-to-left">
					<em class="">k</em>
					<label class="counter">19</label>
					<p>Search Traffic</p>
				</div>
				<div class="circle-value mk-animate-element right-to-left">
					<em class="">%</em>
					<label  class="counter">34</label>
					<p>Completion Rate</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-11 np rs-hide">
				<a href="https://website.outgrow.co/5875396fe62e5172076953fe" class="embed-modal2"  target="_blank"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div>
			<div class="col-xs-12 col-sm-11 np rs-show">
				<a href="https://website.outgrow.co/5875396fe62e5172076953fe" target="_blank"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div>
		</div>
	</div>
</section>
<!-- Homepage section 8 end-->

<!-- Homepage section 9 start-->
<section class="section section-9">
	<div class="container-fluid np">
		<div class="col-xs-12 col-sm-12 col-md-6 col-sm-push-6 section-9-right">
			<div class="col-xs-12 col-sm-12 slider-sa text-center">
				<div class="rs-show">
						<div class="swiper-container box-shadow  mk-animate-element scale-up rs-show">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="" data-src="{{ $page->baseUrl }}/images/em3-3.jpg" alt="" class="qode-lazy-image" />
								</div>
								<div class="swiper-slide">
									<img src="" data-src="{{ $page->baseUrl }}/images/em3-2.jpg" alt="" class="qode-lazy-image" />
								</div>
							</div>
							<!-- Add Pagination -->
						</div>
						<div class="swiper-pagination"></div>
					</div>
					<div class="qode-cards-gallery-holder left rs-hide" data-side=left>
						<div class="qode-cards-gallery">
							<div class="card" style="background-color:#f3f3f3">
								<a href="http://resources.outgrow.co/risk-of-getting-heart-disease/" target="_blank"> <img src="#" alt="" class="qode-lazy-image" data-image="{{ $page->baseUrl }}/images/em3-3.jpg"
									style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
								 /> </a>
							</div>
							<div class="card" style="background-color:#f3f3f3">
								<a href="http://resources.outgrow.co/risk-of-getting-heart-disease/" target="_blank"> <img src="#" alt="" class="qode-lazy-image" data-image="{{ $page->baseUrl }}/images/em3-2.jpg"
								 style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"	/> </a>
							</div>
					 </div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 section-9-left section-9-left2 col-sm-pull-6">
			<h4 class="mk-animate-element left-to-right">
				What is your risk of getting a heart disease?
			</h4>
			<div class="sec9-test mk-animate-element left-to-right">
				<em class="left">“</em>
				<p>
					Being an age old healthcare company, social media was never a serious marketing channel. But this changed when we launched our series of "What is the risk of getting a ______ disease?" calculators. With these calculators, facebook is now our cheapest source of leads!
					<em class="right">”</em>
				</p>
				<span class="text-1">Head of Customer Experience,</span>
				<span class="text-2">IDBI Insurance</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-11 np">
				<div class="circle-value mk-animate-element left-to-right">
					<em class="">k</em>
					<label class="counter">98</label>
					<p>Unique Views</p>
				</div>
				<div class="circle-value mk-animate-element left-to-right">
					<em class="">%</em>
					<label class="counter">66</label>
					<p>Referral Traffic</p>
				</div>
				<div class="circle-value mk-animate-element left-to-right">
					<em class="">%</em>
					<label  class="counter">6</label>
					<p>Bounce Rate</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-11 np rs-hide">
				<a href="http://resources.outgrow.co/risk-of-getting-heart-disease/" target="_blank"> <button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div>
			<div class="col-xs-12 col-sm-11 np rs-show">
				<a href="https://website.outgrow.co/What-is-your-risk-of-getting-a-heart-disease" target="_blank"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div>

		</div>
	</div>
</section>
<!-- Homepage section 9 end-->

<!-- Homepage section 12 start-->
<section class="section section-12">
	<div class="container-fluid">
		<div class="sec10-testimonial mk-animate-element right-to-left">
			<div class="sec10-tes-inner">
				<em class="sec10-em1">“</em>
				<span>We sent a calculator to a prospective customer and found that the email was opened over 400 times. Either he was obsessed with the calculator or shared with his entire company.</span>

			</div>
			<div class="sec10-testname">
				<h5>Paul McIntiere</h5>
			</div>
			<a class="sec10-testimonial-link">Sales Territory Manager</a>

		</div>
	</div>
</section>
<!-- Homepage section 12 end-->
<section class="hide">
	<span class="section-runnigheading mk-animate-element scale-up rs-show">Find Your Style</span>
</section>
<!-- Homepage section 13 start-->
<section class="section section-13">
	<div class="container mobile-container ebook-container">
		<div class="col-md-12 col-sm-12 col-xs-12 np">
			<div class="col-md-6 col-sm-12 col-xs-12 np rs-show text-center">
				<img class="ebook-img" src="" data-src="{{ $page->baseUrl }}/images/ebook-1-new.gif">
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 np">
				<div class="ebook-outer">
					<h1 class="ebook-head">
						The Only Guide to Growth Hacking with Calculators!
					</h1>
					<h3 class="ebook-subhead">
						Learn how you can boost lead generation with interactive calculators.
					</h3>
					<h4 class="ebook-sub-heading">
						Get the Ebook
					</h4>
					<div class="col-md-12 col-sm-12 col-xs-12 np sahil-material">
						<form class="">
                           <p class="errors" id="ebook-error"></p>
                            <div class="form-group label-floating">
                                <label class="control-label" for="ebook-name">Name</label>
                                <input name="ebook-name" class="form-control" id="ebook-name" type="text" required>
                            	<span class="material-input"></span>
                            </div>
                             <div class="form-group label-floating">
                                <label class="control-label" for="ebook-email">Email</label>
                                <input name="ebook-email" class="form-control" id="ebook-email" type="email" required>
                            	<span class="material-input"></span>
                            </div>
                        </form>
                    	<button id="ebook-submit" onclick="submitEbookData(event)" class="btn btn-default form-btn">Get Access<i class="material-icons">arrow_downward</i></button>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 np rs-hide">
				<img class="ebook-img" src="" data-src="{{ $page->baseUrl }}/images/ebook-1-new.gif">
			</div>
		</div>
	</div>
</section>
<!-- Homepage section 13 end-->

<!-- Start: Modal Video -->
<div id="video-modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-video">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
				<i class="material-icons">close</i></button>
				<div class="row">
					<div class="modal-video-full">
						<div class="tab-content">
							<div id="overview" class="tab-pane fade in active">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="outgrow-video" src="" data-src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"index": "{{ $page->baseUrl }}/js/pageScripts/index.js",
	}
@endsection