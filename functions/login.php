<?php
require 'conexion.php';
sleep(2);
session_start();

$usuarios = $mysqli->query("SELECT * FROM `user` WHERE user.EMAIL_CONTACT = '".$_POST['inputUser']."' AND user.PASSWORD = '".$_POST['inputPassword']."'");

if($usuarios->num_rows == 1){
	$datos = $usuarios->fetch_assoc();
	$_SESSION['usuario'] = $datos;
	echo json_encode(array('error' => false, 'tipo' => $datos['USER']));
}else{
	echo json_encode(array('error' => true));
}

$mysqli->close();

?>