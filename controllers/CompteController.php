<?php 
require "models/compte.php";

class compte{

public function enregistrement(){
	$compte = new comptemodel();

	$numero_compte = "";
	$type_compte= "";
	$date_creation= "";
	$solde_compte= "";
	$matricule= "";
	$etat_compte= "";

	$message="";

	// ajouter
	if(isset($_POST['btn_ajouter'])){
		$compte->numero_compte = $_POST['sai_numero_compte'];
		$compte->type_compte = $_POST['sai_type_compte'];
		$compte->date_creation = $_POST['sai_date_creation'];
		$compte->etat_compte = $_POST['sai_etat_compte'];
		$compte->matricule = $_POST['sai_matricule'];
		$compte->solde_compte = $_POST['sai_solde_compte'];

		$sol = $compte->AjouterCompte();
		if(!empty($sol)){
			$message = "<h3 class='tile-title' style='color:green'> Ajout effectuee avec succes</h3>";
		}else{
			$message = "<h3 class='tile-title' style='color:red'> Echec lors de l'ajout</h3>";
		}

	}


	include "views/compte/enregistrement-compte.php";
}


public function liste(){

	$compte = new comptemodel();

	$sol = $compte->ListeCompte();


include "views/compte/liste-compte.php";
}





}

 ?>