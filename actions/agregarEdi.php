<?php
include('../conexion.php');
$nombre = $_POST['edi'];

 $insertedi = "INSERT INTO editorial(id_edi, Nombre_edi) VALUES (NULL,'$nombre')";
 $goo = $conexion->query($insertedi);
if($goo){
	//echo 'Editorial agregada';
	header('location: ../vistas/AgregarL.php');
	
} else {
	echo 'Error al agregar la editorial';
}
?>