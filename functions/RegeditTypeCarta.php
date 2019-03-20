<?php 
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDProduct = $_POST['idtexto'];
	$TitleProduct = $_POST['textoTitulo'];
	
	ejecutarSQLCommand("UPDATE `type_advancement` SET `NAMETYPE` = '$TitleProduct' WHERE `type_advancement`.`IDTYPE_A` = '$IDProduct'");

	header('location: ../Setup/config.EditTypePromocion.php');

?>