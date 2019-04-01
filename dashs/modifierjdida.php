<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session

?>


<?php
include "C:/wamp/www/snowboarding/projet_dashboard_CRUD/CRUD_Offre/core/clienC.php";
include "C:/wamp/www/snowboarding/projet_dashboard_CRUD/CRUD_Offre/entities/clienf.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Panels</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
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
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
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
			
			<li class=""><a href="afficherclient.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client</a></li>
			<li class="active"><a href="afficherclient.php"><em class="fa fa-clone">&nbsp;</em> Gestion Client fidele </a></li>
			<li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/jeux.php"><em class="fa fa-clone">&nbsp;</em>Concours</a></li>
			<li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/offre.php"><em class="fa fa-clone">&nbsp;</em>Offre</a></li>
			<li class="#"><a href="../../commande/views/afficherCommande.php"><em class="fa fa-clone">&nbsp;</em> Commande</a></li>
					<li class=""><a href="../../livraison/CRUD/views/afficherLivraison.php"><em class="fa fa-clone">&nbsp;</em> Gestion des Livraisons</a></li>
			<li class=""><a href="../../livraison/CRUD/views/afficherL.php"><em class="fa fa-clone">&nbsp;</em> Gestion des Livreurs</a></li>
			      <li class=""><a href="../../sav/back/index.php"><em class="fa fa-toggle-off">&nbsp;</em> Reclamation</a></li>
      <li class=""><a href="../../sav/back/avisBack.php"><em class="fa fa-toggle-off">&nbsp;</em> Avis</a></li>
      <li class=""><a href="http://localhost/sav/livechat/php/app.php?admin"><em class="fa fa-toggle-off">&nbsp;</em> forum</a></li>

			
			<li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Panels</li>
			</ol>
		</div><!--/.row-->
		<div>
<form method="POST" action="">
<table>

</table>
</form>
</div>
<br> 

<!-------------------------------------------------------------------------------------------------------->

<!----------------------------------------------modifier -------------------------------------------->
                       
                <div class="col-md-6">
				<div class="panel panel-default">
			    <div class="panel-heading">
					<h5>Modifier Client Fidele</h5>	
                       
                       <br><br>
                       <?PHP



if (isset($_GET['id_carte']))
  {
   $clienC1=new clienC();
  $liste=$clienC1->rechercher2($_GET['id_carte']);
  //echo "3asba";
  foreach($liste as $row){
    $id_carte=$row['id_carte'];
    $nom_client=$row['nom_client'];
    $nbe_points=$row['nbe_points'];
    $type_carte=$row['type_carte'];
  

?>
                       <table>
                       <form  method="post" action="#">   
                         
                          <td><input style="height: 35px" name="id_carte" type="hidden"  value="<?PHP echo $id_carte?>"></td><tr>
                         
                           <td>nom_client:<input style="height: 35px" name="nom_client"  type="text" value="<?PHP echo $nom_client?>" ></td><tr>
                         
                         <td>nbe_points:<input style="height: 35px"  name="nbe_points"  type="text" value="<?PHP echo $nbe_points?>"></td><tr>
                        
                           <tr><td> type_carte
                           	<select name="type_carte" value="<?PHP echo $type_carte?>">
                           	<option value="GOLD">GOLD</option>
                           	<option value="SILVER">SILVER</option>
                           	<option value="BRONZE">BRONZE</option>
                           </select></td>

                               </table>
                         

                            <input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id_carte'];?>">
                         
                          <div class="sign-up">

                           <center><input type="submit" name="modifier" value="modifier"/></center> 
                           <tr>



                          </div>

                            </form>
                            <?PHP
  }
}
if (isset($_POST['modifier'])){
	echo "aaa";
	echo $_POST['id_carte'];
  $clienC=new clienf($_POST['id_carte'],$_POST['nom_client'],$_POST['nbe_points'],$_POST['type_carte']);
  $clienC1->modifierproduit($clienC,$_POST['cin_ini']);
  echo $_POST['cin_ini'];
  //header('Location: afficherEmploye.php');
}
?>

                          </div>

                        </div>


		
			
			
		</div>	
		<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
<?php


?>