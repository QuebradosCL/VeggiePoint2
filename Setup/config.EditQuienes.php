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
	<title>Veggie Point</title>
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
				<br>
				<form enctype="multipart/form-data" action="../functions/RegeditWho.php" method="POST">
					<h4>Imagen relacionada</h4>
					<input class="thumbnail" name="archivo-a-subir" type="file" >				
					<br>
					<div class="col-md-4">
						<button class="btn btn-primary">Guardar Img.</button>
					</div>
					<br>
					<br><br>
				</form>
				<form action="../functions/RegeditWho2.php" method="POST">
					<h4> Contenido </h4>
					<input type="hidden" name="sdasdas">
					<?php
                    $result = obtenerWho();
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                    ?>
					<textarea class="form-control" name="textcontenido" id="textcontenido" cols="30" rows="10" ><?php echo $row['WHOARE']; ?></textarea>
					<?php
					}
					?>
					<br>
					<div class="col-md-4">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
				
					<div class="col-md-4">
						
					</div>
			</div>
			<div class="col-md-4 thumbnail">
				Quienes Somos
			</div>
		</div>
	</div>




	<script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scroll.js"></script>

</body>
</html>