$(document).ready(function(){
		resizeIndex();
		$(window).resize(resizeIndex);
	});
	function resizeIndex(){
		if($(window).width() > 992){
			$(".cont, .cont article").height( $(window).height() * .5 );
		}else{
			if($(window).height() >= $(window).width()){
				$(".cont, .cont article").height( $(window).height() * .4 );
			}else{
				$(".cont, .cont article").height( $(window).height() * 1 );
			}
		}
		
}