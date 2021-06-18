<?php 
include_once '../conexion.php';

$showaut="SELECT * FROM autor";
     $res=$conexion->query($showaut);
$rows = $res->num_rows;
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Buscar</title>
<link rel="stylesheet" type="text/css" href="css/styleMenu.css">
  <link rel="stylesheet" type="text/css" href="css/tabla.css">
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
<br><br>
<center><p><FONT SIZE=6>RESULTADOS DE BUSQUEDA:</font></p></center>
<main>
  <?php if($rows > 0) { ?>
   <table align="center">
   <thead>
    				<tr>
    					<td>ID AUTOR</td>
    					<td>NOMBRE</td>
						<td>APELLIDO</td>
						<td> Modificar </td>
						<td> Eliminar </td>
    				</tr>
        <tbody>
          <?php while($row=$res->fetch_assoc()){ ?>
            <tr>
    					<td><?php echo $row['id_autor'];?></td>
              <td><?php echo $row['Nombre_au'];?></td>
              <td><?php echo $row['apellido_au'];?></td>						
        <td><a href="ModifAu.php?id=<?php echo $row['id_autor']; ?>">
        <img class="img" src="img\mod.png" alt="modificar" width="20" height="20"/></a></td>
        <td><FORM><input name="button" type="button" onclick="ConfirmElimA()" value="X"/></FORM></td>
        <script type="text/javascript">
        function ConfirmElimA() {
    var mensaje = confirm("¿Seguro deceas eliminar este autor?");
    if (mensaje) {
      window.location.href="../actions/ElimAu.php?id=<?php echo $row['id_autor']; ?>";
    alert("Autor eliminado");
    }
    else {
    alert("Autor no eliminado");
}}</script>
        </tr>
        <?php } ?>
        </tbody></table><br><br>

<?php } else { ?>
    <br><center><h1>NO SE ENCONTRARON AUTORES</h1></center><br><br>

    <?php } ?>
 </div>
</form>
</main>
</body>

</html>