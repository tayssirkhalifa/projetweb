<?PHP
class commande{
	private $id_commande;
	private $montant;
		private $id_client;
	private $date;

	
	function __construct($id_commande,$montant){
		$this->id_commande=$id_commande;
		$this->montant=$montant;
	}
	
	function getId_commande(){
		return $this->id_commande;
	}
	function getMontant(){
		return $this->montant;
	}
	function getId_client(){
		return $this->id_client;
	}
	function getDate(){
		return $this->date;
	}

	function setMontant($montant){
		$this->montant;
	}
	
	function setId_commande($id_commande){
		$this->id_commande=$id_commande;
	}
	function setDate($date){
		$this->date;
	}
	
	function setId_client($id_client){
		$this->id_client=$id_client;
	}
}

?>