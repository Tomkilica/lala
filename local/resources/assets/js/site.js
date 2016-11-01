
$(document).ready(function() {

	$( ".header-button" ).click(function() {
  		$( "header" ).toggleClass( "active" );
	});

	var img = $(".logo-img");

	$(window).scroll(function() {
		var y = $(this).scrollTop();
		if (y > 700) {
			if(!img.hasClass("dispal-none")) {
	 			img.fadeOut(100, function() {
					img.addClass( "dispal-none" );
	    		});				
 			}
		} else {
			img.fadeIn(100, function() {
				img.removeClass( "dispal-none" );
    		});
		}
	});

	$(".header-button").click(function(){
		if(img.hasClass("dispal-none")) {
 			img.fadeIn(100, function() {
				img.removeClass( "dispal-none" );
    		});				
		} else if(!$(".transperent").hasClass("active") && $(window).scrollTop() > 700) {
			img.fadeOut(1000, function() {
				img.addClass( "dispal-none" );
    		});		
		}
	});

});

	