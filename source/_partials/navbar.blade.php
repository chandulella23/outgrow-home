<nav class="navbar custom-navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button> 
			<a class="params navbar-brand" href="{{ $page->baseUrl }}/"><img src="//dzvexx2x036l1.cloudfront.net/logo.png" alt="logo" /></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right" id="navlist">
				<li class="dropdown">
					<a href="javascript:void(0);" onclick="callGA('USECASES')" class="params dropdown" id="nav-use-cases">Use Cases <i class="material-icons">arrow_drop_down</i></a>
					<div class="dropdown-content">
						<a href="http://outgrow.co.in/calculator" class="">Calculators</a>
						<a href="http://outgrow.co.in/quiz" class="">Quizzes </a>
						<a href="http://outgrow.co.in/survey" class="">Surveys</a>
						<a href="http://outgrow.co.in/increase-conversions" class="">Increase Conversions</a>
						<a href="http://outgrow.co.in/increase-roi" class="">Increase ROI</a>
						<a href="http://outgrow.co.in/increase-sales" class="">Increase Sales</a>
					</div>
				</li>
				<li><a href="{{ $page->baseUrl }}/why-interactive" onclick="callGA('WHY')" class="params" id="nav-why-interactive">Why Interactive Content ?</a></li>
				<li><a href="{{ $page->baseUrl }}/features" onclick="callGA('FEATURES')" class="params" id="nav-features">Features</a></li>
				<li><a href="{{ $page->baseUrl }}/pricing" onclick="callGA('PRICING')" class="params" id="nav-pricing">Pricing</a></li>
				<!-- <li><a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params" id="nav-examples">Examples</a></li> -->
				<li class="dropdown">
					<a href="javascript:void(0);" onclick="callGA('USECASE')" class="params">Get Inspired <i class="material-icons">arrow_drop_down</i></a>
					<div class="dropdown-content">
						<a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params" id="nav-examples">Interactive Examples </a>
						<div class="drop-sub-menu">
							<a href="{{ $page->baseUrl }}/case-studies" onclick="callGA('CASESTUDIES')" class="params" id="nav-case-studies">Success Stories <i class="material-icons">chevron_right</i></a>
							<div class="dropdown-sub-content">
								<a href="case-studies#tag" class="nav-case nav-link-tag">TAG </a>
								<a href="case-studies#getPaid" class="nav-case nav-link-gpyp">Get Paid Your Pad </a>
								<a href="case-studies#vp" class="nav-case nav-link-vp">VenturePact </a>
								<a href="case-studies#macroscape" class="nav-case nav-link-macro">Macroscape </a>
							</div>
						</div>
					</div>
				</li>
				<li class="login">
					<a href="//app.outgrow.co/login" class="link-login params" onclick="callGA('LOGIN')">Login</a>
				</li>
				<li class="signUp signUp-style res-nav-hide">
					<a href="//app.outgrow.co/signup" class="link-login params" onclick="callGA('SIGNUP HEADER')">Sign up</a>
				</li>
				<li class="signUp res-nav-show">
					<a href="//app.outgrow.co/signup" class="link-login params" onclick="callGA('SIGNUP HEADER')">Sign up</a>
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
			<li class="dropdown">
				<a href="javascript:void(0);" onclick="callGA('USECASES')" class="params dropdown" id="nav-use-cases">Use Cases <i class="material-icons">arrow_drop_down</i></a>
				<div class="dropdown-content">
					<a href="http://outgrow.co.in/calculator" class="">Calculators</a>
					<a href="http://outgrow.co.in/quiz" class="">Quizzes </a>
					<a href="http://outgrow.co.in/survey" class="">Surveys</a>
					<a href="http://outgrow.co.in/increase-conversions" class="">Increase Conversions</a>
					<a href="http://outgrow.co.in/increase-roi" class="">Increase ROI</a>
					<a href="http://outgrow.co.in/increase-sales" class="">Increase Sales</a>
				</div>
			</li>
			<li><a href="{{ $page->baseUrl }}/why-interactive" onclick="callGA('WHY')" class="params" id="nav-why-interactive">Why Interactive Content ?</a></li>
			<li><a href="{{ $page->baseUrl }}/features" onclick="callGA('FEATURES')" class="params" id="nav-features">Features</a></li>
			<li><a href="{{ $page->baseUrl }}/pricing" onclick="callGA('PRICING')" class="params" id="nav-pricing">Pricing</a></li>
			<!-- <li><a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params" id="nav-examples">Examples</a></li> -->
			<li class="dropdown">
				<a href="javascript:void(0);" onclick="callGA('USECASE')" class="params">Get Inspired <i class="material-icons">arrow_drop_down</i></a>
				<div class="dropdown-content">
					<a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params" id="nav-examples">Interactive Examples </a>
					<div class="drop-sub-menu">
						<a href="{{ $page->baseUrl }}/case-studies" onclick="callGA('CASESTUDIES')" class="params" id="nav-case-studies">Success Stories <i class="material-icons">chevron_right</i></a>
						<div class="dropdown-sub-content">
							<a href="case-studies#tag" class="nav-case nav-link-tag">TAG </a>
							<a href="case-studies#getPaid" class="nav-case nav-link-gpyp">Get Paid Your Pad </a>
							<a href="case-studies#vp" class="nav-case nav-link-vp">VenturePact </a>
							<a href="case-studies#macroscape" class="nav-case nav-link-macro">Macroscape </a>
						</div>
					</div>
				</div>
			</li>
			<li class="login">
				<a href="//app.outgrow.co/login" class="link-login params" onclick="callGA('LOGIN')">Login</a>
			</li>
			<li class="signUp signUp-style res-nav-hide">
				<a href="//app.outgrow.co/signup" class="link-login params" onclick="callGA('SIGNUP HEADER')">Sign up</a>
			</li>
			<li class="signUp res-nav-show">
				<a href="//app.outgrow.co/signup" class="link-login params" onclick="callGA('SIGNUP HEADER')">Sign up</a>
			</li>
		</ul>
	</div>
</nav> 



<!-- <div class="header-logo">
<a href="https://outgrow.co/" class="">
	<img src="{{ $page->baseUrl }}/images/lp-header-logo.png" alt="lp-header-logo image">
</a>
</div> -->
