<?php
include('../conexion.php');
$nomLib = $_POST['titulo'];
$idAuto = $_POST['id_autor'];
$idEdi = $_POST['id_edi'];
$status = $_POST['estado'];


 $insertlib = "INSERT INTO `libros`(`id_libro`, `titulo`, `auto`, `edi`, `status`) VALUES (NULL,'$nomLib','$idAuto','$idEdi','Disponible')";
 $goo = $conexion->query($insertlib);
if($goo){
	//echo 'Libro agregado';
	header('location: ../vistas/AgregarL.php');
	
} else {
	echo 'Error al agregar el libro';
}
?>