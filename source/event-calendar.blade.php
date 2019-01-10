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
			function postRequest(url, data, options = {}) {
				return fetch(url, Object.assign({
					method: "POST", // *GET, POST, PUT, DELETE, etc.
					mode: "cors", // no-cors, cors, *same-origin
					cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
					credentials: "same-origin", // include, *same-origin, omit
					headers: {
						"Content-Type": "application/json; charset=utf-8"
					},
					redirect: "follow", // manual, *follow, error
					referrer: "no-referrer", // no-referrer, *client
					body: JSON.stringify(data), // body data type must match "Content-Type" header
				}, options)).then(response => response.json())
			};

			let host = window.location.hostname;
			let url = 'https://api.outgrow.co/api/v1/admin/getEventsByDate';
			if (host === 'rely.co' || host === 'localhost') {
				url = 'https://outgrow-api.herokuapp.com/api/v1/admin/getEventsByDate';
			}
			let response = postRequest(url, {
				'date': new Date().toISOString(),
				'operator': '$gte'
			});
			response.then((data) => {
				let events = [];
				if(data.data.count) {
					data.data.events.forEach((ev) => {
						let e = {
							title: ev.event_name,
							start: ev.launch_date.split('T')[0],
							color: ev.color
						}
						events.push(e);
					});
				}
				printCalendar(events);
			});

			function printCalendar(events) {
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
					events: events
				});
			}
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
	<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />	
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/event-calendar.css">


@endsection

@section('pageClass', 'usecase')

@section('pageId', '')

@section('content')
<div class="section-main">
	<div class="container mobile-container">
		<div class="event-calendar">
			<div class="calender-left-sec-full calender-left-sec">		
				<div id='calendar' class=""></div>
			</div>
			<div class="calender-right-sec">
				<div class="calender-list-item">
					<div class="li-left-outer-section">
						<span class="date-event">Date</span>
					</div>
					<div class="li-right-outer-section">
						<span class="date-event">Events</span>
					</div>
					<ul class="calender-outer-list">
						<!---->
						<!----><li class="calender-each-list">
							<div class="li-left-sec">
								<span class="date-tag">02</span>
								<span class="day">Jan, 2019</span>
								
							</div>
							<div class="li-right-sec">
								<span class="event-tag">
									Babson College EARLY DECISION 2 DEADLINE
								</span>
							</div>
						</li><li class="calender-each-list">
							<div class="li-left-sec">
								<span class="date-tag">02</span>
								<span class="day">Jan, 2019</span>
								
							</div>
							<div class="li-right-sec">
								<span class="event-tag">
									Babson College REGULAR DECISION DEADLINE
								</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
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