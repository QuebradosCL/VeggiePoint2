<?php
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDMenu = $_GET['id'];


	ejecutarSQLCommand("DELETE FROM `menu` WHERE `menu`.`ID_MENU` = $IDMenu");

	header("Location: ../Setup/Config.EditMenu.php");
?>