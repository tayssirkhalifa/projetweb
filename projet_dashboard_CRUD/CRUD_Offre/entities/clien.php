<?PHP
/**
* 
*/
class clien 
{
	private $nom;
	private $prenom;
	private $mail;
	private $password;
	function __construct($nom,$prenom,$adresse,$mail,$password)
	{
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
	

		$this->password=$password;

		
	}
	
}

?>