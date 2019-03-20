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
        <div class="col-md-8 col-md-offset-2">
        <center><h2 class="who"> Quiénes Somos </h2></center>
        <br>
            <img class="img-responsive thumbnail" src="images/whoare.png" alt="">
        </div>
        <div class="col-md-8 col-md-offset-2">
        <hr>
        <?php
            $result = obtenerWho();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        ?>
           <p class="whoare"><?php echo $row['WHOARE']; ?></p> 
        <?php
            }
        ?>
        </div>

        

    </div>

    <?php 
            include('includes/confFooter.php');
        ?>
    <!-- jQuery -->

    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/en.js"></script>          
    </body>



</html>