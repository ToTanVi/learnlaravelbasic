$(document).ready(function(){
	$('.slideshow').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots: false,
		responsiveClass:true,
		navText: [
			"<i class='fa fa-chevron-left'></i>",
			"<i class='fa fa-chevron-right'></i>"
		],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	$('.slideshow-btn').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots: false,
		responsiveClass:true,
		navText: [
			"<i class='fa fa-chevron-left'></i>",
			"<i class='fa fa-chevron-right'></i>"
		],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	});
	$('.login').click(function(){
		$('.login-form').toggle();
	});
	$('.name').click(function(){
		$('.info').toggle();
	})
})
