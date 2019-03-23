<nav class="navbar custom-navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="nav-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button> 
			<a class="params navbar-brand" href="{{ $page->baseUrl }}/"><img src="//dzvexx2x036l1.cloudfront.net/logo.png" alt="logo" /></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right" id="navlist">
				<li><a href="{{ $page->baseUrl }}/why-interactive" onclick="callGA('WHY')" class="params hvr-underline-from-left" id="nav-why-interactive">Why Interactive Content ?</a></li>
				<li><a href="{{ $page->baseUrl }}/features" onclick="callGA('FEATURES')" class="params hvr-underline-from-left" id="nav-features">Features</a></li>
				<li><a href="{{ $page->baseUrl }}/pricing" onclick="callGA('PRICING')" class="params hvr-underline-from-left" id="nav-pricing">Pricing</a></li>
				<!-- <li><a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params" id="nav-examples">Examples</a></li> -->
				<li class="dropdown" id="getInspired">
					<a href="javascript:void(0);" id="nav-get-inspired" onclick="callGA('USECASE')" class="params hvr-underline-from-left">Get Inspired <i class="material-icons">arrow_drop_down</i></a>
					<div class="dropdown-content">
						<a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params" id="nav-examples">Interactive Examples </a>
						<div class="drop-sub-menu">
							<a href="javascript:void(0);" onclick="callGA('USECASES')" class="params" id="nav-use-cases">Use Cases <i class="material-icons">chevron_right</i></a>
							<div class="dropdown-sub-content">
								<a href="{{ $page->baseUrl }}/calculator" class="nav-use-cases-list">Calculators</a>
								<a href="{{ $page->baseUrl }}/quiz" class="nav-use-cases-list">Quizzes </a>
								<a href="{{ $page->baseUrl }}/survey" class="nav-use-cases-list">Surveys</a>
								<a href="{{ $page->baseUrl }}/chatbots" class="nav-use-cases-list">Chatbots</a>
								<a href="{{ $page->baseUrl }}/increase-conversions" class="nav-use-cases-list">Increase Conversions</a>
								<a href="{{ $page->baseUrl }}/increase-roi" class="nav-use-cases-list">Increase ROI</a>
								<a href="{{ $page->baseUrl }}/increase-sales" class="nav-use-cases-list">Increase Sales</a>
								<a href="{{ $page->baseUrl }}/ecommerce-recommendations " class="nav-use-cases-list less-space">eCommerce Recommendations</a>
							</div>
						</div>
						<div class="drop-sub-menu drop-sub-menu-stories">
							<a href="javascript:void(0);" onclick="callGA('CASESTUDIES')" class="params" id="nav-case-studies">Success Stories <i class="material-icons">chevron_right</i></a>
							<div class="dropdown-sub-content">
								<a href="/case-studies#tag" class="params nav-case nav-link-tag">TAG </a>
								<a href="/case-studies#getPaid" class="params nav-case nav-link-gpyp">Get Paid for Your Pad </a>
								<a href="/case-studies#vp" class="params nav-case nav-link-vp">VenturePact </a>
								<a href="/case-studies#macroscape" class="params nav-case nav-link-macro">Macroscape </a>
								<a href="/case-studies#wingman" class="params nav-case nav-link-wingman">Professional Wingman </a>
							</div>
						</div>
					</div>
				</li>
				<!-- <li class="dropdown">
					<a href="javascript:void(0);" onclick="callGA('USECASES')" class="params dropdown hvr-underline-from-left" id="nav-use-cases">Use Cases <i class="material-icons">arrow_drop_down</i></a>
					<div class="dropdown-content">
						<a href="{{ $page->baseUrl }}/calculator" class="nav-use-cases-list">Calculators</a>
						<a href="{{ $page->baseUrl }}/quiz" class="nav-use-cases-list">Quizzes </a>
						<a href="{{ $page->baseUrl }}/survey" class="nav-use-cases-list">Surveys</a>
						<a href="{{ $page->baseUrl }}/increase-conversions" class="nav-use-cases-list">Increase Conversions</a>
						<a href="{{ $page->baseUrl }}/increase-roi" class="nav-use-cases-list">Increase ROI</a>
						<a href="{{ $page->baseUrl }}/increase-sales" class="nav-use-cases-list">Increase Sales</a>
					</div>
				</li> -->
				<li class="login login-button">
					<a href="//app.outgrow.co/login" class="link-login params login-dashboard-link" onclick="callGA('LOGIN')">Login</a>
				</li>
				<li class="dash-login hide">
				<a href="//app.outgrow.co/signup/?email=" class="dashboard-login" onclick="callGA('CANNOT WAIT CTA'); ">
					Dashboard
				</a>
			</li>
				<li class="nav-lead-input hideafter-login">
					<input class="lead-form-email navbar-email" name="emailId" type="email" placeholder="Enter your email">
					<span class="lead-form-btn">
						<a href="//app.outgrow.co/signup/?email=" class="lead-email btn-buildcal btn-hover" onclick="callGA('CANNOT WAIT CTA'); ">
							Start Free Trial
						</a>
					</span>
				</li>
			</ul>
		</div> 
	</div>

	<button id="menu-toggle" type="button" class="btn navbar-toggle">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="material-icons">close</i></a>
			<li><a href="{{ $page->baseUrl }}/why-interactive" onclick="callGA('WHY')" class="params" id="nav-why-interactive">Why Interactive Content ?</a></li>
			<li><a href="{{ $page->baseUrl }}/features" onclick="callGA('FEATURES')" class="params" id="nav-features">Features</a></li>
			<li><a href="{{ $page->baseUrl }}/pricing" onclick="callGA('PRICING')" class="params" id="nav-pricing">Pricing</a></li>
			<!-- <li><a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params" id="nav-examples">Examples</a></li> -->
			<!-- <li class="dropdown">
				<a href="javascript:void(0);" onclick="callGA('USECASE')" class="params dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Get Inspired <i class="material-icons">arrow_drop_down</i></a>
				<ul class="dropdown-content">
					<li><a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params" id="nav-examples">Interactive Examples </a></li>
					<div class="drop-sub-menu">
						<li><a href="javascript:void(0);" onclick="callGA('CASESTUDIES')" class="params dropdown-toggle" id="nav-case-studies" data-toggle="dropdown" aria-expanded="true">Success Stories <i class="material-icons">arrow_drop_down</i></a></li>
						<ul class="dropdown-sub-content">
							<li><a href="/case-studies#tag" class="nav-case nav-link-tag">TAG </a></li>
							<li><a href="/case-studies#getPaid" class="nav-case nav-link-gpyp">Get Paid for Your Pad </a></li>
							<li><a href="/case-studies#vp" class="nav-case nav-link-vp">VenturePact </a></li>
							<li><a href="/case-studies#macroscape" class="nav-case nav-link-macro">Macroscape </a></li>
							<li><a href="/case-studies#wingman" class="nav-case nav-link-wingman">Professional Wingman </a></li>
						</ul>
					</div>
				</ul>
			</li> -->
			<li class="dropdown" id="GetInspired">
				<a id="drop-toggle" href="javascript:void(0);" onclick="callGA('USECASE')" class="params dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Get Inspired <i class="material-icons">arrow_drop_down</i></a>
				<ul class="dropdown-content">
					<li><a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params" id="nav-examples">Interactive Examples </a></li>
					<div class="drop-sub-menu">
						<li><a href="#" onclick="callGA('USECASES');" class="params" id="nav-use-cases">Use Cases <i class="material-icons">arrow_drop_down</i></a></li>
						<div class="dropdown-sub-content">
							<li><a href="{{ $page->baseUrl }}/calculator" class="nav-use-cases-list">Calculators</a></li>
							<li><a href="{{ $page->baseUrl }}/quiz" class="nav-use-cases-list">Quizzes </a></li>
							<li><a href="{{ $page->baseUrl }}/survey" class="nav-use-cases-list">Surveys</a></li>
							<li><a href="{{ $page->baseUrl }}/chatbots" class="nav-use-cases-list">Chatbots</a></li>
							<li><a href="{{ $page->baseUrl }}/increase-conversions" class="nav-use-cases-list">Increase Conversions</a></li>
							<li><a href="{{ $page->baseUrl }}/increase-roi" class="nav-use-cases-list">Increase ROI</a></li>
							<li><a href="{{ $page->baseUrl }}/increase-sales" class="nav-use-cases-list">Increase Sales</a></li>
							<li><a href="{{ $page->baseUrl }}/ecommerce-recommendations" class="nav-use-cases-list"> eCommerce Recommendations</a></li>
						</div>
					</div>
					<div class="drop-sub-menu">
						<li><a href="javascript:void(0);" onclick="callGA('CASESTUDIES')" class="params" id="nav-case-studies">Success Stories <i class="material-icons">arrow_drop_down</i></a></li>
						<ul class="dropdown-sub-content">
							<li><a href="/case-studies#tag" class="nav-case nav-link-tag">TAG </a></li>
							<li><a href="/case-studies#getPaid" class="nav-case nav-link-gpyp">Get Paid for Your Pad </a></li>
							<li><a href="/case-studies#vp" class="nav-case nav-link-vp">VenturePact </a></li>
							<li><a href="/case-studies#macroscape" class="nav-case nav-link-macro">Macroscape </a></li>
							<li><a href="/case-studies#wingman" class="nav-case nav-link-wingman">Professional Wingman </a></li>
						</ul>
					</div>
				</ul>
			</li>
			<!-- <li class="dropdown">
				<a href="javascript:void(0);" onclick="callGA('USECASES')" class="params dropdown dropdown-toggle" id="nav-use-cases" data-toggle="dropdown" aria-expanded="true">Use Cases <i class="material-icons">arrow_drop_down</i></a>
				<ul class="dropdown-content">
					<li><a href="{{ $page->baseUrl }}/calculator" class="nav-use-cases-list">Calculators</a></li>
					<li><a href="{{ $page->baseUrl }}/quiz" class="nav-use-cases-list">Quizzes </a></li>
					<li><a href="{{ $page->baseUrl }}/survey" class="nav-use-cases-list">Surveys</a></li>
					<li><a href="{{ $page->baseUrl }}/increase-conversions" class="nav-use-cases-list">Increase Conversions</a></li>
					<li><a href="{{ $page->baseUrl }}/increase-roi" class="nav-use-cases-list">Increase ROI</a></li>
					<li><a href="{{ $page->baseUrl }}/increase-sales" class="nav-use-cases-list">Increase Sales</a></li>
				</ul>
			</li> -->
			<li class="login login-button">
				<a href="//app.outgrow.co/login" class="link-login params" onclick="callGA('LOGIN')">Login</a>
			</li>
			<li class="dash-login hide">
				<a href="//app.outgrow.co/signup/?email=" class="dashboard-login" onclick="callGA('CANNOT WAIT CTA'); ">
					Dashboard
				</a>
			</li>
			<li class="nav-lead-input hideafter-login">
				<input class="lead-form-email navbar-email" name="emailId" type="email" placeholder="Enter your email">
				<span class="lead-form-btn">
					<a href="//app.outgrow.co/signup/?email=" class="link-login lead-email btn-buildcal btn-hover" onclick="callGA('CANNOT WAIT CTA'); ">
						Start Free Trial
					</a>
				</span>
			</li>
		</ul>
	</div>
</nav>

<script>
    	document.getElementsByClassName('lead-form-email')[0].onchange = function (e) {
			let email = e.target.value;
			let href = "//app.outgrow.co/?email=";
			document.getElementsByClassName('lead-email')[0].href = href + email;
	}
	document.getElementsByClassName('lead-form-email')[0].onkeypress = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/?email=";
					if (e.keyCode == 13) {
						window.location.href = href+email;
					}
				}
				document.getElementsByClassName('lead-form-email')[1].onchange = function (e) {
			let email = e.target.value;
			let href = "//app.outgrow.co/?email=";
			document.getElementsByClassName('lead-email')[1].href = href + email;
	}
	document.getElementsByClassName('lead-form-email')[1].onkeypress = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/?email=";
					if (e.keyCode == 13) {
						window.location.href = href+email;
					}
				}
</script>



<!-- <div class="header-logo">
<a href="https://outgrow.co/" class="">
	<img src="{{ $page->baseUrl }}/images/lp-header-logo.png" alt="lp-header-logo image">
</a>
</div> -->
