@extends('_layouts.master')

@section('title', 'Interactive Calculators and Quizzes | Outgrow')

@section('css')
	<link rel="stylesheet" href="{{ $page->getUrl()."css/allPage_minified.css" }}">
@endsection

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
					<div class="form-group mk-animate-element fade-in hide">
						<input type="text" placeholder="Email Address" />
					</div>
					<!-- Video buttons-->
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-xs-12 col-sm-6 np" id="btnBuildCalc1">


						</div>
						<div class="col-xs-12 col-sm-6 np" id="video-link">
						</div>
					</div>
				<!-- Claim your Domain CTA -->
					<div class="col-md-12 col-sm-12 col-xs-12 np sahil-material hide">
						<div class="col-md-7 col-sm-12 col-xs-12 np">
							<form class="claim-cta">
	                           <div class="form-group label-floating">
	                                <!-- <label class="control-label c-name" for="company-name"><i class="material-icons">public</i>yourcompany</label> -->
	                                <i class="material-icons">public</i>
	                                <input name="company-name" class="form-control" id="company-name" type="text" placeholder="yourcompany">
	                            	<label class="in-active">.outgrow.co</label>
	                            </div>
	                        </form>
	                    </div>
                    	<div class="col-xs-12 col-sm-12 col-md-5 np">
                    		<a href="#" class="params">
                    			<button onclick="claim_sub_domain()" class="btn-buildcal mk-in-viewport animate-element fade-in mk-in-viewport full-visible">
                    				<i class="material-icons">touch_app</i>
                    				Claim your domain
                    			</button>
                    		</a>
                    	</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 rs-show np">
				<div class="sec1-box-left">
					<div class="sec1-box1 mk-animate-element left-to-right">
						<img src="images/new-collag1.jpg" />
					</div>
					<div class="sec1-box2  mk-animate-element left-to-right">
						<img src="images/new-collag4_edited.jpg" />
					</div>
				</div>
				<div class="sec1-box-right">
					<div class="sec1-box3  mk-animate-element right-to-left">
						<img src="images/homepage-soccer1.jpg" />
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

	<!-- Homepage section 2 start-->
	<section class="section section-2">
		<div class="container mobile-container">
			<div class="section-2-heading mk-animate-element scale-up">
				<!-- Calculators: the next big thing in content marketing. -->
				Where will you click?
			</div>
			<div class="section-2-subheading mk-animate-element scale-up show">
				Customers want to be helped. Not sold to. Quizzes & Calculators build trust by answering your customer's most pressing questions.
			</div>
		</div>
	</section>
	<!-- Homepage section 2 end-->

	<!-- Homepage section 3 start-->
	<section class="section section-3">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-12 np outer-container text-center">
				<div class="col-md-6 col-sm-12 col-xs-12 np rs-hide">
					<img class="img-1 mk-animate-element right-to-left" src="images/sec3-img1-edited.png" />
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 np rs-hide">
					<img src="images/sec3-img2-edited.png" class="mk-animate-element left-to-right img-2" />
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 np rs-show">
					<img src="images/mobile-top2.png" class="mk-animate-element left-to-right img-2" />
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 3 end-->

	<!-- Homepage section Take-Quiz start-->
	<section class="section take-quiz-bg mb hide">
		<div class="container mobile-container">
			<div class="col-md-12 col-xs-12 col-sm-12 np text-center">
				<div class="take-quiz-heading mk-animate-element left-to-right">
					 How many <b>more</b> customers can you earn with quizzes and calculators?
				</div>
				<a href="javascript:void(0);"  data-toggle="modal" data-target="#embed-modal-quizer" >
					<button class="sec-quiz-btn mk-animate-element left-to-right">
					<i class="material-icons">arrow_forward</i>FIND OUT NOW</button>
				</a>
			</div>
		</div>
	</section>
	<!-- Homepage section Take-Quiz end-->

	<section class="section">
		<div class="container mobile-container">
			<div class="section-2-heading mk-animate-element scale-up ">
				Beautiful calculators and quizzes. Without Developers.
			</div>
			<div class="section-2-subheading mk-animate-element scale-up">
				 Create beautiful experiences in minutes with our simple, yet powerful development studio.
			</div>
		</div>
	</section>

	<!-- Homepage section 4 start-->
	<section class="section section-4">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 np section-4-right mk-animate-element fade-in rs-show">
				<div class="embed-responsive embed-responsive-16by9">
					<video width="1324" height="607" autoplay loop>
						<source src="images/Outgrow-demo.mp4" type="video/mp4">
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
					<span>Publish Within Minutes, with <b>No IT Headache</b> </span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 np section-4-right mk-animate-element fade-in rs-hide">
				<div class="embed-responsive embed-responsive-16by9">
					<video width="1324" height="607" autoplay loop>
						<source src="images/Outgrow-demo.mp4" type="video/mp4">
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
				<img class="mk-animate-element scale-up sec5-2-1" src="images/sec5-1.png" />
				<img class="sec5-2 mk-animate-element left-to-right" src="images/sec5-2-new.png" />
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
				<img class="mk-animate-element scale-up sec5-2-1" src="images/sec5-1.png" />
				<img class="sec5-2 mk-animate-element left-to-right" src="images/sec5-2-new.png" />
			</div>
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<!-- Homepage section 6 start-->
	<section class="section section-6">
		<div class="container img-container">
			<div class="col-xs-12 col-sm-12 col-md-9 np mk-animate-element fade-in section-6-right rs-show ">
				<img class="mk-animate-element right-to-left sec6-2-1" src="images/share-img.png" />
				<img class="sec6-2-2 mk-animate-element left-to-right" src="images/lead-sec.png" />
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
				<img class="mk-animate-element right-to-left " src="images/share-img.png" />
				<img class="sec4-2 mk-animate-element left-to-right" src="images/lead-sec.png" />
			</div>
		</div>
	</section>

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img class="mk-animate-element scale-up box-shadow" src="images/graph-2-updated.jpg" />
				<!-- <img class="sec5-2 mk-animate-element left-to-right" src="images/sec5-2-new.png" /> -->
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
				<img class="mk-animate-element scale-up box-shadow" src="images/graph-2-updated.jpg" />
				<!-- <img class="sec5-2 mk-animate-element left-to-right" src="images/sec5-2-new.png" /> -->
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
				<div class="sec10-testname1 hide">
					<img src="images/testimonial1.png" />
				</div>
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


	<!-- Homepage section 7 top start-->
	<section class="section section-7-top">
		<div class="container mobile-container">
			<div class="section-2-heading mk-animate-element scale-up">
				 The Outgrow Magic
			</div>
			<div class="section-2-subheading mk-animate-element scale-up">
				 Get inspired by some of our most successful calculators & quizzes!
			</div>
		</div>
	</section>
	<!-- Homepage section 7 top end-->

	<!-- Homepage section 7 start-->
	<section class="section section-7">
		<div class="container-fluid np">
			<section>
				<span class="section-runnigheading mk-animate-element scale-up hide">Get Inspired..</span>
			</section>
			<div class="col-xs-12 col-md-6 col-sm-12 section-9-right col-sm-push-6 ">
				<div class="col-xs-12 col-sm-12 slider-sa text-center">
					<div class="rs-show">
 						<div class="swiper-container box-shadow  mk-animate-element scale-up rs-show">
 							<div class="swiper-wrapper">
 								<div class="swiper-slide">
 									<img src="images/em1-3.jpg" alt="" class="qode-lazy-image" />
 								</div>
 								<div class="swiper-slide">
 									<img src="images/em1-2.jpg" alt="" class="qode-lazy-image" />
 								</div>
 							</div>
 							<!-- Add Pagination -->
 						</div>
 						<div class="swiper-pagination"></div>
 					</div>
 					<div class="qode-cards-gallery-holder left rs-hide" data-side=left>
 						<div class="qode-cards-gallery">
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="http://resources.outgrow.co/what-kind-of-engineer-you-should-be/ " target="_blank">  <img src="#" alt="" class="qode-lazy-image" data-image="images/em1-2.jpg"
 										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
 									/> </a>
 							</div>
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="http://resources.outgrow.co/what-kind-of-engineer-you-should-be/ " target="_blank">  <img src="#" alt="" class="qode-lazy-image" data-image="images/em1-3.jpg"
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
 									<img src="images/em2-1.jpg" alt="" class="qode-lazy-image" />
 								</div>
 								<div class="swiper-slide">
 									<img src="images/em2-2.jpg" alt="" class="qode-lazy-image" />
 								</div>
 							</div>
 							<!-- Add Pagination -->
 						</div>
 						<div class="swiper-pagination"></div>
 					</div>
 					<div class="qode-cards-gallery-holder right rs-hide" data-side=right>
 						<div class="qode-cards-gallery">
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="https://website.outgrow.co/5875396fe62e5172076953fe" class="embed-modal2" target="_blank" > <img src="#" alt="" class="qode-lazy-image" data-image="images/em2-1.jpg"
 										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
 									/> </a>
 							</div>
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="https://website.outgrow.co/5875396fe62e5172076953fe" class="embed-modal2" target="_blank"> <img src="#" alt="" class="qode-lazy-image" data-image="images/em2-2.jpg"
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
 									<img src="images/em3-3.jpg" alt="" class="qode-lazy-image" />
 								</div>
 								<div class="swiper-slide">
 									<img src="images/em3-2.jpg" alt="" class="qode-lazy-image" />
 								</div>
 							</div>
 							<!-- Add Pagination -->
 						</div>
 						<div class="swiper-pagination"></div>
 					</div>
 					<div class="qode-cards-gallery-holder left rs-hide" data-side=left>
 						<div class="qode-cards-gallery">
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="http://resources.outgrow.co/risk-of-getting-heart-disease/" target="_blank"> <img src="#" alt="" class="qode-lazy-image" data-image="images/em3-3.jpg"
 									style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
									 /> </a>
 							</div>
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="http://resources.outgrow.co/risk-of-getting-heart-disease/" target="_blank"> <img src="#" alt="" class="qode-lazy-image" data-image="images/em3-2.jpg"
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
				<div class="sec10-testname1 hide">
					<img src="images/testimonial2.png" />
				</div>
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

	<!-- homepage salternatingSizesPortfolioSection new start -->
	<div id="alternatingSizesPortfolioSection" class="vc_row wpb_row section vc_row-fluid hide  vc_custom_1469789306140 grid_section"
		style=' text-align:center;'>
		<div class=" section_inner clearfix">
			<div class='section_inner_margin clearfix'>
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner ">
						<div class="wpb_wrapper">
							<div class="vc_empty_space  vc_custom_1469695103969" style="height: 0px"><span class="vc_empty_space_inner"> <span class="empty_space_image"  ></span> </span>
							</div>
							<div class='projects_holder_outer v3 portfolio_with_space portfolio_with_hover_text'>
								<div class='projects_holder portfolio_main_holder clearfix v3 alternating_sizes portfolio_landscape_image '>
									<article class='mix portfolio_category_3 ' style=''>
										<div class="item_holder flip_from_left">
											<div class="portfolio_title_holder">
												<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="javascript:void(0);"
														style="font-size: 12px">Bridge Original</a></h5>
											</div>
											<a itemprop="url" class="portfolio_link_class" title="Bridge Original"
												href="javascript:void(0);"></a>
											<div class="portfolio_shader"></div>
											<div class="image_holder"><span class="image"><img width="700" height="442" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="a" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
										</div>
									</article>
									<article class='mix portfolio_category_2 portfolio_category_9 portfolio_category_7 '
										style=''>
										<div class="item_holder flip_from_left">
											<div class="portfolio_title_holder">
												<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="http://bridge77.qodeinteractive.com/" style="font-size: 12px">Bridge Modern Furniture</a></h5>
											</div>
											<a itemprop="url" class="portfolio_link_class" title="Bridge Modern Furniture"
												href="http://bridge77.qodeinteractive.com/"></a>
											<div class="portfolio_shader"></div>
											<div class="image_holder"><span class="image"><img width="700" height="442" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="77" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
										</div>
									</article>
									<article class='mix portfolio_category_3 portfolio_category_2 ' style=''>
										<div class="item_holder flip_from_left">
											<div class="portfolio_title_holder">
												<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="http://bridge8.qodeinteractive.com/" style="font-size: 12px">Bridge Craftsman</a></h5>
											</div>
											<a itemprop="url" class="portfolio_link_class" title="Bridge Craftsman"
												href="http://bridge8.qodeinteractive.com/"></a>
											<div class="portfolio_shader"></div>
											<div class="image_holder"><span class="image"><img width="600" height="380" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="a" sizes="(max-width: 600px) 100vw, 600px" /></span></div>
										</div>
									</article>
									<article class='mix portfolio_category_4 portfolio_category_2 portfolio_category_5 '
										style=''>
										<div class="item_holder flip_from_left">
											<div class="portfolio_title_holder">
												<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="http://bridge10.qodeinteractive.com/" style="font-size: 12px">Bridge Modern Photography</a></h5>
											</div>
											<a itemprop="url" class="portfolio_link_class" title="Bridge Modern Photography"
												href="http://bridge10.qodeinteractive.com/"></a>
											<div class="portfolio_shader"></div>
											<div class="image_holder"><span class="image"><img width="600" height="380"  class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="a" sizes="(max-width: 600px) 100vw, 600px" /></span></div>
										</div>
									</article>
									<article class='mix portfolio_category_3 portfolio_category_4 portfolio_category_2 portfolio_category_9 portfolio_category_5 '
										style=''>
										<div class="item_holder flip_from_left">
											<div class="portfolio_title_holder">
												<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="http://bridge69.qodeinteractive.com/" style="font-size: 12px">Bridge Resume</a></h5>
											</div>
											<a itemprop="url" class="portfolio_link_class" title="Bridge Resume"
												href="http://bridge69.qodeinteractive.com/"></a>
											<div class="portfolio_shader"></div>
											<div class="image_holder"><span class="image"><img width="700" height="442" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="a" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
										</div>
									</article>
									<article class='mix portfolio_category_3 portfolio_category_4 portfolio_category_2 portfolio_category_9 '
										style=''><span class="qode-portfolio-new-badge">NEW</span>
										<div class="item_holder flip_from_left">
											<div class="portfolio_title_holder">
												<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="http://bridge38.qodeinteractive.com/" style="font-size: 12px">Bridge Conference</a></h5>
											</div>
											<a itemprop="url" class="portfolio_link_class" title="Bridge Conference"
												href="http://bridge38.qodeinteractive.com/"></a>
											<div class="portfolio_shader"></div>
											<div class="image_holder"><span class="image"><img width="700" height="442" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="p" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
										</div>
									</article>
									<article class='mix portfolio_category_3 portfolio_category_2 ' style=''>
										<div class="item_holder flip_from_left">
											<div class="portfolio_title_holder">
												<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="javascript:void(0)" style="font-size: 12px">Bridge Consulting</a></h5>
											</div>
											<a itemprop="url" class="portfolio_link_class" title="Bridge Consulting"
												href="javascript:void(0)"></a>
											<div class="portfolio_shader"></div>
											<div class="image_holder"><span class="image"><img width="700" height="442" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="a" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
										</div>
									</article>
									<article class='mix portfolio_category_3 portfolio_category_2 ' style=''>
										<div class="item_holder flip_from_left">
											<div class="portfolio_title_holder">
												<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="http://bridge9.qodeinteractive.com/" style="font-size: 12px">Bridge Corporation</a></h5>
											</div>
											<a itemprop="url" class="portfolio_link_class" title="Bridge Corporation"
												href="http://bridge9.qodeinteractive.com/"></a>
											<div class="portfolio_shader"></div>
											<div class="image_holder"><span class="image"><img width="700" height="442" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="p" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
										</div>
									</article>
									<article class='mix portfolio_category_3 portfolio_category_4 portfolio_category_2 portfolio_category_9 '
										style=''><span class="qode-portfolio-new-badge">NEW</span>
										<div class="item_holder flip_from_left">
											<div class="portfolio_title_holder">
												<h5 itemprop="name" class="portfolio_title entry_title"><a itemprop="url" href="http://bridge42.qodeinteractive.com/" style="font-size: 12px">Bridge UX/UI Design</a></h5>
											</div>
											<a itemprop="url" class="portfolio_link_class" title="Bridge UX/UI Design"
												href="http://bridge42.qodeinteractive.com/"></a>
											<div class="portfolio_shader"></div>
											<div class="image_holder"><span class="image"><img width="700" height="442" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="p" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
										</div>
									</article>
									<div class='filler'></div>
									<div class='filler'></div>
									<div class='filler'></div>
								</div>
							</div>
							<div class="vc_empty_space" style="height: 49px"><span class="vc_empty_space_inner"> <span class="empty_space_image"  ></span> </span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- homepage salternatingSizesPortfolioSection end -->

	<section class="hide">
		<span class="section-runnigheading mk-animate-element scale-up rs-show">Find Your Style</span>
	</section>

	<!-- Homepage section 13 start-->
	<div class=" Section-13 col-xs-12 np hide">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default mk-animate-element left-to-right">
			<div class="panel-heading" role="tab" id="headingOne">
			  <h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  Calculator 1 #
				</a>
			  </h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			  <div class="panel-body">
				Calculator 1 # Description
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default mk-animate-element left-to-right">
			<div class="panel-heading" role="tab" id="headingTwo">
			  <h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				  Calculator 2 #
				</a>
			  </h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			  <div class="panel-body">
				Calculator 2 # Description
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default mk-animate-element left-to-right">
			<div class="panel-heading" role="tab" id="headingThree">
			  <h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  Calculator 3 #
				</a>
			  </h4>
			</div>
			<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			  <div class="panel-body">
				Calculator 3 # Description
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default mk-animate-element left-to-right">
			<div class="panel-heading" role="tab" id="headingfour">
			  <h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
				  Calculator 4 #
				</a>
			  </h4>
			</div>
			<div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
			  <div class="panel-body">
				Calculator 4 # Description
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<section class="section section-13">
		<div id="alternatingSizesPortfolioSection" class="vc_row wpb_row section vc_row-fluid  vc_custom_1469789306140 grid_section hide"
			style=' text-align:center;'>
			<div class=" section_inner clearfix">
				<div class='section_inner_margin clearfix'>
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div class="vc_empty_space  vc_custom_1469695103969" style="height: 0px"><span class="vc_empty_space_inner"> <span class="empty_space_image"  ></span> </span>
								</div>
								<div class='projects_holder_outer v3 portfolio_with_space portfolio_with_hover_text'>
									<div class='projects_holder portfolio_main_holder clearfix v3 alternating_sizes portfolio_landscape_image '>
										<article class='mix portfolio_category_3' style=''>
											<div class="item_holder flip_from_left">
												<a itemprop="url" class="portfolio_link_class" title="Airbnb vs Hotel "
													href="javascript:void(0);"></a>
												<div class="portfolio_shader"></div>
												<div class="image_holder"><span class="image"><img width="700" height="442" src="images/banner1-new.jpg" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="a"  sizes="(max-width: 700px) 100vw, 700px" /></span></div>
											</div>
										</article>
										<article class='mix portfolio_category_3 portfolio_category_4 portfolio_category_2 portfolio_category_9 portfolio_category_5'
											style=''>
											<div class="item_holder flip_from_left">
												<a itemprop="url" class="portfolio_link_class" title="Insurance Saving"
													href="javascript:void(0);"></a>
												<div class="portfolio_shader"></div>
												<div class="image_holder"><span class="image"><img width="700" height="442" src="images/banner5-subhead.jpg" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="a" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
											</div>
										</article>
										<article class='mix portfolio_category_3 portfolio_category_4 portfolio_category_2 portfolio_category_9'
											style=''><span class="qode-portfolio-new-badge hide">NEW</span>
											<div class="item_holder flip_from_left">
												<a itemprop="url" class="portfolio_link_class" title="Heart Disease"
													href="javascript:void(0);"></a>
												<div class="portfolio_shader"></div>
												<div class="image_holder"><span class="image"><img width="700" height="442" src="images/banner6-subhead.jpg" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="p" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
											</div>
										</article>
										<article class='mix portfolio_category_3 portfolio_category_2' style=''>
											<div class="item_holder flip_from_left">
												<a itemprop="url" class="portfolio_link_class" title="Video Campaign"
													href="javascript:void(0);"></a>
												<div class="portfolio_shader"></div>
												<div class="image_holder"><span class="image"><img width="700" height="442" src="images/banner7.jpg" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="a" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
											</div>
										</article>
										<article class='mix portfolio_category_3 portfolio_category_2' style=''>
											<div class="item_holder flip_from_left">
												<a itemprop="url" class="portfolio_link_class" title="Home Loan"
													href="javascript:void(0);"></a>
												<div class="portfolio_shader"></div>
												<div class="image_holder"><span class="image"><img width="700" height="442" src="images/banner8.jpg" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="p" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
											</div>
										</article>
										<article class='mix portfolio_category_3 portfolio_category_4 portfolio_category_2 portfolio_category_9'
											style=''><span class="qode-portfolio-new-badge hide">NEW</span>
											<div class="item_holder flip_from_left">
												<a itemprop="url" class="portfolio_link_class" title="Star Health"
													href="javascript:void(0);"></a>
												<div class="portfolio_shader"></div>
												<div class="image_holder"><span class="image"><img width="700" height="442" src="images/banner9.jpg" class="attachment-portfolio-landscape size-portfolio-landscape wp-post-image" alt="p" sizes="(max-width: 700px) 100vw, 700px" /></span></div>
											</div>
										</article>
										<div class='filler'></div>
										<div class='filler'></div>
										<div class='filler'></div>
									</div>
								</div>
								<div class="vc_empty_space" style="height: 49px"><span class="vc_empty_space_inner"> <span class="empty_space_image"  ></span> </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section start-trial-cta">
				<div class="container-fluid np">
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<a href="#" id="trialAnchor">
							<button class="btn-buildcal mk-animate-element left-to-right mk-in-viewport full-visible ripple ">
								<i class="material-icons">view_compact</i>
								<p>Build Your interactive experience</p>
							</button>
						</a>
						<!-- <label>No Credit Card Required</label> -->
					</div>
				</div>
			</div>
		</div>
		<div class="container mobile-container ebook-container">
			<div class="col-md-12 col-sm-12 col-xs-12 np hide">
				<div class="section-13-heading mk-animate-element scale-up mk-in-viewport full-visible">
					Download Our Ebook
				</div>
				<div class="section-13-subheading mk-animate-element scale-up mk-in-viewport full-visible">
				 Create beautiful experiences in minutes with our simple, yet powerful development studio.
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="col-md-6 col-sm-12 col-xs-12 np rs-show text-center">
					<img class="ebook-img" src="images/ebook-1.png">
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 np">
					<div class="ebook-outer">
						<div class="ebook-head">
							The Only Guide to Growth Hacking with Calculators!
						</div>
						<div class="ebook-subhead">
							Learn how you can boost lead generation with interactive calculators.
						</div>
						<div class="ebook-sub-heading">
							Get the Ebook
						</div>
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
					<img class="ebook-img" src="images/ebook-1.png">
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
										<iframe class="outgrow-video" src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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

	<!-- Start: Modal Quizer Embed  -->
	<div id="embed-modal-quizer" class="modal fade embedmodal-custom-quiz" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
				<i class="material-icons">close</i>
			</button>
			<!-- Modal content-->
			<iframe class="" src="https://website.outgrow.co/58753b12e62e517207695b70" height="100%" width="100%" frameborder="0"></iframe>
		</div>
	</div>
	<!-- End: Modal Quizer Embed -->

	<!-- Start: Modal Embed 1 -->
	<div id="embed-modal1" class="modal fade embedmodal-custom" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
				<i class="material-icons">close</i>
			</button>
			<!-- Modal content-->
			<iframe class="" src="https://website.outgrow.co/58753b12e62e517207695b70" height="100%" width="100%" frameborder="0"></iframe>
		</div>
	</div>
	<!-- End: Modal Embed 1 -->

	<!-- Start: Modal Embed 2 -->
	<div id="embed-modal2" class="modal fade embedmodal-custom" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<!-- Modal content-->
			<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
				<i class="material-icons">close</i>
			</button>
			<iframe class="" src="https://website.outgrow.co/5875396fe62e5172076953fe" height="100%" width="100%" frameborder="0"></iframe>
		</div>
	</div>
	<!-- End: Modal Embed 2 -->

	<!-- Start: Modal Embed 3 -->
	<div id="embed-modal3" class="modal fade embedmodal-custom" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<!-- Modal content-->
			<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
				<i class="material-icons">close</i>
			</button>
			<iframe class="" src="https://website.outgrow.co/58714cd1df75740d5cd978e0" height="100%" width="100%" frameborder="0"></iframe>
		</div>
	</div>
	<!-- End: Modal Embed 3 -->
@endsection