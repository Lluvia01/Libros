
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
   height: 250px;
   width: 320px;
   text-align: center;
 }

 #logo h1{
    font-family: 'Pacifico', cursive;
    font-size: 58px;
  }

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

</style>






<head>
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Libros del rincon</title>
	<title>Agregar libro</title>
	<link rel="stylesheet" type="text/css" href="css/styleMenu.css">
    <link rel="stylesheet" type="text/css" href="css/animacion.css">
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <script type="text/javascript" src="../actions/funciones.js"></script>
</head>

<body>
  
<header>



     <div id="logo">
     <h1><a href="principal.php">Libros del Rincón</a></h1></div>
     </div>


        
     </div>
     <nav>
       <ul>
         <li><a href="AgregarL.php">AGREGAR LIBRO</a></li>
         <li><a href="buscarLib.php">BUSCAR LIBRO</a></li>
         <li><a href="prestamo.php">PRESTAMOS</a></li>
         <li><a href=<a onclick="ConfirmDemo()">CERRAR SESION</a></li>
       </ul>
     </nav>
   </header>






    
<center><table >
<form action="../actions/prest.php" method="POST">
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Id del libro:</font>
	</td>  
	<td><input type="number" name="id_lib" minlength="4" maxlength="50" 
		 pattern="[A-Za-z ]+" required placeholder="id_lib"><br>
	</td>
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Id Alumno:</font>
	</td>
  <td><input type="number" name="id_alumno" minlength="1" maxlength="15" 
		pattern="[0-9]+" required placeholder="Id alumno"><br>
    <a href="buscar_alu.php" class="busc" target="_blank">Buscar alumno</a>
	</td>  
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Fecha de Prestamo:</font>
	</td>  
	<td><input type="date" name="FecP" minlength="4" maxlength="50" 
		 pattern="[A-Za-z ]+" required placeholder="Fecha prestamo"><br>
	</td>
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Fecha de devolución:</font>
  </td>  
  <td><input type="date" name="FecD" minlength="5" maxlength="15" 
		pattern="[0-9]+" required placeholder="Fecha devolución"><br>
  </td>
</tr>
<tr>
	<td class="botonacep" colspan="2">
	<input type="submit" value="Registrar" style="width:100px; height:40px;" >
	</td>
</tr>
</table></center>
</form>
<button class="button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Ingresar alumno</button>
	<div id="id01" class="modal">  
  <form action="../actions/AgregarAlu.php" method="post">
  <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <label for="Nom"><b>Nombre (s)</b></label>
      <input type="text" placeholder="Ingresa nombre" name="Nom" required>
      <label for="ApeP"><b>Apellido Paterno</b></label>
      <input type="text" placeholder="Ingresa apellido paterno" name="ApeP" required>
	  <label for="ApeM"><b>Apellido Materno</b></label>
      <input type="text" placeholder="Ingresa apellido materno" name="ApeM" required>
	  <label for="gyg"><b>Grado y grupo</b></label>
      <input type="text" placeholder="Ingresa grado y grupo" name="gyg" required>      
      <button type="submit" onclick="ConfirmAlu()">Enviar</button></form>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>  
</div>
<button class="button2" onclick="Pres()" style="width:auto;">Libros prestados</button>
</body>
</html>
<div id="logo">
        <img src="img/JuanREscudero.png">

