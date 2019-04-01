<?PHP
include "../entities/offre.php";
include "../core/offreC.php";


    if (isset($_POST['titre']) and isset($_POST['date_d']) and isset($_POST['date_f']) and isset($_POST['Description']) and isset($_FILES['image']["name"])and isset($_POST['id_produit']) and isset($_POST['remise']) ) {
        $offre1 = new offre($_POST['titre'], $_POST['date_d'], $_POST['date_f'], $_POST['Description'], $_FILES['image']["name"], $_POST['id_produit'],$_POST['remise']);

        $offre1C = new offreC();
        $offre1C->ajouterOffre($offre1);



        /*mail*/
        $to = "mohamedmalek.douik@esprit.tn";
        $subject = "Nouvelle Offre";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $message = '<html><body>';
        $message.='<h2 style="font-family:Tahoma,Arial">Autorepar</h2><br><br>';
        $message.='<p style="font-family:Tahoma,Arial ">
            Nous vous Propose notre nouvelle offre:<br>';
        $message.='De <i>'.$_POST['date_d'].'-- a'.$_POST['date_f'].'</i><br>';
        $message.='Détails:'.$_POST['Description'];




        $message.='</body></html>';
        mail($to,$subject,$message,$headers);
        /*//mail*/

        header('location:afficherOffre.php');
    }
    
else{ echo "Erreur d'aujout dans la base de données";}

?>