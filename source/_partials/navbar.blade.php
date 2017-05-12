<nav class="navbar custom-navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="params navbar-brand" href="{{ $page->baseUrl }}"><img src="{{ $page->baseUrl }}/images/logo.png" /></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
                <li><a href="{{ $page->baseUrl }}/why-interactive" onclick="callGA('WHY')" class="params">Why Interactive Content ?</a></li>
                <li><a href="{{ $page->baseUrl }}/features" onclick="callGA('FEATURES')" class="params">Features</a></li>
                <li><a href="{{ $page->baseUrl }}/pricing" onclick="callGA('PRICING')" class="params">Pricing</a></li>
                <li><a href="{{ $page->baseUrl }}/examples" onclick="callGA('USECASE')" class="params">Examples</a></li>
               	<li class="login">
               		<a href="#" class="link-login params" onclick="callGA('LOGIN')">Login</a>
               	</li>
          		<li class="signUp signUp-style res-nav-hide">
          			<a href="#" class="link-login params">Signup</a>
          		</li>
                <li class="signUp res-nav-show">
                	<a href="#" class="link-login params">Signup</a>
                </li>
			</ul>
		</div>
	</div>
</nav>