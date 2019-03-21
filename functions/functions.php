<?php 

header( 'Content-Type: text/html;charset=utf-8' );

function ejecutarSQLCommand($commando){

 
  $mysqli = new mysqli("localhost", "root", "57145894broodwar", "veggie_point");
  //$mysqli = new mysqli("localhost", "root", "12345678", "veggie_point");



/* check connection */

if ($mysqli->connect_errno) {

    printf("Coneccion Fallida: %s\n", $mysqli->connect_error);

    exit();

}



if ( $mysqli->multi_query($commando)) {

     if ($resultset = $mysqli->store_result()) {

    	while ($row = $resultset->fetch_array(MYSQLI_BOTH)) {

    		

    	}

    	$resultset->free();

     }

}

$mysqli->close();

}



function getSQLResultSet($commando){

 
  $mysqli = new mysqli("localhost", "root", "57145894broodwar", "veggie_point");
  //$mysqli = new mysqli("localhost", "root", "12345678", "veggie_point");

/* check connection */

if ($mysqli->connect_errno) {

    printf("Coneccion Fallida: %s\n", $mysqli->connect_error);

    exit();

}



if ( $mysqli->multi_query($commando)) {

	return $mysqli->store_result();

	

     

    

   

}







$mysqli->close();

}





function getSQL($commando){

 
$mysqli = new mysqli("localhost", "root", "57145894broodwar", "veggie_point");
//$mysqli = new mysqli("localhost", "root", "12345678", "veggie_point");

/* check connection */

if ($mysqli->connect_errno) {

    printf("Coneccion Fallida: %s\n", $mysqli->connect_error);

    exit();

}



$resultado = $mysqli->query($commando);

$fila = $resultado->fetch_assoc();

return $fila;



$mysqli->close();

}













?>

