$(document).ready(function(){
	$('a.page-scroll').click(function(e){
		var linkHref = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(linkHref).offset().top
		},1500,'easeInOutExpo');
		e.preventDefault();
	});
	$('.navbar-collapse ul li a.page-scroll').click(function() {
		$('.navbar-toggle:visible').click();
	});
});
