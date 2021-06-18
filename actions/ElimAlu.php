<?php
include_once '../conexion.php';
$id=$_REQUEST['id'];

echo $elimialu = "DELETE FROM alumnos WHERE No_alu = '$id'";
echo $eli =$conexion->query($elimialu);
if($eli){
	//echo 'Alumno Eliminado';
	header('location: ../vistas/busc_alu.php');
} else {
	echo 'Error al Eliminar el Autor';
}
?>