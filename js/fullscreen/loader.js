var og_e = document.getElementById('embed-container');
var og_t = og_e.getAttribute('data-text');
var og_u = og_e.getAttribute('data-url');
var og_a = og_e.getAttribute('data-type');
var og_p = og_e.getAttribute('data-prop');
var og_b = document.getElementsByTagName("body")[0];
var iWidth = window.innerWidth;
if (og_e.getAttribute('data-bgcolor'))
	var og_bc = og_e.getAttribute('data-bgcolor');
else
	var og_bc = '#fb545b';

if (og_e.getAttribute('data-textcolor'))
	var og_tc = og_e.getAttribute('data-textcolor');
else {
	if (og_a == 'outgrow-b')
		var og_tc = '#ffffff';
	else
		var og_tc = '#fb545b';
}

//Resize function body
if (og_p == 'outgrow-p') {
	og_b.setAttribute("onresize", "ogOnLoadHandler();");
	og_b.setAttribute("style", "margin:0;padding:0;")
}
//Custom CSS
var style = document.createElement("style");
var node = document.createTextNode("#close-popup {background: url(https://cdn.filestackcontent.com/IoC6isNQtChoxSMltCMr);position: fixed;top: 14% !important;right: 13%;width: 29px;height: 28px;cursor: pointer;z-index: 99999 !important;}#close-drawer {background: url(https://cdn.filestackcontent.com/IoC6isNQtChoxSMltCMr);position: fixed;top: -3px;right: 48%;width: 29px;height: 28px;cursor: pointer;z-index: 99999 !important;}.hide {display: none;}.outgrow-b{color: " + og_tc + ";background: " + og_bc + ";margin-top: 0px;transition: all 0.5s ease;white-space: normal;word-break: break-word;border-radius: 0px;border: 1px solid #dae2e6;text-decoration: none;padding: 5px 10px;line-height: 1.5;}.outgrow-l{color: " + og_tc + ";margin-top: 0px;transition: all 0.5s ease;white-space: normal;word-break: break-word;border-radius: 0px;text-decoration: none;padding: 5px 10px;line-height: 1.5;}");
style.appendChild(node);
og_e.appendChild(style);

//Create Custom JS Element
var js = document.createElement("script");
js.setAttribute("type", "text/javascript");

if (og_p == 'outgrow-p')
	node = document.createTextNode("function togglePopup() { if(!document.getElementById('popup-iframe').classList.contains('hide')) document.getElementById('popup-iframe').src=document.getElementById('popup-iframe').src; document.getElementById(\"overlay-popup\").classList.toggle(\"hide\"); document.getElementById(\"popup-iframe\").classList.toggle(\"hide\");ogOnLoadHandler();document.getElementById(\"close-popup\").classList.toggle(\"hide\"); }");
else
	node = document.createTextNode("function toggleDrawer() { if(!document.getElementById('drawer-iframe').classList.contains('hide')) document.getElementById('drawer-iframe').src=document.getElementById('drawer-iframe').src; document.getElementById(\"overlay-drawer\").classList.toggle(\"hide\"); document.getElementById(\"drawer-iframe\").classList.toggle(\"hide\");document.getElementById(\"close-drawer\").classList.toggle(\"hide\");}");
js.appendChild(node);
og_e.appendChild(js);

//ogOnLoadHandler
var ogOnLoadHandler = document.createElement("script");
ogOnLoadHandler.setAttribute("type", "text/javascript");
var node = document.createTextNode("function ogOnLoadHandler(){var screenWidth = screen.width;var screenHeight = screen.height;var aspectRatio = screenWidth/screenHeight;var width = document.getElementById(\"popup-iframe\").clientWidth;var height = width/aspectRatio;document.getElementById(\"popup-iframe\").style.height = height+'px';}");
ogOnLoadHandler.appendChild(node);
og_e.appendChild(ogOnLoadHandler);

