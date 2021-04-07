<?php 

class utilisateurmodel{

	public $nom;
	public $prenom;
	public $login;
	public $mdp;
	public $telephone;
	public $email;
	public $role;
	public $photo;
	public $etat;
	public $matricule;
	
	function __construct(){
	require "database/connexion.php";
}
	
	public function AjouterUtilisateur(){
		$req = $this->con->prepare('INSERT INTO utilisateur VALUES(null,:nom,:prenom,:login,:mdp,:telephone,:email,:role,:photo,:etat,:matricule)');
	$req->bindParam(':nom',$this->nom);
	$req->bindParam(':prenom',$this->prenom);
	$req->bindParam(':login',$this->login);
	$req->bindParam(':mdp',$this->mdp);
	$req->bindParam(':telephone',$this->telephone);
	$req->bindParam(':email',$this->email);
	$req->bindParam(':role',$this->role);
	$req->bindParam(':photo',$this->photo);
	$req->bindParam(':etat',$this->etat);
	$req->bindParam(':matricule',$this->matricule);
	$sol = $req->execute();
	return $sol;
}


public function ListeUtilisateur(){
		$req = $this->con->prepare('SELECT * FROM utilisateur');
	    $req->execute();
	    $sol = $req->fetchAll();
	return $sol;
}

public function ProfilUtilisateur(){
		$req = $this->con->prepare('SELECT * FROM utilisateur WHERE matricule=:matricule');
		$req->bindParam(':matricule',$this->matricule);
	    $req->execute() or print_r($this->ErrorInfo());
	    $sol = $req->fetchAll();
	return $sol;
}
	 
	public function connexion(){

	$req = $this->con->prepare('SELECT * FROM utilisateur WHERE (email=:email OR login=:email OR telephone=:email) and mdp=:mdp');
	$req->bindParam(':email',$this->login);
	$req->bindParam(':mdp',$this->mdp);	
	$req->execute();
	$sol = $req->fetchAll();
	return $sol;
}


}


 ?>
