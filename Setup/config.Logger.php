<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header('location: index.php');
	}else{

	}

?>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Veggie Point Login</title>

	    <link href="../css/bootstrap.css" rel="stylesheet">
	    <link href="../css/shop-homepage.css" rel="stylesheet">
      	<link rel="stylesheet" href="../css/fonts.css">
	    <link rel="stylesheet" href="../css/dropzone.css">
	    <link rel="stylesheet" href="../css/style.css">
	    <script src="../js/jquery.js"></script>
   		 <!-- Bootstrap Core JavaScript -->

    	<script src="../js/bootstrap.min.js"></script>
    	<script src="../js/log.js"></script>		
	</head>
	</head>
	<body>
	<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<div class="error" style="display:none;">
		<span> Datos ingresados no son válidos.</span>
	</div>
	<!-- pattern="[A-Za-z0-9_-@]{1,15}" --> 
	<div class="panel panel-body">
      <form action="" id="formlg" class="form-signin">
        <h2 class="form-signin-heading primary"> <center> <img src="../images/slider/img10.png" class="img-responsive" width="" alt=""> </center> </h2>
        <br>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="text" id="inputUser"  required name="inputUser" class="form-control" placeholder="Usuario" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" required name="inputPassword" class="form-control" placeholder="Contraseña" required>
        <br>
        <input id="botonlg" name="botonlg" type="submit" class="btn btn-lg btn-primary btn-block botonlg" value="Iniciar Sesión">
        <br>
      </form>	
      <a href="../"><button class="btn btn-lg btn-primary btn-block" type="submit"> Atrás </button></a>
	</div>		
	</div>
   
	<div class="col-md-4"></div>


    </div>
	</body>
</html>