<?php

include "../../projet_dashboard_CRUD/CRUD_Offre/core/clientC.php";
$client1C=new clientC();
$a=$client1C->Recuperermdp('123@123.12');


$to ='tayssir.khalifa@esprit.tn';
$subject = "Mot de passe oublié";
$txt='Votre mot de passe est: ';
$txt.=$a;
$headers = 'From: autorepair_webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() ;

mail($to,$subject,$txt,$headers);
echo"aaaaaaaaaa";

?>





