<?php 
include_once '../conexion.php';

$showedi="SELECT * FROM editorial";
     $res=$conexion->query($showedi);
$rows = $res->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buscar</title>
  <link rel="stylesheet" type="text/css" href="css/styleMenu.css">
  <link rel="stylesheet" type="text/css" href="css/tabla.css">
  <script type="text/javascript" src="actions/funciones.js"></script>
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
  
<center><p><FONT SIZE=6>RESULTADOS DE BUSQUEDA:</font></p></center>
<main>
  <?php if($rows > 0) { ?>
   <table align="center"> 
   <thead>
    				<tr id='titulo'>
    					<td>ID EDITORIAL</td>
    					<td>NOMBRE EDITORIAL</td>
						<td> Modificar </td>
						<td> Eliminar </td>
    				</tr>
    			</thead> 
   <tbody>
          <?php while($row=$res->fetch_assoc()){ ?>    
        <tbody>
          <tr>
          <td><?php echo $row['id_edi'];?></td>
    			<td><?php echo $row['Nombre_edi'];?></td>
        <td><a href="ModifEdi.php?id=<?php echo $row['id_edi']; ?>">
        <img class="img" src="img\mod.png" alt="modificar" width="20" height="20"/></a></td>
        <td><FORM><input name="button" type="button" onclick="ConfirmElimA()" value="X"/></FORM></td>
        <script type="text/javascript">
        function ConfirmElimA() {
    var mensaje = confirm("¿Seguro deceas eliminar esta editorial?");
    if (mensaje) {
      window.location.href="../actions/ElimEdi.php?id=<?php echo $row['id_edi']; ?>";
    alert("Editorial eliminado");
    }
    else {
    alert("Editorial no eliminado");
}}</script>
        </tr>
        <?php } ?>
        </tbody></table><br><br>

<?php } else { ?>
    <br><center><h1>NO SE ENCONTRARON EDITORIALES</h1></center><br><br>

    <?php } ?>
 </div>
</form>
</main>
</body>
</html>