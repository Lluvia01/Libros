<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="vistas/css/styleLog.css">
</head>
<body>
	<div class="loginbox" >
	<h1>INICIAR SESIÓN</h1>

<form action="index.php" method="POST">
			<label for="MATRICULA">USUARIO:</label>
			<input type="number" name="username" required placeholder="Ingresar usuario"> <br><br>
			<label for="CONTRASENA">CONTRASE&Ntilde;A:</label>
			<input type="password" name="password"  required placeholder="Ingresa tu contrase&ntilde;a"><br><br>	
			<input type="submit" value="Ingresar">
			
			<?php
if(isset($errorLogin)){
	echo $errorLogin;
//print '<script language="JavaScript">'; 
//print 'alert("USUARIO Y/O CONTRASEÑA INCORRECTA");'; 
//print '</script>'; 
 } ?>
		 <p><a href="RegistroAdmin.php">¿No tienes Cuenta?</a></p>      
</form>
</div>
</body>
</html>