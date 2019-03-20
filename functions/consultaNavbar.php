<?php
include('functions.php');
date_default_timezone_set('UTC');

function retornarFacebook(){
	$resultset=getSQLResultSet("SELECT * FROM `contact`  WHERE IDCONTACT = 1");
    while ($row = $resultset->fetch_array(MYSQLI_ASSOC)){
		$facebook = $row['FACEBOOKCONTACT'];
	}
	return $facebook;
}

?>