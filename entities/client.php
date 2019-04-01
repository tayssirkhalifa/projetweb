<?PHP
/**
* 
*/
class client 
{
	
	private $nom;
	private $prenom;
	private $mail;
	private $password;
   
	function __construct($nom,$prenom,$mail,$numero,$password)
	{
		
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->password=$password;
		
		
	}
	
}

?>