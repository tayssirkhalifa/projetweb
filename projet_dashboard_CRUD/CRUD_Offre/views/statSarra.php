<?php 
include "../config.php";
//index.php
$c = config::getconnexion();
$query = $c->prepare("SELECT COUNT(titre) as number, date_d  from offre GROUP by date_d");
$query->execute();
$Tab=$query->fetchAll();

$chart_data = '';
foreach($Tab as $row)
{
 $chart_data.= "{titre:'".$row['number']."', date_d:'".$row['date_d']."'}, ";
}
$chart_data = substr($chart_data, 0, -2);

?>

<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">

   <div id="chart1">
   	
   </div>

  </div>
 </body>
</html>

<script>
Morris.Bar({
 element :'chart1',
 data:[<?php echo $chart_data; ?>],
 xkey:'date_d',
 ykeys:['number'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto',
 stacked:true
});

</script>



////////////////////////////////////////////////////////////////////////////////////



<?php 
include "../config.php";
//index.php
$c = config::getconnexion();
$query = $c->prepare("SELECT COUNT(titre) as number, date_d  from offre GROUP by date_d");
$query->execute();
$Tab=$query->fetchAll();

$chart_data = '';
foreach($Tab as $row)
{
 $chart_data.= "{titre:'".$row['number']."', date_d:'".$row['date_d']."'}, ";
}
$chart_data = substr($chart_data, 0, -2);

?>

<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">

   <div id="chart1">
    
   </div>

  </div>
 </body>
</html>

<script>
Morris.Bar({
 element :'chart1',
 data:[<?php echo $chart_data; ?>],
 xkey:'date_d',
 ykeys:['number'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto',
 stacked:true
});

</script>