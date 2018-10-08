$(document).ready(function(){
	$('.tooltip__p').hover(
		function () {
		  $(".tooltip__box").show();
		}, 
		function () {
		  $(".tooltip__box").hide();
		}
	);
});