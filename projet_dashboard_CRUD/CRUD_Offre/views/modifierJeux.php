<?PHP
include "../entities/jeux.php";
include "../core/jeuxC.php";
					
					if (isset($_POST['id']) and isset($_POST['titre']) and isset($_POST['pt_fedilite'])  and isset($_POST['cadeau']) and isset($_POST['description']) and isset($_POST['date_d']) and isset($_POST['date_f']) and isset($_POST['participants']) )
					{
                              $id=$_POST['id'];
                              $titre= $_POST['titre'];
                              $pt_fedilite= $_POST['pt_fedilite'];
                              $cadeau= $_POST['cadeau'];
                              $description= $_POST['description'];
                              $date_d= $_POST['date_d'];
                              $date_f= $_POST['date_f'];
                              $participants= $_POST['participants'];

                            $qry= new jeuxC();
                            $qry->modifierJeux($id,$titre,$pt_fedilite,$cadeau,$description,$date_d,$date_f,$participants);

                          
                          header('location:formModifierJeux.php');
                    }
?>
