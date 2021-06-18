<?php
include_once '../conexion.php';
$id=$_REQUEST['id'];

echo $elimiad = "DELETE FROM editorial WHERE id_edi = '$id'";
echo $eli =$conexion->query($elimiad);
if($eli){
	//echo 'Alumno Eliminado';
	header('location: ../vistas/buscarEdi.php');
} else {
	echo 'Error al Eliminar el Autor';
}
?>