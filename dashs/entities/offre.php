<?php
class offre{
	private $titre;
	private $date_d;
	private $date_f;
	private $description;
	private $image;
	private $id_produit;
	private $remise ;
	function __construct($titre,$date_d,$date_f,$description,$image,$id_produit,$remise){
		$this->titre=$titre;
		$this->date_d=$date_d;
		$this->date_f=$date_f;
		$this->description=$description;
		$this->image=$image;
        $this->id_produit=$id_produit;
        $this->remise=$remise;
	}
	
	function getTitre(){
		return $this->titre;
	}
	function getDate_d(){
		return $this->date_d;
	}
	function getDate_f(){
		return $this->date_f;
	}
	function getDescription(){
		return $this->description;
	}
	function getImage(){
		return $this->image;
	}
    function getId_produit(){
		return $this->id_produit;
	}
	function getRemise(){
		return $this->remise;
	}


	function setTitre($titre){
		$this->titre=$titre;
	}
	function setDate_d($date_d){
		$this->date_d;
	}
	function setDate_f($date_f){
		$this->date_f=$date_f;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setImage($image){
		$this->image=$image;
	}
    function setId_produit($id_produit){
		$this->id_produit=$id_produit;
	}
   function setRemise($remise){
		$this->remise=$remise;
	}
}

?>