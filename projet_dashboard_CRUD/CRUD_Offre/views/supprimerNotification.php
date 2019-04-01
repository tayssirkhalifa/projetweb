<?PHP
include "../core/jeuxC.php";
$jeuxC=new jeuxC();
if (isset($_POST["idN"])){
	$jeuxC->supprimerNotif($_POST["idN"]);
    header('Location: Offre.php');
}

?>