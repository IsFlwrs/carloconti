$(function() {
	$('#detalle').on('hidden.bs.modal', function() {
		location.hash = '';
	    $("#detalle .modal-body").html("");
	    $(this).removeData('bs.modal');
	});
	$('a.external').on('click', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $(".modal-content").load(url);
    });
    $('.confirmation').on('click', function () {
        return confirm('¿Estas seguro de eliminar este registro?');
    });
    if (navigator.userAgent.toLowerCase().indexOf("chrome") > -1) {
		var e = ["\n %c %c %c CINCO %c  %c  http://cincocolectivo.com/  %c %c \n\n",
				"background: #14a58c; padding:5px 0;",
				"background: #14a58c; padding:5px 0;",
				"color: white; background: #17c2a4; padding:5px 0;",
				"background: #14a58c; padding:5px 0;",
				"background: #17c2a4; color: white; padding:5px 0; boder: 1px solid red;",
				"background: #14a58c; color: white; padding:5px 0;",
				"background: #14a58c; color: white; padding:5px 0;"];
		window.console.log.apply(console, e);
	} else{
		window.console && window.console.log("CINCO - http://cincocolectivo.com/");
	}
	if($(window).width() < 992){
		if($("body").attr("id") == "index"){
			add = '<div class="col-md-6 col-xs-12 active">' +
			  '<a class="link" href="' + Path + '">INICIO</a>' +
			  '</div>';
		}else{
			add = '<div class="col-md-6 col-xs-12">' +
			  '<a class="link" href="' + Path + '">INICIO</a>' +
			  '</div>';
		}
		$(".add").prepend(add);	
	}
		ResizeScript();	
		$(window).resize(ResizeScript);
});
function ResizeScript(){
	if($(window).width() < 992){							
		$(".menu-list").css({
			"height" : $(window).height()
		});
		$(".ico-menu").click(function(){
			if($(".menu-list").hasClass("show-menu") || $(".ico-menu").hasClass("show-menu-ico")){
				$(".menu-list").removeClass("show-menu");
				$(".ico-menu").removeClass("show-menu-ico");
			}else{
				$(".menu-list").addClass("show-menu");
				$(".ico-menu").addClass("show-menu-ico");
			}			
		});		
		$(".wrapper").click(function(){
			if($(".menu-list").hasClass("show-menu")){
				$(".menu-list").removeClass("show-menu");
				$(".ico-menu").removeClass("show-menu-ico");
			}
		});
	}
}