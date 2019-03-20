<!DOCTYPE html>
<html lang="es">
<head>
	<?php
		include '../functions/consulta.php';
		  include('../includes/configUsersVerified.php');
	?>
	<meta charset="UTF-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Setup Home Clean</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="Setup.css">
	<link rel="stylesheet" media="screen" href="../css/Media.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<?php 
		include '../includes/headSetup.php';
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 thumbnail">
				<form action="../functions/RegeditRedes.php" method="POST" >

					<input type="hidden" id="bool" name="bool" value="1" >
					<h4> Facebook </h4>
					<?php
	                    $result = RecuperRed(1);
	                    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
	                ?>
					<input class="form-control" name="Facebook" id="Facebook" type="text" placeholder="" required="" value="<?php echo $row['FACEBOOKCONTACT']; ?>">
					<br>
					<h4> Instagram </h4>
					<input class="form-control" name="Instagram" id="Instagram" type="text" placeholder="" required="" value="<?php echo $row['INSTAGRAM']; ?>">				
					<br>
					<h4> Email de Contacto </h4>
					<input class="form-control" name="emailContact" id="emailContact" type="text" placeholder="" required="" value="<?php echo $row['EMAILCONTACT']; ?>">
					<?php
                		}
                	?>
					<br>
					<button class="btn btn-primary">Guardar</button>	
		
				</form>
			</div>

		</div>
	</div>




	<script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scroll.js"></script>

</body>
</html>