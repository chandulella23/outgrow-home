@extends('_layouts.master')

@section('title', 'Examples | Outgrow')

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
	<script src='https://momentjs.com/downloads/moment.min.js'></script>
	<script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
	<script>
		$(document).ready(function() {

			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,basicWeek,basicDay'
				},
				defaultDate: new Date(),
				navLinks: true, // can click day/week names to navigate views
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
					{
						title: 'All Day Event',
						start: '2019-01-01'
					},
					{
						title: 'Long Event',
						start: '2019-01-07',
						end: '2019-01-10'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2019-01-09T16:00:00'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2019-01-16T16:00:00'
					},
					{
						title: 'Conference',
						start: '2019-01-11',
						end: '2019-01-13'
					},
					{
						title: 'Meeting',
						start: '2019-01-12T10:30:00',
						end: '2019-01-12T12:30:00'
					},
					{
						title: 'Lunch',
						start: '2019-01-12T12:00:00'
					},
					{
						title: 'Meeting',
						start: '2019-01-12T14:30:00'
					},
					{
						title: 'Happy Hour',
						start: '2019-01-12T17:30:00'
					},
					{
						title: 'Dinner',
						start: '2019-01-12T20:00:00'
					},
					{
						title: 'Birthday Party',
						start: '2019-01-13T07:00:00'
					}
				]
			});
		});
	</script>
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
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/useCase.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/animated-masonry-gallery.css" type="text/css" />
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/useCase-responsive.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/navbar.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/selectize.default.css">	
	<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
	<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
	<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css' rel='stylesheet' media='print' />	
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/event-calendar.css">


@endsection

@section('pageClass', 'usecase')

@section('pageId', '')

@section('content')
<div class="section-main">
	<div class="container mobile-container">
		<div id='calendar' class="event-calendar"></div>
	</div>
</div>
@endsection

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
		"navbar": "{{ $page->baseUrl }}/js/pageScripts/navbar.js",
		"simplebar": "https://unpkg.com/simplebar@latest/dist/simplebar.js",
	}
@endsection