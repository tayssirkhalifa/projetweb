<?php
$to = "mohamedmalek.douik@esprit.tn";
$subject = "Joyeux anniversaire";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message = '<html><body>';
$message.='<h2 style="font-family:Tahoma,Arial">Autorepar</h2><br><br>';
$message.='<h3 style="font-size: 20px;font-family:Tahoma,Arial;padding-left: 40px;padding-top: 20px;color:#004B8D;"> Joyeux anniversaire !</h3> <br>';
$message.='<p style="font-family:Tahoma,Arial ">
On dirait que c est une journée un peu spéciale aujourd hui. Joyeux anniversaire !<br>

Et si vous profitiez de cette nouvelle année pour profiter de nos pièces ?<br>

Nous vous avons préparé un cadeau pour l occasion : 50% de réduction pour votre première Commande !<br>

Vous pouvez utiliser le code suivant jusqu au 1 juin 2018 à 23:59 :<br><br>

<strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AAAP3JZU </strong><br><br>

Pour profiter de ce cadeau, c est simple : <a >rendez-vous sur notre site </a>.<br>

Félicitations ! :-)<br>

L équipe Autorepar.<br>
</p>
';
$message.='</body></html>';



/*$headers = 'From: autorepair_webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion().'Content-type: text/html; charset=iso-8859-1';
*/

if(mail($to,$subject,$message,$headers)){
    header('Location:offre.php');
}
else{
    echo 'Unable to send email. Please try again.';
}

?>


