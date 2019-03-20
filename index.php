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
    <!-- Slider  -->
        <div class="row slider-row hidden-xs">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="slide-image" src="images/slider/slider1.png" alt="">                                        
                    </div>
                    <div class="item">
                        <img class="slide-image" src="images/slider/slider2.png" alt="">                                                                       
                    </div>
                    <div class="item">
                        <img class="slide-image" src="images/slider/slider3.png" alt="">                                                                           
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    <!-- Promociones  -->
        <div class="row">
            <div class="col-md-12">
            <center><h4 class="who">LA CARTA</h4></center>
            </div>
            <div class="col-md-12">
            <?php
                $result = obtenerPromocionFront();
                while ($row = $result->fetch_array(MYSQLI_ASSOC)){
            ?>
            <div class="col-sm-4">
                    <a href="promociones.php?pag=0&condition=main&like=ALL">
                    <div class="card">
                <h4><?php echo $row['NAMEADVANCEMENT']; ?></h4>
                <img class="card-img card-img-top" src="<?php echo $row['URLADVANCEMENT']; ?>" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text">
                        <?php echo $row['ADVANCEMENTDESCRIPTION']; ?>
                    </div>
                </div>
                </div>
                    </a>
                
            </div>
				
            <?php
                }
            ?>
             <div class="col-md-12">
                <br>
                <a href="promociones.php?pag=0&condition=main&like=ALL"><button class="btn btn-warning btn-more"> La Carta </button></a>
            </div>
            </div>
           
        </div>
    <!-- menus -->
        <div class="row">
            <div class="col-md-12">
            <!-- <center> <h4 class="who"> PROMOCIONES </h4> </center> -->
            </div>
            <!-- <div class="col-md-12">
            <?php
                $result = obtenerMenuFront();
                while ($row = $result->fetch_array(MYSQLI_ASSOC)){
            ?>
             <div class="col-sm-4">
                <div class="card">
                <h4><?php echo $row['NAMEMENU']; ?></h4>
                <img class="card-img card-img-top" src="<?php echo $row['URLMENU']; ?>" alt="Card image cap">
                <div class="card-body">
                    <div class="card-text">
                        <?php echo $row['MENU_DESCRIPTION']; ?>
                    </div>
                </div>
                </div>
            </div>
            <?php
                }
            ?> -->
             <div class="col-md-12">
                <br>
                <!-- <a href="menus.php?pag=0"><button class="btn btn-warning btn-more"> Conoce más de nuestras promociones </button></a> -->
            </div>
            </div>
           
        </div>
    <!-- footer -->
        <?php 
            include('includes/confFooter.php');
        ?>
    </div>


    <!-- jQuery -->

    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/en.js"></script>          
	</body>



</html>