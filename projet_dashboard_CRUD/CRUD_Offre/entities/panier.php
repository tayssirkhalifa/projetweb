<?PHP
class panier{
	private $id_panier;
	private $id_article;
	private $qualite;
	private $prix;
	private $photo;
	function __construct($id_article,$qualite,$prix,$id_panier,$photo){
		$this->id_article=$id_article;
		$this->qualite=$qualite;
		$this->prix=$prix;
		$this->id_panier=$id_panier;
		$this->photo=$photo;
	}
	
	function getId_article(){
		return $this->id_article;
	}
	function getQualite(){
		return $this->qualite;
	}
	function getPrix(){
		return $this->prix;
	}
	function getPhoto(){
		return $this->photo;
	}
	function getId_panier(){
		return $this->id_panier;
	}

	function setQualite($qualite){
		$this->qualite=$qualite;
	}
	function setPrix($prix){
		$this->prix;
	}
	function setPhoto($photo){
		$this->photo=$photo;
	}
	function setId_panier($id_panier){
		$this->id_panier=$id_panier;
	}
	
}

?>