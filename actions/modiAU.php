<?php
include_once '../conexion.php';
$id=$_REQUEST['id'];
$nomau = $_POST['nombre'];
$apeau = $_POST['apellidoAu'];
$botom = $_POST['boton1'];

 $modiadmi = "UPDATE autor SET Nombre_au='$nomau',apellido_au='$apeau' WHERE id_autor = '$id'";
 $moda = $conexion->query($modiadmi);
 if($moda) {
 
if ($botom==1) { header('location:  ../vistas/buscAu.php'); }

else {header('location:  ../vistas/ModifAu.php');}

 } else {
 	echo 'Error al Modificar al Administrador';
 


 }
?>