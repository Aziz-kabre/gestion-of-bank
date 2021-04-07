<?php 
require "models/transaction.php";

class transaction{

public function depot(){
	$transaction = new transactionmodel();

	$numero_expediteur = "";
	$numero_destinataire = "";
	$montant = "";
	$frais = "";

	$message="";

	// valider
	if(isset($_POST['btn_valider'])){

		// verification de l'existence du compte destinataire
		$verifDest = $transaction->VerificationCompte($_POST['sai_numero_destinataire']);

		if(!empty($verifDest)){
			//verification de l'etat du compte destinataire
			if($verifDest[0]['etat_compte']=="Actif"){

				// verification de l'existence du compte expediteur
				$verifExp = $transaction->VerificationCompte($_POST['sai_numero_expediteur']);

				
				if(!empty($verifExp)){

					// verfication de l'etat du compte expediteur
					if($verifExp[0]['etat_compte']=="Actif"){

						// verification de la disponibilite solde du compte expediteur
						if($verifExp[0]['solde_compte']>=$_POST['sai_montant']){

							// ajout de la transaction (generation de code + enregistrement)
		$transaction->numero_transaction = "123456";
		$transaction->expediteur = $_POST['sai_numero_expediteur'];
		$transaction->destinataire = $_POST['sai_numero_destinataire'];
		$transaction->montant_transaction = $_POST['sai_montant'];
		$transaction->frais = $_POST['sai_frais'];
		$transaction->montant_total = $_POST['sai_montant'] + $_POST['sai_frais'];
		$transaction->type_transaction = "Depot";
		$transaction->etat_transaction = "Succes";
		$transaction->date_transaction = date('Y-m-d');
		$transaction->heure_transaction = date('H:i:s');

		$validTrans = $transaction->Validertransaction();
		if(!empty($validTrans)){
			// debit du compte expediteur et credit du compte destinataire
	 $DebitCredit = $transaction->DebiterExpediteurCrediterDestinataire($_POST['sai_numero_expediteur'],$_POST['sai_numero_destinataire'],$transaction->montant_total);
	 if(empty($DebitCredit)){
	 	$message = "Depot effectué avec succes";
	 }else{
	 	$message = "Echec lors du depot";
	 }


		}else{
							$message = "Echec de la transaction";
						}


						}else{
							$message = "Le solde de l'expediteur est insuffisant";
						}


					}else{
			$message = "Le compte de l'expediteur n'est pas actif";
		}

				}else{
			$message = "Le compte de l'expediteur n'existe pas";
		}


			}else{
			$message = "Le compte du destinataire n'est pas actif";
		}

		}else{
			$message = "Le compte du destinataire n'existe pas";
		}

	

	}


	include "views/transaction/depot.php";
}

public function retrait(){
	$transaction = new transactionmodel();
	$numero_destinataire = "";
	$montant_retrait = "";
	$Code_secret = "";
	
	$message="";

	// valider
	if(isset($_POST['btn_valider'])){
		$transaction->numero_destinataire = $_POST['sai_numero_destinataire'];
		$transaction->montant_retrait = $_POST['sai_montant_retrait'];
		$transaction->code_secret = $_POST['sai_code_secret'];

		$sol = $compte->Validerretrait();
		if(!empty($sol)){
			$message = "<h3 class='tile-title' style='color:green'> Retrait effectuee avec succes</h3>";
		}else{
			$message = "<h3 class='tile-title' style='color:red'> Echec lors du Retrait</h3>";
		}


	}

	include "views/transaction/retrait.php";

}

	public function transfert(){

	$transaction = new transactionmodel();

	$numero_expediteur = "";
	$numero_destinataire = "";
	$montant = "";
	$frais = "";
	$montant_total = "";
	
	$message="";

	// boutton ok
	if(isset($_POST['btn_ok'])){

		$transaction->numero_espeditaire = $_POST['sai_numero_espeditaire'];
		$transaction->numero_destinataire = $_POST['sai_numero_destinataire'];
		$transaction->montant = $_POST['sai_montant'];
		$transaction->frais = $_POST['sai_frais'];
		$transaction->montant_total = $_POST['sai_montant_total'];

	}

		include "views/transaction/transfert.php";
	}

	public function touetransaction(){

		$transaction = new transactionmodel();
		
		$numero_expediteur = "";
		$numero_destinataire = "";
		$montant = "";
		$frais = "";
		$montant_total = "";
	
		$message="";

	}

}



 ?>