$(document).ready(function(){
		resizeIndex();
		$(window).resize(resizeIndex);
	});
	function resizeIndex(){
		if($(window).width() > 992){
			$("iframe").attr("height", $(window).height() * .5 );
			$("iframe").attr("width", $(".cont").width() * 1 );	
		}else{
			$("iframe").attr("height", $(window).height() * .8 );
			$("iframe").attr("width", $(".cont").width() * .8 );
		}		
	}