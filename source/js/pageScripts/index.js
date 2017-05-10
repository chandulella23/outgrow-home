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

		myVid=document.getElementById("player");
    	myVid.muted=true;
	});