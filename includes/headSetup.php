	<nav class="navbar navbar-inverse" role="navigation">
	  <!-- El logotipo y el icono que despliega el menú se agrupan
	       para mostrarlos mejor en los dispositivos móviles -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse"
	            data-target=".navbar-ex1-collapse">
	      <span class="sr-only">Desplegar navegación</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="index.php">Veggie Point</a>
	  </div>
	 
	  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
	       otro elemento que se pueda ocultar al minimizar la barra -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	    <ul class="nav navbar-nav">
	      <li class="dropdown">
	        <a href="" class="dropdown-toggle" data-toggle="dropdown">
	          Menú y Productos <b class="caret"></b>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="config.EditProduct.php">Editar Productos</a></li>
						<li><a href="config.EditMenu.php">Editar Menús</a></li>						
	        </ul>
	      </li>
	      <li class="dropdown">
	        <a href="" class="dropdown-toggle" data-toggle="dropdown">
	          Quienes Somos <b class="caret"></b>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="config.EditQuienes.php">Editar</a></li>
	        </ul>
	      </li>
	      <li class="dropdown">
	        <a href="" class="dropdown-toggle" data-toggle="dropdown">
	          La Carta<b class="caret"></b>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="config.EditPromocion.php">Editar Carta</a></li>
						<li><a href="config.EditTypePromocion.php">Editar tipos de carta</a></li>
	        </ul>
	      </li>
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          Contacto <b class="caret"></b>
	        </a>
	        <ul class="dropdown-menu">
	          <li><a href="Config.EditContacto.php">Editar Contacto</a></li>
	          <li class="divider"></li>
	          <li><a href="Config.EditRedes.php">Editar Redes Sociales</a></li>	
	        </ul>
	      </li>
	      <li><a href="../">Vista previa al sitio</a>  </li>
	      <li><a href="../functions/salir.php"> Salir <span class="icon-checkmark" title="Salir"></span></a></li>
	    </ul>
	 
	  </div>
	</nav>