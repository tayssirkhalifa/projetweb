<?php
include "C:\wamp\www\snowboarding\projet_dashboard_CRUD\CRUD_Offre\core\clienC.php";$type_carte = ceil($_POST['type_carte']);
if($type_carte == 1) {
    $_POST['type_carte']="Gold";
} else if($type_carte == 2) {
    $_POST['type_carte']="Silver";
} else if($type_carte == 3) {
   $_POST['type_carte']="BRONZE";
}
$to=$_POST['mail_client'];
var_dump($to);
 
                          if(isset($_POST['id_carte']) and isset($_POST['nom_client']) and isset($_POST['nbe_points']) and isset($_POST['type_carte'])) 
                          { 
                            $id_carte= $_POST['id_carte'];
                              $nom_client=$_POST['nom_client'];
                             
                              $nbe_points= $_POST['nbe_points'];
                              $type_carte= $_POST['type_carte'];

                            


                            $qry= new clienC();
                            $qry->insertcf($id_carte, $nom_client,$nbe_points,$type_carte);

                          

                         
                           }


header('location:afficherclientfidel2.php');


 ?>