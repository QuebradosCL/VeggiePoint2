<html>
	<head>
    <?php
        include('includes/head.php');
        include('includes/configNavBar.php');     
        include('functions/consulta.php');   
        setlocale(LC_MONETARY, 'en_US');
    ?>

	</head>

	<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
            <br>
            <ul class="list-group">
            <li class="list-group-item list-group-item-dark"> CATEGORIAS </li>
            <?php
                $result = obtenerTiposPromociones();
                while ($row = $result->fetch_array(MYSQLI_ASSOC)){
            ?>
                <li class="list-group-item list-group-item-dark"><a href="promociones.php?pag=0&condition=option&like=<?php echo $row['NAMETYPE']; ?>"><?php echo $row['NAMETYPE']; ?></a></li>
            <?php
                }
            ?>
            </ul>
            </div>
            <div class="col-md-10">
                    <div class="row">
                    <?php 
                        $result = obtenerNumeroFilasPromociones(); 
                        $cantidadPagina = 6;
                        $numeroFilas;
                        $pag = $_GET['pag'];
                        $condition = $_GET['condition'];
                        $like = $_GET['like'];

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                            $numeroFilas = $row['CONTADOR'];
                        }
                        $x = 0;
                        $y = 0;
                        $result = obtenerPromocionesPagination($pag, $cantidadPagina, $condition, $like);
                        while ($row = $result->fetch_array(MYSQLI_ASSOC)){                    
                        ?>
                        <div class="col-sm-4">
                            <div class="card">
                            <h4><?php echo $row['NAMEADVANCEMENT']; ?></h4>
                            <h4 class="promo">$ <?php echo substr(str_replace("," , "",number_format(floatval($row['VALUEADCENMENT']), 3, ',', '.')), 0, -3);  ?></h4>
                            <img class="card-img card-img-top" src="<?php echo $row['URLADVANCEMENT']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-text">
                                    <?php echo $row['ADVANCEMENTDESCRIPTION']; ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                        <div class="col-md-12">
                            <center>
                                <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg">
                                    <li>
                                    <a href="promociones.php?pag=<?php echo $y ?>&condition=option&like=<?php echo $like ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    </li>
                                    <?php
                                    while($x <= ($numeroFilas/$cantidadPagina)){
                                    ?>
                                        <li><a href="promociones.php?pag=<?php echo $y ?>&condition=option&like=<?php echo $like ?>"><?php echo $x+1 ?></a></li>
                                    <?php
                                        $x++;
                                        $y = $y +$cantidadPagina;
                                    }
                                    ?>
                                    <li>
                                    <a href="promociones.php?pag=<?php echo $y-$cantidadPagina ?>&condition=option&like=<?php echo $like ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                    </li>
                                </ul>
                                </nav>
                            </center>
                        </div>

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