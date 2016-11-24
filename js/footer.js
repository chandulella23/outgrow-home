var footer = `<div class="container">
	<div class="col-xs-12 col-sm-12 np">
		<div class="col-xs-12 col-sm-2 footer-link mk-animate-element fade-in">
			<h4>Overview</h4>
			<ul>
				<li><a href="why_calculators.html" onclick="callGA('WHYF')" class="params">Why Calculators </a></li>
				<li><a href="features.html" onclick="callGA('FEATURESF')" class="params">Features </a></li>
				<li><a href="examples.html" onclick="callGA('USECASEF')" class="params">Examples</a></li>
				<li><a href="pricing.html" onclick="callGA('PRICINGF')" class="params">Pricing</a></li>
				<li><a href="http://resources.outgrow.co/" onclick="callGA('RESOURCEF')" class="params">Resources</a></li>
				<li><a href="http://resources.outgrow.co/about" onclick="callGA('ABOUTF')" class="params">About</a></li>
				<li><a href="http://affiliates.outgrow.co/" onclick="" class="params">Affiliates</a></li>
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
			<h4 class="footer-img2text col-xs-12">Resources</h4>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res1.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					<a href="http://resources.outgrow.co/content-marketing-strategy-checklist">Is Your Content Marketing Worth All The Effort? Consult Our 10 Point Checklist.</a>
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/footer5.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					<a href="http://resources.outgrow.co/interactive-calculators-content-make-digital-marketing-agency-stand-out/">Make Your Digital Marketing Agency Stand Out</a>
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res3.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					<a href="http://resources.outgrow.co/university-college-calculators/">7 Interactive Calculators Every University Needs on Its Website</a>
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res4.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					<a href="http://resources.outgrow.co/lead-retention-activate-cold-leads">Lead Retention Made Easy! Activate Cold Leads with Calculators</a>
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/footer7.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					<a href="http://resources.outgrow.co/interactive-calculators-saas-companies">9 Calculators Every SaaS Company Should Consider</a>
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res7.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					<a href="http://resources.outgrow.co/best-interactive-lead-generation-techniques/">Value Added Marketing With Digital Experiences</a>
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res8.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					<a href="http://resources.outgrow.co/course/lead-generation-with-calculators/?utm_source=blog&utm_medium=CTA&utm_campaign=Start%20Course">Lead Generation With Interactive Calculators</a>
				</div>
			</div>
			<div class="footer-img2 col-xs-6 col-sm-3">
				<div class="col-xs-12 np"><img src="images/res9.jpg" /></div>
				<div class="col-xs-12 np footer-img-text">
					<a href="http://resources.outgrow.co/how-an-interactive-calculator-generated-11592-qualified-leads/">How an Interactive Calculator Generated 11,592 Qualified Leads</a>
				</div>
			</div>
		</div>
		<div class="col-xs-12 np footer-social">
			<ul>
				<li><a href="https://www.facebook.com/OutgrowCo/">Facebook</a></li>
				<li><a href="https://www.linkedin.com/company/outgrow.co">Linkedin</a></li>
				<li><a href="https://twitter.com/outgrowco">Twitter</a></li>
				<li><a href="mailto:p@outgrow.co?Subject=Hello%20again" target="_top">Contact Us</a></li>
				<li><a href="https://angel.co/venturepact/jobs">Careers</a></li>
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
	var str = window.location.href.split('//')[1].split('/')[0];
	var p = str.lastIndexOf('.');
	var ext = str.substring(p+1);
	var login = `<a href="http://app.outgrow.`+ext+`/login" class="link-login params" onclick="callGA('LOGIN')">
				Login
			</a>`;
	var loginAnchor = `//app.outgrow.`+ext+`/login`;
	var trialAnchor = '//app.outgrow.'+ext+'/';
	var signUp = `<a id="signUpAnchorText" class="link-login" href="`+trialAnchor+`" class="link-login params">Sign up</a>`;
	if(readCookie('storage')){
		var storage = JSON.parse(readCookie('storage'));
		if(storage.companyList)
			loginAnchor = '//'+storage.companyList[1]+'.outgrow.'+ext+'/dashboard';
		else
			loginAnchor = '//app.outgrow.'+ext+'/dashboard';
		jQuery(document.getElementById('loginAnchorText')).prop('text','Dashboard'); //.text='Dashboard';
		jQuery(document.getElementById('loginAnchorText')).attr('onClick','callGA("DASHBOARD")');
	}else{
		jQuery(document.getElementById('loginAnchorText')).prop('text','Login');
		jQuery(document.getElementById('loginAnchorText')).attr('onClick','callGA("LOGIN")');
		jQuery('#signUp').html(signUp);
	}
	jQuery('#footer').html(footer);
	jQuery('#login').html(login);
	jQuery(document.getElementById('loginAnchorText')).prop('href',loginAnchor);
	jQuery(document.getElementById('trialAnchor')).prop('href',trialAnchor);
	jQuery(document.getElementById('loginAnchor')).prop('href',loginAnchor);

	function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
});
