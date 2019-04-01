<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p']) && $_SESSION['role']=="admin") 
{ 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Auto repare - Dashboard</title>
	<link href="A/css/bootstrap.min.css" rel="stylesheet">
	<link href="A/css/font-awesome.min.css" rel="stylesheet">
	<link href="A/css/datepicker3.css" rel="stylesheet">
	<link href="A/css/styles.css" rel="stylesheet">
	
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
 <!-------------------------------------Notification-------------------------------------------------------------->
                    <?PHP
                    include "../core/jeuxC.php";
                    $jeux1C=new jeuxC();
                    $lis=$jeux1C->afficherNotifBD2();
                    $count=0;

                    foreach($lis as $r){
                        $count++;
                    }

                    $listeNotifcation=$jeux1C->afficherNotifBD2();
                    ?>
 <!-------------------------------------Notification-------------------------------------------------------------->
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger"><?php echo $count;?></span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
 <!-------------------------------------Notification-------------------------------------------------------------->
                            <h5 style=" margin-left: 30px;margin-bottom: 0px;">Notifications:</h5>
                            <table>
                                <?PHP
                                foreach($listeNotifcation as $row){
                                    $count++;
                                    ?>
                                    <tr>
                                        <td ><form method="POST" action="supprimerNotification.php">

                                                <input  type="image" onClick="submit" src="X.png" style="margin-left: 330px;">
                                                <input type="hidden" value="<?PHP echo $row['idN']; ?>" name="idN">
                                            </form>

                                    <tr>
                                        <td>Le client :<i><?PHP echo $row['cadeauN']; ?></i> participe a: <strong><i><?PHP echo $row['titreN']; ?></i> </strong>
                                            <hr>
                                        </td>

                                    </tr>

                                    <?PHP
                                }
                                ?>
                            </table>
 <!-------------------------------------Notification-------------------------------------------------------------->

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
			<li class="active"><a href="Jeux.php"><em class="fa fa-toggle-off">&nbsp;</em>Cocours</a></li>
			<li><a href="Offre.php"><em class="fa fa-clone">&nbsp;</em> Offre </a></li>
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
<!--------------------------------------------Afficher jeux-------------------------------------------------->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Jeux & Concours</h1>
					<div class="boutonAfficher" style="left: 500px;"> 
							<button type="button" class="btn btn-lg btn-primary">
 								<a href="afficherJeux.php">
								   <span>Afficher Jeux </span></a>
							</button>										
					</div>
			</div>
		</div><!--/.row-->
<!--------------------------------------------//Afficher jeux------------------------------------------------>
        <!--Corps-->
		<div class="corps">

<!--------------------------------------------modifier jeux-------------------------------------------------->
		<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">	
						<div class="formulaire">

                            <?PHP
 								include "../entities/jeux.php";

                            if (isset($_GET['id'])) {
                            $jeux1C=new jeuxC();
                            $result=$jeux1C->recupererJeux($_GET['id']);
                            foreach($result as $row) {

                            $id = $row['id'];
                            $titre = $row['titre'];
                            $pt_fedilite = $row['pt_fedilite'];
                            $cadeau=$row['cadeau'];
                            $date_d = $row['date_d'];
                            $date_f = $row['date_f'];
                            $participants=$row['participants'];
                             $description = $row['description'];
                            ?>

							<form method="POST"  name="comment_form">
								
								<table >
									<h3>Modifier Concours</h3> 
									<tr>
										<td> Id Concours: </td>
										<td><input type="text" name="id" value="<?PHP echo $id ?>" style="height: 26px;"></td>
										</tr>    
									    <tr>
										<td>Titre :</td>
										<td><input type="text" name="titre"   value="<?PHP echo $titre ?>"  style="height: 26px;"></td>
										</tr>
										<tr>
										<td>pts fedilité :</td>
										<td><input type="number" name="pt_fedilite"  value="<?PHP echo $pt_fedilite ?>"  style="height: 26px;"></td>
										</tr>
										<tr>
										<td>Cadeau :</td>
										<td><input type="text" name="cadeau"  value="<?PHP echo $cadeau ?>" style="height: 26px;"></td>
										</tr>
										<tr>
										<td>Date debut :</td>
										<td><input type="date" name="date_d" value="<?PHP echo $date_d ?>" style="height: 26px;"></td>
										</tr>
										<tr>
										<td>Date fin :</td>
										<td><input type="date" name="date_f" value="<?PHP echo $date_f ?>" style="height: 26px;"></td>
										</tr>
										<tr>
										<td>participants :</td>
										<td><input type="text" name="participants"  value="<?PHP echo $participants ?>"  style="height: 26px;"></td>
										</tr>
										<tr>
										<td>Description :</td>
										<td><textarea name="description" rows="6" cols="41" data-validation="length" data-validation-length="min1" ata-validation-length="max1000"></textarea></td> 
										</tr>
										<tr>
										<td></td>
										<td><input type="submit" name="Modifier" value="Modifier"></td>
										</tr>
										</table>
										
										</form>
                                <?PHP
                            }
                        }
                      
                           if (isset($_POST['Modifier'])){
                            $jeux1C=new jeuxC();
                            $jeux=new jeux($_POST['id'],$_POST['titre'],$_POST['pt_fedilite'],$_POST['cadeau'],$_POST['description'],$_POST['date_d'],$_POST['date_f'],$_POST['participants']);
                            $jeux1C->modifierJeux($jeux,$_POST['id']);

                         }
                            ?>
										<br> <br>  
										
				        </div>
				    </div>    
				</div>    
			</div>
        <!-- Condition de saisie Date-->
<script>
    with(document.comment_form) {
        onsubmit = function() {
// les dates étant saisies en français, on les transforme
// Ici sont acceptés comme séparateurs le tiret, le slash et l'espace
            tabdeb = (date_d.value.split(/[- //]/));
            tabfin = (date_f.value.split(/[- //]/));
            Odeb = new Date(tabdeb[2],tabdeb[1],tabdeb[0]);
            Ofin = new Date(tabfin[2],tabfin[1],tabfin[0]);
            if(Odeb > Ofin) {
                alert ('la date fin doit être supérieur ou égale a la date début');
                debut.focus(); debut.style.backgroundColor='#fee';
                return false
            };
        };
    }
</script>
<!--------------------------------------------//modifier Offre-------------------------------------------------->
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">	
						Calendar
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
			</div>			



        </div>

        <!--//Corps-->
        <footer>
		<div class="row">

			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Brainium</a></p>
			</div>
		</div>
		</footer><!--/.row-->
	</div>	<!--/.main-->
<script src="A/js/jquery-1.11.1.min.js"></script>
	<script src="A/js/bootstrap.min.js"></script>
	<script src="A/js/chart.min.js"></script>
	<script src="A/js/chart-data.js"></script>
	<script src="A/js/easypiechart.js"></script>
	<script src="A/js/easypiechart-data.js"></script>
	<script src="A/js/bootstrap-datepicker.js"></script>
	<script src="A/js/custom.js"></script>
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
	</script>
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
}
else{
	header('location:../../../ghaylene web/dashs/loginghaylene.php');
}

?>