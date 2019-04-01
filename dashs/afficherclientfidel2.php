
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session

?>
<?php

include "C:\wamp\www\snowboarding\projet_dashboard_CRUD\CRUD_Offre\core\clienC.php";
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
	
	<link href="css/tableau.css" rel="stylesheet">
	<link href="css/ghaylene.css" rel="stylesheet">
	
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
					<?php
					 $e = new clienC();
					$list = $e->affichnotif();
					$c=0;
					foreach ($list as $key) {
						$c++;
					}
					 ?>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info"><?php echo $c; ?></span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<?php
					
					$list = $e->affichnotif();

					
					foreach ($list as $key) {
						$name = $e->returnname($key['nom_c']);
?>						
					
								<div><em class="fa fa-envelope"></em> <?php echo $name?><br> a demandé une carte <?php echo $key['typecarte'] ?>
									<span class="pull-right text-muted small">3 mins ago</span></div>
									<?php 
									}
					 ?>
							</a></li>
							<li class="divider"></li>
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
			<li class="active"><a href="afficherclientfidel2.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client fidele</a></li>
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
				
				<li> <a href="rechercheclientfidel.php"> Recherche</a></li>
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

<!----------------------------------------------Ajouter -------------------------------------------->
 <h2>ajouter client fidel</h2>
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
<a href="stat.php" class="btn btn-success btn-lg" style=" width: 184px;" />statistique</a>
<form action="ajouterclientfd.php" method="post" style="
    width: 1250px;
">   
                         <table> 
                          <tr><td>id_carte</td><td> <input placeholder="id_carte" name="id_carte" type="text" required="" data-validation="number"></td> <br></tr>
                          
                          <tr><td>nom_client</td><td>
                          	<SELECT name='nom_client'>
                          		<?php 
                          		$db = config::getConnexion();
								$sql="SELECT nom FROM client";
								$list2 = $db->query($sql);
								$client2 = new clienC();
								$list = $client2->affic2();

								foreach ($list2 as $key) {
									# code...
									$x = 0;
									foreach ($list as $key2) {
										if($key['nom'] == $key2['nom_client'])
											$x++;

									}
									if($x==0){
									?>
										<option value="<?php echo $key['nom']; ?>"><?php echo $key['nom']; ?></option>
									<?php
								
								}}
                          		 ?>
                          	</SELECT>
                          	<tr><td>mail_client</td><td>
                          	<SELECT name='mail_client'>
                          		<?php 
                          		$db = config::getConnexion();
								$sql="SELECT mail FROM client";
								$list2 = $db->query($sql);
								$client2 = new clienC();
								$list = $client2->affic2();

								foreach ($list2 as $key) {
									# code...
									$x = 0;
									foreach ($list as $key2) {
										

									}
									if($x==0){
									?>
										<option value="<?php echo $key['mail']; ?>"><?php echo $key['mail']; ?></option>
									<?php
								
								}}
                          		 ?>
                          	</SELECT>
                         

                          <tr><td> nbe_points</td><td><input placeholder="nbe_points" name="nbe_points"  type="text" data-validation="number"></td><br></tr>
	                     
                           <tr><td> type_carte</td><td><select name="type_carte">
                           	<option value="1">GOLD</option>
                           	<option value="2">SILVER</option>
                           	<option value="3">BRONZE</option>
                           </select></td><br></tr>

                          

                          </div>
                          </table>
<input type="submit" name="butt" value="ajouter" class="btn btn-success btn-lg" style=" width: 184px;" />
                        </form>
                        
                        

<!-------------------------------------------------------------------------------------------------------->

<!----------------------------------------------chercher -------------------------------------------->

<?php 
								$client = new clienC();
								$list = $client->affic2(); ?>

<!-------------------------------------------------------------------------------------------------------->

<!----------------------------------------------Afficher -------------------------------------------->
<h3>Afficher Client Fidele</h3>
<center>
<div class="#" style="
    height: 1000px;
    width: 1000px;
">

<table class="table table-hover table-bordered">
<tr>
<th>id_carte</th>
<th>nom_client</th>
<th>nbe_points</th>
<th>type_carte</th>
<th style="
    width: 118px;
"> </th>
	

</tr>

<?PHP
foreach($list as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_carte']; ?></td>
	<td><?PHP echo $row['nom_client']; ?></td>
	<td><?PHP echo $row['nbe_points']; ?></td>
	<td><?PHP echo $row['type_carte']; ?></td>
	
	
	
	<td ><form method="POST" action="supprimerclientfidel.php" style="
    padding-bottom: 0px;
    padding-left: 0px;
    padding-top: 0px;
    padding-right: 0px;
">
		<button type="submit" class="btn btn-danger btn-sm" value="<?PHP echo $row['id_carte'];?>" name="supprimer" >Supprimer</button>
	</form>

	<input type="hidden" value="<?PHP ; ?>" name="titre">
	
<td><a href="modifierjdida.php?id_carte=<?PHP echo $row['id_carte']; ?>">
	Modifier</a></td>

	<input type="hidden" value="<?PHP  ?>" name="titre">
	
	</td>
		</tr>

		
	
	<?PHP
}
?>
</table>

</div>	
</center>	
			
			
		</div>	
		<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script type="text/javascript" src="signup.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'fr'
  });
</script>
	
</body>
</html>
<?php


?>