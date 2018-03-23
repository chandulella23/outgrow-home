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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')
	<script src="{{ $page->baseUrl }}/js/swiper.min.js"></script>
	<!-- <script src="{{ $page->baseUrl }}/js/jssor.min.js"></script>  -->

	<div class="review-page">
	
		<div class="section-main section-ranking">
			<section class="section section-7-top">
				<div class="container mobile-container">
					<h1 class="section-2-heading mk-animate-element scale-up">
						Top Ranked Content Marketing Tool
					</h1>
				</div>
			</section>
			<div class="swiper-container-ranking rs-hide">
				<div class="swiper-wrapper">
					<div class="swiper-slide" data-history="1">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_1.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow has the highest overall Usability Score among content marketing software</h3> -->
							<span>Outgrow has the highest overall Usability Score among content marketing software</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 2">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_2.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</h3> -->
							<span>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 3">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_3.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow listed as the most ROI-friendly Content Marketing Software</h3> -->
							<span>Outgrow listed as the most ROI-friendly Content Marketing Software</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 4">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_4.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow is listed as the number 1 content marketing software for small business</h3> -->
							<span>Outgrow is listed as the number 1 content marketing software for small business</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 5">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_5.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</h3> -->
							<span>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</span> 
						</div>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Arrows -->
				<!-- <div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div> -->
			</div>
			<script>
				var swiper = new Swiper('.swiper-container-ranking', {
					spaceBetween: 80,
					slidesPerView: 2,
					centeredSlides: true,
					loop: true,
					slideToClickedSlide: true,
					autoplay: 2500,
					paginationClickable: true,
					autoplayDisableOnInteraction: false,
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					pagination: '.swiper-pagination',
					// history: 'slide',
					
				});
			</script>

			<div class="swiper-container-ranking-res rs-show">
				<div class="swiper-wrapper">
					<div class="swiper-slide" data-history="1">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_1.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow has the highest overall Usability Score among content marketing software</h3> -->
							<span>Outgrow has the highest overall Usability Score among content marketing software</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 2">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_2.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</h3> -->
							<span>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 3">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_3.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow listed as the most ROI-friendly Content Marketing Software</h3> -->
							<span>Outgrow listed as the most ROI-friendly Content Marketing Software</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 4">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_4.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow is listed as the number 1 content marketing software for small business</h3> -->
							<span>Outgrow is listed as the number 1 content marketing software for small business</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 5">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_5.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</h3> -->
							<span>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</span> 
						</div>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Arrows -->
				<!-- <div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div> -->
			</div>
			<script>
				var swiper = new Swiper('.swiper-container-ranking-res', {
					spaceBetween: 50,
					slidesPerView: 1,
					centeredSlides: true,
					slideToClickedSlide: true,
					autoplay: 2500,
					paginationClickable: true,
					autoplayDisableOnInteraction: false,
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					pagination: '.swiper-pagination',
					// history: 'slide',
					
				});
			</script>

			<div class="swiper-container-ranking-lg rs-hide">
				<div class="swiper-wrapper">
					<div class="swiper-slide" data-history="1">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_1.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow has the highest overall Usability Score among content marketing software</h3> -->
							<span>Outgrow has the highest overall Usability Score among content marketing software</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 2">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_2.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</h3> -->
							<span>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 3">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_3.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow listed as the most ROI-friendly Content Marketing Software</h3> -->
							<span>Outgrow listed as the most ROI-friendly Content Marketing Software</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 4">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_4.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow is listed as the number 1 content marketing software for small business</h3> -->
							<span>Outgrow is listed as the number 1 content marketing software for small business</span> 
						</div>
					</div>
					<div class="swiper-slide" data-history="Slide 5">
						<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_5.jpg" />
						<div class="swiper-content">
							<!-- <h3>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</h3> -->
							<span>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</span> 
						</div>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Arrows -->
				<!-- <div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div> -->
			</div>
			<script>
				var swiper = new Swiper('.swiper-container-ranking-lg', {
					spaceBetween: 90,
					slidesPerView: 3,
					centeredSlides: true,
					loop: true,
					slideToClickedSlide: true,
					autoplay: 2500,
					paginationClickable: true,
					autoplayDisableOnInteraction: false,
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					pagination: '.swiper-pagination',
					// history: 'slide',
					
				});
			</script>

		</div>

		<!-- <div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 hide" id="liveReviews">
			<div class="container mobile-container">
				<div class="section-2-heading" style="color: rgb(34, 34, 34);">
					Critically Acclaimed
				</div>
				<div class="social-media-section">
					<div class="each-arrow-section">
						<div id="fb-img" class="arrow_box testactive" onclick="openTestimonial('fb')">
							<img src="//dzvexx2x036l1.cloudfront.net/facebookim.png"/> 
							<img src="//dzvexx2x036l1.cloudfront.net/facebookh.png" class="over over1"/>  
						</div>
			
						<div id="capterra-img" class="arrow_box" onclick="openTestimonial('capterra')">
							<img src="//dzvexx2x036l1.cloudfront.net/capterraimg.png"/>
							<img src="//dzvexx2x036l1.cloudfront.net/capterah.png" class="over over2"/>  
						</div>
			
						<div id="g2-img" class="arrow_box" onclick="openTestimonial('g2')">
							<img src="//dzvexx2x036l1.cloudfront.net/crowd.png"/> 
							<img src="//dzvexx2x036l1.cloudfront.net/crowdh.png" class="over over3"/> 
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1">
				<div class="container mobile-container protfolio-section">
					
					<div id="fb" class="protfolio-inner-section" data-repuso-grid="4406" data-website-id="0"></div>

					<div id="capterra" class="protfolio-inner-section testhide" data-repuso-grid="4407" data-website-id="0"></div>

					<div id="g2" class="protfolio-inner-section testhide" data-repuso-grid="4320" data-website-id="0"></div>
				</div>
			</div>
		</div> -->

		<!-- start static HTML of fb, capterra and g2 crowd -->
		 <div class="col-md-12 col-sm-12 col-xs-12 text-center np custom-embeds hide section-reviews" id="staticReviews">
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
												<img src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img src="images/testimonial-userImg-dapo.png">
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
												<img src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img src="images/testimonial-userImg-jona.png">
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
												<img src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img src="images/testimonial-userImg-va.png">
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
												<img src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img src="images/testimonial-userImg-bryce.png">
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
												<img src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img src="images/testimonial-userImg-rachel.png">
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
												<img src="images/testimonial-fb-mini.png">
											</a>
										</div>
										<img src="images/testimonial-userImg-jake.png">
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
												<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img src="images/testimonial-userImg1.jpg"> -->
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
												<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img src="images/testimonial-userImg1.jpg"> -->
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
												<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img src="images/testimonial-userImg1.jpg"> -->
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
												<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<img src="images/testimonial-userImg-ed.png"> 
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
												<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img src="images/testimonial-userImg1.jpg">  -->
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
												<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img src="images/testimonial-userImg1.jpg">  -->
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
												<img src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img src="images/testimonial-userImg1.jpg">
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
												<img src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img src="images/testimonial-userImg2.jpg">
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
												<img src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img src="images/testimonial-userImg3.jpg">
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
												<img src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img src="images/testimonial-userImg4.jpg">
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
												<img src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img src="images/testimonial-userImg5.jpg">
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
												<img src="images/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img src="images/testimonial-userImg6.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div> 
		<!-- end static HTML of fb, capterra and g2 crowd -->

		<div class="col-md-12 col-sm-12 col-xs-12 text-center np hide section-reviews" id="liveReviews">
			<div class="container mobile-container">
				<div class="section-2-heading" style="color: rgb(34, 34, 34);">
					Outgrow Review By <span>“Capterra” </span>
				</div>
				<!-- <div class="social-media-section">
					<div class="each-arrow-section">
						<div id="fb-img" class="arrow_box testactive" onclick="openTestimonial('fb')">
							<img src="//dzvexx2x036l1.cloudfront.net/facebookim.png"/> 
							<img src="//dzvexx2x036l1.cloudfront.net/facebookh.png" class="over over1"/>  
						</div>
			
						<div id="capterra-img" class="arrow_box" onclick="openTestimonial('capterra')">
							<img src="//dzvexx2x036l1.cloudfront.net/capterraimg.png"/>
							<img src="//dzvexx2x036l1.cloudfront.net/capterah.png" class="over over2"/>  
						</div>
			
						<div id="g2-img" class="arrow_box" onclick="openTestimonial('g2')">
							<img src="//dzvexx2x036l1.cloudfront.net/crowd.png"/> 
							<img src="//dzvexx2x036l1.cloudfront.net/crowdh.png" class="over over3"/> 
						</div>
					</div>
				</div> -->
			</div>
			
			<!-- <div class="col-md-12 col-sm-12 col-xs-12 text-center np">
				<div class="container mobile-container protfolio-section">
					
					<div id="fb" class="protfolio-inner-section" data-repuso-grid="4406" data-website-id="0"></div>

					<div id="capterra" class="protfolio-inner-section testhide" data-repuso-grid="4407" data-website-id="0"></div>

					<div id="g2" class="protfolio-inner-section testhide" data-repuso-grid="4320" data-website-id="0"></div>
				</div>
			</div> -->

			<div class="col-md-12 col-sm-12 col-xs-12 text-center np">
				<div class="container mobile-container protfolio-section">
					<div class="rating-block-outer">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center np rating-block-inner">
							<div class="col-md-5 col-sm-5 col-xs-12 text-center np rating-block-left">
								<div class="rating-table-cell">
									<img src="{{ $page->baseUrl }}/images/review_page_capterra.jpg" alt="Capterra logo image" />
									<div class="rating-icons">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<span class="rating-value">5/5</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12 text-center np rating-block-right">
								<div class="rating-table-cell">
									<img src="{{ $page->baseUrl }}/images/review_page_capterra_rating.jpg" alt="Capterra rating image" />
								</div>
							</div>
						</div>
					</div>
					<div id="capterra" class="protfolio-inner-section" data-repuso-grid="4407" data-website-id="0"></div>
				</div>
			</div>

			<div class="section-2-heading g2" style="color: rgb(34, 34, 34);">
				Outgrow Review By <span>“G2 Crowd” </span>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 text-center np g2">
				<div class="container mobile-container protfolio-section">
					<div class="rating-block-outer">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center np rating-block-inner">
							<div class="col-md-5 col-sm-5 col-xs-12 text-center np rating-block-left">
								<div class="rating-table-cell">
									<img src="{{ $page->baseUrl }}/images/review_page_g2crowd.jpg" alt="g2 crowd logo image" />
									<div class="rating-icons">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<span class="rating-value">4.9/5</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12 text-center np rating-block-right">
								<div class="rating-table-cell">
									<img src="{{ $page->baseUrl }}/images/review_page_g2crowd_rating.jpg" alt="g2 crowd rating image" />
								</div>
							</div>
						</div>
					</div>
					<div id="g2" class="protfolio-inner-section" data-repuso-grid="4320" data-website-id="0"></div>
				</div>
			</div>

			<div class="section-2-heading fb" style="color: rgb(34, 34, 34);">
				Outgrow Review By <span>“Facebook” </span>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 text-center np fb">
				<div class="container mobile-container protfolio-section">
					<div class="rating-block-outer">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center np rating-block-inner">
							<div class="col-md-5 col-sm-5 col-xs-12 text-center np rating-block-left">
								<div class="rating-table-cell">
									<img src="{{ $page->baseUrl }}/images/review_page_fb.jpg" alt="Fb logo image" />
									<div class="rating-icons">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<span class="rating-value">4.8/5</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12 text-center np rating-block-right">
								<div class="rating-table-cell">
									<img src="{{ $page->baseUrl }}/images/review_page_fb_rating.jpg" alt="Fb rating image" />
								</div>
							</div>
						</div>
					</div>
					<div id="fb" class="protfolio-inner-section" data-repuso-grid="4406" data-website-id="0"></div>
				</div>
			</div>

			<!-- <div class="section-2-heading am" style="color: rgb(34, 34, 34);">
				Outgrow Review By <span>"AM Review" </span>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 text-center np am">
				<div class="container mobile-container protfolio-section">
					<div class="col-md-8 np"><img src="{{ $page->baseUrl }}/images/review_page_am.png" alt="am review image" /></div>
					<div class="col-md-3 np pull-right">
						<div class="am-review">
							<img src="{{ $page->baseUrl }}/images/review_page_amlogo.jpg" alt="am review image" />
							<span>Outgrow Review <br/>Honest Review by <br/><span>Danny & Special Bonuses </span>
						</div>
						<p>
							If you think that putting more content will help your business grow bigger, 
							then you’d better think again. In fact, the majority of users admit that they are bored of lengthy posts of ebooks, reviews, and so on. In other words, they want to be helped, not tricked into
							entering their emails. <br/><br/>
							Calculators and quizzes are perfect solution, as they can provide visitors...
							<a href="javascript:void(0);" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
						</p>
					</div>
				</div>
			</div> -->

			<div class="section-2-heading google" style="color: rgb(34, 34, 34);">
				Outgrow Review By <span>“Google” </span>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 text-center np google">
				<div class="container mobile-container protfolio-section">
					<div class="rating-block-outer">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center np rating-block-inner">
							<div class="col-md-5 col-sm-5 col-xs-12 text-center np rating-block-left">
								<div class="rating-table-cell">
									<img src="{{ $page->baseUrl }}/images/review_page_google.jpg" alt="google logo image" />
									<div class="rating-icons">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<span class="rating-value">5.0/5</span>
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12 text-center np rating-block-right">
								<div class="rating-table-cell">
									<img src="{{ $page->baseUrl }}/images/review_page_google_rating.jpg" alt="google rating image" />
								</div>
							</div>
						</div>
					</div>
					<div id="google" class="protfolio-inner-section" data-repuso-grid="5402" data-website-id="0"></div>
				</div>
			</div>

		</div>

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
		</script>	

	</div>

@endsection

@section('inlinescripts')
@endsection


@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"jssor": "{{ $page->baseUrl }}/js/jssor.min.js",
		"index": "{{ $page->baseUrl }}/js/pageScripts/index.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
	}
@endsection
