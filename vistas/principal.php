<?php
    session_start();
    include '../conexion.php';
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
	<title>Bienvenido</title>
  <link rel="stylesheet" type="text/css" href="css/styleMenu.css">
  <script type="text/javascript" src="../actions/funciones.js"></script>
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
        width: 800,
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
	<div class="header">
	<h1><a href="principal.php">Libros del Rincón</a></h1></div>
  <br><H2>Bienvenido (a)</H2>
  
	<nav><ul>

  <li class="dropdown">
    <a href="AgregarL.php" class="dropbtn">AGREGAR LIBRO</a>

  </li>
  <li class="dropdown">
    <a href="../buscarLib.php" class="dropbtn">BUSCAR LIBRO</a>
    
  </li>
  <li class="dropdown">
    <a href="prestamo.php" class="dropbtn">PRESTAMOS</a>
  </li>
<li><a onclick="ConfirmDemo()">CERRAR SESION</a>
</li>
</ul>
</nav>
<h3><div id="columnchart_values" style="width: auto; height: auto; float: left;"></div></h3>
<img class="leer" src="img\lee.png" alt="leer"/>

</body>
</html>