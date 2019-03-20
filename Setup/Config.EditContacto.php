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
				<br>
                <?php
	                if(isset($_GET['id'])){
	                	$id = $_GET['id'];
	                }else{
	                	$id=0;
	                }
                	?>
                <?php
                    $result = obtenerPhonePorID($id);
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                ?>
				<form action="../functions/RegeditPhone.php" method="POST">
					<input type="hidden" id="bool" name="bool" value="1" >
					<h4>Telefono</h4>
					<input type="hidden" name="idtexto" id="idtexto"  value="<?php echo $row['IDPRODUCT']; ?>">
					<input class="form-control" name="textoTitulo" id="textoTitulo" required=""  type="text" value="<?php echo $row['NUMBER']; ?>">
					<br>
					<div class="col-md-4">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>

					<div class="col-md-4">
						<a href="../functions/deletePhone.php?id=<?php echo $row['IDPRODUCT']; ?>"><button class="btn btn-primary">Eliminar Producto</button></a>
					</div>
					<div class="col-md-4">
						<a href="Config.EditContacto.php"><button class="btn btn-primary">Nuevo Telefono</button></a>
					</div>
                <?php
                }
                if($id == 0){
                		?>
				<form action="../functions/registerPhone.php" method="POST" >
					<input type="hidden" id="bool" name="bool" value="1" >
					<h4>Telefono</h4>
					<input class="form-control" name="textoTitulo" id="textoTitulo" required="" type="text" value="<?php echo $row['NUMBER']; ?>">
					<br>
					<div class="col-md-4">
						<button class="btn btn-primary">Guardar</button>
					</div>
					
					
				</form>
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4">
						<a href="Config.EditContacto.php"><button class="btn btn-primary">Nuevo Telefono</button></a>
					</div>
				<?php           		
                	}
                ?>
			</div>
			<div class="col-md-4 thumbnail">
					<center>Productos <br>
                    <?php
                    $result = obtenerPhone();
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                    ?>
						<a href="?id=<?php echo $row['IDPRODUCT']; ?>"><button class="btn titulos"> <h4><?php echo $row['NUMBER']; ?></h4>  </button></a> <br>
                    <?php
                	}
                ?>
                </center>
			</div>
		</div>
	</div>




	<script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scroll.js"></script>

</body>
</html>