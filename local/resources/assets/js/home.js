
$( document ).ready(function() {
	$(window).scroll(function() {
		$('.sl-box .cl').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow + 800) {
					$(this).addClass("slideLeft");
				}
		});
	});

	function scrollNav() {
  		$('ul a').click(function(){  
		    //Animate
		    $('body').stop().animate({
		        scrollTop: $( $(this).attr('href') ).offset().top 
		    }, 400);
		    return false;
  		});
  		$('.scrollTop a').scrollTop();
	}
	scrollNav();


 $('#button').on('click', function(){
		$('#product-title').addClass('active');

	});




});

	
