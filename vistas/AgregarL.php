<?php 
include_once '../conexion.php';    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar libro</title>
	<link rel="stylesheet" type="text/css" href="css/styleMenu.css">
    <link rel="stylesheet" type="text/css" href="css/animacion.css">
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <script type="text/javascript" src="../actions/funciones.js"></script>
</head>
<body>
	<div class="header">
	<h1><a href="principal.php">Libros del Rincón</a></h1></div>
  <br><H2>Agregar libro</H2>
<nav><ul>
  <li class="dropdown">
    <a href="AgregarL.php" class="dropbtn">AGREGAR LIBRO</a>

  </li>
  <li class="dropdown">
    <a href="../buscarLib.php" class="dropbtn">BUSCAR LIBRO</a>
    
  </li>
  <li class="dropdown">
    <a href="prestamo.php" class="dropbtn">PRESTAMOS</a>
  </li>
</li></ul></nav>
    
<center><table >
<form action="../actions/agregarlib.php" method="POST">
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Titulo del libro:</font>
	</td>  
	<td><input type="text" name="titulo" minlength="4" maxlength="50" 
		 pattern="[A-Za-z ]+" required placeholder="Titulo del libro"><br>
	</td>
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Autor:</font>
	</td>
  <td><input type="number" name="id_autor" minlength="1" maxlength="15" 
		pattern="[0-9]+" required placeholder="Id autor"><br>
    <a href="buscAu.php" class="busc" target="_blank">Buscar autor</a>
	</td>  
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Editorial:</font>
  </td>  
  <td><input type="number" name="id_edi" minlength="5" maxlength="15" 
		pattern="[0-9]+" required placeholder="Id editorial"><br>
	<a href="buscarEdi.php" class="busc" target="_blank">Buscar editorial</a>
  </td>
</tr>

<tr>
	<td class="botonacep" colspan="2">
	<input type="submit" value="Registrar" onclick="ConfirmLib()" style="width:100px; height:40px;" >
	</td>
</tr>
</table></center>
</form>
<button class="button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Ingresar un autor</button><br>
	<div id="id01" class="modal">  
  <form action="../actions/agregarAutor.php" method="post">
  <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <label for="NomA"><b>Nombre del autor</b></label>
      <input type="text" placeholder="Ingresa nombre" name="NomA" required><br>
      <label for="ApeA"><b>Apellido del autor</b></label>
      <input type="text" placeholder="Ingresa apellido" name="ApeA" required><br>        
      <button type="submit" onclick="ConfirmAuto()">Enviar</button><br></form>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>  
</div><br>
<button class="button2" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Ingresar editorial</button><br>
	<div id="id02" class="modal">
  <form action="../actions/agregarEdi.php" method="post">
  <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <label for="edi"><b>Editorial</b></label>
      <input type="text" placeholder="Editorial" name="edi" required><br>        
      <button type="submit" onclick="ConfirmEdi()">Enviar</button><br>
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div><br>
</body>
</html>