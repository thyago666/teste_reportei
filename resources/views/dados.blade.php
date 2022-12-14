<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">

<table class="table">
  <thead>
     <tr>
      <th scope="col">Quantidade</th>
      <th scope="col">Repositorio</th>
      <th scope="col">Dias</th>
    </tr>
  </thead>
  <tbody>
    @foreach($qtds as $qtd)
     <tr>
      <td>{{$qtd->quantidade}}</td>
      <td>{{$qtd->repositorio}}</td>
      <td>{{ \Carbon\Carbon::parse($qtd->data_commit)->format('d/m/Y')}}</td>
     </tr>
   @endforeach
  </tbody>
</table>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
           @php
            foreach($qtds as $qtd){
          $qtde = $qtd->quantidade;
          $date1 = $qtd->data_commit;
            @endphp
           ['@php echo date('d/m/Y', strtotime($date1)); @endphp', @php echo $qtde; @endphp, "color: #000000"],
          @php
        }
        @endphp
      ]);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);
      var options = {
        title: "Commits X Dias",
        width: 1200,
        height: 600,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 1200px; height: 600px;"></div>
</body>
</html>

