<?php
    session_start();
    include_once '../conexion.php';
    if(!isset($_SESSION['Nivel'])){
      header('location: ../Login.php');
    } else {
      if($_SESSION['Nivel'] != 1){
        header('location: ../Login.php');
      }
    }
    $_SESSION['matricula'];
?>


<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Libros del rincon</title>
 
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
        height: 250px;
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
 
 </head>
 
 <body>
 
  <header>
     <div id="logo">
        
        <h1>Libros del rincon</h1>
     </div>
     <nav>
       <ul>
         <li><a href="AgregarL.php">AGREGAR LIBRO</a></li>
         <li><a href="../buscarLib.php">BUSCAR LIBRO</a></li>
         <li><a href="prestamo.php">PRESTAMOS</a></li>
         <li><a href=<a onclick="ConfirmDemo()">CERRAR SESION</a></li>
       </ul>
     </nav>
   </header>
   
 </body>
</html>
<div id="logo">
        <img src="img/JuanREscudero.png">