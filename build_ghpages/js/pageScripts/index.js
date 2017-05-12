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

jQuery.noConflict();
jQuery.material.init();
jQuery(document).ready(function() {
	jQuery('.close').click(function(){
		jQuery('iframe.outgrow-video').attr('src', jQuery('iframe.outgrow-video').attr('src'));
	});
	jQuery('#video-modal').on('hidden.bs.modal', function (event) {
    	jQuery('#video-modal iframe').attr("src", jQuery("#video-modal  iframe").attr("src"));
    });

	jQuery(".embed1-layout .em-moblink").click(function(){
		if(!jQuery(this).hasClass('active1'))
		jQuery(this).addClass('active1');
		jQuery('.em-weblink').removeClass('active1');
		jQuery("#em1").removeClass('embed-web');
		jQuery("#em1").addClass('embed-mobile');
		jQuery("#em1 .wrapper").addClass('wrapper-mobile');
	});

	jQuery(".embed1-layout .em-weblink").click(function(){
		if(!jQuery(this).hasClass('active1'))
		jQuery(this).addClass('active1');
		jQuery('.em-moblink').removeClass('active1');
		jQuery("#em1").addClass('embed-web');
		jQuery("#em1").removeClass('embed-mobile');
		jQuery("#em1 .wrapper").removeClass('wrapper-mobile');
	});


	jQuery(".embed2-layout .em-moblink").click(function(){
		if(!jQuery(this).hasClass('active2'))
		jQuery(this).addClass('active2');
		jQuery('.em-weblink').removeClass('active2');
		jQuery("#em2").removeClass('embed-web');
		jQuery("#em2").addClass('embed-mobile');
		jQuery("#em2 .wrapper").addClass('wrapper-mobile');
	});

	jQuery(".embed2-layout .em-weblink").click(function(){
		if(!jQuery(this).hasClass('active2'))
		jQuery(this).addClass('active2');
		jQuery('.em-moblink').removeClass('active2');
		jQuery("#em2").addClass('embed-web');
		jQuery("#em2").removeClass('embed-mobile');
		jQuery("#em2 .wrapper").removeClass('wrapper-mobile');
	});



	jQuery(".embed3-layout .em-moblink").click(function(){
		if(!jQuery(this).hasClass('active3'))
		jQuery(this).addClass('active3');
		jQuery('.em-weblink').removeClass('active3');
		jQuery("#em3").removeClass('embed-web');
		jQuery("#em3").addClass('embed-mobile');
		jQuery("#em3 .wrapper").addClass('wrapper-mobile');
	});

	jQuery(".embed3-layout .em-weblink").click(function(){
		if(!jQuery(this).hasClass('active3'))
		jQuery(this).addClass('active3');
		jQuery('.em-moblink').removeClass('active3');
		jQuery("#em3").addClass('embed-web');
		jQuery("#em3").removeClass('embed-mobile');
		jQuery("#em3 .wrapper").removeClass('wrapper-mobile');
	});

	if (document.documentElement.clientWidth < 1024) {
		jQuery(".embed-web").addClass('embed-mobile');
		jQuery(".wrapper").addClass('wrapper-mobile');
	}

	jQuery(".toggle-dots-white").click(function(){
		jQuery(".billing-grey-bottom").slideToggle('slow');
	});

	jQuery(".toggle-dots-grey").click(function(){
		jQuery(".billing-white-bottom").slideToggle('slow');
	});

	jQuery(".toggle-dots-white2").click(function(){
		jQuery(".billing-grey2").slideToggle('slow');
	});


	jQuery('.counter').counterUp({
		delay: 10,
		time: 1000
	});

	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true
	});

	var swiper = new Swiper('.swiper-container-first', {
		pagination: '.swiper-pagination',
		paginationClickable: true
	});
});