<?php 
include_once '../conexion.php';

$showaut="SELECT * FROM prestamos, alumnos, libros WHERE id_libro=id_lib && No_alu=id_alu ORDER BY id_p ASC";
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

<center><p><FONT SIZE=6>Libros prestados:</font></p></center>
<main>
  <?php if($rows > 0) { ?>
   <table align="center">
   <thead>
    				<tr>
    					<td>ID</td>
              <td>LIBRO</td>
    					<td>NOMBRE</td>
						<td>APELLIDO PATERNO</td>
            <td>APELLIDO MATERNO</td>
            <td>GRADO Y GRUPO</td>
            <td>PRESTAMO</td>
            <td>ENTREGA</td>
						<td> Imprimir</td>
						<td> Eliminar </td>
    				</tr>
        <tbody>
          <?php while($row=$res->fetch_assoc()){ ?>
            <tr>
    					<td><?php echo $row['id_p'];?></td>
              <td><?php echo $row['titulo'];?></td>
              <td><?php echo $row['Nombre_alu'];?></td>
              <td><?php echo $row['Apellido_P'];?></td>
              <td><?php echo $row['Apellido_M'];?></td>
              <td><?php echo $row['grado_grupo'];?></td>	
              <td><?php echo $row['fecha_prestamo'];?></td>	
              <td><?php echo $row['fecha_entrega'];?></td>				
        <td><button class="button" onclick="PDF()" style="width:auto;">PDF</button><br></td>
        <script type="text/javascript">
      function PDF() {
        window.open('../actions/PresPDF.php?id=<?php echo $row['id_p']; ?>', '_blank');     
      }
        </script>
        <td><FORM><input name="button" type="button" onclick="ConfirmElimPres()" value="X"/></FORM></td>
        <script type="text/javascript">
        function ConfirmElimPres() {
    var mensaje = confirm("¿Seguro deceas eliminar");
    if (mensaje) {
      window.location.href="../actions/ElimPres.php?id=<?php echo $row['id_p']; ?>";
    alert("Prestamo eliminado");
    }
    else {
    alert("Prestamo no eliminado");
}}</script>
        </tr>
        <?php } ?>
        </tbody></table><br><br>

<?php } else { ?>
    <br><center><h1>NO SE ENCONTRARON PRESTAMOS</h1></center><br><br>

    <?php } ?>
 </div>
</form>
</main>

</body>
</html>