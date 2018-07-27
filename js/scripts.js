$(document).ready(function(){
	$(".burger").sidr({
		name:"respNav",
		source:".main-nav",
		displace:false,
	})

	$(".owl-carousel").owlCarousel({
		items:1,
		loop: true,
		nav:true,
		navtext:['Précédent','Suivant'],
		dots:false,
		autoplay:true,
		autoplaySpeed:700,
		autoplayHoverPause:true,
	});
});
