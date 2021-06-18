<?php
include_once '../conexion.php';
$id=$_REQUEST['id'];
$lib=$_POST['id_lib'];
$sta = $_POST['estado'];
$botom = $_POST['boton1'];

 $modiadmi = "UPDATE libros SET status='$sta' WHERE id_libro = '$lib'";
 $moda = $conexion->query($modiadmi);
 if($moda) {
    echo $elimiad = "DELETE FROM prestamos WHERE id_p = '$id'";
    echo $eli =$conexion->query($elimiad);
    if($eli){
if ($botom==1) { header('location:  ../vistas/libros_pres.php'); }

else {header('location:  ../vistas/ElimPres.php');}

 } else {
 	echo 'Error al Modificar al Administrador';

 }}
?>