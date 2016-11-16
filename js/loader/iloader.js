var og_e = document.getElementById('og-iframe-container');
var og_u = og_e.getAttribute('data-url');
var og_w = og_e.getAttribute('data-width');

var js = document.createElement("script");
js.setAttribute("type", "text/javascript");
js.setAttribute("src", "//outgrow.us/js/loader/resizer.js");

og_e.appendChild(js);

//The main Iframe
var iFrame = document.createElement("iframe");
iFrame.setAttribute("id", "og-iframe");
iFrame.setAttribute("src", og_u);
iFrame.setAttribute("width", og_w);
iFrame.setAttribute("scrolling", "no");

//ogOnLoadHandler
var ogOnLoadHandler = document.createElement("script");
ogOnLoadHandler.setAttribute("type", "text/javascript");
var node = document.createTextNode("var screenWidth = screen.width; var screenHeight = screen.height; var aspectRatio = screenWidth/screenHeight;  var width = document.getElementById(\"og-iframe\").clientWidth; var height = width/aspectRatio; var iframes = iFrameResize({log:false,autoResize:true,enablePublicMethods: true,minHeight:height})");
ogOnLoadHandler.appendChild(node);

setTimeout(function(){
    og_e.appendChild(iFrame);
    og_e.appendChild(ogOnLoadHandler);
},1500);


