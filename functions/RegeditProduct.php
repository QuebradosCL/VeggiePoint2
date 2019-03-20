<?php 
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDProduct = $_POST['idtexto'];
	$TitleProduct = $_POST['textoTitulo'];
	$frm_valor=$_POST['valorContenido'];
	$ContentProduct = $_POST['textocontenido'];

	$target_path = "../images/products/"; 
	$target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']); 
	
	$base_path = "images/products/";
	$cadena_Image = $base_path . basename( $_FILES['archivo-a-subir']['name']); 
	
	if($_FILES['archivo-a-subir']['name'] == ""){
		$cadena_Image = $_POST['urlTexto'];
	}else{
		if(move_uploaded_file($_FILES['archivo-a-subir']['tmp_name'], $target_path)) 
		{ 
			chmod($target_path, 0755);
		} 
		else
		{ 
			echo "Hubo un error al subir tu archivo! Por favor intenta de nuevo."; 
		}
	}

	ejecutarSQLCommand("UPDATE `product` SET `NAMEPRODUCT` = '$TitleProduct', `PRODUCTVALUE` = '$frm_valor'  , `DESCRIPTIONVALUE` = '$ContentProduct', `URLPRODUCT` = '$cadena_Image' WHERE `product`.`IDPRODUCT` = '$IDProduct'");

	header('location: ../Setup/config.EditProduct.php');

?>