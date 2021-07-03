<!DOCTYPE html>
<html>
  <style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
 }

 header{
   background-color: #F9F8FC;
 }
 #logo{
   margin: auto;
   height: 200px;
   width: 320px;
   text-align: center;
 }
 #logo h1{
    font-family: 'Pacifico', cursive;
    font-size: 58px;
  }
h2{font-family: 'Pacifico', cursive;
    font-size: 25px;
    text-align: center;}
nav{
  height: 60px;
  background-color:#17181C;
  text-align: center;
}

nav ul{
   list-style: none;
   display: inline-block;
   padding:18px;
}

nav ul li{
    float: left;
    margin-top: 20px;
}

nav ul li a {
    color: white;
    font-weight: bold;
    text-decoration: none;
    font-size: 20px;
    padding: 18px;
}

nav ul li a:hover{
  background-color: #929fb3;
}
a{
  text-decoration: none; 
}
</style>
<head>
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<title>Libros del rincon</title>
  <link rel="stylesheet" type="text/css" href="vistas/css/tabla.css">
  <script type="text/javascript" src="actions/funciones.js"></script>
</head>
<body>
	<header>
     <div id="logo">
     <a href="vistas/principal.php"><h1>Libros del Rincón</a></h1></div>
     </div>
   
     </div>
     <nav>
       <ul>
         <li><a href="vistas/AgregarL.php">AGREGAR LIBRO</a></li>
         <li><a href="buscarLib.php">BUSCAR LIBRO</a></li>
         <li><a href="vistas/prestamo.php">PRESTAMOS</a></li>
         <li><a onclick="ConfirmDemo()">CERRAR SESION</a></li>
       </ul>
     </nav>
   </header>
  
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