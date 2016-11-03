var e = document.getElementById('og-iframe-container');
var u = e.getAttribute('data-url');
var w = e.getAttribute('data-width');

//The main Iframe
var iFrame = document.createElement("iframe");
iFrame.setAttribute("id","og-iframe");
iFrame.setAttribute("src", u);
iFrame.setAttribute("width", w);
iFrame.setAttribute("onload", "ogOnLoadHandler();");
iFrame.setAttribute("onresize", "ogOnLoadHandler();");
e.appendChild(iFrame);

//ogOnLoadHandler
 var ogOnLoadHandler = document.createElement("script");
 ogOnLoadHandler.setAttribute("type", "text/javascript");
 var node = document.createTextNode("function ogOnLoadHandler(){console.log('In Func'); var screenWidth = screen.width; var screenHeight = screen.height; var aspectRatio = screenWidth/screenHeight; var width = document.getElementById(\"og-iframe\").clientWidth; var height = width/aspectRatio; document.getElementById(\"og-iframe\").style.height = height+'px';}");
 ogOnLoadHandler.appendChild(node);
 e.appendChild(ogOnLoadHandler);