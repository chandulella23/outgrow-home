var og_e = document.getElementById('og-iframe-container');
var og_u = og_e.getAttribute('data-url');
var og_w = og_e.getAttribute('data-width');
var og_b = document.getElementsByTagName("body")[0];

var og_js = document.createElement("script");
og_js.setAttribute("type", "text/javascript");
og_js.setAttribute("src", "https://outgrow.co/js/loader/resizer.js");
og_e.appendChild(og_js);

//The main Iframe
var og_iFrame = document.createElement("iframe");
og_iFrame.setAttribute("id", "og-iframe");
og_iFrame.setAttribute("src", og_u);
og_iFrame.setAttribute("width", og_w);
og_iFrame.setAttribute("scrolling", "auto");
og_iFrame.setAttribute("class", "height-auto");

//Resize button for mobile
var iWidth = window.innerWidth;
if(iWidth < 786) {
	//CSS
	var og_style = document.createElement("style");
	var style_node = document.createTextNode("body, html {height: 100%;margin: 0;overflow: hidden;}.fullScreen {z-index:999;width: 100%;height: 100% !important;position: fixed;top: 0;left: 0;}.hide{display:none;}.height-auto{height: auto !important}");
	og_style.appendChild(style_node);
	og_e.appendChild(og_style);
	//Button
	var og_button = document.createElement("a");
	og_button.setAttribute("href","javascript:void(0);");
	og_button.setAttribute("id","og-iframe-button");
	og_button.setAttribute("class","og-iframe-button hide");
	og_button.setAttribute("onclick","toggleFullScreen()");
	og_button.setAttribute("style","position: absolute;right: 2%;top: 3%;color: black;text-decoration: none;z-index:9999;");
	var button_node = document.createTextNode("");
	og_button.appendChild(button_node);
	og_b.appendChild(og_button);
	//Close Image
	var og_close = document.createElement("img");
	og_close.setAttribute("src","https://cdn.filestackcontent.com/IoC6isNQtChoxSMltCMr");
	og_button.appendChild(og_close);
	//toggleFullScreen
	var toggleFullScreen = document.createElement("script");
	toggleFullScreen.setAttribute("type", "text/javascript");
	var toggleFullScreen_node = document.createTextNode("function toggleFullScreen(){var e=document.body;document.getElementById('body_wrapper').classList.toggle('fullScreen'),document.getElementById('og-iframe-button').classList.toggle('hide'),document.getElementById('og_overlay').classList.toggle('hide'),document.getElementById('body_wrapper').classList.contains('fullScreen')?document.getElementById('body_wrapper').appendChild(document.getElementById('og-iframe')):document.getElementById('og-iframe-container').appendChild(document.getElementById('og-iframe')),void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen?e.requestFullScreen?e.requestFullScreen():e.mozRequestFullScreen?e.mozRequestFullScreen():e.webkitRequestFullScreen?e.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):e.msRequestFullscreen&&e.msRequestFullscreen():document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen?document.webkitCancelFullScreen():document.msExitFullscreen&&document.msExitFullscreen()}");
	toggleFullScreen.appendChild(toggleFullScreen_node);
	og_e.appendChild(toggleFullScreen);
	//Overlay
	var og_overlay = document.createElement("div");
	og_overlay.setAttribute("id","og_overlay");
	og_overlay.setAttribute("style","position: absolute;width: 70%;height: 85%;top: 5%;left: 15%;");
	og_overlay.setAttribute("onclick","toggleFullScreen()");
	og_e.appendChild(og_overlay);
	//Body Wrapper
	var body_wrapper = document.createElement("div");
	body_wrapper.setAttribute("id","body_wrapper");
	body_wrapper.setAttribute("style","overflow: scroll !important;-webkit-overflow-scrolling:touch !important;-webkit-transform: translateZ(0px);-webkit-transform: translate3d(0,0,0);");
	og_b.appendChild(body_wrapper);
}

//ogOnLoadHandler
var ogOnLoadHandler = document.createElement("script");
ogOnLoadHandler.setAttribute("type", "text/javascript");
var node = document.createTextNode("var screenWidth = screen.width; var screenHeight = screen.height; var aspectRatio = screenWidth/screenHeight;  var width = document.getElementById(\"og-iframe\").clientWidth; var height = width/aspectRatio; var iframes = iFrameResize({log:false,autoResize:true,enablePublicMethods: true,minHeight:height})");
ogOnLoadHandler.appendChild(node);

setTimeout(function(){
    og_e.appendChild(og_iFrame);
    og_e.appendChild(ogOnLoadHandler);
},2500);