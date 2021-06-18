<?php
include('../conexion.php');
$idlib = $_POST['id_lib'];
$idalu = $_POST['id_alumno'];
$fecp = $_POST['FecP'];
$fecd = $_POST['FecD'];

 $insertpres = "INSERT INTO `prestamos`(`id_p`, `id_lib`, `id_alu`, `fecha_prestamo`, `fecha_entrega`) VALUES (NULL,'$idlib', '$idalu', '$fecp', '$fecd')";
 $goo = $conexion->query($insertpres); 
if($goo){
	$modi = "UPDATE libros SET status='Prestado' WHERE id_libro = '$idlib'";
	$go = $conexion->query($modi); 
	if($go){
	
	//echo 'Autor agregado';
	header('location: ../vistas/prestamo.php');
	
} else {
	echo 'Error al agregar prestamo';
}
	
} else {
	echo 'Error al agregar prestamo';
}
?>

