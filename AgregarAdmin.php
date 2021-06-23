<?php
include'conexion.php';

$No_admin = $_POST['No_admin'];
$Nombre_Admin = $_POST['Nombre_Admin'];
$Apellido_Padmin = $_POST['Apellido_Padmin'];
$Apellido_Madmin = $_POST['Apellido_Madmin'];
$Correo_Admin = $_POST['Correo_Admin'];
$NumTelefono = $_POST['NumTelefono'];
$password = $_POST['password'];
$data = json_decode( file_get_contents('https://api.email-validator.net/api/verify?EmailAddress='.$Correo_Admin.'&APIKey=ev-0b0756bbfb1005b30289b8fd6c8297a3'), true );
$data1 = json_decode( file_get_contents( 'https://api.phone-validator.net/api/v2/verify?PhoneNumber=+52'.$NumTelefono.'&CountryCode=mx&APIKey=pv-32d92ab9af64b0ba985bac35dea7601c'), true);
$val1= 'MX';
$val2= $data1['formatnational'];
if($data['status']==200 && $data1['countrycode']== $val1)
	{
		$insertAdmin = "INSERT INTO `administrador`(`No_admin`, `Nombre_Admin`, `Apellido_Padmin`,`Apellido_Madmin`,`Correo_Admin`,`NumTelefono`) VALUES ('$No_admin','$Nombre_Admin','$Apellido_Padmin','$Apellido_Madmin' ,'$Correo_Admin', '$NumTelefono')";
 
 
 
 $resultado = mysqli_query($conexion,$insertAdmin);
 
if($resultado){ 
	$insertUsuario = "INSERT INTO `usuario`(`control`, `password_Usua`, `Nivel`) VALUES ('$No_admin','$password','1' )";
	$resultado2 = mysqli_query($conexion,$insertUsuario);
	header('Location: Login.php');
	    }
}else{
       $errorLogin = "<script>alert('Correo invalido');</script>";

        include_once 'RegistroAdmin.php';
    }
?>