//TODO create iframe
if (og_p == 'outgrow-d') {

	var overlayDiv = document.createElement("div");
	overlayDiv.setAttribute("style", "position:fixed; background:rgba(0,0,0,0.5); height:100%; width:100%; text-align:center;top: 0;left: 0;z-index: 99999 !important;");
	overlayDiv.setAttribute("id", "overlay-drawer");
	overlayDiv.setAttribute("class", "hide");

	var iframeDrawer = document.createElement("iframe");
	iframeDrawer.setAttribute("id", "drawer-iframe");
	iframeDrawer.setAttribute("class", "hide");
	iframeDrawer.setAttribute("style", "height:100vh; position:fixed; float:left; top:0; left:0;z-index: 99999 !important;");
	iframeDrawer.setAttribute("frameBorder", "0");
	iframeDrawer.setAttribute("src", og_u);
	if(iWidth > 786) {
		iframeDrawer.setAttribute("width", "50%");
	} else {
		iframeDrawer.setAttribute("width", "100%");
	}

	var drawerclosebutton = document.createElement("a");
	drawerclosebutton.setAttribute("href", "javascript:;");
	drawerclosebutton.setAttribute("id", "close-drawer");
	drawerclosebutton.setAttribute("title", "Close");
	drawerclosebutton.setAttribute("class", "hide");
	drawerclosebutton.setAttribute("onclick", "toggleDrawer()");

	overlayDiv.appendChild(iframeDrawer);
	overlayDiv.appendChild(drawerclosebutton);
	og_b.appendChild(overlayDiv);
}

if (og_p == 'outgrow-p') {
	var popupCloseButton = document.createElement("a");
	popupCloseButton.setAttribute("href", "javascript:;");
	popupCloseButton.setAttribute("id", "close-popup");
	popupCloseButton.setAttribute("title", "Close");
	popupCloseButton.setAttribute("class", "hide");
	popupCloseButton.setAttribute("onclick", "togglePopup()");
	// og_e.appendChild(drawerclosebutton);

	var overlayDiv = document.createElement("div");
	overlayDiv.setAttribute("style", "position:fixed; background:rgba(0,0,0,0.5); height:100%; width:100%; text-align:center;top: 0;left: 0;z-index: 99999 !important;");
	overlayDiv.setAttribute("id", "overlay-popup");
	overlayDiv.setAttribute("class", "hide");

	var iframePopup = document.createElement("iframe");
	iframePopup.setAttribute("id", "popup-iframe");
	iframePopup.setAttribute("class", "hide");
	iframePopup.setAttribute("frameBorder", "0");
	iframePopup.setAttribute("src", og_u);
	if(iWidth > 786) {
		iframePopup.setAttribute("width", "70%");
		iframePopup.setAttribute("onload", "ogOnLoadHandler();");
		iframePopup.setAttribute("style", "margin-top: 4%;");
	} else {
		iframePopup.setAttribute("height", "100%");
		iframePopup.setAttribute("width", "100%");
	}
	overlayDiv.appendChild(iframePopup);
	overlayDiv.appendChild(popupCloseButton);
	og_b.appendChild(overlayDiv);
}

//Create Anchor Tag Element
var anchorTag = document.createElement("a");
if (og_p == 'outgrow-p') {
	if (og_a == 'outgrow-b')
		anchorTag.setAttribute("class", "outgrow-b");
	else if (og_a == 'outgrow-l')
		anchorTag.setAttribute("class", "outgrow-l");
	anchorTag.setAttribute("href", "javascript:void(0);");
	anchorTag.setAttribute("onclick", "togglePopup()");
	node = document.createTextNode(og_t);
	anchorTag.appendChild(node);
} else {
	if (og_a == 'outgrow-b')
		anchorTag.setAttribute("class", "outgrow-b");
	else if (og_a == 'outgrow-l')
		anchorTag.setAttribute("class", "outgrow-l");
	anchorTag.setAttribute("href", "javascript:void(0);");
	anchorTag.setAttribute("onclick", "toggleDrawer()");
	node = document.createTextNode(og_t);
	anchorTag.appendChild(node);
}
og_e.appendChild(anchorTag);

