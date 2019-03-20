<?php 
include ('functions.php');
$frm_title=$_POST['textoTitulo'];



ejecutarSQLCommand("INSERT INTO `phone` 
VALUES ( '',
'$frm_title')");  

echo "INSERT INTO `phone` 
VALUES ( '',
'$frm_title')";

header('location: ../Setup/Config.EditContacto.php')

 ?>