<?PHP
include "../config.php";

class panierC {
function afficherPaniers ($panier){
		echo "id_article: ".$panier->getId_article()."<br>";
		echo "quantite: ".$panier->getQuantite()."<br>";
		echo "prix: ".$panier->getPrix()."<br>";
		echo "nom: ".$panier->getNom()."<br>";
		echo "image: ".$panier->getImage()."<br>";

	}
	
	function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['id_article']); $i++)
   {
      $total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['prix'][$i];
   }
   return $total;
}

	function ajouterPanier($panier){
		$sql="INSERT INTO `panier` (`id_article`,`quantite`,`prix`,`nom`,`image`) values (:id_article, :quantite,:prix,:nom,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_article=$panier->getId_article();
        $quantite=$panier->getQuantite();
        $prix=$panier->getPrix();
        $nom=$panier->getNom();
        $image=$panier->getImage();

		$req->bindValue(":id_article",$id_article);
		$req->bindValue(":quantite",$quantite);
		$req->bindValue(":prix",$prix);
		$req->bindValue(":nom",$nom);
		$req->bindValue(":image",$image);
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPanier(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From panier ORDER BY prix ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPanier($id_article){
		$sql="DELETE FROM panier where id_article= :id_article";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_article',$id_article);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPanier($panier,$id_article){
		$sql="UPDATE panier SET id_article=:id_articlee, quantite=:quantite,prix=:prix,nom=:nom,image=:image WHERE id_article=:id_article";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_articlee=$panier->getId_article();
        $quantite=$panier->getQuantite();
        $prix=$panier->getPrix();
        $nom=$panier->getNom();
        $image=$panier->getImage();

		$datas = array(':id_articlee'=>$id_articlee,':id_article'=>$id_article, ':quantite'=>$quantite,':prix'=>$prix,':nom'=>$nom,':image'=>$image);
		$req->bindValue(':id_articlee',$id_articlee);
		$req->bindValue(':id_article',$id_article);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':prix',$prix);		
		$req->bindValue(':nom',$nom);		
		$req->bindValue(':image',$image);		

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}


	function recupererPanier($id_article){
		$sql="SELECT * from panier where id_article=$id_article";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}


class commandeC {
function afficherCommandes ($commande){
		echo "id_commande: ".$commande->getId_commande()."<br>";
		echo "montant: ".$commande->getMontant()."<br>";
		echo "id_client: ".$commande->getId_client()."<br>";
		echo "date: ".$commande->getDate()."<br>";
	}
	//function calculerSalaire($employe){
	//	echo $employe->getNbHeures() * $employe->getTarifHoraire();
	//}
function ajouterNotification($commande)
{
	$db = config::getConnexion();
		$sql="Insert into notification (id_client,id_commande,montant,date)values(:id_client,:id_commande,:montant,NOW())";
		
		try{
        $req=$db->prepare($sql);
		
        $id_commande=$commande->getId_commande();
        $montant=$commande->getMontant();
        $id_client=$commande->getId_client();
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':montant',$montant);
		$req->bindValue(':id_client',$id_client);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
}
function afficherNotification()
{
	$sql="SElECT * From notification ";
		//$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}
function supprimerNotification($id_client)
{
	$sql="DELETE FROM notification where id_client= :id_client";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_client',$id_client);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function afficherCommandeT(){
		$sql="SElECT * From commande ORDER BY date ";
		//$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function recupererCommande1($id_commande,$id_client){
		$sql="SELECT * from commande where id_commande like '$id_commande%' or id_client like '$id_client%' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function recupererCommande($id_commande){
		$sql="SELECT * from commande where id_commande=$id_commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherCommande(){
		$sql="SElECT * From commande ORDER BY id_commande ";
		//$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ajouterCommande($commande){
		$db = config::getConnexion();
		$sql="Insert into commande (id_commande,montant,id_client,date)values(:id_commande,:montant,:id_client,NOW())";
		
		try{
        $req=$db->prepare($sql);
		
        $id_commande=$commande->getId_commande();
        $montant=$commande->getMontant();
        $id_client=$commande->getId_client();
		//Bind values is used to prepare the statement
		//Always do this when there is an interaction from php to mySQL, specially the POST and PUT methods, to tell how they are linked from php to mysql
		//Binds a value to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement.
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':montant',$montant);
		$req->bindValue(':id_client',$id_client);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function supprimerCommande($id_commande){
		$sql="DELETE FROM commande where id_commande= :id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCommande($commande,$id_commande){
		$sql="UPDATE commande SET id_commande=:id_commandee WHERE id_commande=:id_commande";
		
		$db = config::getConnexion();
try{	
        $req=$db->prepare($sql);
		$id_commandee=$commande->getId_commande();
        $montant=$commande->getMontant();
		$datas = array(':id_commandee'=>$id_commandee,':id_commande'=>$id_commande);
		$req->bindValue(':id_commandee',$id_commandee);
		$req->bindValue(':id_commande',$id_commande);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

}
?>