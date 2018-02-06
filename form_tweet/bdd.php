<?php
class Bdd {
	private $bdd;
	
	public function getBdd() {
    	return $this->bdd;
	}

  	function __construct() {
		try {
			$this->bdd = new PDO('mysql:host=localhost;dbname=my_twitter;charset=utf8', 'root', 'root');	
		} catch (Exeption $e) {
			die('Erreur : ' . $e->getMessage());
		} 
  	}
}