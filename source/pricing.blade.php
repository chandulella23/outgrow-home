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
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/navbar.css">
@endsection

@section('pageClass', 'loaded')

@section('pageId', 'pricing')

@section('content')
	<!-- Homepage section 1 start-->
	<section class="section section-1">
        <div class="container-fluid">
            <div class="col-xs-12 col-sm-12 text-center pricing-headingtop hide">


                <h3 class="plans-heading">Plans and Pricing </h3>
                <!-- <p class="plans-subheading">Simple pricing, No Hidden costs, No transaction based fees.</p> -->
                <section id="plan-cycle" class="hide">


                    <div class="col-md-12 col-sm-12 col-xs-12 np billing-plan-list" id="plans">
                        <ul>
                            <li class="cycle-tab active" id="annually">
                                <a href="javascript:void(0)" class="hvr-sweep-to-right view">
                                    <i class="material-icons">check</i> Annual
                                    <!-- <label class="save-per">Save 10%</label> -->
                                </a>
                            </li>
                            <!-- <li class="cycle-tab" id="half-yearly">
                                <a href="javascript:void(0)" class="hvr-sweep-to-right view">
                                    <i class="material-icons">check</i> Semi-Annual
                                </a>
                            </li> -->
                            <li class="cycle-tab" id="monthly">
                                <a href="javascript:void(0)" class="hvr-sweep-to-right view">
                                    <i class="material-icons">check</i> Monthly
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <!-- <div class="col-md-12 col-sm-12 col-xs-12 pricing-switch text-center">
                <div class="switch">
                  <div class="onoffswitch">
                    <input class="onoffswitch-checkbox" id="myonoffswitch" name="onoffswitch" type="checkbox">
                    <label class="onoffswitch-label" for="myonoffswitch">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                    </label>
                  </div>
                </div>
            </div> -->
            <section id="plan-cycle" class="four-plan-case">
                <div class="col-md-12 col-sm-12 col-xs-12 np billing-plan-list">
                    <ul role="tablist">
                        <li class="cycle-tab active annual" id="annual" role="presentation">
                            <a class="hvr-sweep-to-right view" data-toggle="tab" href="javascript:void(0)" role="tab" onClick="showCycle('annual')">
                                <i class="material-icons">check</i> Annual 
                                <label class="save-per">Save upto 44%</label> 
                            </a>
                        </li>
                        <li class="cycle-tab monthly" id="monthly" role="presentation">
                            <a class="hvr-sweep-to-right view" data-toggle="tab" href="javascript:void(0)" role="tab" onClick="showCycle('monthly')">
                                <i class="material-icons">check</i> Monthly
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <div class="pricing-outer container pricing-col-four">
                <table>

                    <thead>
                        <tr class="">
                            <th>
                                <span class="expand-all">
                                    <i class="material-icons plus">add</i>
                                    <i class="material-icons minus">remove</i> 
                                     &nbsp;Show Detailed Pricing
                                </span>
                            </th>                      
                            <th>
                                <h2>Freelancer</h2>  
                                <label class="quiz-only">Quiz Only</label>                              
                                <span class="annual-price">
                                    <p class="strike-price">$22<sub> mo.</sub></p>
                                    <p class="price"><sup>$</sup>14<sub> mo.</sub></p>
                                </span>
                                <span class="s-annual-price">
                                    <p class="strike-price">$45<sub> mo.</sub></p>
                                    <p class="price"><sup>$</sup>30<sub> mo.</sub></p>
                                </span>
                                <span class="monthly-price">
                                    <!--<p class="strike-price">$45<sub> mo.</sub></p>-->
                                    <p class="price"><sup>$</sup>22<sub> mo.</sub></p>
                                </span>
                                <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                            </th>
                            <th>
                                <h2>Freelancer</h2>                                
                                <span class="annual-price">
                                    <p class="strike-price">$45<sub> mo.</sub></p>
                                    <p class="price"><sup>$</sup>25<sub> mo.</sub></p>
                                </span>
                                <span class="s-annual-price">
                                    <p class="strike-price">$45<sub> mo.</sub></p>
                                    <p class="price"><sup>$</sup>30<sub> mo.</sub></p>
                                </span>
                                <span class="monthly-price">
                                    <!--<p class="strike-price">$45<sub> mo.</sub></p>-->
                                    <p class="price"><sup>$</sup>45<sub> mo.</sub></p>
                                </span>
                                <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                            </th>
                            <th class="active">
                                <!-- <span class="ribbon">Most Popular</span> -->
                                <span class="label-popularPlan">Most Popular</span>
                                <h2>Essentials</h2>
                                <span class="annual-price">
                                    <p class="strike-price">$115<sub> mo.</sub></p>
                                    <p class="price"><sup>$</sup>95<sub> mo.</sub></p>
                                </span>
                                <span class="s-annual-price">
                                    <p class="strike-price">$115<sub> mo.</sub></p>
                                    <p class="price"><sup>$</sup>105<sub> mo.</sub></p>
                                </span>
                                <span class="monthly-price">
                                    <!--<p class="strike-price">$45<sub> mo.</sub></p>-->
                                    <p class="price"><sup>$</sup>115<sub> mo.</sub></p>
                                </span>
                                <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                            </th>
                            <th>
                                <h2>Business</h2>
                                <span class="annual-price">
                                    <p class="strike-price">$720<sub> mo.</sub></p>
                                    <p class="price"><sup>$</sup>600<sub> mo.</sub></p>
                                </span>
                                <span class="s-annual-price">
                                    <p class="strike-price">$720<sub> mo.</sub></p>
                                    <p class="price"><sup>$</sup>667<sub> mo.</sub></p>
                                </span>
                                <span class="monthly-price">
                                    <!--<p class="strike-price">$45<sub> mo.</sub></p>-->
                                    <p class="price"><sup>$</sup>720<sub> mo.</sub></p>
                                </span>
                                <span class="">
                                    <a href="//app.outgrow.co" target="_blank" id="b-signup" class="signuplink params btn-hover">Start trial</a>                                    
                                    <a href="javascript:void(0);" class="link-contact intercom_trigger" id="intercom_trigger">Contact us</a>
                                </span>
                            </th>      
                        </tr>
                    </thead>

                    <!--<tfoot>
                        <tr>
                            <th>&nbsp;</th>
                            <td><a href="#">Start trial</a></td>
                            <td><a href="#">Start trial</a></td>
                            <td><a href="#">Start trial</a></td>
                        </tr>
                    </tfoot>-->

                    <tbody>
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons vis-hide">add</i>  -->
                                Type of Content <i class="material-icons">help</i>
                            </th>
                            <td>
                                <span class="quater"></span>Quiz only
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Outcome Quiz</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Graded Quiz </small>
                                    <!-- <span class="detail"> </span>  -->
                                </span>
                            </td>
                            <td>
                                <span class="half"></span>Quiz, Calc, Ecom
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Outcome Quiz</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Graded Quiz</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Poll</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Calculator or</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>eCommerce Recommendation</small>
                                    <!-- <span class="detail"> </span>  -->
                                </span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="full"></span>All
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Outcome Quiz</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Graded Quiz</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Poll</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Calculator</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>eCommerce Recommendation </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Chatbot</small>
                                    <!-- <span class="detail"> </span>  -->
                                </span>
                            </td>
                            <td>
                                <span class="full"></span>All                                
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Outcome Quiz</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Graded Quiz</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Poll</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Calculator</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>eCommerce Recommendation </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Chatbot</small>
                                </span>
                            </td>
                        </tr>
                        <tr class="expand yearlyLeads">
                            <th>
                                <!-- <i class="material-icons vis-hide">add</i>  -->
                                Leads <i class="material-icons">help</i>
                            </th>
                            <td>
                                <span class="quater"></span>12,000 per year
                                <span class="detail">Number of submissions of the lead generation form on Outgrow.</span>
                            </td>
                            <td>
                                <span class="quater"></span>12,000 per year
                                <span class="detail">Number of submissions of the lead generation form on Outgrow.</span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="half"></span>90,000 per year
                                <span class="detail">Number of submissions of the lead generation form on Outgrow.</span>
                            </td>
                            <td>
                                <span class="full"></span>600,000 per year
                                <span class="detail">Number of submissions of the lead generation form on Outgrow.</span>
                            </td>
                        </tr>
                        <tr class="expand hide monthlyLeads">
                            <th>
                                <!-- <i class="material-icons vis-hide">add</i>  -->
                                Leads <i class="material-icons">help</i>
                            </th>
                            <td>
                                <span class="quater"></span>1,000 per month
                                <span class="detail">Number of submissions of the lead generation form on Outgrow.</span>
                            </td>
                            <td>
                                <span class="quater"></span>1,000 per month
                                <span class="detail">Number of submissions of the lead generation form on Outgrow.</span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="half"></span>7,500 per month
                                <span class="detail">Number of submissions of the lead generation form on Outgrow.</span>
                            </td>
                            <td>
                                <span class="full"></span>50,000 per month
                                <span class="detail">Number of submissions of the lead generation form on Outgrow.</span>
                            </td>
                        </tr>
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons vis-hide">add</i>  -->
                                No. of Content Pieces <i class="material-icons">help</i>
                            </th>
                            <td>
                                <span class="quater"></span>3
                                <!-- <span class="detail">Number of outcome quizzes and graded quizzes you can build.</span> -->
                                <span class="detail">You can build up to 3 outcome quizzes or graded quizzes. </span>
                            </td>
                            <td>
                                <span class="quater"></span>5
                                <!-- <span class="detail">Number of calculators, quizzes, ecom recommendations & polls you can build.</span> -->
                                <span class="detail">You can build up to 5 quizzes, calculators, polls or recommendations. </span>
                            </td>
                            <td class="active-bg">
                                <span class="full"></span>Unlimited
                                <!-- <span class="detail">Number of calculators, quizzes, chatbots, ecom recommendations & polls you can build.</span> -->
                                <span class="detail">You can build an unlimited amount of content with this plan. </td>
                            <td>
                                <span class="full"></span>Unlimited
                                <!-- <span class="detail">Number of calculators, quizzes, chatbots, ecom recommendations & polls you can build.</span> -->
                                <span class="detail">You can build an unlimited amount of content with this plan. </td>
                            </td>
                        </tr>
                        <tr class="expand">
                            <th><!-- <i class="material-icons vis-hide">add</i> --> Team Members</th>
                            <td>
                                <span class="quater"></span>1
                                <span class="detail">1 user or admin</span>
                            </td>
                            <td>
                                <span class="quater"></span>1
                                <span class="detail">1 user or admin</span>
                            </td>
                            <td class="active-bg">
                                <span class="half"></span>3
                                <span class="detail">3 users or admins total</span>
                            </td>
                            <td>
                                <span class="full"></span>10
                                <span class="detail">10 users or admins total</span>
                            </td>
                        </tr>
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  -->
                                Templates & Layouts <i class="material-icons">help</i></th>
                            </th>
                            <td class="expand-child">
                                <span class="quater"></span>3 Templates & Layout
                                <span class="detail">Chicago, Madrid and Greek layout and Outcome quiz premade templates.</span>
                            </td>
                            <td class="expand-child">
                                <span class="quater"></span>4 Templates & Layout
                                <span class="detail">Chicago, Londoner, Madrid and Greek layout and premade templates. </span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="full"></span>All Templates & Layouts
                                <span class="detail">All layouts and premade templates are unlocked.</span>
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>All Templates & Layouts
                                <span class="detail">All layouts and premade templates are unlocked.</span>
                            </td>
                        </tr>
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Lead Generation
                            </th>
                            <td class="expand-child">
                                <span class="half"></span>Full Access 
                                <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="half"></span>Full Access
                                <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Advanced Access
                                <span class="detail">Ensure each lead's authenticity & reduce "fake" leads via advanced email validation.</span>
                            </td>                            
                        </tr> -->
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  -->
                                Hosting & Embedding <i class="material-icons">help</i></th>
                            </th>  
                            <td class="expand-child">
                                <span class="full"></span>Embed Anywhere
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Content hosted on Outgrow domain [yourcompany.outgrow.co]</small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Can be embedded on any webpage.</small>
                                </span>
                            </td>   
                            <td class="expand-child">
                                <span class="full"></span>Embed Anywhere
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Content hosted on Outgrow domain [yourcompany.outgrow.co]</small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Can be embedded on any webpage.</small>
                                </span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="full"></span>Embed Anywhere
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Content hosted on Outgrow domain [yourcompany.outgrow.co]</small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Can be embedded on any webpage.</small>
                                </span>
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Embed & Custom Domain
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Content hosted on your company domain via CNAME [yourcompany.com]</small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Can be embedded on any webpage.</small>
                                </span>
                            </td>                    
                        </tr>
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Domain Hosting
                            </th>
                            <td class="expand-child">
                                <span class="half"></span>Outgrow Domain
                                <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="half"></span>Outgrow Domain
                                <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Custom Domain
                                <span class="detail">Experiences are hosted on "subdomain.yourcompany.co"</span>
                            </td>
                        </tr> -->
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> -->
                                Charts & Graphs <i class="material-icons">help</i></th>
                            </th>
                            <td>
                                <span class="none"></span>No Access
                                <span class="detail">You do not have access to charts and graphs.</span>
                            </td>
                            <td>
                                <span class="none"></span>No Access
                                <span class="detail">You do not have access to charts and graphs.</span>
                            </td>
                            <td class="active-bg">
                                <span class="none"></span>No Access
                                <span class="detail">You do not have access to charts and graphs.</span>
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Full Access
                                <span class="detail">Add bar graphs, polar/radar graphs, pie charts, line graphs and tables to your content. </span>
                            </td>
                        </tr>
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Display Customizations
                            </th>
                            <td class="expand-child">
                                <span class="half"></span>Standard Access
                                <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="half"></span>Standard Access
                                <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Full Access
                                <span class="detail">Use your brand logo and customize look and feel using custom color tinges.</span>
                            </td>
                        </tr> -->
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  -->
                                Custom Branding <i class="material-icons">help</i></th>
                            </th>
                            <td class="expand-child">
                                <span class="quater"></span>Limited Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add your logo </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Change theme colors </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Cannot remove Outgrow Branding </small>
                                </span>
                            </td>
                            <td class="expand-child">
                                <span class="quater"></span>Limited Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add your logo </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Change theme colors </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Cannot remove Outgrow Branding </small>
                                </span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="half"></span>Standard Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add your logo </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Change theme colors </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add your font </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Cannot remove Outgrow Branding </small>
                                </span>
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Full Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add your logo </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Change theme colors </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add your font </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Can remove Outgrow Branding </small>
                                </span>
                            </td>
                        </tr>
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  -->
                                Integrations <i class="material-icons">help</i></th>
                            </th>
                            <td class="expand-child">                                
                                <span class="half"></span>Standard Integrations
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Integrate data from the lead gen form </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Access to all Outgrow native integrations and zapier integrations except Marketo, Pardot and Eloqua </small><br>
                                </span>
                            </td>
                            <td class="expand-child">                                
                                <span class="half"></span>Standard Integrations
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Integrate data from the lead gen form </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Access to all Outgrow native integrations and zapier integrations except Marketo, Pardot and Eloqua </small>
                                </span>
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="half"></span>Standard Integrations
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Integrate data from the lead gen form </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Access to all Outgrow native integrations and zapier integrations except Marketo and Eloqua </small><br>                                    
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add each segment to a specific email campaign or list </small>
                                </span>
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Advanced Integrations
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Integrate data from the lead gen form </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Access to all Outgrow native integrations and zapier integrations </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add each segment to a specific email campaign or list </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Integrate user responses and results</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Webhooks </small>
                                </span>
                            </td>
                        </tr>
                        <!-- <tr class="not-info">
                            <th><i class="material-icons vis-hide">add</i>Templates</th>
                            <td><span class="half"></span>Basic Templates</td>
                            <td class="active-bg"><span class="full"></span>All Templates </td>
                            <td><span class="full"></span>All Templates</td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Templates
                            </th>
                            <td class="expand-child">                                
                                <span class="quater"></span>Basic Templates
                                <span class="detail">You get access to all pre-made calculators and quizzes built using our basic design layout (The Chicago).</span>                             
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="half"></span>All Templates
                                <span class="detail">You get access to all pre-made calculators and quizzes built using any of our design layouts.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>All Templates
                                <span class="detail">You get access to all pre-made calculators and quizzes built using any of our design layouts.</span>                             
                            </td>
                        </tr> -->
                        <!-- <tr class="not-info">
                            <th><i class="material-icons vis-hide">add</i>Layouts</th>
                            <td><span class="half"></span>Basic Layout</td>
                            <td class="active-bg"><span class="full"></span>All Layouts </td>
                            <td><span class="full"></span>All Layouts</td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Layouts
                            </th>
                            <td class="expand-child">                                
                                <span class="quater"></span>Basic Layout
                                <span class="detail">You get access to our basic, yet the most versatile layout: The Chicago.</span>                             
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="half"></span>All Layouts
                                <span class="detail">You get access to all of the design layouts.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>All Layouts
                                <span class="detail">You get access to all of the design layouts.</span>                             
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Call To Actions
                            </th>
                            <td class="expand-child">                                
                                Basic CTAs
                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons to power viral sharing.</span>                             
                            </td>
                            <td class="expand-child">                                
                                Advanced CTAs
                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</span>                             
                            </td>
                            <td class="expand-child">                                
                                Advanced CTAs
                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages and use dynamic variables.</span>                             
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  
                                Formulas
                            </th>
                            <td class="expand-child">                                
                                <span class="quater"></span>Basic Operators
                                <span class="detail">You can use basic mathematical operators like +,-, x and /.</span>                             
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="full"></span>Advanced Operators
                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Advanced Operators
                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>                             
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  
                                Logic Jump
                            </th>
                            <td>
                                <span class="none"></span>No Access   
                            </td>
                            <td class="expand-child active-bg">  
                                <span class="full"></span>Full Access
                                <span class="detail">Apply logic jump to supported templates to improve personalization.</span>    
                            </td>
                            <td class="expand-child">  
                                <span class="full"></span>Full Access
                                <span class="detail">Apply logic jump to supported templates to improve personalization.</span>    
                            </td>
                        </tr> -->
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>   -->
                                Formula & Logic Jump <i class="material-icons">help</i></th>
                            </th>
                            <td class="expand-child">                                
                                <span class="quater"></span>Limited Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Outcome mapping </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Conditional CTA, images, text and personalized Outcome page for outcome quizzes</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>No logic jump </small>
                                </span>                        
                            </td>
                            <td class="expand-child">                                
                                <span class="quater"></span>Limited Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Outcome mapping </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Conditional CTA, images, text and personalized Outcome page for outcome quizzes</small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Math Formulas: basic and advanced math operators including log, power functions, if-else, nested if statements </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>No logic jump </small>
                                </span>  
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="full"></span>Full Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Outcome mapping </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Conditional CTA, image, text and personalized Outcome page </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Math Formulas: basic and advanced math operators including log, power functions, if-else, nested if statements </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Logic jump </small>
                                </span>  
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Full Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Outcome mapping </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Conditional CTA, image, text and personalized Outcome page </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Math Formulas: basic and advanced math operators including log, power functions, if-else, nested if statements </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Logic jump </small>
                                </span>  
                            </td>
                        </tr>
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  -->
                                Analytics & Tracking <i class="material-icons">help</i></th>
                            </th>
                            <td class="expand-child">                                
                                <span class="half"></span>Standard Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Lead Data, User Responses & Results, Traffic Info </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Export Data </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Segment Data </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add Facebook and Google Analytics tracking codes </small>
                                </span>  
                            </td>
                            <td class="expand-child">                                
                                <span class="half"></span>Standard Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Lead Data, User Responses & Results, Traffic Info </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Export Data </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Segment Data </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add Facebook and Google Analytics tracking codes </small>
                                </span>  
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="half"></span>Standard Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Lead Data, User Responses & Results, Traffic Info </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Export Data </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Segment Data </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add Facebook and Google Analytics tracking codes </small>
                                </span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Advanced Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Lead Data, User Responses & Results, Traffic Info </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Export Data </small><br>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Segment Data </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add Facebook and Google Analytics tracking codes </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>User & Question Funnels </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Customize FB and Google Pixel </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Add Custom Tracking Script </small>
                                </span>  
                            </td>
                        </tr>
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  -->
                                Advanced Features <i class="material-icons">help</i></th>
                            </th>
                            <td class="expand-child">
                                <span class="none"></span>No Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>No access </small>
                                </span> 
                            </td>   
                            <td class="expand-child">
                                <span class="none"></span>No Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>No access </small>
                                </span>  
                            </td>
                            <td class="expand-child active-bg">
                                <span class="quater"></span>Limited Access
                                <span class="detail">
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Conditional messaging </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Launch in Email (Allows you to ask the first question directly in an email) </small>
                                </span> 
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Advanced Access
                                <span class="detail">
                                <small><i class="material-icons"> keyboard_arrow_right</i>Conditional messaging </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Launch in Email (Allows you to ask the first question directly in an email) </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Custom email notification to team </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Email validation </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Html editor </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>CSS Editor </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Custom html </small><br/>
                                    <small><i class="material-icons"> keyboard_arrow_right</i>Custom javascript </small>
                                </span> 
                            </td>        
                        </tr>
                        <tr class="expand">
                            <th>
                                <!-- <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  -->
                                Support <i class="material-icons">help</i></th>
                            </th>
                            <td class="expand-child">                                
                                <span class="quater"></span>Support Docs
                                <span class="detail">You will have access to support docs and live chat.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="quater"></span>Support Docs
                                <span class="detail">You will have access to support docs and live chat.</span>                             
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="half"></span>Basic
                                <span class="detail">You will have access to support docs, live chat as well as email support. We will try to answer all questions within 48 hours.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Priority
                                <span class="detail">You will have access to support docs, live chat as well as email and phone support. We will try to answer all questions within 24 hours.</span>                             
                            </td>
                        </tr>
                    </tbody>

                </table>

                <!-- start: for responsive -->   
                    
                    <!-- freelancer-quiz -->
                    <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block">
                        <div class="pricing-top">
                            <h3>Freelancer</h3>
                            <label class="quiz-only">Quiz Only</label>
                            <span class="annual-price">
                                <p class="strike-price">$22<sub> mo.</sub></p>
                                <p class="price"><sup>$</sup>14<sub> mo.</sub></p>
                            </span>
                            <span class="s-annual-price">
                                <p class="strike-price">$45<sub> mo.</sub></p>
                                <p class="price"><sup>$</sup>30<sub> mo.</sub></p>
                            </span>
                            <span class="monthly-price">
                                <!--<p class="strike-price"><sup>$</sup>45<sub> mo.</sub></p>-->
                                <p class="price"><sup>$</sup>22<sub> mo.</sub></p>
                            </span>
                            <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="features rs-hide">
                                <li class="expand-rs">
                                    <span class="feature-title">Type of Content <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle"><span class="quater"></span>Quiz only</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Outcome Quiz</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Graded Quiz </small>
                                        <!-- <span class="detail"> </span>  -->
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">Leads <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle yearlyLeads"><span class="quater"></span>12,000 per year</span>
                                    <span class="feature-subtitle monthlyLeads hide"><span class="quater"></span>1,000 per month</span>
                                    <span class="detail">Number of submissions of the lead generation form on Outgrow. </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">No. of Content Pieces <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle"><span class="quater"></span>3</span>
                                    <span class="detail">You can build up to 3 outcome quizzes or graded quizzes. </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">Team Members</span>
                                    <span class="feature-subtitle"><span class="quater"></span>1</span>
                                    <span class="detail">1 user or admin</span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Templates & Layouts <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>3 Templates & Layout</span>
                                    <span class="detail">Chicago, Madrid and Greek layout and Outcome quiz premade templates.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Lead Generation
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Full Access </span>
                                    <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Hosting & Embedding <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Embed Anywhere </span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Content hosted on Outgrow domain [yourcompany.outgrow.co]</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Can be embedded on any webpage.</small>
                                    </span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Domain Hosting
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                    <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                </li> -->
                               <li class="expand-rs">
                                    <span class="feature-title">
                                        <!--<i class="material-icons plus">add</i>-->
                                        Charts & Graphs <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                    <span class="detail">You do not have access to charts and graphs.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Display Customizations
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                    <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Custom Branding <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                    <span class="detail">                                
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add your logo </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Change theme colors </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Cannot remove Outgrow Branding </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Integrations <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Integrations</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Integrate data from the lead gen form </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Access to all Outgrow native integrations and zapier integrations except Marketo, Pardot and Eloqua </small><br>
                                    </span>
                                </li>
                                <!-- <li>
                                    <span class="feature-title">Templates</span>
                                    <span class="feature-subtitle"><span class="half"></span>Basic Template</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Templates
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Basic Templates</span>
                                    <span class="detail">You get access to all pre-made calculators and quizzes built using our basic design layout (The Chicago).</span>
                                </li> -->
                                <!-- <li>
                                    <span class="feature-title">Layouts</span>
                                    <span class="feature-subtitle"><span class="half"></span>Basic Layout</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Layouts
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Basic Layout</span>
                                    <span class="detail">You get access to our basic, yet the most versatile layout: The Chicago.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Call To Actions
                                    </span>
                                    <span class="feature-subtitle">Basic CTAs</span>
                                    <span class="detail">Add Facebook, Twitter and Linkedin share buttons to power viral sharing.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formulas
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Basic Operators</span>
                                    <span class="detail">You can use basic mathematical operators like +,-, x and /.</span>
                                </li>
                                <li>
                                    <span class="feature-title">
                                        Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Formula & Logic Jump <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Outcome mapping </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Conditional CTA, images, text and personalized Outcome page for outcome quizzes </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>No logic jump </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Analytics & Tracking <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Lead Data, User Responses &amp; Results, Traffic Info </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Export Data </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Segment Data </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add Facebook and Google Analytics tracking codes </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Advanced Features <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                    <span class="detail"><small><i class="material-icons"> keyboard_arrow_right</i>No access </small></span> 
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Support <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Support Docs</span>
                                    <span class="detail">You will have access to support docs and live chat.</span>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="toggle-more">
                                <i class="material-icons">add</i>
                                <p class="more-info">Show more</p>
                            </a>
                        </div>
                    </div>
                    <!-- freelancer-quiz -->                

                    <!-- freelancer -->
                    <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block">
                        <div class="pricing-top">
                            <h3>Freelancer</h3>
                            <span class="annual-price">
                                <p class="strike-price">$45<sub> mo.</sub></p>
                                <p class="price"><sup>$</sup>25<sub> mo.</sub></p>
                            </span>
                            <span class="s-annual-price">
                                <p class="strike-price">$45<sub> mo.</sub></p>
                                <p class="price"><sup>$</sup>30<sub> mo.</sub></p>
                            </span>
                            <span class="monthly-price">
                                <!--<p class="strike-price"><sup>$</sup>45<sub> mo.</sub></p>-->
                                <p class="price"><sup>$</sup>45<sub> mo.</sub></p>
                            </span>
                            <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="features rs-hide">
                                <li class="expand-rs">
                                    <span class="feature-title">Type of Content <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle"><span class="quater"></span>Quiz, Calc, Ecom </span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Outcome Quiz</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Graded Quiz </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Poll</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Calculator or </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Ecommerce Recommendations </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">Leads <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle yearlyLeads"><span class="quater"></span>12,000 per year</span>
                                    <span class="feature-subtitle monthlyLeads hide"><span class="quater"></span>1,000 per month</span>
                                    <span class="detail">Number of submissions of the lead generation form on Outgrow. </span>
                                </li>
                               <li class="expand-rs">
                                    <span class="feature-title">No. of Content Pieces <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle"><span class="quater"></span>5</span>
                                    <span class="detail">You can build up to 5 quizzes, calculators, polls or recommendations. </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">Team Members</span>
                                    <span class="feature-subtitle"><span class="quater"></span>1</span>
                                    <span class="detail">1 user or admin</span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Templates & Layouts <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>4 Templates & Layout</span>
                                    <span class="detail">Chicago, Londoner, Madrid and Greek layout and premade templates. </span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Lead Generation
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Full Access </span>
                                    <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Hosting & Embedding <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Embed Anywhere </span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Content hosted on Outgrow domain [yourcompany.outgrow.co]</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Can be embedded on any webpage.</small>
                                    </span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Domain Hosting
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                    <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!--<i class="material-icons plus">add</i>-->
                                        Charts & Graphs <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                    <span class="detail">You do not have access to charts and graphs.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Display Customizations
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                    <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Custom Branding <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                    <span class="detail">                                
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add your logo </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Change theme colors </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Cannot remove Outgrow Branding </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Integrations <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Integrations</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Integrate data from the lead gen form </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Access to all Outgrow native integrations and zapier integrations except Marketo, Pardot and Eloqua </small><br>
                                    </span>
                                </li>
                                <!-- <li>
                                    <span class="feature-title">Templates</span>
                                    <span class="feature-subtitle"><span class="half"></span>Basic Template</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Templates
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Basic Templates</span>
                                    <span class="detail">You get access to all pre-made calculators and quizzes built using our basic design layout (The Chicago).</span>
                                </li> -->
                                <!-- <li>
                                    <span class="feature-title">Layouts</span>
                                    <span class="feature-subtitle"><span class="half"></span>Basic Layout</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Layouts
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Basic Layout</span>
                                    <span class="detail">You get access to our basic, yet the most versatile layout: The Chicago.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Call To Actions
                                    </span>
                                    <span class="feature-subtitle">Basic CTAs</span>
                                    <span class="detail">Add Facebook, Twitter and Linkedin share buttons to power viral sharing.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formulas
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Basic Operators</span>
                                    <span class="detail">You can use basic mathematical operators like +,-, x and /.</span>
                                </li>
                                <li>
                                    <span class="feature-title">
                                        Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Formula & Logic Jump <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Outcome mapping </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Conditional CTA, images, text and personalized Outcome page for outcome quizzes</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Math Formulas: basic and advanced math operators including log, power functions, if-else, nested if statements </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>No logic jump </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Analytics & Tracking <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Lead Data, User Responses &amp; Results, Traffic Info </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Export Data </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Segment Data </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add Facebook and Google Analytics tracking codes </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Advanced Features <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                    <span class="detail"><small><i class="material-icons"> keyboard_arrow_right</i>No access </small></span>  
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Support <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Support Docs</span>
                                    <span class="detail">You will have access to support docs and live chat.</span>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="toggle-more">
                                <i class="material-icons">add</i>
                                <p class="more-info">Show more</p>
                            </a>
                        </div>
                    </div>
                    <!-- freelancer-->

                    <!-- essential -->
                    <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block most-popular-plan">
                        <!-- <span class="ribbon">Most Popular</span> -->
                        <span class="label-popularPlan">Most Popular</span>
                        <div class="pricing-top">
                            <h3>Essentials</h3>
                            <span class="annual-price">
                                <p class="strike-price">$115<sub> mo.</sub></p>
                                <p class="price"><sup>$</sup>95<sub> mo.</sub></p>
                            </span>
                            <span class="s-annual-price">
                                <p class="strike-price">$115<sub> mo.</sub></p>
                                <p class="price"><sup>$</sup>105<sub> mo.</sub></p>
                            </span>
                            <span class="monthly-price">
                                <!--<p class="strike-price"><sup>$</sup>45<sub> mo.</sub></p>-->
                                <p class="price"><sup>$</sup>115<sub> mo.</sub></p>
                            </span>
                            <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="features rs-hide">
                                <li class="expand-rs">
                                    <span class="feature-title">Type of Content <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle"><span class="full"></span>All </span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Outcome Quiz</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Graded Quiz </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Poll</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Calculator  </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Ecommerce Recommendations or</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Chatbot </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">Leads <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle yearlyLeads"><span class="half"></span>90,000 per year</span>
                                    <span class="feature-subtitle monthlyLeads hide"><span class="half"></span>7,500 per month</span>
                                    <span class="detail">Number of submissions of the lead generation form on Outgrow.</span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">No. of Content Pieces <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle"><span class="full"></span>Unlimited</span>
                                    <span class="detail">You can build an unlimited amount of content with this plan. </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">Team Members</span>
                                    <span class="feature-subtitle"><span class="half"></span>3</span>
                                    <span class="detail">3 users or admins total</span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Templates & Layouts <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>All Templates & Layouts </span>
                                    <span class="detail">All layouts and premade templates are unlocked.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Lead Generation
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Full Access </span>
                                    <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Hosting & Embedding <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Embed Anywhere </span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Content hosted on Outgrow domain [yourcompany.outgrow.co]</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Can be embedded on any webpage.</small>
                                    </span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Domain Hosting
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                    <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!--<i class="material-icons plus">add</i>-->
                                        Charts & Graphs <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                    <span class="detail">You do not have access to charts and graphs.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Display Customizations
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                    <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Custom Branding <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                    <span class="detail">                                
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add your logo </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Change theme colors </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add your font </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Cannot remove Outgrow Branding </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Integrations <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Integrations</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Integrate data from the lead gen form </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Access to all Outgrow native integrations and zapier integrations except Marketo and Eloqua </small><br>                                    
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add each segment to a specific email campaign or list </small>
                                    </span>
                                </li>
                                <!-- <li>
                                    <span class="feature-title">Templates</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Templates</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Templates
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>All Templates</span>
                                    <span class="detail">You get access to all pre-made calculators and quizzes built using any of our design layouts.</span>
                                </li> -->
                                <!-- <li>
                                    <span class="feature-title">Layouts</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Layouts</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Layouts
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>All Layouts</span>
                                    <span class="detail">You get access to all of the design layouts.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Call To Actions
                                    </span>
                                    <span class="feature-subtitle">Advanced CTAs</span>
                                    <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formulas
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Operators</span>
                                    <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Apply logic jump to supported templates to improve personalization.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Formula & Logic Jump <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Outcome mapping </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Conditional CTA, image, text and personalized Outcome page </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Math Formulas: basic and advanced math operators including log, power functions, if-else, nested if statements </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Logic jump </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Analytics & Tracking <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Lead Data, User Responses &amp; Results, Traffic Info </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Export Data </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Segment Data </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add Facebook and Google Analytics tracking codes </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Advanced Features <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Conditional messaging </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Launch in Email (Allows you to ask the first question directly in an email) </small>
                                    </span> 
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Support <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Basic</span>
                                    <span class="detail">You will have access to support docs, live chat as well as email support. We will try to answer all questions within 48 hours. </span>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="toggle-more">
                                <i class="material-icons">add</i>
                                <p class="more-info">Show more</p>
                            </a>
                        </div>
                    </div>
                    <!-- essential-->

                    <!-- business -->
                    <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block">
                        <div class="pricing-top">
                            <h3>Business</h3>
                            <span class="annual-price">
                                <p class="strike-price">$720<sub> mo.</sub></p>
                                <p class="price"><sup>$</sup>600<sub> mo.</sub></p>
                            </span>
                            <span class="s-annual-price">
                                <p class="strike-price">$720<sub> mo.</sub></p>
                                <p class="price"><sup>$</sup>667<sub> mo.</sub></p>
                            </span>
                            <span class="monthly-price">
                                <!--<p class="strike-price"><sup>$</sup>45<sub> mo.</sub></p>-->
                                <p class="price"><sup>$</sup>720<sub> mo.</sub></p>
                            </span>
                            <span class="">
                                <a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a>
                                <a href="javascript:void(0);" target="_blank" class="link-contact intercom_trigger" id="intercom_trigger">Contact us</a>
                            </span>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="features rs-hide">
                                <li class="expand-rs">
                                    <span class="feature-title">Type of Content <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle"><span class="full"></span>All </span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Outcome Quiz</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Graded Quiz </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Poll</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Calculator  </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Ecommerce Recommendations or</small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Chatbot </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">Leads <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle yearlyLeads"><span class="full"></span>600,000 per year</span>
                                    <span class="feature-subtitle monthlyLeads hide"><span class="full"></span>50,000 per month</span>
                                    <span class="detail">Number of submissions of the lead generation form on Outgrow. </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">No. of Content Pieces <i class="material-icons">help</i></span>
                                    <span class="feature-subtitle"><span class="full"></span>Unlimited</span>
                                    <span class="detail">You can build an unlimited amount of content with this plan. </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">Team Members</span>
                                    <span class="feature-subtitle"><span class="full"></span>10</span>
                                    <span class="detail">10 users or admins total</span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Templates & Layouts <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>All Templates & Layouts </span>
                                    <span class="detail">All layouts and premade templates are unlocked.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Lead Generation
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Access </span>
                                    <span class="detail">Ensure each lead's authenticity & reduce "fake" leads via advanced email validation.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Hosting & Embedding <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Embed & Custom Domain </span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Content hosted on your company domain via CNAME [yourcompany.com] </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Can be embedded on any webpage.</small>
                                    </span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Domain Hosting
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Custom Domain </span>
                                    <span class="detail">Experiences are hosted on "subdomain.yourcompany.co"</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Charts & Graphs <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Add bar graphs, polar/radar graphs, pie charts, line graphs and tables to your content. </span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Display Customizations
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Use your brand logo and customize look and feel using custom color tinges.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Custom Branding <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>                                    
                                    <span class="detail">                                
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add your logo </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Change theme colors </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add your font </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Can remove Outgrow Branding </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Integrations <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Integrations</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Integrate data from the lead gen form </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Access to all Outgrow native integrations and zapier integrations </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add each segment to a specific email campaign or list </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Integrate user responses and results</small><br/>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Webhooks </small>
                                    </span>
                                </li>
                                <!-- <li>
                                    <span class="feature-title">Templates</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Templates</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Templates
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>All Templates</span>
                                    <span class="detail">You get access to all pre-made calculators and quizzes built using any of our design layouts.</span>
                                </li> -->
                                <!-- <li>
                                    <span class="feature-title">Layouts</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Layouts</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Layouts
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>All Layouts</span>
                                    <span class="detail">You get access to all of the design layouts.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Call To Actions
                                    </span>
                                    <span class="feature-subtitle">Advanced CTAs</span>
                                    <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages and use dynamic variables.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formulas
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Operators</span>
                                    <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Apply logic jump to supported templates to improve personalization.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Formula & Logic Jump <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Outcome mapping </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Conditional CTA, image, text and personalized Outcome page </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Math Formulas: basic and advanced math operators including log, power functions, if-else, nested if statements </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Logic jump </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Analytics & Tracking <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Lead Data, User Responses &amp; Results, Traffic Info </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Export Data </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Segment Data </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add Facebook and Google Analytics tracking codes </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>User &amp; Question Funnels </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Customize FB and Google Pixel </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Add Custom Tracking Script </small>
                                    </span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Advanced Features <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Access</span>
                                    <span class="detail">
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Conditional messaging </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Launch in Email (Allows you to ask the first question directly in an email) </small><br/>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Custom email notification to team </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Email validation </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Html editor </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>CSS Editor </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Custom html </small><br>
                                        <small><i class="material-icons"> keyboard_arrow_right</i>Custom javascript </small>
                                    </span> 
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Support <i class="material-icons">help</i>
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Priority</span>
                                    <span class="detail">You will have access to support docs, live chat as well as email and phone support. We will try to answer all questions within 24 hours. </span>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="toggle-more">
                                <i class="material-icons">add</i>
                                <p class="more-info">Show more</p>
                            </a>
                        </div>
                    </div>
                    <!-- business-->

                <!-- end: for responsive -->
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 np enterprise-startup">            
                <div class="container">
                    <div class="col-md-7 col-sm-12 col-xs-12 np">
                        <div class="enterprise-box-v2 text-center enterprise-agency-box ">
                            <img src="{{ $page->baseUrl }}/images/icon-enterprise.png"/>
                            <h2 class="title">Enterprise & Agency Plans</h2>
                            <!-- <span class="border-center"></span> -->
                            <span class="subtitle">Need Enterprise grade features?</span>
                            <p>
                                Made for larger midmarket, enterprise businesses and agencies, these plans
                                give you advanced access with a dedicated account manager. API access,
                                custom templates, consulting and team training.
                            </p>
                            <button onclick="sendMessageToIntercom('Interested in Enterprise / Agency plans')" href="javascript:void(0)" class="ic-launcher btn btn-white-red-outline btn-hover">Contact us</button>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 np">
                        <div class="enterprise-box-v2 text-center startup-box">
                            <img src="{{ $page->baseUrl }}/images/icon-startup.png"/>
                            <!-- <h2 class="title">Enterprise & Agency Plans</h2> -->
                            <!-- <span class="border-center"></span> -->
                            <span class="subtitle">Are you a Startup or small business?</span>
                            <p>
                                See if you qualify for our small business
                                incentive package and a
                                custom plan!
                            </p>
                            <button class="ic-launcher btn btn-white-red-outline btn-hover" onclick="sendMessageToIntercom('I am on your pricing page and am interested to see if I qualify for your small business incentive program as I would like a special deal. Do I satisfy your business program criteria ?')" id="intercom_trigger">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 np create-exp" id="target">
                <div class="container">
                    <h4>Don't have time? Let's build one for you!</h4>
                    <div class="col-md-3 col-sm-3 col-xs-12 np">
                        <h5><img src="{{ $page->baseUrl }}/images/icon-create-custom.png">We'll Create </h5>
                        <span class="calc">Calculator/Quiz/Chatbot/Poll/Ecom Rec.</span>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 np text-center create-exp-center">
                        <span class="create-exp-start">Starting From </span>
                        <span class="create-exp-price">$250</span>
                        <span class="text-opacity">/content piece</span>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12 np">
                        <button onclick="sendMessageToIntercom('I am interested in your custom build option')" href="javascript:void(0)" class="btn btn-white-red-outline btn-hover">Learn more</button>
                    </div>
                    <!-- <button class="closeDiv"><i class="material-icons">cancel</i></button> -->
                </div>
            </div>
            <!-- <div class="col-md-12 col-sm-12 col-xs-12 np enterprise_pos">
                <div class="col-md-12 col-sm-12 col-xs-12 np text-center need-custom-plan">
                    <span class="">
                        <i class="material-icons">headset_mic</i>need enterprise grade features? Contact us.
                    </span>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 np">
                    <div class="container-enterprise">
                        <div class=" enterprise-box-new text-center">
                            <h2 class="title">Enterprise & Agency Plans</h2>
                            <span class="border-center"></span>
                            <p>
                                Made especially for power users and agencies, this plan gives you full access with a dedicated account manager, API access and team training.
                            </p>
                            <button class="ic-launcher btn btn-white-red-outline btn-hover intercom_trigger" id="intercom_trigger">contact us</button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

  
    <!-- old faq -->
	<section class="section section-faq hide">
		<div class="container">
			<div class="section-2-heading mk-animate-element scale-up">
				Frequently Asked Questions
			</div>
		</div>
	</section>
	<section class="section hide">
            <div class="container-faqs">
            <div class="accordion">
                <div class="accordion-section">
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
                        <p>Yes, you can. Just email us at questions@outgrow.co.</p>
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
    <!-- old faq -->

    <section class="section section-faq">
		<div class="container">
			<h1 class="section-2-heading mk-animate-element scale-up">
				Frequently Asked Questions
			</h1>
        </div>        
		<div class="container-faqs">
            <div class="col-md-12 col-sm-12 col-xs-12 np">
                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section">
                        <div class="faq-section-title">
                            What happens during and after the trial period?
                        </div>
                        <div class="faq-section-content">
                            <p>When you sign up, you will be assigned to our Business Premium plan. You will have access to this plan for 7 days. Should you choose to continue with the business plan, you will have to add your payment method.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section faq-section-even">
                        <div class="faq-section-title">
                            How is my data handled?
                        </div>
                        <div class="faq-section-content">
                            <p>Very very securely. We use AWS serves which is basically the gold standard in hosting. We use industry benchmarked encryption for all sensitive data and subscribe to all major security measures to safeguard your data.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section">
                        <div class="faq-section-title">
                            Any contracts or cancellation fees?
                        </div>
                        <div class="faq-section-content">
                            <p>For our Starter and Business premium tiers, we do not really have any contracts that need signatures. We have a simple SaaS based pricing with simple terms of service. For Enterprise customers though, we have a Service agreement which outlines SLAs and payment schedules etc.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section faq-section-even">
                        <div class="faq-section-title">
                            Can I get a test environment in case I do not want to publish my calculators?
                        </div>
                        <div class="faq-section-content">
                            <p>When you use the builder, just make sure you do not click “Publish”. That way, the calculator will neither be made public nor will it get indexed in search engines. If you want to preview the calculator, just click on “Preview” to see your edits reflect.</p>
                        </div>
                    </div>
                </div>

                
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 np">
                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section">
                        <div class="faq-section-title">
                            What are your billing cycles and payment options?
                        </div>
                        <div class="faq-section-content">
                            <p>You have the option to pay monthly, quarterly or annually. Of course, we offer heavy discounts if you buy for a longer duration.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section faq-section-even">
                        <div class="faq-section-title">
                            Can I white-label Outgrow’s tools?
                        </div>
                        <div class="faq-section-content">
                            <p>Yes, you can. But we will have to have a discussion around how we can make that work. Feel free to email us at support@outgrow.co and we will see what we can do.</p>
                        </div>
                    </div>
                </div>
                
            </div>            

            <div class="col-md-12 col-sm-12 col-xs-12 np">
                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section">
                        <div class="faq-section-title">
                            Can I host on premises?
                        </div>
                        <div class="faq-section-content">
                            <p>Yes, you can. Just email us at questions@outgrow.co.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section faq-section-even">
                        <div class="faq-section-title">
                            Do you charge per lead?
                        </div>
                        <div class="faq-section-content">
                            <p>No, we charge a flat price as per your membership tier</p>
                        </div>
                    </div>
                </div>        
            </div>            

            <div class="col-md-12 col-sm-12 col-xs-12 np">
                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section">
                        <div class="faq-section-title">
                            Can you build my calculators for me?
                        </div>
                        <div class="faq-section-content">
                            <p>Our DIY tool is pretty easy to use and learn, so you should be able to build your own calculators very very quickly. For our enterprise customers, we provide a 1 month onboarding where we help configure the first few calculators.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section faq-section-even">
                        <div class="faq-section-title">
                            Why should I upgrade?
                        </div>
                        <div class="faq-section-content">
                            <p>Well, calculators are awesome. But they are more awesome when you can run effective lead generation programs, analyze the data about visitors, use your own branding and use some of our premium design templates. </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12 col-xs-12 np">        
                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section">
                        <div class="faq-section-title">
                            Can I really build as many calculators as I want?
                        </div>
                        <div class="faq-section-content">
                            <p>Yes. We understand that you have tens if not hundreds of ideas and we want you to have unlimited creative space to bring your ideas to life.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section faq-section-even">
                        <div class="faq-section-title">
                            I am an agency. Anything special for me?
                        </div>
                        <div class="faq-section-content">
                            <p>Sure. If you are an agency that works with multiple clients, we can figure out a mutually beneficial partnership. Feel free to reach out to us via the chat on the bottom right of your screen or via email at <a href="mailto:questions@outgrow.co" class="text-red">questions@outgrow.co </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 np">        
                <div class="col-md-6 col-sm-12 col-xs-12 np">
                    <div class="faq-section">
                        <div class="faq-section-title">
                            Which integrations do you have?
                        </div>
                        <div class="faq-section-content">
                            <p>We support over 1000 integrations using Zapier and our current list of native integrations includes: Marketo, Salesforce, Hubspot, Mailchimp, Slack, Campaign Monitor, Aweber, drip.co, Myemma, Get Response, Unbounce, Listrak, Sendlane, Zoho, Intercom, Facebook messenger, Pardot, Active Campaign.</p>
                        </div>
                    </div>
                </div>
            </div>
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
							<p>Build Interactive Content</p>
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
        "navbar": "{{ $page->baseUrl }}/js/pageScripts/navbar.js",
	}
@endsection
