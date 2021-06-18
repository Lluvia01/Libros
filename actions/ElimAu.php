<?php
include_once '../conexion.php';
$id=$_REQUEST['id'];

echo $elimiad = "DELETE FROM autor WHERE id_autor = '$id'";
echo $eli =$conexion->query($elimiad);
if($eli){
	//echo 'Alumno Eliminado';
	header('location: ../vistas/buscAU.php');
} else {
	echo 'Error al Eliminar el Autor';
}
?>