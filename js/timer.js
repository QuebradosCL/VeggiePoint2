function saludo(){


	$('.logo').animate({
		left: '0',
		width: '10%',
		top: '0'
	},500);

	$('.navbar-default').animate({
		height: '120px'
	},500);

	$('.tituloMediaxs').animate({
		top: '25%',
		left: '25px'
	},500);

	$('.tituloNav').animate({
		top: '10%',
		left: '140%'
	},500);
}

$(document).ready(function(){
	setTimeout('saludo()',3000);
});