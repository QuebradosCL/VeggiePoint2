<html>

	<head>

    <?php

        include('includes/head.php');
        include('includes/configNavBar.php');     
        include('functions/consulta.php');   
    ?>

	</head>

	<body>
    <div class="container-fluid">
        <br>
        <div class="col-md-offset-3 col-md-6 col-xs-12">
            <form action="functions/contact.php" method="POST">
                <center><h4> Formulario de Contacto </h4></center>
                <?php
                $result = RecuperContact(1);
                while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                ?>
                <input type="hidden" name="mailContacto" id="mailContacto" value="<?php echo $row['EMAILCONTACT']; ?>">
                <?php
                }
                ?>
                <input class="form-control" type="text" name="nombreContacto" id="nombreContacto" required="" placeholder="Su Nombre"><br>
				<input class="form-control" type="text" name="mailContacto" id="mailContacto" required="" placeholder="Su Correo"><br>
				<input class="form-control" type="text" name="TelefonoContacto" id="TelefonoContacto" required="" placeholder="Su Teléfono"><br>
				<textarea class="form-control textocontenido" name="textocontenido" id="textocontenido" required=""  rows="10" ></textarea><br>
				<center> <input type="submit" class="btn btn-warning"></center>
            </form>                                                     
        </div>
    </div>


<!-- jQuery -->
<?php 
            include('includes/confFooter.php');
        ?>
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/en.js"></script>          
</body>



</html>