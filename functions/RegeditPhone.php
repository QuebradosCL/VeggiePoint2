<?php 
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDProduct = $_POST['idtexto'];
	$TitleProduct = $_POST['textoTitulo'];
	
	ejecutarSQLCommand("UPDATE `phone` SET `NUMBER` = '$TitleProduct' WHERE `phone`.`IDPRODUCT` = '$IDProduct'");

	header('location: ../Setup/Config.EditContacto.php');

?>