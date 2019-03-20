<?php
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDProduct = $_GET['id'];


	ejecutarSQLCommand("DELETE FROM `type_advancement` WHERE `type_advancement`.`IDTYPE_A` = $IDProduct");

	header("Location: ../Setup/config.EditTypePromocion.php");
?>