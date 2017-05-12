window.plusDivs = function (n) {
  showDivs(slideIndex += n);
}

window.currentDiv = function (n) {
  showDivs(slideIndex = n);
}

window.showDivs = function (n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	if (n > x.length) {slideIndex = 1}
	if (n < 1) {slideIndex = x.length}
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" w3-white", "");
	}
	if(x.length > 0)
		x[slideIndex-1].style.display = "block";
	if(dots.length > 0)
		dots[slideIndex-1].className += " w3-white";
}

var slideIndex = 1;
showDivs(slideIndex);