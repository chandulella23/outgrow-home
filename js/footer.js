
var footer = `<div class="container">
	<div class="col-xs-12 col-sm-12 np">
		<div class="col-xs-12 col-sm-2 footer-link mk-animate-element fade-in">
			<h4>Overview</h4>
			<ul>
				<li><a href="features.html" onclick="callGA('FEATURESF')" class="params">Features </a></li>
				<li><a href="useCase.html" onclick="callGA('USECASEF')" class="params">Use Cases</a></li>
				<li><a href="pricing.html" onclick="callGA('PRICINGF')" class="params">Pricing</a></li>
				<li><a href="http://resources.outgrow.co/" onclick="callGA('RESOURCEF')" class="params">Resources</a></li>
				<li><a href="javascript:void(0);" onclick="callGA('ABOUTF')" class="params">About</a></li>
				<li><a href="privacy_policy.html" onclick="callGA('PRIVACYF')" class="params">Privacy Policy</a></li>
				<li><a href="tos.html" onclick="callGA('TERMSF')" class="params">Terms of Services</a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-5 footer-link mk-animate-element fade-in hide">
			<h4>Our Live Calculators</h4>
			<div class="footer-img col-xs-6 col-sm-6"><img src="images/footer1.jpg" /></div>
			<div class="footer-img col-xs-6 col-sm-6"><img src="images/footer2.jpg" /></div>
			<div class="footer-img col-xs-6 col-sm-6"><img src="images/footer4.jpg" /></div>
			<div class="footer-img col-xs-6 col-sm-6"><img src="images/footer3.jpg" /></div>
		</div>
		<div class="col-xs-12 col-sm-10 footer-link mk-animate-element fade-in">
			<h4 class="footer-img2text">Resources</h4>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res1.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					Is Your Content Marketing Worth All The Effort? Consult Our 10 Point Checklist.
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/footer5.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					Make Your Digital Marketing Agency Stand Out
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res3.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					7 Interactive Calculators Every University Needs on Its Website
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res4.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					Lead Retention Made Easy! Activate Cold Leads with Calculators
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/footer7.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					9 Calculators Every SaaS Company Should Consider
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res7.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					Value Added Marketing With Digital Experiences
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res8.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					Lead Generation With Interactive Calculators
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res9.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					How an Interactive Calculator Generated 11,592 Qualified Leads
				</div>
			</div>
		</div>
		<div class="col-xs-12 np footer-social">
			<ul>
				<li><a href="javascript:void(0);">Facebook</a></li>
				<li><a href="javascript:void(0);">Linkedin</a></li>
				<li><a href="javascript:void(0);">Twitter</a></li>
				<li><a href="javascript:void(0);">Contact Us</a></li>
				<li><a href="javascript:void(0);">Careers</a></li>
			</ul>
			<div class="footer-copyright">
				<i class="material-icons">copyright</i>
				<span>Copyrights</span>
				<img src="images/footer-logo.png" />
			</div>
		</div>
	</div>
</div>`;
jQuery(document).ready(function() {
	//var str = window.location.href.split('//')[1].split('/')[0];
	//var p = str.lastIndexOf('.');
	//var ext = str.substring(p+1);
	var login = `<a href="http://app.outgrow.`+ext+`" class="link-login params" onclick="callGA('LOGIN')">
				Login
			</a>`;
	jQuery('#footer').html(footer);
	jQuery('#login').html(login);
	console.log('login',login,ext);
});