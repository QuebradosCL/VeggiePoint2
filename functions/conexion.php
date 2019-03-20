<?php

	//$mysqli = new mysqli("localhost", "root", "57145894broodwar", "veggie_point");
	$mysqli = new mysqli("localhost", "root", "12345678", "veggie_point");
							//sitioweb, user, pass, bd
	if($mysqli->connect_errno):

		echo "Error al conectarse con MySQL debido al error : ".$mysqli_error;

	endif;

?>