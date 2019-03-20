<?php 
include ('functions.php');
$frm_title=$_POST['textoTitulo'];
$frm_text=$_POST['textocontenido'];
$frm_valor=$_POST['valorContenido'];

$cadenaArreglada = $frm_text;

$target_path = "../images/menus/"; 
$target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']); 

$base_path = "images/menus/";
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



ejecutarSQLCommand("INSERT INTO `menu` (`ID_MENU`, `NAMEMENU`, `MENU_VALUE`, `MENU_DESCRIPTION`, `URLMENU`)
VALUES ( '',
'$frm_title',
'$frm_valor',
'$cadenaArreglada',
'$cadena_Image')");  

echo "INSERT INTO `menu` (`ID_MENU`, `NAMEMENU`, `MENU_VALUE`, `MENU_DESCRIPTION`, `URLMENU`)
VALUES ( '',
'$frm_title',
'$frm_valor',
'$cadenaArreglada',
'$cadena_Image')";

header('location: ../Setup/config.EditMenu.php')

 ?>