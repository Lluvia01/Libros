<!DOCTYPE html>
<html>
<head>
	<title>Buscar</title>
  <link rel="stylesheet" type="text/css" href="vistas/css/styleMenu.css">
  <link rel="stylesheet" type="text/css" href="vistas/css/tabla.css">
  <script type="text/javascript" src="actions/funciones.js"></script>
</head>
<body>
	<div class="header">
	<h1><a href="vistas/principal.php">Libros del Rincón</a></h1></div>
	<nav><ul>
  <li class="dropdown">
    <a href="vistas/AgregarL.php" class="dropbtn">AGREGAR LIBRO</a>

  </li>
  <li class="dropdown">
    <a href="buscarLib.php" class="dropbtn">BUSCAR LIBRO</a>
    
  </li>
  <li class="dropdown">
    <a href="vistas/prestamo.php" class="dropbtn">PRESTAMOS</a>
  </li>
</ul>
</nav>
  
<section class="principal">
	<h2>BUSQUEDA DE LIBROS</h2>

	<div class="formulario">
		<label for="caja_busqueda">Buscar</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda"></input>		
	</div><br><br>
	<center><div id="datos"></div>	</center>
</section>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/busc_lib.js"></script>
</body>
</html>