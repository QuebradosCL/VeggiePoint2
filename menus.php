<html>
	<head>
    <?php
        include('includes/head.php');
        include('includes/configNavBar.php');     
        include('functions/consulta.php');   
    ?>

	</head>

	<body>

    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="row">
                    <?php 
                        $result = obtenerNumeroMenuPromociones(); 
                        $cantidadPagina = 6;
                        $numeroFilas;
                        $pag = $_GET['pag'];
                        while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                            $numeroFilas = $row['CONTADOR'];
                        }
                        $x = 0;
                        $y = 0;
                        $result = obtenerMenuPagination($pag, $cantidadPagina);
                        while ($row = $result->fetch_array(MYSQLI_ASSOC)){                    
                        ?>
                        <div class="col-sm-12">
                            <div class="card">
                            <h4><?php echo $row['NAMEMENU']; ?></h4>
                            <h4>$ <?php echo substr(str_replace("," , "",number_format(floatval($row['MENU_VALUE']), 3, ',', '.')), 0, -3);  ?></h4>
                           <center>
                           <img class="img-menu img-responsive" src="<?php echo $row['URLMENU']; ?>" alt="Card image cap">
                           </center>
                            
                            <div class="card-body">
                                <div class="card-text">
                                    <?php echo $row['MENU_DESCRIPTION']; ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                        <!-- <div class="col-md-12">
                            <center>
                                <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg">
                                    <li>
                                    <a href="menus.php?pag=<?php echo $y ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    </li>
                                    <?php
                                    while($x <= ($numeroFilas/$cantidadPagina)){
                                    ?>
                                        <li><a href="menus.php?pag=<?php echo $y ?>"><?php echo $x+1 ?></a></li>
                                    <?php
                                        $x++;
                                        $y = $y +$cantidadPagina;
                                    }
                                    ?>
                                    <li>
                                    <a href="menus.php?pag=<?php echo $y-$cantidadPagina ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                    </li>
                                </ul>
                                </nav>
                            </center>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
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