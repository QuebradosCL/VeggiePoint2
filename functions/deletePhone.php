<?php
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDProduct = $_GET['id'];


	ejecutarSQLCommand("DELETE FROM `phone` WHERE `phone`.`IDPRODUCT` = $IDProduct");

	header("Location: ../Setup/Config.EditContacto.php");
?>