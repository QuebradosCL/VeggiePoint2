<div class="row footer vdivide">                
                <div class="col-md-3 divider">
                    <center>
                    <h4>Ubicación</h4>
                    <a href="https://www.google.com/maps/search/maps/@-29.9257799,-71.2569529,19.71z">
                    <p> Jorge Montt #525, esquina Adolfo Ibañez.
                    A una cuadra del Paseo Balmaceda, La Serena
                    </p></a>                    
                    </center>                      
                </div>
                <div class="col-md-3 divider">
                    <h4>Horario de Atención</h4>
                    <p>
                        Todos los días <br>
                        Desde 12:00 am a 22:00 pm.
                    </p>
                </div>
                <div class="col-md-3 divider">
                     <center><h4>Contáctenos</h4>
                     <?php
                        $result = RecuperContact(1);
                        while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                    ?> 
                    <p>
                    email: <a href="mailto:<?php echo $row['EMAILCONTACT']; ?>"><?php echo $row['EMAILCONTACT']; ?> </a>
                    </p></center>   
                    <?php 
                    }
                    ?>                
                </div>
                <div class="col-md-3">
                    <center><h4>Delivery continuado</h4>   
                    <?php
                        $result = obtenerPhone();
                        while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                    ?>                 
                    <p><span class="icon-whatsapp"></span> <a href="tel:+<?php echo $row['NUMBER']; ?>">+<?php echo $row['NUMBER']; ?> </a></p>                    
                    <?php 
                    }
                    ?>
                    </center>                   
                </div>   
<div class="col-md-12">
    <br><br>
</div> 
</div>