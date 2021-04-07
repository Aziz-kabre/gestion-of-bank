<?php 
class comptemodel{

public $numero_compte;
public $type_compte;
public $date_creation;
public $solde_compte;
public $matricule;
public $etat_compte;


function __construct(){
	require "database/connexion.php";
}


public function AjouterCompte(){
		$req = $this->con->prepare('INSERT INTO compte VALUES(:numero_compte,:type_compte,:date_creation,:solde_compte,:matricule,:etat_compte)');
	$req->bindParam(':numero_compte',$this->numero_compte);
	$req->bindParam(':type_compte',$this->type_compte);
	$req->bindParam(':date_creation',$this->date_creation);
	$req->bindParam(':matricule',$this->matricule);
	$req->bindParam(':etat_compte',$this->etat_compte);
	$req->bindParam(':solde_compte',$this->solde_compte);
	$sol = $req->execute();
	return $sol;
}


public function ListeCompte(){
		$req = $this->con->prepare('SELECT * FROM compte');
	    $req->execute();
	    $sol = $req->fetchAll();
	return $sol;
}





}


 ?>