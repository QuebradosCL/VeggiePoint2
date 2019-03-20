<?php 
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDPromo = $_POST['idtexto'];
	$TitleMenu = $_POST['textoTitulo'];
	$frm_valor=$_POST['valorContenido'];
	$ContentMenu = $_POST['textocontenido'];
	$frm_select=$_POST['selectContenido'];

	$target_path = "../images/promos/"; 
	$target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']); 
	
	$base_path = "images/promos/";
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

	ejecutarSQLCommand("UPDATE `advancement` SET `NAMEADVANCEMENT` = '$TitleMenu', `VALUEADCENMENT` = '$frm_valor'  , `ADVANCEMENTDESCRIPTION` = '$ContentMenu', `URLADVANCEMENT` = '$cadena_Image', `TIPO_ADVANCEMENT` = '$frm_select' WHERE `advancement`.`IDADVENCEMENT` = '$IDPromo'");

	header('location: ../Setup/config.EditPromocion.php');

?>