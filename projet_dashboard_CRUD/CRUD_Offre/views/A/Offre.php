<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 19/04/2018
 * Time: 23:40
 */
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

					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">

									<!--Notification-->


                                    <!--Notification-->

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
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Marketing <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Offre
					</a></li>
					<li><a class="" href="Jeux.html">
						<span class="fa fa-arrow-right">&nbsp;</span> Jeux & Concours
</a></li>

				</ul>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
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

<!--------------------------------------------Afficher Offre-------------------------------------------------->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Offre</h1>
					<div class="boutonAfficher">
							<button type="button" class="btn btn-lg btn-primary">
 								<a href="afficherOffre.php">
								   <span>Afficher Offre </span></a>
							</button>
					</div>
			</div>
		</div><!--/.row-->
<!--------------------------------------------//Afficher Offre------------------------------------------------>
        <!--Corps-->
		<div class="corps">

<!--------------------------------------------Ajouter Offre-------------------------------------------------->
		<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="formulaire">

							<form method="POST" action="ajouterOffre.php" enctype="multipart/form-data" id="comment_form">
								<table >
									<h3>Ajouter Offre</h3>
									<tr>
										<td>Titre :</td>
										<td><input type="text" name="titre" id="titre" style="height: 26px;" data-validation="length alphanumeric" data-validation-length="min3"></td>
										</tr>
										<tr>
										<td>Date debut :</td>
										<td><input type="date" name="date_d" id="date_d" style="height: 26px; " value="2018-04-05"></td>
										</tr>
										<tr>
										<td>Date fin :</td>
										<td><input type="date" name="date_f" style="height: 26px;"></td>
										</tr>
										<tr>
										<td>Image offre :</td>
										<td><input type="file" name="image" id="image" style="height: 26px;"></td>
										</tr>
										<tr>
										<td>Description :</td>
										<td><textarea name="Description" rows="6" cols="41" placeholder="" data-validation="length alphanumeric" data-validation-length="max1000"></textarea></td>
										</tr>
										<tr>
										<td></td>
										<td><input type="submit" name="ajouter" value="ajouter" class="btn btn-info"></td>
										</tr>
										</table>
										</form>
										<br> <br>

				        </div>
				    </div>
				</div>
			</div>

<!--------------------------------------------//Ajouter Offre-------------------------------------------------->
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
