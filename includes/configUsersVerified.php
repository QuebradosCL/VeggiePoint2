<?php

	session_start();

	if(isset($_SESSION['usuario'])){



	}else{

		header('location: ../Setup/config.Logger.php');

	}

?>