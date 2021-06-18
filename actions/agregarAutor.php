<?php
include('../conexion.php');
$idAuto = $_POST['idA'];
$nombre = $_POST['NomA'];
$apellido = $_POST['ApeA'];


 $insertauto = "INSERT INTO `autor`(`id_autor`, `Nombre_au`, `apellido_au`) VALUES (NULL,'$nombre','$apellido')";
 $goo = $conexion->query($insertauto);
if($goo){
	//echo 'Autor agregado';
	header('location: ../vistas/AgregarL.php');
	
} else {
	echo 'Error al agregar al autor';
}
?>