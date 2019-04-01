<?PHP
include "config.php";
include "entities/client.php";
class clientC {



	public function insert($nom,$prenom,$mail,$password)
	{
		$db = config::getConnexion();
	
	$sql = $db->prepare('INSERT INTO client(nom,prenom,mail,password) VALUES (:nom,:prenom,:mail,:password)');
	$sql->bindvalue(':nom',$nom);
	$sql->bindvalue(':prenom',$prenom);
	
	$sql->bindvalue(':mail',$mail);
	$sql->bindvalue(':password',$password);
	$sql->execute();
	echo "aa";

 }

 

	public function affic()
	{
		$db = config::getConnexion();
		$sql="SELECT * FROM client";
		$list = $db->query($sql);
		return $list;


	}
	
	public function checkmail($Email)
	{
		$db = config::getConnexion();
		$sql="SELECT * FROM client Where mail='$Email'";
		$list = $db->query($sql);
		$c=0;
		foreach ($list as $value) {
			$c++;
		}
		return $c;
	}
	public function insertnotif($nom,$type)
	{
		$db = config::getConnexion();
		$sql="INSERT INTO notif_client(nom_c,typecarte) VALUES (:nom,:type)";
		$req = $db->prepare($sql);
	$req->bindvalue(':nom',$nom);
	$req->bindvalue(':type',$type);
	$req->execute();


	}
	public function Logedin($login,$pwd)
	{
		$db = config::getConnexion();
		$req="select * from client where mail='$login' && password='$pwd' && Traitement = 0";
		$rep=$db->query($req);
		return $rep->fetchAll();
	}
	public function getinfo($cin)
	{
		$db = config::getConnexion();
		$sql="SELECT * FROM client where cin='$cin'";
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

	function modifierclient($nom,$prenom,$mail,$password){

		
		$db = config::getConnexion();
	
	$sql = $db->prepare('UPDATE client set nom = :nom , prenom = :prenom ,mail = :mail , password = :password  where nom = :nom');
	$sql->bindvalue(':nom',$nom);
	$sql->bindvalue(':prenom',$prenom);
	
	$sql->bindvalue(':mail',$mail);

	$sql->bindvalue(':password',$password);
	
	$sql->execute();
	
	}

public function affic5()
	{
		$db = config::getConnexion();
		$sql="SELECT * FROM client where cin = :cin ";
		$list = $db->query($sql);
		return $list;


	}
	    function modifier2($client, $cin)
    {
        $sql = "UPDATE client SET cin=:cin,nom=:nom,prenom=:prenom,mail=:mail,adresse=:adresse,numero=:numero,date_anniverser=:date_anniverser,password=:password where cin='$cin'";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try {
            $req = $db->prepare($sql);
            
            $req->bindValue(':cin', $cin);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prenom', $prenom);
            $req->bindValue(':mail', $mail);
            $req->bindValue(':adresse', $adresse);
            $req->bindValue(':numero', $numero);
            $req->bindValue(':date_anniverser', $date_anniverser);
            $req->bindValue(':password', $password);
          


            $req->execute();

            // header('Location: index.php');
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
            echo " Les datas : ";

        }
    }
    function recupererclient($cin)
    {
        $sql = "SELECT * from client where cin='$cin'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
   
    function Recuperermdp($mail)
    {
        $sql = "SELECT password from client where mail='$mail'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


	}

	
	
?>