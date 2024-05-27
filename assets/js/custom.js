(function ($) {
	// scroll
	$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	var box = $('.header-text').height();
	var header = $('header').height();

	if (scroll >= box - header) {
	$("header").addClass("background-header");
	} else {
	$("header").removeClass("background-header");
	}
	})



	// Menu 
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}
})(window.jQuery);