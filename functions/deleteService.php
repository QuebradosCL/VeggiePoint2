<?php
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDService = $_GET['id'];


	ejecutarSQLCommand("DELETE FROM `servicio` WHERE `servicio`.`CODSERVICE` = $IDService");

	header("Location: ../Setup/Config.EditServicios.php");
?>