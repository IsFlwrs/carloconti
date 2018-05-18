$(document).ready(function(){
		ResizeIndex();
		$(window).resize(ResizeIndex);
	});
	function ResizeIndex(){
		$(".swiper-slide").css({
			"height" : $(window).height() - $(".header").innerHeight()
		});
		
		var swiper = new Swiper('.swiper-container', {
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        loop: true,
        effect: 'fade',
        autoplayDisableOnInteraction: false
    });
}