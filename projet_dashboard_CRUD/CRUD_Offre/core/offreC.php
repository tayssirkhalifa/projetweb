<?PHP
include "C:/xampp/htdocs/projet_dashboard_CRUD-Copie/CRUD_Offre/config.php";
class offreC {
function afficherOffre ($offre){
		echo "Titre: ".$offre->getTitre()."<br>";
		echo "Date Debut: ".$offre->getDate_d()."<br>";
		echo "Date Fin: ".$offre->getDate_f()."<br>";
		echo "Description: ".$offre->getDescription()."<br>";
		
	}

function ajouterOffre($offre){
	$sql="insert into offre (titre,date_d,date_f,description,image,id_produit,remise) values (:titre, :date_d,:date_f,:description,:image,:id_produit,:remise)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $titre=$offre->getTitre();
        $date_d=$offre->getDate_d();
        $date_f=$offre->getDate_f();
        $description=$offre->getDescription();
  		$image=$offre->getImage();
  		$id_produit=$offre->getId_produit();
  		$remise=$offre->getRemise();

		$req->bindValue(':titre',$titre);
		$req->bindValue(':date_d',$date_d);
		$req->bindValue(':date_f',$date_f);
		$req->bindValue(':description',$description);
		//$req->bindValue(':image',"C:/wamp64/www/web/".$image);
		$req->bindValue(':image',$image);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':remise',$remise);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherOffreBD($titre){

		$sql="SElECT * From offre where titre='$titre'";
		$db = config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
		
	}
	/*Afficher el 3adiaa*/
	function afficherOffreBD2(){

		$sql="SElECT * From offre ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerOffre($titre){
		$sql="DELETE FROM offre where titre= :titre";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':titre',$titre);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierOffre($offre, $titre){
	$sql = "UPDATE offre SET date_d=:date_d,date_f=:date_f,description=:description,image=:image,id_produit=:id_produit,remise=:remise where titre=:titre";
        
        $db = config::getConnexion();

            $req = $db->prepare($sql);
            
            $titre = $offre->getTitre();
            $date_d = $offre->getDate_d();
            $date_f = $offre->getDate_f();
            $description = $offre->getDescription();
            $image=$offre->getImage();
  		    $id_produit=$offre->getId_produit();
  		    $remise=$offre->getRemise();

            $req->bindValue(':titre',$titre);
            $req->bindValue(':date_d',$date_d);
            $req->bindValue(':date_f',$date_f);
            $req->bindValue(':description',$description);
            $req->bindValue(':image',$image);
            $req->bindValue(':id_produit',$id_produit);
		    $req->bindValue(':remise',$remise);

            $req->execute();

	}
		
	function recupererOffre($titre){
		//$sql="SELECT * from offre where titre='$titre'";

		$sql="SELECT * from offre where titre LIKE '$titre%' ";
		$db = config::getConnexion();

		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function trierParTitre(){
		$sql="SElECT * From offre ORDER BY titre ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function trierParDate(){
		$sql="SElECT * From offre ORDER BY date_d ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}		
function suppprimerOffreAuto(){
    $sql="DELETE FROM offre where date_f< CURRENT_DATE()";

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
?>