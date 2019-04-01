<?PHP
/**
* 
*/
class clienf 
{
	private $id_carte;
	private $nom_client;
	private $nbe_points;
	private $type_carte;

	function __construct($id_carte,$nom_client,$nbe_points,$type_carte)
	{
		$this->id_carte=$id_carte;
		$this->nom_client=$nom_client;
		$this->nbe_points=$nbe_points;
		$this->type_carte=$type_carte;	
	}
	
	function getID() {return $this->id_carte;}

	function getCIN() {return $this->nom_client;}

	function getNbe() {return $this->nbe_points;}

	function getType() {return $this->type_carte;}
	
	function setID($id_carte){
		$this->id_carte=$id_carte;
	}
	function setCIN($nom_client){
		$this->nom_client=$nom_client;
	}
	function setNbe($nbe_points){
		$this->nbe_points=$nbe_points;
	}
	function setType($type_carte){
		$this->type_carte=$type_carte;
	}
	
	
}

?>