<!DOCTYPE html>
<html>
<head>
	<title>Prestamo de libros</title>
	<link rel="stylesheet" type="text/css" href="css/styleMenu.css">
    <link rel="stylesheet" type="text/css" href="css/animacion.css">
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <script type="text/javascript" src="../actions/funciones.js"></script>
</head>
<body>
	<div class="header">
	<h1><a href="principal.php">Libros del Rincón</a></h1></div>
  <br><H2>Prestamo de libro</H2>
<nav><ul>
  <li class="dropdown">
    <a href="AgregarL.php" class="dropbtn" >AGREGAR LIBRO</a>

  </li>
  <li class="dropdown">
    <a href="../buscarLib.php" class="dropbtn" target="_blank">BUSCAR LIBRO</a>
    
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">PRESTAMOS</a>
  </li>
</li></ul></nav>
    
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
<button class="button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Ingresar alumno</button><br>
	<div id="id01" class="modal">  
  <form action="../actions/AgregarAlu.php" method="post">
  <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <label for="Nom"><b>Nombre (s)</b></label>
      <input type="text" placeholder="Ingresa nombre" name="Nom" required><br>
      <label for="ApeP"><b>Apellido Paterno</b></label>
      <input type="text" placeholder="Ingresa apellido paterno" name="ApeP" required><br>
	  <label for="ApeM"><b>Apellido Materno</b></label>
      <input type="text" placeholder="Ingresa apellido materno" name="ApeM" required><br>
	  <label for="gyg"><b>Grado y grupo</b></label>
      <input type="text" placeholder="Ingresa grado y grupo" name="gyg" required><br>        
      <button type="submit" onclick="ConfirmAlu()">Enviar</button><br></form>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>  
</div><br>
<button class="button2" onclick="Pres()" style="width:auto;">Libros prestados</button><br>
</body>
</html>