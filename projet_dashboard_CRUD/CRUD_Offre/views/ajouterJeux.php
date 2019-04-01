<?PHP
include "../entities/jeux.php";
include "../core/jeuxC.php";

if (isset($_POST['id']) and isset($_POST['titre']) and isset($_POST['pt_fedilite'])  and isset($_POST['cadeau']) and isset($_POST['description']) and isset($_POST['date_d']) and isset($_POST['date_f']) and isset($_POST['participants']) and isset($_FILES['image']["name"]) ){

$jeux1=new jeux($_POST['id'],$_POST['titre'],$_POST['pt_fedilite'],$_POST['cadeau'],$_POST['description'],$_POST['date_d'],$_POST['date_f'],$_POST['participants'],$_FILES['image']["name"] );
	
$jeux1C=new jeuxC();


$jeux1C->ajouterJeux($jeux1);


    /*mail*/
    $to = "mohamedmalek.douik@esprit.tn";
    $subject = "Nouveau Concours";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message = '<html><body>';
    $message.='<h2 style="font-family:Tahoma,Arial">Autorepar</h2><br><br>';
    $message.='<p style="font-family:Tahoma,Arial ">
            Nous vous Propose notre nouveau Concours:<br>';
    $message.='De <i>'.$_POST['date_d'].'-- a'.$_POST['date_f'].'</i><br>';
    $message.='Détails:'.$_POST['description'];




    $message.='</body></html>';
    mail($to,$subject,$message,$headers);
    /*//mail*/

    header('location:afficherOffre.php');
header('Location:afficherJeux.php');

}
else{
	echo "Il n y a pas d'ajout dans la base de données";
}

?>



