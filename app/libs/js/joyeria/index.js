$(document).ready(function(){
		resizeIndex();
		$(window).resize(resizeIndex);
	});
	function resizeIndex(){
		var slidesPerView = 0;
		if($(window).width() > 992){
			slidesPerView = 6;
		}else{
			if($(window).height() >= $(window).width()){
				slidesPerView = 3;
			}else{
				slidesPerView = 4;
			}
		}
		$(".cont, .img-selected").height( $(window).height() * .3 );
	var swiper = new Swiper('.swiper-container', {        
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: slidesPerView,
        paginationClickable: true,
        spaceBetween: 30,        
        loop: false,
        freeMode: true
    });
    $(".swiper-slide").click(function(){
    	var element = $(this);
    	$(".img-selected").fadeOut("slow",function(){
    		active = $(".swiper-slide .active");
	    	$(".img-selected").removeClass($(".img-selected").attr("nameClass"));
	    	$(".img-selected").addClass($(element).attr("nameClass"));
	    	$(".img-selected").attr("nameClass", $(element).attr("nameClass"));
	    	$(".img-selected").fadeIn();
    	});    	
    });
		
}