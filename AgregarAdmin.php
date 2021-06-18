<?php
$conexion = mysqli_connect("localhost","root","","library");

$No_admin = $_POST['No_admin'];
$Nombre_Admin = $_POST['Nombre_Admin'];
$Apellido_Padmin = $_POST['Apellido_Padmin'];
$Apellido_Madmin = $_POST['Apellido_Madmin'];
$Correo_Admin = $_POST['Correo_Admin'];
$data = json_decode( file_get_contents('https://api.email-validator.net/api/verify?EmailAddress='.$Correo_Admin.'&APIKey=ev-0b0756bbfb1005b30289b8fd6c8297a3'), true );
if($data['status']==200)
	{
		$insertAdmin = "INSERT INTO `administrador`(`No_admin`, `Nombre_Admin`, `Apellido_Padmin`,`Apellido_Madmin`,`Correo_Admin`) VALUES ('$No_admin','$Nombre_Admin','$Apellido_Padmin','$Apellido_Madmin' ,'$Correo_Admin')";
 
 $No_admin = $_POST['No_admin'];
$Nombre_Admin = $_POST['Nombre_Admin'];
$Apellido_Padmin = $_POST['Apellido_Padmin'];
$Apellido_Madmin = $_POST['Apellido_Madmin'];
$Correo_Admin = $_POST['Correo_Admin'];

 $insertAdmin = "INSERT INTO `administrador`(`No_admin`, `Nombre_Admin`, `Apellido_Padmin`,`Apellido_Madmin`,`Correo_Admin`) VALUES ('$No_admin','$Nombre_Admin','$Apellido_Padmin','$Apellido_Madmin' ,'$Correo_Admin')";
 
 $resultado = mysqli_query($conexion,$insertAdmin);
 
if($resultado){ 
	$insertUsuario = "INSERT INTO `usuario`(`control`, `password_Usua`, `Nivel`) VALUES ('$No_admin',null,'1' )";
	$resultado2 = mysqli_query($conexion,$insertUsuario);
	header('Location: Login.php');
	    }else{
	    	header('Location: Login.php');
	    }
	} else
	{
		echo "<script>alert('Correo invalido');</script>";
	}

?>
