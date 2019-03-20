<?php 
include ('functions.php');
$frm_title=$_POST['textoTitulo'];



ejecutarSQLCommand("INSERT INTO `type_advancement` 
VALUES ( '',
'$frm_title')");  

echo "INSERT INTO `type_advancement` 
VALUES ( '',
'$frm_title')";

header('location: ../Setup/config.EditTypePromocion.php')

 ?>