<?php 
	include ('consulta.php');
	date_default_timezone_set('UTC');
	$target_path = "../images/"; 
	$target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']); 



	if($_FILES['archivo-a-subir']['name'] == ""){
	}else{
		if(move_uploaded_file($_FILES['archivo-a-subir']['tmp_name'], $target_path)) 
		{ 
			chmod($target_path, 0755);
			rename($target_path, "../images/whoare.png");
		} 
		else
		{ 
			echo "Hubo un error al subir tu archivo! Por favor intenta de nuevo."; 
		}
	}


	header("Location: ../Setup/config.EditQuienes.php");

?>