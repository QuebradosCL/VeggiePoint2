<!DOCTYPE html>
<?php
  include '../functions/consulta.php';
  include('../includes/configUsersVerified.php');

?>
<html lang="es">
<head>
	<meta charset="UTF-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Veggie Point</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="Setup.css">
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
                    $result = obtenerMenuPorID($id);
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                ?>
				<form enctype="multipart/form-data" action="../functions/RegeditMenu.php" method="POST">
					<input type="hidden" id="bool" name="bool" value="1" >
					<h4>Titulo Menú</h4>
					<input type="hidden" name="idtexto" id="idtexto"  value="<?php echo $row['ID_MENU']; ?>">
					<input type="hidden" name="urlTexto" id="urlTexto"  value="<?php echo $row['URLMENU']; ?>">
					<input class="form-control" name="textoTitulo" id="textoTitulo" required=""  type="text" value="<?php echo $row['NAMEMENU']; ?>">
					<br>
					<h4> Valor </h4>
					<br>
                    <input class="form-control" type="number" name="valorContenido" id="valorContenido" required="" value="<?php echo $row['MENU_VALUE']; ?>">					
					<br>
					<textarea class="form-control" name="textocontenido" id="textocontenido" required=""  rows="10" ><?php echo $row['MENU_DESCRIPTION']; ?></textarea>
					<br>
					<h4>Subir nueva imagen</h4>
					<input class="thumbnail" name="archivo-a-subir" type="file" >				
					<br>
					<img width="300px" class="img-fluid thumbnail" src="../<?php echo $row['URLMENU']; ?>">
					<br>
					<div class="col-md-4">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>

					<div class="col-md-4">
						<a href="../functions/deleteMenu.php?id=<?php echo $row['ID_MENU']; ?>"><button class="btn btn-primary">Eliminar Menu</button></a>
					</div>
					<div class="col-md-4">
						<a href="config.EditMenu.php"><button class="btn btn-primary">Nuevo Servicio</button></a>
					</div>
                <?php
                }
                if($id == 0){
                		?>
				<form enctype="multipart/form-data" action="../functions/registerMenu.php" method="POST" >
					<input type="hidden" id="bool" name="bool" value="1" >
					<h4>Titulo Menu</h4>
					<input class="form-control" name="textoTitulo" id="textoTitulo" required="" type="text" value="<?php echo $row['NAMEMENU']; ?>">
					<br>
					<h4> Valor </h4>
					<input class="form-control" type="number" name="valorContenido" id="valorContenido" required="" value="<?php echo $row['MENU_VALUE']; ?>">					
					<br>
					<textarea class="form-control" name="textocontenido" id="textocontenido" required=""  rows="10" ><?php echo $row['MENU_DESCRIPTION']; ?></textarea>
					<br>
					<h4>Imagen relacionada</h4>
					<input class="thumbnail" name="archivo-a-subir" type="file" >				
					<br>
					<div class="col-md-4">
						<button class="btn btn-primary">Guardar</button>
					</div>
					
					
				</form>
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4">
						<a href="config.EditProduct.php"><button class="btn btn-primary">Nuevo Servicio</button></a>
					</div>
				<?php           		
                	}
                ?>
			</div>
            
			<div class="col-md-4 thumbnail">
					<center>Menús <br>
                    <?php
                    $result = obtenerMenu();
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                    ?>
						<a href="?id=<?php echo $row['ID_MENU']; ?>"><button class="btn titulos"> <h4><?php echo $row['NAMEMENU']; ?></h4>  </button></a> <br>
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
</body>
</html>