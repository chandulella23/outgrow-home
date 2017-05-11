<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators."/>
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Interactive Calculators | Outgrow" />
	<meta property="og:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta name="twitter:title" content="Interactive Calculators | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />

	<link rel="canonical" href="http://outgrow.co/" />
	<link href='https://www.filepicker.io/api/file/Ay8X8PhXTdaClFdhsLeR' rel='shortcut icon'>

	@yield('css')

	@include('_partials.headscripts')
</head>

<body class="@yield('pageClass')" id="@yield('pageId')">
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDL5P5M"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	@include ('_partials.navbar')

	@yield('content')

	@include('_partials.footer')

	<script>
		@yield('pageScripts')

		const loadedLibs = {}
		let counter = 0
		const loadAsync = function(lib) {
			var http = new XMLHttpRequest()
			http.open("GET", libs[lib], true)
			http.onload = () => {
				loadedLibs[lib] = http.responseText
				if (++counter == Object.keys(libs).length) startScripts()
			}
			http.send()
		}
		const startScripts = function() {
			for (var lib in libs) eval(loadedLibs[lib])
				console.log("allLoaded", loadedLibs);
		}
		for (var lib in libs) loadAsync(lib)
	</script>
</body>
</html>