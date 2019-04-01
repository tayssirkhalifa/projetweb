<?php
include "core/clientC.php";

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['mail']) && isset($_SESSION['password'])) 
{ 

 

}

else { 
      echo 'Veuillez vous connecter </br>';  
    echo '<a href="./login1.php">Cliquer pour se connecter</a>';
    header("location: register.php");

}  

$e = new clientC();
$e->insertnotif($_SESSION['mail'],$_POST['gold']);
header('location: indexmd1.php');
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>