jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url : '../functions/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Validando...');
		}
	})

	.done(function(respuesta){
		console.log(respuesta);
		if(respuesta.error == false){
				location.href = '../Setup/index.php'
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			$('.botonlg').val('Iniciar Sesión');
		}
	})
	.done(function(resp){
		console.log(resp.responseText);
	})
	.done(function(){
		console.log("complete");
	});

});