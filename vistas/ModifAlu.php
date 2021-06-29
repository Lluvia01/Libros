<?php 
include_once '../conexion.php';    
$id=$_GET['id'];
$so="SELECT * FROM alumnos WHERE No_alu=$id";
$ru = $conexion->query($so);
$rowmaes = $ru->num_rows;
$row=$ru->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buscar</title>
<link rel="stylesheet" type="text/css" href="../vistas/css/styleMenu.css">
  <link rel="stylesheet" type="text/css" href="../vistas/css/tabla.css">
  <script type="text/javascript" src="../actions/funciones.js"></script>
</head>
<body>
	<div class="header">
	<h1><a href="principal.php">Libros del Rincón</a></h1></div>
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
</ul>
</nav>

<center><div><main><table >
  <tr>
  <th colspan="2">	<br>
<h1><P>MODIFICAR DATOS DEL ALUMNO</FONT></P></h1>
  </th>
</tr>
<FORM action="../actions/modiAlu.php?id=<?php echo $row['No_alu']; ?>" 
	method="POST"enctype="multipart/form-data">

<tr>
	<td class=a>
	<br><FONT  SIZE=6>Nombre(s) del alumno:</font>
	</td>  
	<td><br><input type="text" name="nombre" minlength="5" maxlength="20"
	pattern="[A-Za-z ]+" value="<?php echo $row['Nombre_alu']; ?>"><br>
	</td>
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Apellido paterno:</font>
	</td>  
	<td><br><input type="text" name="apellidoP" minlength="4" maxlength="15" 
		 pattern="[A-Za-z ]+" value="<?php echo $row['Apellido_P']; ?>"><br>
	</td>
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Apellido Materno:</font>
	</td>  
	<td><br><input type="text" name="apellidoM" minlength="4" maxlength="15" 
		 pattern="[A-Za-z ]+" value="<?php echo $row['Apellido_M']; ?>"><br>
	</td>
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Grado y grupo:</font>
	</td>  
	<td><br><input type="text" name="gyg" minlength="1" maxlength="2" 
		  value="<?php echo $row['grado_grupo']; ?>"><br>
	</td>
</tr>

<input type="hidden" name="boton1" value="1" />
<tr>
<td class="botonacep" colspan="2">
	<br><br><input type="submit" value="MODIFICAR" style="width:100px; height:40px;" >
	</td>
</tr>
</table></div>

</center>
</form>
</main>

</body>

</html>
