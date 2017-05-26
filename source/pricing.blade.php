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
                <div class="col-xs-12 col-sm-12 col-md-12 section-1-right pricing-cards" id="m">
                    <div class="col-xs-12 col-sm-12 col-md-12 np feature-list">
                        <ul>
                            <li><a href="">Leads & Visits</a></li>
                            <li><a href="">No. of Experiences</a></li>
                            <li><a href="">Collaborators</a></li>
                            <li><a href="">Lead generation</a></li>
                            <li><a href="">Domain Hosting</a></li>
                            <li><a href="">Charts and Graphs</a></li>
                            <li><a href="">Display Customizations</a></li>
                            <li><a href="">Branding</a></li>
                            <li><a href="">Integrations</a></li>
                            <li><a href="">Templates</a></li>
                            <li><a href="">Call To Actions</a></li>
                            <li><a href="">Formulas</a></li>
                            <li><a href="">Logic Jump</a></li>
                            <li><a href="">Analytics</a></li>
                            <li><a href="">Support</a></li>
                        </ul>
                    </div>
                    <div class="starter-box billing-grey enterprise-margin">
                        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top">
                            <!--<h4>(Monthly)</h4>
                            <span class="border-center"></span><br>-->
                            <h3 class="plan-price"><span>$45 <sup>/ Mo.</sup></span></h3>                        
                            <h3 class="plan-title">Freelancer</h3>
                            <!--<p>For students or freelancers who want to explore interactive calculators</p>-->
                            <div class="col-md-12 col-sm-12 col-xs-12 np">
                                <a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="freelancer_m">
                            <ul class="billing-list">
                                <li>
                                    <span class="feature-list-name">Leads & Visits</span>
                                    <span class="mat-icon vis-hidden"></span>                    
                                    <span class="list-name">&nbsp;300 & 6000</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">No. of Experiences</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;3</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Collaborators</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;1</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Lead generation</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add lead generation capabilities to any calculator or quiz.</div>
                                    </div>
                                        
                                </li>
                                <li>
                                    <span class="feature-list-name">Domain Hosting</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Outgrow Domain</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Experiences are hosted on <a href="https://yourcompany.outgrow.co/" data-target="_blank" class="text-red">"yourcompany.outgrow.co"</a></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Charts and Graphs</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;No Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Display Customizations</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo and customize look and feel using predefined color palettes.</div>
                                    </div>
                                </li>                           
                                <li>
                                    <span class="feature-list-name">Branding</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Outgrow Branding</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">A small discreet Outgrow logo at the bottom of the screen and a subtle plug in social shares.</div>
                                    </div>
                                </li>                            
                                <li>
                                    <span class="feature-list-name">Integrations</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Excel Export</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">View (or download) lead contact information in a Google spreadsheet.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Templates</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Basic Templates</span>
                                </li>  
                                <li>
                                    <span class="feature-list-name">Call To Actions</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Social Shares</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add Facebook, Twitter and Linkedin share buttons to power viral sharing.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Formulas</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Basic Operators</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can use basic mathematical operators like +,-, x and /.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Logic Jump</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;No Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Analytics</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Traffic Details, Lead Data</span>
                                        
                                </li>
                                <li>
                                    <span class="feature-list-name">Support</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Support Docs</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You will have access to support docs.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('freelancer_m')">
                            <div>
                                <i class="material-icons" id="freelancer_m_arrow">keyboard_arrow_down</i>
                                <p class="more-info" id="freelancer_m_more">More Info</p>
                            </div>
                        </a>
                    </div>
                    <div class="starter-box billing-grey ">
                        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
                            <!--<h4>(Monthly)</h4>
                            <span class="border-center"></span><br>-->
                            <h3 class="plan-price"><span>$115 <sup>/ Mo.</sup></span></h3>
                            <h3 class="plan-title">Essentials</h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 np">
                                <a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="essentials_m">
                            <ul class="billing-list">
                                <li>
                                    <span class="feature-list-name">Leads & Visits</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;1,000 & 20,000</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">No. of Experiences</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;Unlimited</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Collaborators</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name ">&nbsp;3</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Lead generation</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Domain Hosting</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Outgrow Domain</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Experiences are hosted on <a href="https://yourcompany.outgrow.co/" data-target="_blank" class="text-red">"yourcompany.outgrow.co"</a></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Charts and Graphs</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;No Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Display Customizations</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo and customize look and feel using predefined color palettes.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Branding</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Light Outgrow Branding</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">A small discreet Outgrow logo at the bottom of the screen.</div>
                                    </div>
                                </li>                            
                                <li>
                                    <span class="feature-list-name">Integrations</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Integration Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can sync user's contact information using Zapier and native integrations.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Templates</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;All Templates</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Call To Actions</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Social Follows & Redirects </span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Formulas</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Advanced Operators</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Logic Jump</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Apply logic jump to supported templates to improve personalization.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Analytics</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;User Responses</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Support</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Basic Support</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('essentials_m')">
                            <div>
                                <i class="material-icons" id="essentials_m_arrow">keyboard_arrow_down</i>
                                <p class="more-info" id="essentials_m_more">More Info</p>
                            </div>
                        </a>
                    </div>
                    <div class="business-box billing-white ">
                        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-white-top business-box-xshadow">
                            <span class="ribbon">Most Popular</span>
                            <!--<h4>(Monthly)</h4>
                            <span class="border-center"></span><br>-->
                            <h3 class="plan-price"><span>$720 <sup>/ Mo.</sup></span></h3>
                            <h3 class="plan-title">Business</h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 np">
                                <a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-white-bottom" id="business_m">
                            <ul class="billing-list">
                                <li>
                                    <span class="feature-list-name">Leads & Visits</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;15,000 & 30,000</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">No. of Experiences</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;Unlimited</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Collaborators</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;10</span>
                                </li>
                                <li>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Email Validation</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Domain Hosting</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Custom Domain</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Experiences are hosted on <a href="https://yourcompany.outgrow.co/" data-target="_blank" class="text-red">"yourcompany.outgrow.co"</a></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Charts and Graphs</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Increase interactivity by adding charts, graphs and tables to your experiences.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo, customize look & feel using custom colors, tinges and add custom HTML.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Branding</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;No Outgrow Branding</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">No Outgrow branding is displayed on any screen.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Integrations</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Webhooks & API</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Send all lead data using direct integration, Zapier as well as Webhooks and API.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Templates</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;All Templates</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Call To Actions</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Social Follows & Redirects </span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages and use dynamic variables.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Formulas</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Advanced Operators</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Logic Jump</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Apply logic jump to supported templates to improve personalization.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Analytics</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Funnel Visualisation</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Support</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Priority Support</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You will have access to support docs, email support as well as live chat.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="toggle-dots-grey" onclick="show('business_m')">
                            <div>
                                <i class="material-icons" id="business_m_arrow">keyboard_arrow_down</i>
                                <p class="more-info" id="business_m_more">More Info</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 section-1-right pricing-cards " id="s">
                    <div class="col-xs-12 col-sm-12 col-md-12 np feature-list">
                        <ul>
                            <li><a href="">Leads & Visits</a></li>
                            <li><a href="">No. of Experiences</a></li>
                            <li><a href="">Collaborators</a></li>
                            <li><a href="">Lead generation</a></li>
                            <li><a href="">Domain Hosting</a></li>
                            <li><a href="">Charts and Graphs</a></li>
                            <li><a href="">Display Customizations</a></li>
                            <li><a href="">Branding</a></li>
                            <li><a href="">Integrations</a></li>
                            <li><a href="">Templates</a></li>
                            <li><a href="">Call To Actions</a></li>
                            <li><a href="">Formulas</a></li>
                            <li><a href="">Logic Jump</a></li>
                            <li><a href="">Analytics</a></li>
                            <li><a href="">Support</a></li>
                        </ul>
                    </div>
                    <div class="starter-box billing-grey enterprise-margin">
                        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
                            <!--<h4>(Semi-annual)</h4>
                            <span class="border-center"></span><br>-->
                            <h3 class="plan-price">
                                <span class="strike-off strike-price">$45 <sup>/ Mo.</sup></span>
                                <span>$30 <sup>/ Mo.</sup></span>
                            </h3>
                            <h3 class="plan-title">Freelancer</h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 np">
                                <a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="freelancer_m">
                            <ul class="billing-list">
                                <li>
                                    <span class="feature-list-name">Leads & Visits</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;300 & 6000</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">No. of Experiences</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;3</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Collaborators</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;1</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Lead generation</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>                                        
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add lead generation capabilities to any calculator or quiz.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Domain Hosting</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Outgrow Domain</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Experiences are hosted on <a href="https://yourcompany.outgrow.co/" data-target="_blank" class="text-red">"yourcompany.outgrow.co"</a></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Charts and Graphs</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;No Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Display Customizations</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo and customize look and feel using predefined color palettes.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Branding</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Outgrow Branding</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">A small discreet Outgrow logo at the bottom of the screen and a subtle plug in social shares.</div>
                                    </div>                                        
                                </li>
                                <li>
                                    <span class="feature-list-name">Integrations</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Excel Export</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">View (or download) lead contact information in a Google spreadsheet.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Templates</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Basic Templates</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo and customize look and feel using predefined color palettes.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Call To Actions</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Social Shares</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add Facebook, Twitter and Linkedin share buttons to power viral sharing.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Formulas</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Basic Operators</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can use basic mathematical operators like +,-, x and /.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Logic Jump</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;No Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Analytics</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Traffic Details, Lead Data</span>
                                        
                                </li>
                                <li>
                                    <span class="feature-list-name">Support</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Support Docs</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You will have access to support docs.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('freelancer_m')">
                            <div>
                                <i class="material-icons" id="freelancer_m_arrow">keyboard_arrow_down</i>
                                <p class="more-info" id="freelancer_m_more">More Info</p>
                            </div>
                        </a>
                    </div>
                    <div class="starter-box billing-grey ">
                        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
                            <!--<h4>(Semi-annual)</h4>
                            <span class="border-center"></span><br>-->
                            <h3 class="plan-price">
                                <span class="strike-off strike-price">$115 <sup>/ Mo.</sup></span>
                                <span>$105 <sup>/ Mo.</sup></span>
                            </h3>                        
                            <h3 class="plan-title">Essentials</h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 np">
                                <a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="essentials_m">
                            <ul class="billing-list">
                                <li>
                                    <span class="feature-list-name">Leads & Visits</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;1,000 & 20,000</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">No. of Experiences</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;Unlimited</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Collaborators</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name ">&nbsp;3</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Lead generation</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Domain Hosting</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Outgrow Domain</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Experiences are hosted on <a href="https://yourcompany.outgrow.co/" data-target="_blank" class="text-red">"yourcompany.outgrow.co"</a></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Charts and Graphs</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;No Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Display Customizations</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo and customize look and feel using predefined color palettes.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Branding</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Light Outgrow Branding</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">A small discreet Outgrow logo at the bottom of the screen.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Integrations</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Integration Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can sync user's contact information using Zapier and native integrations.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Templates</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;All Templates</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Call To Actions</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Social Follows & Redirects </span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Formulas</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Advanced Operators</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Logic Jump</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Apply logic jump to supported templates to improve personalization.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Analytics</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;User Responses</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Support</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Basic Support</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('essentials_m')">
                            <div>
                                <i class="material-icons" id="essentials_m_arrow">keyboard_arrow_down</i>
                                <p class="more-info" id="essentials_m_more">More Info</p>
                            </div>
                        </a>
                    </div>
                    <div class="business-box billing-white ">
                        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-white-top business-box-xshadow">
                            <span class="ribbon">Most Popular</span>
                            <!--<h4>(Semi-annual)</h4>
                            <span class="border-center"></span><br>-->
                            <h3 class="plan-price">
                                <span class="strike-off strike-price whitebg">$720 <sup>/ Mo.</sup></span>
                                <span>$667 <sup>/ Mo.</sup></span>
                            </h3>
                            <h3 class="plan-title">Business<br></h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 np">
                                <a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-white-bottom" id="business_m">
                            <ul class="billing-list">
                                <li>
                                    <span class="feature-list-name">Leads & Visits</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;15,000 & 30,000</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">No. of Experiences</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;Unlimited</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Collaborators</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;10</span>
                                </li>
                                <li>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Email Validation</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Domain Hosting</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Custom Domain</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Experiences are hosted on <a href="https://yourcompany.outgrow.co/" data-target="_blank" class="text-red">"yourcompany.outgrow.co"</a></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Charts and Graphs</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Increase interactivity by adding charts, graphs and tables to your experiences.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo, customize look & feel using custom colors, tinges and add custom HTML.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Branding</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;No Outgrow Branding</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">No Outgrow branding is displayed on any screen.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Integrations</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Webhooks & API</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Send all lead data using direct integration, Zapier as well as Webhooks and API.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Templates</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;All Templates</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can show custom messages, have custom call to actions, use your brand colors, add logic jump, use advanced formulas and also add charts and graphs.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Call To Actions</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Social Follows & Redirects </span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages and use dynamic variables.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Formulas</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Advanced Operators</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Logic Jump</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Apply logic jump to supported templates to improve personalization.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Analytics</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Funnel Visualisation</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Support</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Priority Support</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You will have access to support docs, email support as well as live chat.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="toggle-dots-grey" onclick="show('business_m')">
                            <div>
                                <i class="material-icons" id="business_m_arrow">keyboard_arrow_down</i>
                                <p class="more-info" id="business_m_more">More Info</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 section-1-right pricing-cards active" id="y">
                    <div class="col-xs-12 col-sm-12 col-md-12 np feature-list">
                        <ul>
                            <li><a href="">Leads & Visits</a></li>
                            <li><a href="">No. of Experiences</a></li>
                            <li><a href="">Collaborators</a></li>
                            <li><a href="">Lead generation</a></li>
                            <li><a href="">Domain Hosting</a></li>
                            <li><a href="">Charts and Graphs</a></li>
                            <li><a href="">Display Customizations</a></li>
                            <li><a href="">Branding</a></li>
                            <li><a href="">Integrations</a></li>
                            <li><a href="">Templates</a></li>
                            <li><a href="">Call To Actions</a></li>
                            <li><a href="">Formulas</a></li>
                            <li><a href="">Logic Jump</a></li>
                            <li><a href="">Analytics</a></li>
                            <li><a href="">Support</a></li>
                        </ul>
                    </div>
                    <div class="starter-box billing-grey enterprise-margin">
                        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
                            <!--<h4>(Annual)</h4>
                            <span class="border-center"></span><br>-->
                            <h3 class="plan-price">
                                <span class="strike-off strike-price">$45 <sup>/ Mo.</sup></span>
                                <span>$25 <sup>/ Mo.</sup></span>
                            </h3>
                            <h3 class="plan-title">Freelancer</h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 np">
                                <a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="freelancer_m">
                            <ul class="billing-list">
                                <li>
                                    <span class="feature-list-name">Leads & Visits</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;300 & 6000</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">No. of Experiences</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;3</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Collaborators</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;1</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Lead generation</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add lead generation capabilities to any calculator or quiz.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Domain Hosting</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Outgrow Domain</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Experiences are hosted on <a href="https://yourcompany.outgrow.co/" data-target="_blank" class="text-red">"yourcompany.outgrow.co"</a></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Charts and Graphs</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;No Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Display Customizations</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo and customize look and feel using predefined color palettes.</div>
                                    </div>
                                </li>                          
                                <li>
                                    <span class="feature-list-name">Branding</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Outgrow Branding</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">A small discreet Outgrow logo at the bottom of the screen and a subtle plug in social shares.</div>
                                    </div>                                
                                </li>
                                <li>
                                    <span class="feature-list-name">Integrations</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Excel Export</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">View (or download) lead contact information in a Google spreadsheet.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Templates</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Basic Templates</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Call To Actions</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Social Shares</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add Facebook, Twitter and Linkedin share buttons to power viral sharing.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Formulas</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Basic Operators </span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can use basic mathematical operators like +,-, x and /.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Logic Jump</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;No Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Analytics</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Traffic Details, Lead Data</span>
                                        
                                </li>
                                <li>
                                    <span class="feature-list-name">Support</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Support Docs</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You will have access to support docs.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('freelancer_m')">
                            <div>
                                <i class="material-icons" id="freelancer_m_arrow">keyboard_arrow_down</i>
                                <p class="more-info" id="freelancer_m_more">More Info</p>
                            </div>
                        </a>
                    </div>
                    <div class="starter-box billing-grey ">
                        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-grey-top ">
                            <!--<h4>(Annual)</h4>
                            <span class="border-center"></span><br>-->
                            <h3 class="plan-price">
                                <span class="strike-off strike-price">$115 <sup>/ Mo.</sup></span>
                                <span>$95 <sup>/ Mo.</sup></span>
                            </h3>
                            <h3 class="plan-title">Essentials</h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 np">
                                <a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-grey-bottom" id="essentials_m">
                            <ul class="billing-list">
                                <li>
                                    <span class="feature-list-name">Leads & Visits</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;1,000 & 20,000</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">No. of Experiences</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;Unlimited</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Collaborators</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name ">&nbsp;3</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Lead generation</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Domain Hosting</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Outgrow Domain</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Experiences are hosted on <a href="https://yourcompany.outgrow.co/" data-target="_blank" class="text-red">"yourcompany.outgrow.co"</a></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Charts and Graphs</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;No Access</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Display Customizations</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Standard Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo and customize look and feel using predefined color palettes.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Branding</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Light Outgrow Branding</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">A small discreet Outgrow logo at the bottom of the screen.</div>
                                    </div>
                                </li>                            
                                <li>
                                    <span class="feature-list-name">Integrations</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Integration Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can sync user's contact information using Zapier and native integrations.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Templates</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;All Templates</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Call To Actions</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Social Follows & Redirects </span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Formulas</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Advanced Operators</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Logic Jump</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Apply logic jump to supported templates to improve personalization.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Analytics</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;User Responses</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Support</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Basic Support</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="toggle-dots-white" onclick="show('essentials_m')">
                            <div>
                                <i class="material-icons" id="essentials_m_arrow">keyboard_arrow_down</i>
                                <p class="more-info" id="essentials_m_more">More Info</p>
                            </div>
                        </a>
                    </div>
                    <div class="business-box billing-white ">
                        <div class="col-md-12 col-sm-12 col-xs-12 np text-center billing-white-top business-box-xshadow">
                            <span class="ribbon">Most Popular</span>
                            <!--<h4>(Annual)</h4>
                            <span class="border-center"></span><br>-->
                            <h3 class="plan-price">
                                <span class="strike-off strike-price whitebg">$720 <sup>/ Mo.</sup></span>
                                <span>$600 <sup>/ Mo.</sup></span>
                            </h3>
                            <h3 class="plan-title">Business</h3>
                            <div class="col-md-12 col-sm-12 col-xs-12 np">
                                <a href="http://app.outgrow.co/signup" target="_blank" class="btn btn-white-red-outline btn-hover signupbanners params mt10">Start Trial</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 np rs-hide billing-white-bottom" id="business_m">
                            <ul class="billing-list">
                                <li>
                                    <span class="feature-list-name">Leads & Visits</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;15,000 & 30,000</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">No. of Experiences</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;Unlimited</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Collaborators</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name">&nbsp;10</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Lead generation</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Email Validation</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Domain Hosting</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Custom Domain</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Experiences are hosted on <a href="https://yourcompany.outgrow.co/" data-target="_blank" class="text-red">"yourcompany.outgrow.co"</a></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Charts and Graphs</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Increase interactivity by adding charts, graphs and tables to your experiences.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Display Customizations</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Use your brand logo, customize look & feel using custom colors, tinges and add custom HTML.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Branding</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;No Outgrow Branding</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">No Outgrow branding is displayed on any screen.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Integrations</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Webhooks & API</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Send all lead data using direct integration, Zapier as well as Webhooks and API.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Templates</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;All Templates</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Call To Actions</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Social Follows & Redirects </span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages and use dynamic variables.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Formulas</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Advanced Operators</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Logic Jump</span>
                                    <span class="mat-icon vis-hidden"></span>
                                    <span class="list-name capitalize">&nbsp;Full Access</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">Apply logic jump to supported templates to improve personalization.</div>
                                    </div>
                                </li>
                                <li>
                                    <span class="feature-list-name">Analytics</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Funnel Visualisation</span>
                                </li>
                                <li>
                                    <span class="feature-list-name">Support</span>
                                    <span class="mat-icon"></span>
                                    <span class="list-name capitalize">&nbsp;Priority Support</span>
                                    <div class="help-tip pricing-helptip">
                                        <i class="material-icons">info_outline</i>
                                        <div class="help-checktip">You will have access to support docs, email support as well as live chat.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="toggle-dots-grey" onclick="show('business_m')">
                            <div>
                                <i class="material-icons" id="business_m_arrow">keyboard_arrow_down</i>
                                <p class="more-info" id="business_m_more">More Info</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 np text-center help-text">
                    <div class="">
                        <span class="mat-icon"></span>
                        <span class="">&nbsp;Indicates features additional to the features in the previous tier</span>
                    </div>
                </div>
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
                <div class="col-md-6 col-sm-12 col-xs-12 np allPlans-blocks">
                    <div class="col-md-2 col-sm-12 col-xs-12 np">
                        <img src="{{ $page->baseUrl }}/images/img-allPlans1.png" data-src="{{ $page->baseUrl }}/images/img-allPlans1.png">
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 np allPlans-blocks-right">
                        <h4>Email Notification</h4>
                        <p>An interactive what you see is what you get builder. No coding required.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 np allPlans-blocks">
                    <div class="col-md-2 col-sm-12 col-xs-12 np">
                        <img src="{{ $page->baseUrl }}/images/img-allPlans2.png" data-src="{{ $page->baseUrl }}/images/img-allPlans2.png">
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 np allPlans-blocks-right">
                        <h4>Embedding</h4>
                        <p>All plans come with the ability to create any experience, Calculator to graded or outcome quiz.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 np allPlans-blocks">
                    <div class="col-md-2 col-sm-12 col-xs-12 np">
                        <img src="{{ $page->baseUrl }}/images/img-allPlans3.png" data-src="{{ $page->baseUrl }}/images/img-allPlans3.png">
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 np allPlans-blocks-right">
                        <h4>Question types</h4>
                        <p>All templates come with an responsive ability.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 np allPlans-blocks">
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
		"pricing": "{{ $page->baseUrl }}/js/pageScripts/pricing.js",
	}
@endsection