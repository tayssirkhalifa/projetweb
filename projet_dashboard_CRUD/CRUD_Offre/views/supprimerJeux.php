<?PHP
include "../core/jeuxC.php";
$jeuxC=new jeuxC();
if (isset($_POST["id"])){
	$jeuxC->supprimerJeux($_POST["id"]);
	header('Location: afficherJeux.php');
}

?>