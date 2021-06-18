<?php
include('../conexion.php');
$idAlu = $_POST['idA'];
$nombre = $_POST['Nom'];
$apellidoP = $_POST['ApeP'];
$apellidoM = $_POST['ApeM'];
$GyG = $_POST['gyg'];

 $insertalu = "INSERT INTO `alumnos`(`No_alu`, `Nombre_alu`, `Apellido_P`, `Apellido_M`, `grado_grupo`) VALUES (NULL,'$nombre','$apellidoP', '$apellidoM', '$GyG')";
 $goo = $conexion->query($insertalu); 
if($goo){
	//echo 'Autor agregado';
	header('location: ../vistas/prestamo.php');
	
} else {
	echo 'Error al agregar al autor';
}
?>