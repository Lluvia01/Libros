<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Libros', 'Prestamos'],
          ["Doc. stone", 4],
          ["El libro rojo", 3],
          ["Demonslayer", 2]
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Libros mas prestados',
            subtitle: 'Numero de veces prestado' },
          axes: {
            x: {
              0: { side: 'top', label: 'Ranking'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 400px; height: 500px;"></div>
  </body>
</html>
