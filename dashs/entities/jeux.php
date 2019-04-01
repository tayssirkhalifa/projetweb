<?php
class jeux{
	private $id;
	private $titre ;
	private $pt_fedilite ;  
	private $cadeau;
	private $description;
	private $date_d;
	private $date_f;
	private $participants;



	function __construct($id,$titre,$pt_fedilite,$cadeau,$description,$date_d,$date_f,$participants){
		$this->id=$id;
		$this->titre=$titre;
		$this->pt_fedilite=$pt_fedilite;
		$this->description=$description;
		$this->cadeau=$cadeau;
		$this->date_d=$date_d;
		$this->date_f=$date_f;
		$this->participants=$participants;
	}

	function getId(){
		return $this->id;
	}
	function getTitre(){
		return $this->titre;
	}
	function getPt_fedilite(){
		return $this->pt_fedilite;
	}
	function getDescription(){
		return $this->description;
	}
	function getCadeau(){
		return $this->cadeau;
	}
	function getDate_d(){
		return $this->date_d;
	}
	function getDate_f(){
		return $this->date_f;
	}
	function getParticipants(){
		return $this->participants;
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
}

?>