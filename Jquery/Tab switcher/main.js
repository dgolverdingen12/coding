$(document).ready(function(){
	$(".tab").click(function(){
		$(".tab").removeClass("active");
		$(".tab__content").removeClass("show");
		$(this).addClass("active");
		$($(this).attr("href")).addClass("show");
	});
});