var e = document.getElementById('og-iframe-container');
var u = e.getAttribute('data-url');
var w = e.getAttribute('data-width');
var b = document.getElementsByTagName("body")[0];

var js = document.createElement("script");
js.setAttribute("type", "text/javascript");
js.setAttribute("src", "//outgrow.us/js/loader/resizer.js");

e.appendChild(js);

//The main Iframe
var iFrame = document.createElement("iframe");
iFrame.setAttribute("id", "og-iframe");
iFrame.setAttribute("src", u);
iFrame.setAttribute("width", w);
iFrame.setAttribute("scrolling", "no");

//ogOnLoadHandler
var ogOnLoadHandler = document.createElement("script");
ogOnLoadHandler.setAttribute("type", "text/javascript");
var node = document.createTextNode("var screenWidth = screen.width; var screenHeight = screen.height; var aspectRatio = screenWidth/screenHeight;  var width = document.getElementById(\"og-iframe\").clientWidth; var height = width/aspectRatio; var iframes = iFrameResize({log:false,autoResize:true,enablePublicMethods: true,minHeight:height})");
ogOnLoadHandler.appendChild(node);

setTimeout(function(){
    e.appendChild(iFrame);
    e.appendChild(ogOnLoadHandler);
},1000);


