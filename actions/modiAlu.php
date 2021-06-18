<?php
include_once '../conexion.php';
$id=$_REQUEST['id'];
$nomalu = $_POST['nombre'];
$apep = $_POST['apellidoP'];
$apem = $_POST['apellidoM'];
$GyG = $_POST['gyg'];
$botom = $_POST['boton1'];

 $modialu = "UPDATE alumnos SET Nombre_alu='$nomalu',Apellido_P='$apep',Apellido_M='$apem',grado_grupo='$GyG' WHERE No_alu = '$id'";
 $moda = $conexion->query($modialu);
 if($moda) {
 
if ($botom==1) { header('location:  ../vistas/buscar_alu.php'); }

else {header('location:  ../vistas/ModifAlu.php');}

 } else {
 	echo 'Error al Modificar al Administrador';
 }
?>