<?php
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$IDProduct = $_GET['id'];


	ejecutarSQLCommand("DELETE FROM `product` WHERE `product`.`IDPRODUCT` = $IDProduct");

	header("Location: ../Setup/Config.EditProduct.php");
?>