<?php 
$servername="localhost";  
$username="id14240645_caodanh1802";  
$password="mydreaminBosch123456.";   
$dbname="id14240645_esp_data"; 

$conn=new mysqli("$servername","$username","$password","$dbname");

if($conn){

}else{
    echo "Connection Failed";
}
 ?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['reading_time', 'temperature1', 'temperature2'],

          <?php
            $query="Select *from SensorData1";
            $res=mysqli_query($conn,$query);
            while($data=mysqli_fetch_array($res)){
                $readingtime = $data('reading_time)');
                $temperature1=$data('temperature1');
                $temperature2=$data['temperature2'];
                     ?>
         ['<?php echo $readingtime; ?>',<?php echo $temperature1;?>, <?php echo $temperature2; ?> ],
         <?php
            }
         ?>

        ]);

        var options = {
          title: 'ESP32 Control temperature',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>

