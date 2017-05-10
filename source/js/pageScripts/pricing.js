function close_accordion_section() {
		jQuery('.accordion .accordion-section-title').removeClass('active');
		jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
	}



	jQuery(document).ready(function() {
		jQuery('.accordion-section-title').click(function(e) {
			// Grab current anchor value
			var currentAttrValue = jQuery(this).attr('href');

			if(jQuery(e.target).is('.active')) {
				close_accordion_section();
			}else {
				close_accordion_section();

				// Add active class to section title
				jQuery(this).addClass('active');
				// Open up the hidden content panel
				jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
			}

			e.preventDefault();
		});

		jQuery('a.toggle-dots-white').click(function(e) {
			jQuery(this).parent().find('.billing-grey-bottom').slideToggle('slow');
			jQuery(this).toggleClass('sliding');
			if (jQuery(this).hasClass("sliding")) {
	            jQuery('a.toggle-dots-white p').html('Less info');
	            jQuery('a.toggle-dots-white i').html('keyboard_arrow_up');
	        } else {
	            jQuery('a.toggle-dots-white p').html('More info');
	            jQuery('a.toggle-dots-white i').html('keyboard_arrow_down');
	        }
		});
		jQuery('a.toggle-dots-grey').click(function(e) {
			jQuery(this).parent().find('.billing-white-bottom').slideToggle('slow');
			jQuery(this).toggleClass('slidings');
			if (jQuery(this).hasClass("slidings")) {
	            jQuery('a.toggle-dots-grey p').html('Less info');
	            jQuery('a.toggle-dots-grey i').html('keyboard_arrow_up');
	        } else {
	            jQuery('a.toggle-dots-grey p').html('More info');
	            jQuery('a.toggle-dots-grey i').html('keyboard_arrow_down');
	        }
		});

		var acc = document.getElementsByClassName("plusminus");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].onclick = function() {
				this.classList.toggle("active");
				this.nextElementSibling.classList.toggle("show");
		  	}
		}
	});