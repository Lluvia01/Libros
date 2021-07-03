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
 <script type="text/javascript" src="../actions/funciones.js"></script>
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
     img{
  align-content: centers;
}
   </style>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Id del libro", "cantidad de veces prestado", { role: "style" } ],
        ["Dr. Stone", 2, "gold"],
        ["The promise neverland", 1, "silver"],
        ["Mirai nikki", 1, "#b87333"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "ranking de mas solicitados",
        width: 750,
        height: 400,
        bar: {groupWidth: "100%"},
        legend: { position: "top" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
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
         <li><a onclick="ConfirmDemo()">CERRAR SESION</a></li>
       </ul>
     </nav>
   </header>
<center>
        <div id="columnchart_values" style="width: auto; height: auto; float: right;"></div>
        <img src="img/JuanREscudero.png">
        </center>
 </body>
</html>
