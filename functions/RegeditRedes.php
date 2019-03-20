<?php 
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$urlFacebook = $_POST['Facebook'];
	$urlInstagram = $_POST['Instagram'];
	$urlEmailContact = $_POST['emailContact'];

	ejecutarSQLCommand("UPDATE `contact` SET `EMAILCONTACT` = '$urlEmailContact', `FACEBOOKCONTACT` = '$urlFacebook', `INSTAGRAM` = '$urlInstagram' WHERE `contact`.`IDCONTACT` = 1");

	header("Location: ../Setup/Config.EditRedes.php");

?>