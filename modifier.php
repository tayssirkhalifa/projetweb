<?php
include "core/clientC.php";
 
                          if(isset($_POST['butt']))
                          {

                              $nom= $_POST['nom'];
                              $prenom= $_POST['prenom'];
                              $mail= $_POST['mail'];
                              $password= $_POST['password'];
                           
                             echo $password;

                            $qry= new clientC();
                            $qry->modifierclient($nom,$prenom,$mail,$password);

                          }
                          header('location: indexmd1.php');
?>