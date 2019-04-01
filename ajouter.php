<?php
include "core/clientC.php";
 echo"BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB";
 if(isset($_POST['butt']))
{
 

                              echo"  AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
                              $nom= $_POST['nom'];
                              $prenom= $_POST['prenom'];
                              $mail= $_POST['mail'];
                              $password= $_POST['password'];

                     
                         
  $qry= new clientC();
     $qry->insert($nom,$prenom,$mail,$password);

  header('location:logintest.php');

                              


                          }
?>