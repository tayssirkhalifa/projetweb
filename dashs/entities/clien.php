<?PHP
/**
* 
*/
class clien 
{
	private $cin;
	private $nom;
	private $prenom;
	private $adresse;
	private $mail;
	private $numero;
	private $date_anniverser;
	private $password;
	function __construct($cin,$nom,$prenom,$adresse,$mail,$numero,$date_anniverser,$password)
	{
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
		$this->mail=$mail;
		$this->numero=$numero;
		$this->date_anniverser=$date_anniverser;

		$this->password=$password;

		
	}
	
}

?>