<?php 
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$ContentService = $_POST['textcontenido'];


	if($ContentService != null || $ContentService != ""){
		ejecutarSQLCommand("UPDATE `information` SET `WHOARE` = '$ContentService' WHERE `information`.`CODWHO` = 1");
	}

	echo "UPDATE `information` SET `WHOARE` = '$ContentService' WHERE `information`.`CODWHO` = 1";
	header("Location: ../Setup/config.EditQuienes.php");
