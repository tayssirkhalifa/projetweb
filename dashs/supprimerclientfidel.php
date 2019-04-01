<?PHP
include "C:\wamp\www\snowboarding\projet_dashboard_CRUD\CRUD_Offre\core\clienC.php";

$clientf=new clienC();
//if (isset($_POST["cin"])){
		if(isset($_POST['supprimer']))
			{
				$client=new clienC();
				$c = $_POST['supprimer'];
				var_dump($c);
				
//if (isset($_POST["cin"])){
	$client->supprimerclientfidel($c);
	header('Location: afficherclientfidel2.php');
			}
		

	
//}

?>