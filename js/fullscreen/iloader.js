var og_e = document.getElementById('og-iframe-container');
var og_u = og_e.getAttribute('data-url');
var og_w = og_e.getAttribute('data-width');
var og_b = document.getElementsByTagName("body")[0];

//Resize function body
og_b.setAttribute("onresize", "ogOnLoadHandler();");

//The main Iframe
var iFrame = document.createElement("iframe");
iFrame.setAttribute("id","og-iframe");
iFrame.setAttribute("src", og_u);
iFrame.setAttribute("width", og_w);
iFrame.setAttribute("onload", "ogOnLoadHandler();");
iFrame.setAttribute("style","-webkit-overflow-scrolling: touch;overflow-y: scroll;");
og_e.appendChild(iFrame);

//Resize button for mobile
var iWidth = window.innerWidth;
if(iWidth < 786) {
	//CSS
	var og_style = document.createElement("style");
	var style_node = document.createTextNode("body, html {height: 100%;margin: 0;overflow: hidden;}iframe.fullScreen {z-index:999;width: 100%;height: 100%;position: fixed;top: 0;left: 0;}.hide{display:none;}");
	og_style.appendChild(style_node);
	og_e.appendChild(og_style);
	//Button
	var og_button = document.createElement("a");
	og_button.setAttribute("href","javascript:void(0);");
	og_button.setAttribute("id","og-iframe-button");
	og_button.setAttribute("class","og-iframe-button hide");
	og_button.setAttribute("onclick","toggleFullScreen()");
	og_button.setAttribute("style","position: absolute;right: 3%;top: 3%;color: black;text-decoration: none;z-index:9999;");
	var button_node = document.createTextNode("Exit Fullscreen");
	og_button.appendChild(button_node);
	og_b.appendChild(og_button);
	//toggleFullScreen
	var toggleFullScreen = document.createElement("script");
	toggleFullScreen.setAttribute("type", "text/javascript");
	var toggleFullScreen_node = document.createTextNode("function toggleFullScreen(){var e=document.body;document.getElementById('og-iframe').classList.toggle('fullScreen'),document.getElementById('og-iframe-button').classList.toggle('hide'),document.getElementById('og_overlay').classList.toggle('hide'),document.getElementById('og-iframe').classList.contains('fullScreen')?document.getElementsByTagName('body')[0].appendChild(document.getElementById('og-iframe')):document.getElementById('og-iframe-container').appendChild(document.getElementById('og-iframe')),void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen?e.requestFullScreen?e.requestFullScreen():e.mozRequestFullScreen?e.mozRequestFullScreen():e.webkitRequestFullScreen?e.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):e.msRequestFullscreen&&e.msRequestFullscreen():document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen?document.webkitCancelFullScreen():document.msExitFullscreen&&document.msExitFullscreen()}");
	toggleFullScreen.appendChild(toggleFullScreen_node);
	og_e.appendChild(toggleFullScreen);
	//Overlay
	var og_overlay = document.createElement("div");
	og_overlay.setAttribute("id","og_overlay");
	og_overlay.setAttribute("style","position: absolute;width: 100%;height: 100%;top: 0;left: 0;");
	og_overlay.setAttribute("onclick","toggleFullScreen()");
	og_e.appendChild(og_overlay);
}

//ogOnLoadHandler
 var ogOnLoadHandler = document.createElement("script");
 ogOnLoadHandler.setAttribute("type", "text/javascript");
 var node = document.createTextNode("function ogOnLoadHandler(){var screenWidth = screen.width; var screenHeight = screen.height; var aspectRatio = screenWidth/screenHeight; var width = document.getElementById(\"og-iframe\").clientWidth; var height = width/aspectRatio; document.getElementById(\"og-iframe\").style.height = height+'px';}");
 ogOnLoadHandler.appendChild(node);
 og_e.appendChild(ogOnLoadHandler);