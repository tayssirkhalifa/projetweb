<?PHP
/**
* 
*/
class clienf 
{
	private $id_carte;
	private $cin_client;
	private $nbe_points;
	private $type_carte;

	function __construct($id_carte,$cin_client,$nbe_points,$type_carte)
	{
		$this->id_carte=$id_carte;
		$this->cin_client=$cin_client;
		$this->nbe_points=$nbe_points;
		$this->type_carte=$type_carte;	
	}
	
	function getID() {return $this->$id_carte;}

	function getCIN() {return $this->$cin_client;}

	function getNbe() {return $this->$nbe_points;}

	function getType() {return $this->$type_carte;}
	
	function setID($id_carte){
		$this->id_carte=$id_carte;
	}
	function setCIN($cin_client){
		$this->cin_client=$cin_client;
	}
	function setNbe($nbe_points){
		$this->nbe_points=$nbe_points;
	}
	function setType($type_carte){
		$this->type_carte=$type_carte;
	}
	
	
}

?>