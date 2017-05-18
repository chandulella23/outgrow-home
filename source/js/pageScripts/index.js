window.submitEbookData = function (e) {
    e.preventDefault(), jQuery("#ebook-error").html("");
    var o = jQuery("#ebook-email").val(),
        t = jQuery("#ebook-name").val();
    return "" == o || "" == t ? void jQuery("#ebook-error").html("Please fill in the required fields") : void jQuery.ajax({
        url: "js/ebookhandler.php",
        type: "POST",
        data: {
            email: o,
            name: t,
            group_id: 4043919
        },
        beforeSend: function() {
            jQuery("#ebook-submit").html("Preparing your course ... ")
        },
        success: function(e) {
            var a = JSON.parse(e);
            a.error ? (jQuery("#ebook-error").html("There were some errors in the data you provided"), jQuery("#ebook-submit").html('Get Access<i class="material-icons">arrow_downward</i>')) : (jQuery("#ebook-submit").fadeOut(), -1 != window.location.href.indexOf("outgrow.co") && sendNotification(o, t), setTimeout(function() {
                window.location.href = "http://resources.outgrow.co/courses/lead-generation-with-calculators/ebook"
            }, 200))
        },
        error: function(e) {
            jQuery("#ebook-error").html("We are a little backed right now. Please try again."), jQuery("#ebook-submit").html('Get Access<i class="material-icons">arrow_downward</i>')
        }
    })
}

window.attachVid = function (type) {
	var href = window.location.href.split('#')[1];
	var el = document.getElementById('bfrVid')
	el.style.paddingTop = '80px';
	if(!href) {
		window.location.href = window.location.href + "#bfrVid"
	} else {
		window.location.href = window.location.href.split('#')[0] + '#bfrVid'
	}
	if ('web' === type) changeHeightWeb();
	// if ('mob' === type) changeHeightMob();
	if ('res' === type) changeHeightRes();
}

window.changeHeightWeb = function() {
	console.log('Web');
	jQuery(".video-img-inner-web").html("<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1' frameborder='0' allowfullscreen></iframe></div>");
	var xDiv = document.getElementById('video-main');

	if (xDiv.style.height == '')
		xDiv.style.height = '600px';
	else
		xDiv.style.height = '';
}

window.sendNotification = function (e, o) {
    jQuery.ajax({
        url: "js/mailer.php",
        data: {
            email: e,
            name: o
        },
        method: "POST",
        success: function(e) {
            console.log(e)
        },
        error: function(e) {
            console.log(e)
        }
    })
}

window.display = function (url) {
	// /console.log('Display called', url);
	//jQuery('.hrefTarget').empty().append('<iframe id="og-iframe" src="'+url+'"></iframe>');
	document.getElementById('og-iframe').src = url;
	//calculateMinHeight();
	var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    },'#og-iframe');
	//console.log('iframes',iframes)
	jQuery('#og-iframe').addClass('iframeHeight')
}

jQuery.noConflict();
jQuery.material.init();
jQuery(document).ready(function() {
	calculateMinHeight();
	jQuery('.close').click(function(){
		jQuery('iframe.outgrow-video').attr('src', jQuery('iframe.outgrow-video').attr('src'));
	});
	jQuery('#video-modal').on('hidden.bs.modal', function (event) {
    	jQuery('#video-modal iframe').attr("src", jQuery("#video-modal  iframe").attr("src"));
    });

	jQuery('.counter').counterUp({
		delay: 10,
		time: 1000
	});

	jQuery('.close').click(function(){
		jQuery('iframe.outgrow-video').attr('src', jQuery('iframe.outgrow-video').attr('src'));
	});

 	jQuery('#video-modal').on('hidden.bs.modal', function (event) {
		jQuery('#video-modal iframe').attr("src", jQuery("#video-modal  iframe").attr("src"));
    });

    jQuery('.calc-links a').on('click',function(){
		jQuery('a').removeClass('active');
		jQuery(this).addClass('active');
	});

	//embed web mobile js
	// jQuery(".calcembed").click(function(){
	// 	jQuery("html").css('overflow','hidden');
	// });

	// jQuery(".close").click(function(){
	// 	jQuery("html").css('overflow','scroll !important');
	// });

	jQuery(document).on('click', '.video-playIcon', function () {
		console.log('Clicked');
		if (jQuery(window).width() <= 768 && jQuery(window).width() > 320) {
			attachVid('res');
		}
		if (jQuery(window).width() <= 320) {
			attachVid('mob');
		}
	})

	var iframes = iFrameResize({
        log: false,
        autoResize: true,
        enablePublicMethods: true,
        checkOrigin: false,
    },'#og-iframe');

	var url = setLoginSignup();
	console.log(url);
    jQuery('#btnBuildCalc1 > a').prop('href', url);
});

jQuery(window).resize(function () {
	console.log(jQuery(window).width())
	if (jQuery(window).width() > 768) {
		jQuery('.video-img-inner-mob').empty().append(`<img class="video-img" src="images/video-thumbnail.jpg" />
					<span class="img-overlay"></span>
					<span class="video-playIcon"><span class="inside-circle"><i class="material-icons">play_arrow</i></span></span>`);

		jQuery('.video-img-inner-res').empty().append(`<img class="video-img" src="images/video-thumbnail.jpg" />
					<span class="img-overlay"></span>
					<span class="video-playIcon"><span class="inside-circle"><i class="material-icons">play_arrow</i></span></span>`);
	}
	if (jQuery(window).width() <= 768 && jQuery(window).width() > 320) {
		jQuery('.video-img-inner-mob').empty().append(`<img class="video-img" src="images/video-thumbnail.jpg" />
					<span class="img-overlay"></span>
					<span class="video-playIcon"><span class="inside-circle"><i class="material-icons">play_arrow</i></span></span>`);

		jQuery('.video-img-inner-web').empty().append(`<img class="video-img" src="images/video-thumbnail.jpg" />
					<!--<iframe class="outgrow-video" src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
					<span class="img-overlay"></span>
					<span class="video-playIcon"><span class="inside-circle"><i class="material-icons">play_arrow</i></span></span>`);
	}
	// if (jQuery(window).width() <= 320) {
	// 	jQuery('.video-img-inner-res').empty().append(`<img class="video-img" src="images/video-thumbnail.jpg" />
	// 				<span class="img-overlay"></span>
	// 				<span class="video-playIcon"><span class="inside-circle"><i class="material-icons">play_arrow</i></span></span>`);

	// 	jQuery('.video-img-inner-web').empty(`<img class="video-img" src="images/video-thumbnail.jpg" />
	// 				<!--<iframe class="outgrow-video" src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
	// 				<span class="img-overlay"></span>
	// 				<span class="video-playIcon"><span class="inside-circle"><i class="material-icons">play_arrow</i></span></span>`);
	// }
})