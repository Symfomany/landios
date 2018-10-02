$(document).ready(function(){
	$(".owl-carousel").owlCarousel({
		center: true,
		items:2,
		dots: true,
		autoplay: true,
		lazyLoad: true,
		loop:true,
		responsive:{
			600:{
				items:4
			}
		}
	});
});
