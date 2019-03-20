<?php
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDPromo = $_GET['id'];


	ejecutarSQLCommand("DELETE FROM `advancement` WHERE `advancement`.`IDADVENCEMENT` = $IDPromo");

	header("Location: ../Setup/config.EditPromocion.php");
?>