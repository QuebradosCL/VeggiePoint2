<?php 
include ('functions.php');
$frm_title=$_POST['textoTitulo'];
$frm_text=$_POST['textocontenido'];
$frm_valor=$_POST['valorContenido'];
$frm_select=$_POST['selectContenido'];

//$cadenaArreglada = nl2br($frm_text);
$cadenaArreglada = $frm_text;

$target_path = "../images/promos/"; 
$target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']); 

$base_path = "images/promos/";
$cadena_Image = $base_path . basename( $_FILES['archivo-a-subir']['name']); 

if($_FILES['archivo-a-subir']['name'] == ""){
}else{
    if(move_uploaded_file($_FILES['archivo-a-subir']['tmp_name'], $target_path)) 
    { 
        chmod($target_path, 0755);
    } 
    else
    { 
        echo "Hubo un error al subir tu archivo! Por favor intenta de nuevo."; 
    }
}


ejecutarSQLCommand("INSERT INTO `advancement` (`IDADVENCEMENT`, `VALUEADCENMENT`, `ADVANCEMENTDESCRIPTION`, `URLADVANCEMENT`, `NAMEADVANCEMENT`,`TIPO_ADVANCEMENT`) 
VALUES ( '',
'$frm_valor',
'$cadenaArreglada',
'$cadena_Image',
'$frm_title',
'$frm_select')");  

echo "INSERT INTO `advancement` (`IDADVENCEMENT`, `VALUEADCENMENT`, `ADVANCEMENTDESCRIPTION`, `URLADVANCEMENT`, `NAMEADVANCEMENT`,`TIPO_ADVANCEMENT`) 
VALUES ( '',
'$frm_valor',
'$cadenaArreglada',
'$cadena_Image',
'$frm_title',
'$frm_select')";

header('location: ../Setup/config.EditPromocion.php');

 ?>