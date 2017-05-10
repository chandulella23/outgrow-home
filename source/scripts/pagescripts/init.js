define(function () {
	return function (path) {
		var module = 'page/';
		if (path === "/")
			path = 'index';
		module += path;
		requirejs([module])
	}
})