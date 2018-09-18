@extends('_layouts.ideagen')

@section('title', 'Interactive Content Title Generator by Outgrow | Outgrow')

@section('metaDescription')
	<meta name="description" content="Use the Interactive Content Title Generator to enter a keyword and get titles for interactive content around that keyword."/>
	<link rel="canonical" href="http://outgrow.co/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Interactive Content Title Generator by Outgrow | Outgrow" />
	<meta property="og:description" content="Use the Interactive Content Title Generator to enter a keyword and get titles for interactive content around that keyword." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Use the Interactive Content Title Generator to enter a keyword and get titles for interactive content around that keyword." />
	<meta name="twitter:title" content="Interactive Content Title Generator by Outgrow | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('css')
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')
	<div class="main-outr">
        <div class="col-xs-12 col-md-12 col-sm-12 np">
            <iframe id="iframe-wrapper" style="width:100%; height:100vh; border:none; float: left;" 
            src="https://influencers.outgrow.us/interactive-content-title-generator"></iframe>
        </div>
    </div>

@endsection

@section('inlinescripts')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/request.sheet.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/database.sheet.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/selectize.min.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/mouse.parallax.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/validation.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/build.js"></script> -->
@endsection

