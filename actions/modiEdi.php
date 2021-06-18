<?php
include_once '../conexion.php';
$id=$_REQUEST['id'];
$nomedi = $_POST['nombre'];
$botom = $_POST['boton1'];

 $modiadmi = "UPDATE editorial SET Nombre_edi='$nomedi' WHERE id_edi = '$id'";
 $moda = $conexion->query($modiadmi);
 if($moda) {
 
if ($botom==1) { header('location:  ../vistas/buscarEdi.php'); }

else {header('location:  ../vistas/ModifEdi.php');}

 } else {
 	echo 'Error al Modificar al Administrador';
 


 }
?>