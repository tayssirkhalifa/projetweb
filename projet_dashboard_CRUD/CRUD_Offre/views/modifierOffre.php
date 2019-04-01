<?PHP
include "../entities/offre.php";
include "../core/offreC.php";

					
					if(isset($_POST['titre'])and isset($_POST['date_d'])and isset($_POST['date_f'])and isset($_POST['Description'])and isset($_FILES['image']["name"])  )
					{
                              $titre= $_POST['titre'];
                              $date_d= $_POST['date_d'];
                              $date_f= $_POST['date_f'];
                              $description= $_POST['Description'];
                              $image= $_FILES['image']["name"];

                            $qry= new offreC();
                            $qry->modifierOffre($titre,$date_d,$date_f,$description,$image);


                        header('location:afficherOffre.php');
                    }
?>
