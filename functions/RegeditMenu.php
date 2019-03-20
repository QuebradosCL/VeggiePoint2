<?php 
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDMenu = $_POST['idtexto'];
	$TitleMenu = $_POST['textoTitulo'];
	$frm_valor=$_POST['valorContenido'];
	$ContentMenu = $_POST['textocontenido'];

	$target_path = "../images/menus/"; 
	$target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']); 
	
	$base_path = "images/menus/";
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

	ejecutarSQLCommand("UPDATE `menu` SET `NAMEMENU` = '$TitleMenu', `MENU_VALUE` = '$frm_valor'  , `MENU_DESCRIPTION` = '$ContentMenu', `URLMENU` = '$cadena_Image' WHERE `menu`.`ID_MENU` = '$IDMenu'");

	header('location: ../Setup/config.EditMenu.php');

?>