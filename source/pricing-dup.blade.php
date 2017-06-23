@extends('_layouts.master')

@section('title', 'Pricing | Outgrow')

@section('metaDescription')
	<meta name="description" content="Simple pricing, No Hidden costs, No transaction based fees."/>
	<link rel="canonical" href="http://outgrow.co/pricing.html" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Pricing | Outgrow" />
	<meta property="og:description" content="Simple pricing, No Hidden costs, No transaction based fees." />
	<meta property="og:url" content="https://outgrow.co/pricing.html" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Simple pricing, No Hidden costs, No transaction based fees." />
	<meta name="twitter:title" content="Pricing | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('inlinescripts')
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/pricing-dup.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/sahil-hover.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/home-responsive.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/pricing-dup-res.css">
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/stylesheet.min.css' type='text/css' media='all'  />
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/js_composer.mina752.css?ver=4.11.2.1' type='text/css' media='all' />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('pageClass', '')

@section('pageId', 'pricing')

@section('content')
	<!-- Homepage section 1 start-->
	<section class="section section-1">
        <div class="container-fluid">
            <div class="col-xs-12 col-sm-12 text-center pricing-headingtop">
                <h3 class="plans-heading">PLANS AND PRICING</h3>
                <p class="plans-subheading">Simple pricing, No Hidden costs, No transaction based fees.</p>
                <section id="plan-cycle">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3 np billing-plan-list" id="plans">
                        <ul>
                            <li class="cycle-tab active" id="annually">
                                <a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan('y')">
                                    <i class="material-icons">check</i> Annual
                                </a>
                            </li>
                            <li class="cycle-tab" id="half-yearly">
                                <a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan('s')">
                                    <i class="material-icons">check</i> Semi-Annual
                                </a>
                            </li>
                            <li class="cycle-tab" id="monthly">
                                <a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan('m');">
                                    <i class="material-icons">check</i> Monthly
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="pricing-outer container">
                <table>

                    <colgroup></colgroup>
                    <colgroup></colgroup>
                    <colgroup></colgroup>
                    <colgroup></colgroup>

                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>
                                <h2>Premium</h2>
                                <p>$ 89.95</p>
                            </th>
                            <th>
                                <h2>Plus</h2>
                                <p>$ 49.95</p>
                                <p class="promo">Our most valuable package!</p>
                            </th>
                            <th>
                                <h2>Basic</h2>
                                <p>$ 19.95</p>
                            </th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>&nbsp;</th>
                            <td><a href="#">Start a free trial</a></td>
                            <td><a href="#">Start a free trial</a></td>
                            <td><a href="#">Start a free trial</a></td>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <th>Feature "Cras mattis" <span>Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</span></th>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>Lorem ipsum dolor sit amet</td>
                        </tr>
                        <tr>
                            <th>Feature "Donec ullamcorper" <span>Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismod.</span></th>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>Lorem ipsum dolor sit amet</td>
                        </tr>
                        <tr>
                            <th>Feature "Lorem ipsum" <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</span></th>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>&mdash;</td>
                        </tr>
                        <tr>
                            <th>Feature "Lorem ipsum" <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></th>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>&mdash;</td>
                        </tr>
                        <tr>
                            <th>Feature "Lorem ipsum" <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></th>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>&mdash;</td>
                            <td>&mdash;</td>
                        </tr>
                        <tr>
                            <th>Feature "Lorem ipsum" <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></th>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>&mdash;</td>
                            <td>&mdash;</td>
                        </tr>
                        </tr>
                    </tbody>

                </table>

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 np enterprise_pos">
                <div class="col-md-12 col-sm-12 col-xs-12 np text-center need-custom-plan">
                    <a class="" href="javascrpt:void(0);">
                        <i class="material-icons">headset_mic</i>need enterprise grade features? Contact us.
                    </a>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 np">
                    <div class="container-enterprise">
                        <div class=" enterprise-box-new text-center">
                            <h2 class="title">Enterprise Plan</h2>
                            <span class="border-center"></span>
                            <p>
                                Made especially for power users and agencies, this plan gives you full access with a dedicated account manager, API access and team training.
                            </p>
                            <button class="ic-launcher btn btn-white-red-outline btn-hover" id="intercom_trigger">contact us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section sec-allPlans">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 np">
                <h1 class="section-2-heading">
                    All Plans Include
                </h1>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 np rs-text-center">
                <div class="col-md-6 col-sm-6 col-xs-12 np allPlans-blocks allPlans-blocks-640">
                    <div class="col-md-2 col-sm-12 col-xs-12 np">
                        <img src="{{ $page->baseUrl }}/images/img-allPlans1.png" data-src="{{ $page->baseUrl }}/images/img-allPlans1.png">
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 np allPlans-blocks-right">
                        <h4>Email Notification</h4>
                        <p>An interactive what you see is what you get builder. No coding required.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 np allPlans-blocks allPlans-blocks-640">
                    <div class="col-md-2 col-sm-12 col-xs-12 np">
                        <img src="{{ $page->baseUrl }}/images/img-allPlans2.png" data-src="{{ $page->baseUrl }}/images/img-allPlans2.png">
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 np allPlans-blocks-right">
                        <h4>Embedding</h4>
                        <p>All plans come with the ability to create any experience, Calculator to graded or outcome quiz.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 np allPlans-blocks allPlans-blocks-640">
                    <div class="col-md-2 col-sm-12 col-xs-12 np">
                        <img src="{{ $page->baseUrl }}/images/img-allPlans3.png" data-src="{{ $page->baseUrl }}/images/img-allPlans3.png">
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 np allPlans-blocks-right">
                        <h4>Question types</h4>
                        <p>All templates come with an responsive ability.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 np allPlans-blocks allPlans-blocks-640">
                    <div class="col-md-2 col-sm-12 col-xs-12 np">
                        <img src="{{ $page->baseUrl }}/images/img-allPlans4.png" data-src="{{ $page->baseUrl }}/images/img-allPlans4.png">
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 np allPlans-blocks-right">
                        <h4>SEO</h4>
                        <p>An interactive what you see is what you get builder. No coding required.</p>
                    </div>
                </div>
            </div>
		</div>
    </section>

	<section class="section section-faq">
		<div class="container">
			<h1 class="section-2-heading mk-animate-element scale-up">
				FREQUENTLY ASK QUESTIONS
			</h1>
		</div>
	</section>
	<section class="section mk-animate-element scale-up">
		<div class="container-faqs">
		<div class="accordion"><div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-2">
					What happens during and after the trial period?
				</a>
				<div id="accordion-2" class="accordion-section-content">
					<p>When you sign up, you will be assigned to our Business Premium plan. You will have access to this plan for 7 days. Should you choose to continue with the business plan, you will have to add your payment method.
					</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-3">
					What are your billing cycles and payment options?
				</a>
				<div id="accordion-3" class="accordion-section-content">
					<p>You have the option to pay monthly, quarterly or annually. Of course, we offer heavy discounts if you buy for a longer duration.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-4">
					Any contracts or cancellation fees?
				</a>
				<div id="accordion-4" class="accordion-section-content">
					<p>For our Starter and Business premium tiers, we do not really have any contracts that need signatures. We have a simple SaaS based pricing with simple terms of service. For Enterprise customers though, we have a Service agreement which outlines SLAs and payment schedules etc.
				</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-5">
					How is my data handled?
				</a>
				<div id="accordion-5" class="accordion-section-content">
					<p>Very very securely. We use AWS serves which is basically the gold standard in hosting. We use industry benchmarked encryption for all sensitive data and subscribe to all major security measures to safeguard your data.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-6">
					Can I host on premises?
				</a>
				<div id="accordion-6" class="accordion-section-content">
					<p>Yes, you can. Just email us at support@outgrow.co.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-7">
					Can I white-label Outgrow’s tools?
				</a>
				<div id="accordion-7" class="accordion-section-content">
					<p>Yes, you can. But we will have to have a discussion around how we can make that work. Feel free to email us at support@outgrow.co and we will see what we can do.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-8">
					Can you build my calculators for me?
				</a>
				<div id="accordion-8" class="accordion-section-content">
					<p>Our DIY tool is pretty easy to use and learn, so you should be able to build your own calculators very very quickly. For our enterprise customers, we provide a 1 month onboarding where we help configure the first few calculators.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-9">
					Why should I upgrade?
				</a>
				<div id="accordion-9" class="accordion-section-content">
					<p>Well, calculators are awesome. But they are more awesome when you can run effective lead generation programs, analyze the data about visitors, use your own branding and use some of our premium design templates. </p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-10">
					Do you charge per lead?
				</a>
				<div id="accordion-10" class="accordion-section-content">
					<p>No, we charge a flat price as per your membership tier</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-11">
					Can I really build as many calculators as I want?
				</a>
				<div id="accordion-11" class="accordion-section-content">
					<p>Yes. We understand that you have tens if not hundreds of ideas and we want you to have unlimited creative space to bring your ideas to life.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-12">
					Can I get a test environment in case I do not want to publish my calculators?
				</a>
				<div id="accordion-12" class="accordion-section-content">
					<p>When you use the builder, just make sure you do not click “Publish”. That way, the calculator will neither be made public nor will it get indexed in search engines. If you want to preview the calculator, just click on “Preview” to see your edits reflect.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-13">
					I am an agency. Anything special for me?
				</a>
				<div id="accordion-13" class="accordion-section-content">
					<p>Sure. If you are an agency that works with multiple clients, we can figure out a mutually beneficial partnership. Feel free to email us at support@outgrow.co.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->
		</div><!--end .accordion-->
	</div>
	</section>
	<section class="section start-trial-cta mb0">
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
		"pricing": "{{ $page->baseUrl }}/js/pageScripts/pricing.js",
	}
@endsection