(function( $ ) {
	// NAVIGATION CALLBACK
	var ww = jQuery(window).width();
	jQuery(document).ready(function() { 
		jQuery(".responsive-menu .nav li a").each(function() {
			if (jQuery(this).next().length > 0) {
				jQuery(this).addClass("parent");
			};
		})
		jQuery(".toggleMenu").click(function(e) { 
			e.preventDefault();
			jQuery(this).toggleClass("active");
			jQuery(".responsive-menu .nav").slideToggle('fast');
		});
		adjustMenu();
	})

	// navigation orientation resize callbak
	jQuery(window).bind('resize orientationchange', function() {
		ww = jQuery(window).width();
		adjustMenu();
	});

	var adjustMenu = function() {
		if (ww < 720) {
			jQuery(".toggleMenu").css("display", "block");
			if (!jQuery(".toggleMenu").hasClass("active")) {
				jQuery(".responsive-menu .nav").hide();
			} else {
				jQuery(".responsive-menu .nav").show();
			}
			jQuery(".responsive-menu .nav li").unbind('mouseenter mouseleave');
		} else {
			jQuery(".toggleMenu").css("display", "none");
			jQuery(".responsive-menu .nav").show();
			jQuery(".responsive-menu .nav li").removeClass("hover");
			jQuery(".responsive-menu .nav li a").unbind('click');
			jQuery(".responsive-menu .nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
			jQuery(this).toggleClass('hover');
			});
		}
	}

	/**** Hidden search box ***/
	jQuery('document').ready(function($){
		$('.search-box span i').click(function(){
	        $(".serach_outer").slideDown(1000);
	    });

	    $('.closepop i').click(function(){
	        $(".serach_outer").slideUp(1000);
	    });
	});	
	
})( jQuery );