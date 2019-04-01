<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session

?>
<?PHP
include "C:\wamp\www\snowboarding\projet_dashboard_CRUD\CRUD_Offre\core\clienC.php";
$client1C=new clienC();
$listeCommandes=$client1C->afficherclientT();
?>
<script>
function showUser(str) {
    if (str=="") {
        document.getElementById("txtHint").innerHTML ="";
       
  xmlhttp.open("GET","get.php?id="+str,true);
        xmlhttp.send(); 
       
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                 document.getElementById("table-hide").innerHTML ="";
                
            }


        };
        
         xmlhttp.open("GET","get.php?id="+str,true);
        xmlhttp.send(); 
    }


}
</script>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lumino - Commande</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/search.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">
  <link href="css/popup.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="widget.css">
  <script type="text/javascript">

  </script>

  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
          
                

                <?php ?>
              </table>

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
        <div class="profile-usertitle-name">Username</div>
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
     <li class=""><a href="../../ghaylene web/dashs/afficherclient.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client</a></li>
      <li><a href="../../ghaylene web/dashs/afficherclientfidel2.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client fidele</a></li>
      <li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/jeux.php"><em class="fa fa-clone">&nbsp;</em>Concours</a></li>
      <li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/offre.php"><em class="fa fa-clone">&nbsp;</em>Offre</a></li> 
      <li class="active"><a href="afficherCommande.php"><em class="fa fa-clone">&nbsp;</em> Commande</a></li>
        
     
            <li class=""><a href="../../livraison/CRUD/views/afficherLivraison.php"><em class="fa fa-clone">&nbsp;</em> Gestion Livraisons</a></li>
      <li class=""><a href="../../livraison/CRUD/views/afficherL.php"><em class="fa fa-clone">&nbsp;</em> Gestion Livreurs</a></li>
      
          <li class=""><a href="../../sav/back/index.php"><em class="fa fa-toggle-off">&nbsp;</em> Reclamation</a></li>
      <li class=""><a href="../../sav/back/avisBack.php"><em class="fa fa-toggle-off">&nbsp;</em> Avis</a></li>
      <li class=""><a href="http://localhost/sav/livechat/php/app.php?admin"><em class="fa fa-toggle-off">&nbsp;</em> forum</a></li>

      
     <li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/Logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Commande/Afficher_Les_Commandes</li>
      </ol>

    </div><!--/.row-->
<form class="form-wrapper" style="
    
    margin-top: 5px;
    padding-top: 2px;
    margin-bottom: 0px;
    padding-bottom: 2px;
    height: 36px;
    margin-left: 20px;

">
<input type="text" id="search" value="" name="users"   onkeyup="showUser(this.value)" placeholder="Search for..." required>
    <input type="submit" class="submit" value="go" id="submit"  style="
    height: 27px;
">

</form>
<br>
<br>
<div style="float :left;">
    <a href="stat.php">Statistique</a>
    </div>
<div id="txtHint"></div>

      <div id="table-hide">
        <form  action="afficherclientT.php">
        <input type="submit" name="trier" value="trier par date" style="float: right;margin-right: 60px;" class="btn btn-primary btn-sm" >
        </form>
      <center>
        <br>
        
<table class="table table-hover table-bordered" style="
    margin-left: 10px;
    margin-right: 10px;
">

<thead>


<th>Id_commande</th>
<th>Montant</th>
<th>Id_client</th>
<th>Date</th>
<th style=" width: 67.96875px;">Gestion</th>
</thead>
<tbody> 

  <?php foreach ($listeCommandes as $row ) { ?>
<tr>

<td><?php echo  $row['nom']; ?>  </td>
                        

<td> <?php echo  $row['prenom']; ?></td>

<td><?php echo $row['mail']; ?></td>

<td><?php echo $row['password']; ?></td>
<p>

<p>
<td style="
    border-top-width: 0px;
    height: 47px;
"><center>
                     
                   <center>
                      <button type="submit" class="btn btn-danger btn-sm" value="<?PHP echo $row['nom'];?>" name="supprimer" >Supprimer</button>
  </form>
  <input type="hidden" value="<?PHP ?>" name="titre">
  </form></center>
               </td>    </tr>  <?php  }  ?> 
</tbody>

</table>
</div>
</center>
      </div>

    </div><!--/.row-->

    

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  <script>

  window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
  var chart2 = document.getElementById("bar-chart").getContext("2d");
  window.myBar = new Chart(chart2).Bar(barChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
  var chart3 = document.getElementById("doughnut-chart").getContext("2d");
  window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
  responsive: true,
  segmentShowStroke: false
  });
  var chart4 = document.getElementById("pie-chart").getContext("2d");
  window.myPie = new Chart(chart4).Pie(pieData, {
  responsive: true,
  segmentShowStroke: false
  });
  var chart5 = document.getElementById("radar-chart").getContext("2d");
  window.myRadarChart = new Chart(chart5).Radar(radarData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.05)",
  angleLineColor: "rgba(0,0,0,.2)"
  });
  var chart6 = document.getElementById("polar-area-chart").getContext("2d");
  window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  segmentShowStroke: false
  });
};
  </script> 
</body>
</html>
<script src="js/jquery-1.11.1.min.js"></script>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    jQuery(document).ready(function($){

        //open popup
        $('.cd-popup-trigger').on('click', function(event){
            event.preventDefault();
            $('.cd-popup').addClass('is-visible');
        });

        //close popup
        $('.cd-popup').on('click', function(event){
            if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
                event.preventDefault();
                $(this).removeClass('is-visible');
            }
        });
        //close popup when clicking the esc keyboard button
        $(document).keyup(function(event){
            if(event.which=='27'){
                $('.cd-popup').removeClass('is-visible');
            }
        });

    });

</script>
<?php


?>