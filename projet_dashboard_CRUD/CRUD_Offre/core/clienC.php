<?PHP
include "config.php";



class clienC {



	public function insert($nom,$prenom,$mail,$password)
	{
		$db = config::getConnexion();
	$sql="SELECT * FROM client WHERE nom=$nom AND mail=$mail";
 $result=mysqli_query($GLOBALS['$db'],$sql);
 if(!$row=mysqli_fetch_array($result))
 {
 	$sql = $db->prepare('INSERT INTO client(nom,prenom,mailr,password) VALUES (:nom,:prenom,:mail,:password)');
	$sql->bindvalue(':nom',$nom);
	$sql->bindvalue(':prenom',$prenom);
	
	$sql->bindvalue(':mail',$mail);
	
	$sql->bindvalue(':password',$password);
	$sql->execute();

 }

 else 
 {
 	echo "registered already !";

 	
 }
	
	}
	public function affic()
	{
		$db = config::getConnexion();
		$sql="SELECT * FROM client";
		$list = $db->query($sql);
		return $list;


	}

function afficherclientT(){
		$sql="SElECT * From client ORDER BY nom ";
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
	function affic1(){
		$sql="SElECT * From client ORDER BY nom ";
		$db = config::getConnexion();
		
		$list=$db->query($sql);
		return $list;
		
        
        }	

	public function returnname($email)
	{
		$db = config::getConnexion();
		$sql="SELECT * FROM client where mail='$email'";
		$list = $db->query($sql);
		foreach ($list as $key) {
			$name=$key['nom'];
			$txt=$key['cin']." ".$name;
		}
		return $txt;


	}

	public function affichnotif()
	{
		$db = config::getConnexion();
		$sql="SELECT * FROM notif_client";
		$list = $db->query($sql);
		return $list;


	}

	function supprimerclient($nom){
		$sql="DELETE FROM client where nom = :nom";
		$db = config::getConnexion();

        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



public function insertcf($id_carte, $nom_client,$nbe_points,$type_carte)
	{
		$db = config::getConnexion();
	
	$sql = $db->prepare('INSERT INTO clientf(id_carte, nom_client,nbe_points,type_carte) VALUES (:id_carte,:nom_client,:nbe_points,:type_carte)');
	$sql->bindvalue(':id_carte',$id_carte);
	$sql->bindvalue(':nom_client',$nom_client);
	$sql->bindvalue(':nbe_points',$nbe_points);
	
	$sql->bindvalue(':type_carte',$type_carte);
	
	$sql->execute();
	

	}
function rechercher2($id_carte)
{

$sql="SELECT * from clientf where id_carte = '$id_carte'";
$db=config::getConnexion();
try
{
$liste=$db->query($sql);



return $liste;

}
catch(Exception $e)
{
	die ('erreur'.$e->getMessage());
}



}

	function Rechercher($nom)
{
	$i=0;
$sql="SELECT * from client where nom ='$nom'";
$db=config::getConnexion();
try
{
$liste=$db->query($sql);
foreach ($liste as $row)
{
	$i++;
}


return $i;

}
catch(Exception $e)
{
	die ('erreur'.$e->getMessage());
}
}

function Traitement($cin)
{
	$sql="UPDATE client set Traitement='1' where cin='$cin'";
	$db=config::getConnexion();
	
	$db->query($sql);
} 
function Traitement2($cin)
{
	$sql="UPDATE client set Traitement='0' where cin='$cin'";
	$db=config::getConnexion();
	
	$db->query($sql);
} 
	
	public function affic2()
	{
		$db = config::getConnexion();
		$sql="SELECT * FROM clientf";
		$list = $db->query($sql);
		return $list;
	}
	function supprimerclientfidel($id_carte){
		$sql="DELETE FROM clientf where id_carte = :id_carte";
		$db = config::getConnexion();

        $req=$db->prepare($sql);
		$req->bindValue(':id_carte',$id_carte);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierclientfidel($id_carte,$cin_client,$nbe_points,$type_carte){

		
		$db = config::getConnexion();
	
	$sql = $db->prepare('UPDATE clientf set id_carte = :id_carte , cin_client = :cin_client ,nbe_points = :nbe_points ,type_carte = :type_carte  where id_carte = :id_carte');
	$sql->bindvalue(':id_carte',$id_carte);
	$sql->bindvalue(':cin_client',$cin_client);
	$sql->bindvalue(':nbe_points',$nbe_points);
	
	$sql->bindvalue(':type_carte',$type_carte);
	
	$sql->execute();
	echo "aaa";
	}
	function recupererclient($id_carte){
		$sql="SELECT * from clientf where id_carte LIKE '%$id_carte%'";
		$db = config::getConnexion();

		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	 function recupererclient1($nom)
    {
        $sql = "SELECT * from client where nom like '$nom%'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
	function trierParnbrpoint(){
		$sql="SElECT * From clientf ORDER BY nbe_points ";
		$db = config::getConnexion();
		try{
		$list=$db->query($sql);
		return $list;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function trierpartype(){
		$sql="SElECT * From clientf ORDER BY type_carte ";
		$db = config::getConnexion();
		try{
		$list=$db->query($sql);
		return $list;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($clienf,$id_carte2)
    {
		$sql="UPDATE clientf SET id_carte=:id_carte, nom_client=:nom_client, nbe_points=:nbe_points, type_carte=:type_carte WHERE id_carte=:id_carte2";
	
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

       $id_carte=$clienf->getID();
        $nom_client=$clienf->getCIN();
        $nbe_points=$clienf->getNbe();
        $type_carte=$clienf->getType();

		
       // $img=$produit->getimg();
		//$datas = array( ':id'=>$id, ':nom'=>$nom,':prix'=>$prix,':description'=>$description,':quantite'=>$quantite,':categorie'=>$categorie);
		
		$req->bindValue(':id_carte',$id_carte);
		$req->bindValue(':id_carte2',$id_carte2);
		$req->bindValue(':nom_client',$nom_client);
		$req->bindValue(':nbe_points',$nbe_points);
		$req->bindValue(':type_carte',$type_carte);

		/*$req->bindValue(':cin_client',$cin_client);
		$req->bindValue(':nbe_points',$nbe_points);
		$req->bindValue(':type_carte',$type_carte);*/
	
		//$req->bindValue(':image',$img);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
}
?>