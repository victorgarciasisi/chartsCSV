
<!-- Incluimos fichero php que carga el csv en un json -->
<?php include('logic.php'); ?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Temperatura media Gijón</title>

<!-- Cargamos la libreria de google para mostrar graficas: https://developers.google.com/chart/interactive/docs/gallery/columnchart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<!-- script que genera la grafica-->
    <script type="text/javascript">
      google.charts.load('current', {
        'packages': ['bar']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        //pasamos el json a la grafica
        var data = google.visualization.arrayToDataTable(<?php echo $arrayToDataTable ?>);

        var options = {

          bars: 'vertical',
          vAxis: {
            format: 'decimal'
          },
          height: 600,
          colors: ['#d95f02']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>

  <body>
  
  <h1 style="text-align: center;">Temperatura media Gijón</h1>
  
    <!-- div donde se muestra la grafica-->
    <div id="chart_div"></div>
  </body>

  </html>
