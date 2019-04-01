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
    <link href="A/css/popup.css" rel="stylesheet">
	<link href="A/css/font-awesome.min.css" rel="stylesheet">
	<link href="A/css/datepicker3.css" rel="stylesheet">
	<link href="A/css/styles.css" rel="stylesheet">
	<link href="A/css/tableau.css" rel="stylesheet">

	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	
</head>
<body>
	<h1></h1>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">

<!-------------------------------------------------------------------Notification------------------------------------------->
 <!--Famma mochkla fel inlude ki tamel config jeuxC-->
<!-------------------------------------------------------------------Notification------------------------------------------->
                    <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">0</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
<!-------------------------------------------------------------------Notification------------------------------------------->
                            <!--Famma mochkla fel inlude ki tamel config jeuxC-->
<!-------------------------------------------------------------------Notification------------------------------------------->
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
				<h1 class="page-header">La liste de toutes les offres</h1>
			</div>
		</div>




<!----TRI------------------------------------------------------------------------------------------------------>

<form method="POST" action="afficherOffreRecherche.php">

	Trier:
	<select name="trier" >
	
	<option  value="1">Par Date</option>
	<option  value="2">Par Titre</option>
	</select>
	<input type="submit" name="tri" value="OK"></td>
</form>	


<!----//TRI-------------------------------------------------------------------------------------------------->

<!----------------------------------------------Recherche offre---------------------------------------------->
<div>
<form method="POST" action="afficherOffreRecherche.php">
<table>
<tr>
<td>Chercher </td>
<td><input type="text" name="titre"></td>
<td> <input type="submit" name="Chercher" value="Recherche"></td>
</tr>
</table>
</form>
	
	</div>
<br> 
<!-------------------------------------------------------------------------------------------------------->

<!----------------------------------------------Afficher offre-------------------------------------------->
<?PHP
include "../core/offreC.php";
$offre1C=new offreC();
$offre1C->suppprimerOffreAuto();
$listeOffre=$offre1C->afficherOffreBD2();
?>

<table class="table table-hover table-bordered">
<tr>
<th>Titre </th>
<th>Date debut </th>
<th>Date fin </th>
<th>Description </th>
<th>Id_Produit </th>
<th>Remise </th>

<th> </th>
</tr>

<?PHP
foreach($listeOffre as $row){
	?>
	<tr>
	<td><?PHP echo $row['titre']; ?></td>
	<td><?PHP echo $row['date_d']; ?></td>
	<td><?PHP echo $row['date_f']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['id_produit']; ?></td>
	<td><?PHP echo $row['remise']; ?>&nbsp;%</td>

        <td style="width: 110px;"><a class="btn btn-success"  href="formModifierOffre.php?titre=<?PHP echo $row['titre']; ?>" name="titre"> Modifier</a>
	

        <form method="POST" action="supprimerOffre.php" style="width: 10px;padding-left: 0px;">
        	<input type="hidden" value="<?PHP echo $row['titre']; ?>" name="titre">

	<input type="submit" name="supprimer" value="supprimer" class="btn btn-danger" style="width: 85.98438px;margin-top: 10px;margin-bottom: 10px;margin-right: 0px;height: 25.98438px;">  

            
            
            <!--div class="cd-popup" role="alert">
                <div class="cd-popup-container">
                    <p>voulez-vous vraiment supprimer ce concours?</p>
                    <ul class="cd-buttons">
                        <li><input type="submit" name="supprimer"  value="OUI" style="background-color: #30a5ff;
     border-color: #30a5ff;color: #fff; border-radius: 5px; margin:5px ; font-size: 10px; width: 86px;height: 47px;
" ></li>
                        <li><a href="afficherJeux.php" style="background-color: #30a5ff;
         border-color: #30a5ff;color: #fff; border-radius: 5px; margin:5px ; font-size: 10px; width: 86px;height: 47px;
">NON</a></li>
                    </ul>
                    <a href="#0" class="cd-popup-close img-replace">Close</a>
                </div> 
            </div>
<!-- cd-popup-container -->

	</form>

	</td>

	<!--td><a href="formModifierOffre.php">
	<input type="submit" name="Modifier" value="Modifier" style="background-color: #30a5ff;
     border-color: #30a5ff;color: #fff; border-radius: 5px;"></a></td-->

	</tr>
<?PHP
            }
            ?>
</table>


<!---------------------------------------------------------------------------------------------------------->


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
<?php } 

else{
		header('location:../../../ghaylene web/dashs/loginghaylene.php');
}

?>