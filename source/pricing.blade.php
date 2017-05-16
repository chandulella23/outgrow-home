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

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/custom-sa.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/sahil-hover.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/home-responsive.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/pricing-responsive.css">
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
				        	<li class="cycle-tab active" id="annually"><a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan('y')">Annual</a>
				            </li>
				      		<li class="cycle-tab" id="half-yearly"><a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan('s')">Semi-Annual</a>
				            </li>
				             <li class="cycle-tab" id="monthly"><a href="javascript:void(0);" class="hvr-sweep-to-right view" onclick="showPlan('m');">Monthly</a>
				            </li>
				        </ul>
				    </div>
				</section>
				<div class="pricing-outer container">
				<div class="col-xs-12 col-sm-12 col-md-12 section-1-right pricing-cards" id="m">
			    <div class="starter-box billing-grey enterprise-margin">
			        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
			            <h3 class="plan-title">Freelancer<br></h3>
			            <h4>(Monthly)</h4><span class="border-center"></span>
			            <br>
			            <h3 class="plan-price"><span>$45/Month</span></h3>
			            <!--<p>For students or freelancers who want to explore interactive calculators</p>-->
			            <div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
			            </div>
			        </div>
			        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="freelancer_m">
			            <ul class="billing-list">
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;300 Leads</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;6000 Visits</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;3 Calculator or Quiz</span></a>
							</li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;1 Collaborator</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Template</span></a>
			                </li>
			                <li>
			                	<a class="">
			                		<span class="mat-icon"></span>
			                		<span class="list-name capitalize">&nbsp;Basic Analytics</span>
			                		<div class="help-tip pricing-helptip">
							        	<i class="material-icons">info_outline</i>
							        	<div class="help-checktip">You get access to high level conversion and traffic analytics as well as leads' contact information.</div>
							        </div>
			                	</a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Customizations</span>
							<div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">Use your brand logo, get predefined color palettes and add social share call to actions to drive viral traffic.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Outgrow Branding</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Export Spreadsheet</span>
							<div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">View (or download) lead contact information in a Google spreadsheet.</div>
					        </div>
							</a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Support Docs</span></a>
			                </li>
			            </ul>
			        </div>
			        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('freelancer_m')">
			            <div><i class="material-icons" id="freelancer_m_arrow">keyboard_arrow_down</i>
			                <p class="more-info" id="freelancer_m_more">More Info</p>
			            </div>
			        </a>
			    </div>
			    <div class="starter-box billing-grey ">
			        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
			            <h3 class="plan-title">Essentials<br></h3>
			            <h4>(Monthly)</h4><span class="border-center"></span>
			            <br>
			            <h3 class="plan-price">
			            	<span>$115/Month</span>
			            </h3>
			            <div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
			            </div>
			        </div>
			        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="essentials_m">
			            <ul class="billing-list">
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;1,050 Leads</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;21,000 Visits</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name ">&nbsp;Unlimited Calculators or Quizzes</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;3 Collaborators</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Premium Templates</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Analytics</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You get access to detailed conversion and traffic analytics as well as leads' contact information and responses.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Standard Customizations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You can show custom messages, have custom call to actions, use your brand colors, add logic jump, and use advanced formulas. </div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Light Outgrow Branding</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Integrations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You can sync user's contact information using Zapier and native integrations.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Support</span></a>
			                </li>
			            </ul>
			        </div>
			        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('essentials_m')">
			            <div><i class="material-icons" id="essentials_m_arrow">keyboard_arrow_down</i>
			                <p class="more-info" id="essentials_m_more">More Info</p>
			            </div>
			        </a>
			    </div>
			    <div class="business-box billing-white ">
			        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-white-top business-box-xshadow"><span class="ribbon">Most Popular</span>
			            <h3 class="plan-title">Business<br></h3>
			            <h4>(Monthly)</h4><span class="border-center"></span>
			            <br>
			            <h3 class="plan-price"><span>$720/Month</span></h3>
			            <div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
			            </div>
			        </div>
			        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-white-bottom" id="business_m">
			            <ul class="billing-list">
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;15,000 Leads</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;300,000 Visits</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name ">&nbsp;Unlimited Calculators or Quizzes</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;10 Collaborators</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Premium Templates</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Analytics</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You get access to detailed conversion and traffic analytics as well as leads' contact information and responses.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Customization</span>
							<div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You can show custom messages, have custom call to actions, use your brand colors, add logic jump, use advanced formulas and also add charts and graphs.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;No Outgrow Branding</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Integrations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">Send all lead data including contact information and quiz responses.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Priority Support</span></a>
			                </li>
			            </ul>
			        </div>
			        <a href="javascript:void(0);" class="toggle-dots-grey" onclick="show('business_m')">
			            <div><i class="material-icons" id="business_m_arrow">keyboard_arrow_down</i>
			                <p class="more-info" id="business_m_more">More Info</p>
			            </div>
			        </a>
			    </div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 section-1-right pricing-cards " id="s">
			    <div class="starter-box billing-grey enterprise-margin">
			        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
			            <h3 class="plan-title">Freelancer<br></h3>
			            <h4>(Semi-annual)</h4><span class="border-center"></span>
			            <br>
			            <h3 class="plan-price">
			            	<span class="strike-off strike-price">$45/Month</span>
			            	<span>$30/Month</span>
			            </h3>
			            <div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
			            </div>
			        </div>
			        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="freelancer_m">
			            <ul class="billing-list">
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;300 Leads</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;6,000 Visits</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;3 Calculator or Quiz</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;1 Collaborator</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Template</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Analytics</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You get access to high level conversion and traffic analytics as well as leads' contact information.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Customizations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">Use your brand logo, get predefined color palettes and add social share call to actions to drive viral traffic.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Outgrow Branding</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Export Spreadsheet</span>
							<div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">View (or download) lead contact information in a Google spreadsheet.</div>
					        </div>
							</a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Support Docs</span></a>
			                </li>
			            </ul>
			        </div>
			        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('freelancer_m')">
			            <div><i class="material-icons" id="freelancer_m_arrow">keyboard_arrow_down</i>
			                <p class="more-info" id="freelancer_m_more">More Info</p>
			            </div>
			        </a>
			    </div>
			    <div class="starter-box billing-grey ">
			        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
			            <h3 class="plan-title">Essentials<br></h3>
			            <h4>(Semi-annual)</h4><span class="border-center"></span>
			            <br>
			            <h3 class="plan-price">
			            	<span class="strike-off strike-price">$115/Month</span>
			            	<span>$105/Month</span>
			            </h3>
			            <div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
			            </div>
			        </div>
			        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="essentials_m">
			            <ul class="billing-list">
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;1,050 Leads</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;21,000 Visits</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name ">&nbsp;Unlimited Calculators or Quizzes</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;3 Collaborators</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Premium Templates</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Analytics</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You get access to detailed conversion and traffic analytics as well as leads' contact information and responses.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Standard Customizations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You can show custom messages, have custom call to actions, use your brand colors, add logic jump, and use advanced formulas. </div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Light Outgrow Branding</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Integrations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You can sync user's contact information using Zapier and native integrations.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Support</span></a>
			                </li>
			            </ul>
			        </div>
			        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('essentials_m')">
			            <div><i class="material-icons" id="essentials_m_arrow">keyboard_arrow_down</i>
			                <p class="more-info" id="essentials_m_more">More Info</p>
			            </div>
			        </a>
			    </div>
			    <div class="business-box billing-white ">
			        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-white-top business-box-xshadow"><span class="ribbon">Most Popular</span>
			            <h3 class="plan-title">Business<br></h3>
			            <h4>(Semi-annual)</h4><span class="border-center"></span>
			            <br>
			            <h3 class="plan-price">
			            	<span class="strike-off strike-price whitebg">$720/Month</span>
			            	<span>$667/Month</span>
			            </h3>
			            <div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
			            </div>
			        </div>
			        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-white-bottom" id="business_m">
			            <ul class="billing-list">
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;15,000 Leads</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;300,000 Visits</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name ">&nbsp;Unlimited Calculators or Quizzes</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;10 Collaborators</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Premium Templates</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Analytics</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You get access to detailed conversion and traffic analytics as well as leads' contact information and responses.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Customization</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You can show custom messages, have custom call to actions, use your brand colors, add logic jump, use advanced formulas and also add charts and graphs.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;No Outgrow Branding</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Integrations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">Send all lead data including contact information and quiz responses.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Priority Support</span></a>
			                </li>
			            </ul>
			        </div>
			        <a href="javascript:void(0);" class="toggle-dots-grey" onclick="show('business_m')">
			            <div><i class="material-icons" id="business_m_arrow">keyboard_arrow_down</i>
			                <p class="more-info" id="business_m_more">More Info</p>
			            </div>
			        </a>
			    </div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 section-1-right pricing-cards active" id="y">
			    <div class="starter-box billing-grey enterprise-margin">
			        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
			            <h3 class="plan-title">Freelancer<br></h3>
			            <h4>(Annual)</h4><span class="border-center"></span>
			            <br>
			            <h3 class="plan-price">
			            	<span class="strike-off strike-price">$45/Month</span>
			            	<span>$25/Month</span>
			            </h3>
			            <div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
			            </div>
			        </div>
			        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="freelancer_m">
			            <ul class="billing-list">
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;300 Leads</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;6,000 Visits</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;3 Calculator or Quiz</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;1 Collaborator</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Template</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Analytics</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You get access to high level conversion and traffic analytics as well as leads' contact information.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Customizations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">Use your brand logo, get predefined color palettes and add social share call to actions to drive viral traffic.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Outgrow Branding</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Export Spreadsheet</span>
							<div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">View (or download) lead contact information in a Google spreadsheet.</div>
					        </div>
							</a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Support Docs</span></a>
			                </li>
			            </ul>
			        </div>
			        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('freelancer_m')">
			            <div><i class="material-icons" id="freelancer_m_arrow">keyboard_arrow_down</i>
			                <p class="more-info" id="freelancer_m_more">More Info</p>
			            </div>
			        </a>
			    </div>
			    <div class="starter-box billing-grey ">
			        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
			            <h3 class="plan-title">Essentials<br></h3>
			            <h4>(Annual)</h4><span class="border-center"></span>
			            <br>
			            <h3 class="plan-price">
			            	<span class="strike-off strike-price">$115/Month</span>
			            	<span>$95/Month</span>
			            </h3>
			            <div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
			            </div>
			        </div>
			        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="essentials_m">
			            <ul class="billing-list">
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;1,050 Leads</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;21,000 Visits</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name ">&nbsp;Unlimited Calculators or Quizzes</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;3 Collaborators</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Premium Templates</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Analytics</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You get access to detailed conversion and traffic analytics as well as leads' contact information and responses.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Standard Customizations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You can show custom messages, have custom call to actions, use your brand colors, add logic jump, and use advanced formulas. </div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Light Outgrow Branding</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Integrations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You can sync user's contact information using Zapier and native integrations.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Basic Support</span></a>
			                </li>
			            </ul>
			        </div>
			        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('essentials_m')">
			            <div><i class="material-icons" id="essentials_m_arrow">keyboard_arrow_down</i>
			                <p class="more-info" id="essentials_m_more">More Info</p>
			            </div>
			        </a>
			    </div>
			    <div class="business-box billing-white ">
			        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-white-top business-box-xshadow"><span class="ribbon">Most Popular</span>
			            <h3 class="plan-title">Business<br></h3>
			            <h4>(Annual)</h4><span class="border-center"></span>
			            <br>
			            <h3 class="plan-price">
			            	<span class="strike-off strike-price whitebg">$720/Month</span>
			            	<span>$600/Month</span>
			            </h3>
			            <div class="col-md-12 col-sm-12 col-xs-12 np"><a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
			            </div>
			        </div>
			        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-white-bottom" id="business_m">
			            <ul class="billing-list">
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;15,000 Leads</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;300,000 Visits</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name">&nbsp;Unlimited Calculators or Quizzes</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;10 Collaborators</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Premium Templates</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Analytics</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You get access to detailed conversion and traffic analytics as well as leads' contact information and responses.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Customization</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">You can show custom messages, have custom call to actions, use your brand colors, add logic jump, use advanced formulas and also add charts and graphs.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;No Outgrow Branding</span></a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Advanced Integrations</span>
			                <div class="help-tip pricing-helptip">
					        	<i class="material-icons">info_outline</i>
					        	<div class="help-checktip">Send all lead data including contact information and quiz responses.</div>
					        </div>
			                </a>
			                </li>
			                <li><a class=""><span class="mat-icon"></span><span class="list-name capitalize">&nbsp;Priority Support</span></a>
			                </li>
			            </ul>
			        </div>
			        <a href="javascript:void(0);" class="toggle-dots-grey" onclick="show('business_m')">
			            <div><i class="material-icons" id="business_m_arrow">keyboard_arrow_down</i>
			                <p class="more-info" id="business_m_more">More Info</p>
			            </div>
			        </a>
			    </div>
			</div>
			</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 np enterprise_pos">
				<div class="col-md-12 col-sm-12 col-xs-12 np text-center need-custom-plan">
		            <a class="" href="javascrpt:void(0);">
		              <i class="material-icons">headset_mic</i>
		              need enterprise grade features? Contact us.
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
			      			<button class="ic-launcher btn btn-white-red-outline btn-hover intercom_trigger">contact us</button>
			      		</div>
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
	<section class="section start-trial-cta">
		<div class="container-fluid np">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="bg1-img">
					<a href="#" id="trialAnchor">
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