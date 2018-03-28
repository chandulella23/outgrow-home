@extends('_layouts.master')

@section('title', 'Case Studies | Outgrow')

@section('metaDescription')
	<meta name="description" content="Because Customers want to be helped. Not Sold To."/>
	<link rel="canonical" href="http://outgrow.co/why_calculators.html" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Why Calculators? | Outgrow" />
	<meta property="og:description" content="Because Customers want to be helped. Not Sold To." />
	<meta property="og:url" content="https://outgrow.co/why_calculators.html" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Because Customers want to be helped. Not Sold To." />
	<meta name="twitter:title" content="Why Calculators? | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
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

@section('pageId', 'why')

@section('content')
	<script src="{{ $page->baseUrl }}/js/swiper.min.js"></script>

	<div class="section-case-study-main">
		<section class="section section-page-heading">
			<div class="container-fluid">
				<h3>Case Studies</h3>
				<h5 class="section-2-subheading">Success stories of companies using Outgrow to grow their business </h5>
			</div>
		</section>
		<section class="section section-case-study">
			<div class="container case-study-tabs-container">
				<div class="col-md-12 col-sm-12 col-xs-12 np">
					<ul class="nav nav-pills">
						<li class="active">
							<a class="col-md-4 col-sm-4 col-xs-12 np case-study-tabs" data-toggle="pill" href="#tag">
								<img src="{{ $page->baseUrl }}/images/case_study_tag.png" alt="TAG Livros">
								<span>Case Study 1</span>
							</a>
						</li>
						<li>
							<a class="col-md-4 col-sm-4 col-xs-12 np case-study-tabs" data-toggle="pill" href="#getPaid">
								<img src="{{ $page->baseUrl }}/images/case_study_get_paid.png" alt="Get Paid For Your Pad">
								<span>Case Study 2</span>
							</a>
						</li>
						<li>
							<a class="col-md-4 col-sm-4 col-xs-12 np case-study-tabs"  data-toggle="pill" href="#vp">
								<img src="{{ $page->baseUrl }}/images/case_study_vp.png" alt="VenturePact">
								<span>Case Study 3</span>
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="tag" class="tab-pane fade in active">
							<h3>HOME</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div id="getPaid" class="tab-pane fade">
							<h3>Menu 1</h3>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div id="vp" class="tab-pane fade">
							<h3>Menu 2</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
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
		"whypage": "{{ $page->baseUrl }}/js/pageScripts/whypage.js",
	}
@endsection
