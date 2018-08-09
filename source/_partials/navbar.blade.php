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
				<li><a href="{{ $page->baseUrl }}/why-interactive" onclick="callGA('WHY')" class="params hvr-underline-from-left" id="nav-why-interactive">Why Interactive Content ?</a></li>
				<li><a href="{{ $page->baseUrl }}/features" onclick="callGA('FEATURES')" class="params hvr-underline-from-left" id="nav-features">Features</a></li>
				<li><a href="{{ $page->baseUrl }}/pricing" onclick="callGA('PRICING')" class="params hvr-underline-from-left" id="nav-pricing">Pricing</a></li>
				<li><a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params hvr-underline-from-left" id="nav-examples">Examples</a></li>
				
				<li class="login">
					<a href="//app.outgrow.co/login" class="link-login params" onclick="callGA('LOGIN')">Login</a>
				</li>
				<!-- <li class="signUp signUp-style res-nav-hide">
					<a href="//app.outgrow.co/signup" class="link-login params" onclick="callGA('SIGNUP HEADER')">Start Free Trial</a>
				</li>
				<li class="signUp res-nav-show">
					<a href="//app.outgrow.co/signup" class="link-login params" onclick="callGA('SIGNUP HEADER')">Start Free Trial</a>
				</li> -->
				<li class="nav-lead-input">
					<input class="lead-form-email navbar-email" name="emailId" type="email" placeholder="Enter your email">
					<span class="lead-form-btn">
						<a href="//app.outgrow.co/signup/?email=" class="link-login lead-email btn-buildcal btn-hover dashboard-login" onclick="callGA('CANNOT WAIT CTA'); ">
							Start Free Trial
						</a>
					</span>
				</li>
				<li>
					<a href="//app.outgrow.co/signup/?email=" class="btn btn-hover dashboard-login" onclick="callGA('CANNOT WAIT CTA'); ">
						Dashboard
					</a>
				</li>
			</ul>
		</div> 
	</div>
</nav>

<script>
    	document.getElementsByClassName('lead-form-email')[0].onchange = function (e) {
			let email = e.target.value;
			let href = "//app.outgrow.co/signup/?email=";
			document.getElementsByClassName('lead-email')[0].href = href + email;
    }
</script>


<!-- <div class="header-logo">
<a href="https://outgrow.co/" class="">
	<img src="{{ $page->baseUrl }}/images/lp-header-logo.png" alt="lp-header-logo image">
</a>
</div> -->