<?php 
include_once '../conexion.php';    
$id=$_GET['id'];
$so="SELECT * FROM editorial WHERE id_edi=$id";
$ru = $conexion->query($so);
$rowmaes = $ru->num_rows;
$row=$ru->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Libros del rincon</title>
<link rel="stylesheet" type="text/css" href="../vistas/css/styleMenu.css">
  <link rel="stylesheet" type="text/css" href="../vistas/css/tabla.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <script type="text/javascript" src="../actions/funciones.js"></script>
</head>
<body>
	<header>

     <div id="logo">
     <h1><a href="principal.php">Libros del Rincón</a></h1></div>
     </div>
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

<center><p><h2>MODIFICAR DATOS DE LA EDITORIAL</h2></p>
  <div><main><table >
<FORM action="../actions/modiEdi.php?id=<?php echo $row['id_edi']; ?>" 
	method="POST"enctype="multipart/form-data">

<tr>
	<td class=a>
	<br><FONT  SIZE=6>Nombre de la editorial:</font>
	</td>  
	<td><br><input type="text" name="nombre" minlength="5" maxlength="20"
	pattern="[A-Za-z ]+" value="<?php echo $row['Nombre_edi']; ?>"><br>
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
