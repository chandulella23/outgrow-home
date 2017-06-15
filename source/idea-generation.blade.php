@extends('_layouts.ideagen')

@section('title', 'Idea Generation | Outgrow')

@section('metaDescription')
	<meta name="description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators."/>
	<link rel="canonical" href="http://outgrow.co/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Idea Generation | Outgrow" />
	<meta property="og:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta name="twitter:title" content="Idea Generation | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/style.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/responsive.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/selectize.default.css">
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')
	<div class="main-outr">
        <section class="sec-outr sec1-bg mouse-bg">
            <div class="sec">
                <div class="logo">
                    <a href="javascript:void(0);">
                        <img src="{{ $page->baseUrl }}/images/logo.png" alt="logo" />
                    </a>
                </div>
                <div class="sec-container">
                    <div class="sec1-text">
                        <span id="background" class="mouse-bg">
                            Generate Ideas <br>
                            for Quiz or <br>
                            Calculator.
                        </span>
                    </div>
                    <a class="sec1-button" href="javascript:void(0);">Get Started</a>
                </div>
            </div>
        </section>
        <div class="logo-top hide">
            <a href="javascript:void(0);">
                <img src="{{ $page->baseUrl }}/images/logo.png" alt="logo" />
            </a>
        </div>
        <section class="sec-outr sec2-bg hide">
            <!-- <div class="loader-wrapper category-page-loader">
                    <i class="material-icons loader-anim">autorenew</i>
            </div> -->
            <div class="preloader category-page-loader">
                    <div class="status">&nbsp;</div>
                </div>
            <div class="sec">
                <div class="sec-container">
                    <div class="sec2-step">
                        <span>1/3</span>
                    </div>
                    <div class="sec2-text">
                        Which category<br>
                        does your<br>
                        company fall<br>
                        into?
                    </div>
                    <div class="sec-catergory">
                        <select class="demo-default selectize-category" data-placeholder="Choose Category">
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-outr sec3-bg hide">
       <!--  <div class="loader-wrapper sub-category-page-loader">
                    <i class="material-icons loader-anim">autorenew</i>
        </div> -->
        <div class="preloader sub-category-page-loader">
                    <div class="status">&nbsp;</div>
        </div>
            <div class="sec">
                <div class="sec-container">
                    <div class="sec2-step">
                        <span>2/3</span>
                    </div>
                    <div class="sec2-text">
                        Select<br>
                        Sub-Category
                    </div>
                    <div class="sec-catergory">
                        <select class="demo-default selectize-sub-category" data-placeholder="Choose Sub Category">
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-outr sec4-bg hide">
            <div class="sec">
                <div class="sec-container">
                    <div class="sec2-step">
                        <span>3/3</span>
                    </div>
                    <div class="sec2-text">
                        Your Email
                    </div>
                    <div class="sec-catergory">
                        <input type="text" class="sec-input" id="form-email" placeholder="johnwatson@sh.com" />
                        <span class="alert alert-danger email-validator hide">
						  	<i class="material-icons">error_outline</i> Please enter valid email
						</span>
                    </div>
                    <div class="butn-outr">
                        <button type="submit" class="sec-button button-ideas">Show me my ideas!</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-outr sec5-bg hide">
            <div class="sec">
                <div class="sec-fullwidth">
                    <div class="sec2-text">
                        Here you go!s
                    </div>
                </div>
                <div class="sec-cat-main">
                    <div class="sec-cate-1">
                        <select class="demo-default selectize-category-result" data-placeholder="Choose Category">
                        </select>
                    </div>
                    <div class="sec-cate-1">
                        <select class="demo-default selectize-sub-category-result" data-placeholder="Choose Sub Category">
                        </select>
                    </div>
                    <div class="sec-cate-1">
                        <button type="submit" class="sec-button-update">Update</button>
                    </div>
                </div>
                <!-- <div class="loader-wrapper result-page-loader">
                    <i class="material-icons loader-anim">autorenew</i>
                </div> -->
                <div class="preloader result-page-loader">
                    <div class="status">&nbsp;</div>
                </div>
                <div class="sec-cat-list">
                    <h3>Top of the funnel</h3>
                    <div class="sec-cat-carousel">
                        <div class="owl-container">
                            <div class="owl-demo pic-selector top-funnel">
                                <div class="item hide">
                                    <input checked="checked" id="xs-img1" type="checkbox" name="xs-img" value="xs-img1" />
                                    <label class="xs-img-hover img img1" for="xs-img1">
                                        <span class="click-outr"></span>
                                        <div class="overlay-outer">
	                                        <div class="overlay">
	                                        	What best suits you from our spring / summer colection?
	                                        </div>
										</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-cat-list">
                    <h3>Middle of the funnel</h3>
                    <div class="sec-cat-carousel">
                        <div class="owl-container">
                            <div class="owl-demo pic-selector mid-funnel">
                                <div class="item hide">
                                    <input checked="checked" id="xs-img11" type="checkbox" name="xs-img" value="xs-img1" />
                                    <label class="xs-img-hover img img5" for="xs-img11">
                                    	<span class="click-outr"></span>
                                    	<div class="overlay-outer">
	                                        <div class="overlay">
	                                        	What best suits you from our spring / summer colection?
	                                        </div>
										</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec-cat-list">
                    <h3>Bottom of the funnel</h3>
                    <div class="sec-cat-carousel">
                        <div class="owl-container">
                            <div class="owl-demo pic-selector bottom-funnel">
                                <div class="item hide">
                                    <input checked="checked" id="xs-img21" type="checkbox" name="xs-img" value="xs-img1" />
                                    <label class="xs-img-hover img img7" for="xs-img21">
                               	 		<span class="click-outr"></span>
                                    	<div class="overlay-outer">
	                                        <div class="overlay">
	                                        	What best suits you from our spring / summer colection?
	                                        </div>
										</div>
									</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="build-btn hide">
                <a href="javascript:void(0);">Build Selection <span id="build-select"></span></a>
            </div> -->
        </section>
    </div>
@endsection

@section('inlinescripts').
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/request.sheet.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/database.sheet.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/owl.carousel.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/selectize.min.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/mouse.parallax.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/validation.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/build.js"></script>
@endsection


@section('pageScripts')
	const libs = {
		"idea-gen": "{{ $page->baseUrl }}/js/pageScripts/idea-gen.js"
	}
@endsection