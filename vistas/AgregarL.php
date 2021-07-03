<?php 
include_once '../conexion.php';
$consulta=mysqli_query($conexion, "SELECT * FROM autor"); 
$consulta2=mysqli_query($conexion, "SELECT * FROM editorial");    
?>
<!DOCTYPE html>
<html>

<style>
 
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
 }

 header{
   background-color: #F9F8FC;
 }

 #logo{
   margin: auto;
   height: 200px;
   width: 320px;
   text-align: center;
 }

 #logo h1{
    font-family: 'Pacifico', cursive;
    font-size: 58px;
  }

nav{
  height: 60px;
  background-color:#17181C;
  text-align: center;
}

nav ul{
   list-style: none;
   display: inline-block;
   padding:18px;
}

nav ul li{
    float: left;
    margin-top: 20px;
}

nav ul li a {
    color: white;
    font-weight: bold;
    text-decoration: none;
    font-size: 20px;
    padding: 18px;
}

nav ul li a:hover{
  background-color: #929fb3;
}

</style>

<head>
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Libros del rincon</title>

    <link rel="stylesheet" type="text/css" href="css/animacion.css">
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <script type="text/javascript" src="../actions/funciones.js"></script>
</head>

<body>
  
<header>
     <div id="logo">
     <a href="principal.php"><h1>Libros del Rincón</a></h1></div>
     </div>
   
     </div>
     <nav>
       <ul>
         <li><a href="AgregarL.php">AGREGAR LIBRO</a></li>
         <li><a href="../buscarLib.php">BUSCAR LIBRO</a></li>
         <li><a href="prestamo.php">PRESTAMOS</a></li>
         <li><a onclick="ConfirmDemo()">CERRAR SESION</a></li>
       </ul>
     </nav>
   </header>

</li></ul></nav>
    
<center><table >
<form action="../actions/agregarlib.php" method="POST">
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Titulo del libro:</font>
	</td>  
	<td><input type="text" name="titulo" minlength="4" maxlength="50" 
		 pattern="[A-Za-z ]+" required placeholder="Titulo del libro"><br>
	</td>
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Autor:</font>
	</td>
  <td>
    <select name="id_autor">
    <option>seleccione autor</option>
    <?php while($datos=mysqli_fetch_array($consulta)){?>
    <option value="<?php echo $datos['id_autor']?>"><?php echo $datos['Nombre_au']; echo ' '; echo $datos['apellido_au']?></option>
  <?php } ?>
    </select><br>
    <a href="buscAu.php" class="busc" target="_blank">Buscar autor</a>
	</td>  
</tr>
<tr>
	<td class=a>
	<br><FONT  SIZE=6>Editorial:</font>
  </td>  
  <td><select name="id_edi">
    <option>seleccione editorial</option>
    <?php while($dato=mysqli_fetch_array($consulta2)){?>
    <option value="<?php echo $dato['id_edi']?>"><?php echo $dato['Nombre_edi']?></option>
  <?php } ?>
    </select><br>
	<a href="buscarEdi.php" class="busc" target="_blank">Buscar editorial</a>
  </td>
</tr>

<tr>
	<td class="botonacep" colspan="2">
	<input type="submit" value="Registrar" onclick="ConfirmLib()" style="width:100px; height:40px;" >
	</td>
</tr>
</table></center>
</form>
<button class="button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Ingresar un autor</button><br>
	<div id="id01" class="modal">  
  <form action="../actions/agregarAutor.php" method="post">
  <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <label for="NomA"><b>Nombre del autor</b></label>
      <input type="text" placeholder="Ingresa nombre" name="NomA" required><br>
      <label for="ApeA"><b>Apellido del autor</b></label>
      <input type="text" placeholder="Ingresa apellido" name="ApeA" required><br>        
      <button type="submit" onclick="ConfirmAuto()">Enviar</button><br></form>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>  
</div>
<button class="button2" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Ingresar editorial</button><br>
	<div id="id02" class="modal">
  <form action="../actions/agregarEdi.php" method="post">
  <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <label for="edi"><b>Editorial</b></label>
      <input type="text" placeholder="Editorial" name="edi" required><br>        
      <button type="submit" onclick="ConfirmEdi()">Enviar</button><br>
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
</body>
</html>




