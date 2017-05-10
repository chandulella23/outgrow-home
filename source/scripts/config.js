requirejs.config({
	baseUrl: './../js',
	paths : {
		'page': './../scripts/pagescripts'
	}
})

requirejs(['page/init'], function (init) {
	init(window.location.pathname);
});