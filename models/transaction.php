<?php 
class transactionmodel{

    public $numero_transaction;
	public $date_transaction;
	public $heure_transaction;
	public $montant_transaction;
	public $frais;
	public $montant_total;
	public $expediteur;
	public $destinataire;
	public $type_transaction;
	public $etat_transaction;
	public $code_secret;


function __construct(){
	require "database/connexion.php";
}


public function Validertransaction(){
		$req = $this->con->prepare('INSERT INTO transaction VALUES(:numero_transaction,:date_transaction,:heure_transaction,:montant_transaction,:frais,:montant_total,:expediteur,:destinataire,:type_transaction,:etat_transaction)');
	$req->bindParam(':numero_transaction',$this->numero_transaction);
	$req->bindParam(':date_transaction',$this->date_transaction);
	$req->bindParam(':heure_transaction',$this->heure_transaction);
	$req->bindParam(':montant_transaction',$this->montant_transaction);
	$req->bindParam(':frais',$this->frais);
	$req->bindParam(':montant_total',$this->montant_total);
	$req->bindParam(':expediteur',$this->expediteur);
	$req->bindParam(':destinataire',$this->destinataire);
	$req->bindParam(':type_transaction',$this->type_transaction);
	$req->bindParam(':etat_transaction',$this->etat_transaction);
	$sol = $req->execute();
	return $sol;
}


public function VerificationCompte($numero){
		$req = $this->con->prepare('SELECT * FROM compte WHERE numero_compte =:numero');
		$req->bindParam(':numero',$numero);
	    $req->execute();
	    $sol = $req->fetchAll();
	    
	return $sol;
}

public function DebiterExpediteurCrediterDestinataire($numero1,$numero2,$montant){

  $this->con->BeginTransaction();

  try {

    $req = $this->con->prepare('UPDATE compte SET solde_compte=solde_compte-:montant WHERE numero_compte=:numero1');
  $req->bindParam(':numero1',$numero1);
  $req->bindParam(':montant',$montant);
  $sol = $req->execute();

   $req = $this->con->prepare('UPDATE compte SET solde_compte=solde_compte+:montant WHERE numero_compte=:numero2');
  $req->bindParam(':numero2',$numero2);
  $req->bindParam(':montant',$montant);
  $sol = $req->execute();

$this->con->commit();

    
  } catch (Exception $e) {

    $this->con->RollBack();
    
  }
}

public function CrediteriterExpediteurDebiteriterDestinataire($numero1,$numero2,$montant){

  $this->con->BeginTransaction();

  try {

    $req = $this->con->prepare('UPDATE compte SET solde_compte=solde_compte+:montant WHERE numero_compte=:numero1');
  $req->bindParam(':numero1',$numero1);
  $req->bindParam(':montant',$montant);
  $sol = $req->execute();

   $req = $this->con->prepare('UPDATE compte SET solde_compte=solde_compte-:montant WHERE numero_compte=:numero2');
  $req->bindParam(':numero2',$numero2);
  $req->bindParam(':montant',$montant);
  $sol = $req->execute();

$this->con->commit();

    
  } catch (Exception $e) {

    $this->con->RollBack();
    
  }
}






}

?>