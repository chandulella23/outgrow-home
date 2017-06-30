@extends('_layouts.master')

@section('title', 'Page not found | Outgrow')

@section('metaDescription')
	<meta property="og:title" content="Page not found | Outgrow" />
@endsection

@section('inlinescripts')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/custom-sa.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/sahil-hover.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/home-responsive.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/why-responsive.css">
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/stylesheet.min.css' type='text/css' media='all'  />
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/js_composer.mina752.css?ver=4.11.2.1' type='text/css' media='all' />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('pageClass', '')

@section('pageId', '404')

@section('content')
<div>
	<!-- Homepage section 1 start-->
    <section class="section section-1 tarun">
        <div class="container-fluid table-inner">
            <div class="col-xs-12 col-sm-6 section-1-left">
                <div class="section1-left-cell height-res">
                    <h3 class="mk-animate-element fade-in heading-404">
                        404
                    </h3>
                    <h4 class="mk-animate-element fade-in heading2-404">
                        Looks like your calc is not published yet, please<br> login and publish your calc.
                    </h4>
                    <div class="form-group mk-animate-element fade-in hide">
                        <input type="text" placeholder="Email Address" />
                    </div>
                    <div class="col-xs-12 col-sm-8 np">
                        <a href="//app.outgrow.co" class="params btn-buildcal mk-animate-element fade-in login-404">Login</a>
                    </div>
                </div>
            </div>
			<div class="col-xs-12 col-sm-6 np rs-hide">
				<div class="sec1-box-left img-404">
					<div class="sec1-box1 mk-animate-element fade-in">
						<img src="{{ $page->baseUrl }}/images/404.png" />
					</div>
				</div>
			</div>
        </div>
    </section>
</div>
@endsection

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
	}
@endsection
