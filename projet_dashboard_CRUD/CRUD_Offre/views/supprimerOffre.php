<?PHP
include "../core/offreC.php";
$offreC=new offreC();
if (isset($_POST["titre"])){
	
	$offreC->supprimerOffre($_POST["titre"]);
	header('Location: afficherOffre.php');
}

?>