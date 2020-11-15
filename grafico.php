<?php
echo "<link rel='stylesheet' href='bootstrap.min.css'>";
echo "<link rel='stylesheet' href='grafico.css'>";

require_once 'conectar.php';
$ads = 0;
$direito = 0;
$fisioterapia = 0;
$design = 0;
$enfermagem = 0;
$consulta = $pdo->query("SELECT curso FROM aluno;");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
if ($linha["curso"] == "ADS"){$ads++;}
if ($linha["curso"] == "Direito"){$direito++;}
if ($linha["curso"] == "Fisioterapia"){$fisioterapia++;}
if ($linha["curso"] == "Design"){$design++;}
if ($linha["curso"] == "Enfermagem"){$enfermagem++;}
}
?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['ADS',         <?php echo("$ads");?>],
          ['Direito',     <?php echo("$direito");?>],
          ['Fisioterapia',<?php echo("$fisioterapia");?>],
          ['Design',      <?php echo("$design");?>],
          ['Enfermagem',  <?php echo("$enfermagem");?>]
        ]);

        var options = {
          title: 'Alunos por curso na Estácio - Estação',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <head>

  </head>
  <body>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Primeiro</th>
      <th scope="col">Último</th>
      <th scope="col">Nickname</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

  <center><figure class="figure">
  <figcaption class="figure-caption"><h1>GRAFICO.</h1></figcaption>
  </figure></center>
    <center><div id="piechart_3d" style="width: 900px; height: 500px;"></div></center>
    <center><a href="busca.php"><button type="button" class="btn btn-outline-primary">Voltar</button></a></center>
    
  </body>
</html>
