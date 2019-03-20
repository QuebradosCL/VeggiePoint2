<?php 
include ('functions.php');
$frm_title=$_POST['textoTitulo'];
$frm_text=$_POST['textocontenido'];
$frm_valor=$_POST['valorContenido'];

//$cadenaArreglada = nl2br($frm_text);
$cadenaArreglada = $frm_text;

$target_path = "../images/products/"; 
$target_path = $target_path . basename( $_FILES['archivo-a-subir']['name']); 

$base_path = "images/products/";
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



ejecutarSQLCommand("INSERT INTO `product` (`IDPRODUCT`, `NAMEPRODUCT`, `IDTYPEPRODUCT`, `DESCRIPTIONVALUE`, `PRODUCTVALUE`, `URLPRODUCT`) 
VALUES ( '',
'$frm_title',
1,
'$cadenaArreglada',
'$frm_valor',
'$cadena_Image')");  

echo "INSERT INTO `product` (`IDPRODUCT`, `NAMEPRODUCT`, `IDTYPEPRODUCT`, `DESCRIPTIONVALUE`, `PRODUCTVALUE`, `URLPRODUCT`) 
VALUES ( '',
'$frm_title',
1,
'$cadenaArreglada',
'$frm_valor',
'$cadena_Image')";

header('location: ../Setup/config.EditProduct.php')

 ?>