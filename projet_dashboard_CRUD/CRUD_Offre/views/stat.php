<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p']) && $_SESSION['role']=="admin") 
{ 


?>

<!-------------------------------------------------Statisitiques------------------------------------------------>
<?php 
include "../config.php";
//index.php
$c = config::getconnexion();
$query = $c->prepare("SELECT COUNT(titre) as number, date_d  from offre GROUP by date_d");





$query->execute();
$Tab=$query->fetchAll();

$chart_data ='';
foreach($Tab as $row)
{
 $chart_data.= "{number:'".$row['number']."', date_d:'".$row['date_d']."'}, ";
}
$chart_data = substr($chart_data, 0,-2);

?>
<!-------------------------------------------------Statisitiques------------------------------------------------>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Auto repare - Dashboard</title>

    <link href="A/css/bootstrap.min.css" rel="stylesheet">
    <link href="A/css/popup.css" rel="stylesheet">
    <link href="A/css/font-awesome.min.css" rel="stylesheet">
    <link href="A/css/datepicker3.css" rel="stylesheet">
    <link href="A/css/styles.css" rel="stylesheet">
    <link href="A/css/tableau.css" rel="stylesheet">
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!--statistiques-->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<!--statistiques-->


  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
        <ul class="nav navbar-top-links navbar-right">

          <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-envelope"></em><span class="label label-danger">0</span>
          </a>
            <ul class="dropdown-menu dropdown-messages">
              <li>
                                
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-bell"></em><span class="label label-info">5</span>
          </a>
            <ul class="dropdown-menu dropdown-alerts">
              <li><a href="#">
                <div><em class="fa fa-envelope"></em> 1 New Message
                  <span class="pull-right text-muted small">3 mins ago</span></div>
              </a></li>
              <li class="divider"></li>
              <li><a href="#">
                <div><em class="fa fa-heart"></em> 12 New Likes
                  <span class="pull-right text-muted small">4 mins ago</span></div>
              </a></li>
              <li class="divider"></li>
              <li><a href="#">
                <div><em class="fa fa-user"></em> 5 New Followers
                  <span class="pull-right text-muted small">4 mins ago</span></div>
              </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>

  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
      <div class="profile-userpic">
        <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
      </div>
      <div class="profile-usertitle">
        <div class="profile-usertitle-name"><?php echo  $_SESSION['n'] ?></div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    <ul class="nav menu">
      
      
<li class=""><a href="../../../ghaylene web/dashs/afficherclient.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client</a></li>
      <li class=""><a href="../../../ghaylene web/dashs/afficherclient.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client Fidel</a></li>
      <li><a href="Jeux.php"><em class="fa fa-toggle-off">&nbsp;</em> Concours</a></li>
      <li class="active"><a href="Offre.php"><em class="fa fa-clone">&nbsp;</em> offre</a></li>
       <li class="#"><a href="../../../commande/views/afficherCommande.php"><em class="fa fa-clone">&nbsp;</em> Commande</a></li>
                  <li class=""><a href="../../../livraison/CRUD/views/afficherLivraison.php"><em class="fa fa-clone">&nbsp;</em> Gestion Livraisons</a></li>
      <li class=""><a href="../../../livraison/CRUD/views/afficherL.php"><em class="fa fa-clone">&nbsp;</em> Gestion Livreurs</a></li>
      <li class=""><a href="../../../sav/back/index.php"><em class="fa fa-toggle-off">&nbsp;</em> Reclamation</a></li>
      <li class=""><a href="../../../sav/back/avisBack.php"><em class="fa fa-toggle-off">&nbsp;</em> Avis</a></li>
      <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Dashboard</li>
      </ol>
    </div><!--/.row-->

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"></h1>
      </div>
    </div>

<!-----------------------------------------------------Statistiques---------------------------------------------->

  <br /><br />
  <div class="container" style="width:600px;">

   <div id="chart1">
    
   </div>
<h3> <center>Nombre des offres / Dates</center></h3>
  </div>

<!-----------------------------------------------------Statistiques---------------------------------------------->


<!--------------------------------------------------------------PDF-------------------------------------------->
<?php

$im = imagegrabscreen();
imagepng($im, "myscreenshot.png");
imagedestroy($im);
?>

 <div class="boutonAfficher" style="margin-top: 70px;margin-left: 50px; margin-bottom: 50px;">
                    <button type="button" class="btn btn-lg btn-primary" id="cmd">
                        <a href="pdf.php">
                            <span>Exporter </span></a>
                    </button>
                </div>


<!--------------------------------------------------------------PDF---------------------------------------------------->
<footer>

    </footer><!--/.row-->
  </div>  <!--/.main-->
    <script src="A/js/jquery-1.11.1.min.js"></script>
    <script src="A/js/bootstrap.min.js"></script>
    <script src="A/js/chart.min.js"></script>
    <script src="A/js/chart-data.js"></script>
    <script src="A/js/easypiechart.js"></script>
    <script src="A/js/easypiechart-data.js"></script>
    <script src="A/js/bootstrap-datepicker.js"></script>
    <script src="A/js/custom.js"></script>

  <!--  
    <script>
    window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>-->


</body>
</html>

    
<!-------------------------------------------------Statisitiques------------------------------------------------>
<script>
Morris.Bar({
 element :'chart1',




       

                data : [<?php echo $chart_data; ?>],


 xkey:'date_d',
 ykeys:['number'],
 labels:['Profit', 'Purchase', 'Sale'],

 hideHover:'auto',
 stacked:true

});

</script>
<!-------------------------------------------------Statisitiques------------------------------------------------>
 
<?php
}
else{
  header('location:../../../ghaylene web/dashs/loginghaylene.php');
}

?>