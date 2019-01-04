@extends('_layouts.master')

@section('title', 'Event Calendar | Outgrow')

@section('metaDescription')
	<meta name="description" content="Services, SAAS, Education, Healthcare, Construction, Travel & Hospitality, Finance, Manufacturing, Publishing. There is a Calculator for that!"/>
	<link rel="canonical" href="http://outgrow.co/examples.html" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Examples | Outgrow" />
	<meta property="og:description" content="Services, SAAS, Education, Healthcare, Construction, Travel & Hospitality, Finance, Manufacturing, Publishing. There is a Calculator for that!" />
	<meta property="og:url" content="https://outgrow.co/examples.html" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Services, SAAS, Education, Healthcare, Construction, Travel & Hospitality, Finance, Manufacturing, Publishing. There is a Calculator for that!" />
	<meta name="twitter:title" content="Examples | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('inlinescripts')
	<script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/selectize.min.js"></script>
@endsection

@section('css')
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/animations.css">
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/custom-sa.css">
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/sahil-hover.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/home-responsive.css">
	<link rel='stylesheet' href="{{ $page->baseUrl }}/css/stylesheet.min.css" type="text/css" media='all'  />
	<link rel='stylesheet' href="{{ $page->baseUrl }}/css/js_composer.mina752.css?ver=4.11.2.1" type='text/css' media='all' />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/navbar.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/selectize.default.css">	
	<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />


@endsection

@section('pageClass', 'usecase')

@section('pageId', '')

@section('content')
<div class="section-main sec-example">
    <div id="calendar" style="margin-top: 150px;"> </div>
</div>
@endsection

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"calendar": "{{ $page->baseUrl }}/js/pageScripts/calendar.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
		"examples": "{{ $page->baseUrl }}/js/pageScripts/example.js",
		"navbar": "{{ $page->baseUrl }}/js/pageScripts/navbar.js",
		"simplebar": "https://unpkg.com/simplebar@latest/dist/simplebar.js",
	}
@endsection