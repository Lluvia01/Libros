<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="vistas/css/styleLog1.css">
  <title>Formulario Registro</title>
</head>
<body>
	<div class="loginbox">
		<form action="AgregarAdmin.php" method="POST">
    	<h1>Registro de Usuario</h1>
    <label for="No_admin">Numero de usuario</label>
    <input type="number" name="No_admin" placeholder="Ingresar numero usuario">
    <label for="Nombre_Admin">Nombre de usuario</label>
    <input type="text" name="Nombre_Admin"  placeholder="Ingrese su Nombre">
    <label for="Apellido_Padmin">Apellido Paterno</label>
    <input type="text" name="Apellido_Padmin"  placeholder="Ingrese su Apellido">
    <label for="Apellido_Madmin">Apellido Materno</label>
    <input type="text" name="Apellido_Madmin"  placeholder="Ingrese su Apellido">
    <label for="email">Correo</label>
    <input type="email" name="Correo_Admin"  placeholder="Ingrese su Correo">

    <input type="submit" value="Registrar">
    <p><a href="Login.php">Ya tengo Cuenta</a></p>
  </form>
</div>
</body>
</html>