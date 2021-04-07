 <?php 
//connexion
$con = new PDO('mysql:host=localhost;dbname=','root','');
if($con){
	$db =$req = $con->query('CREATE DATABASE banque');
	
	if($db){

		$con = new PDO('mysql:host=localhost;dbname=banque','root','');
		if($con){

			$compte = $con->query('CREATE TABLE compte(numero_compte varchar(100) primary key,type_compte varchar(100),date_creation date, solde_compte varchar(100), matricule varchar(100), etat_compte varchar(100))');

			//$utilisateur = $con

			//$transaction = $con

			$transaction = $con->query('CREATE TABLE transaction(numero_transaction varchar(100) primary key,date_transaction date, heure_transaction varchar(100), montant_transaction varchar(100), frais varchar(100), montant_total_transaction varchar(100), expediteur varchar(100), destinataire varchar(100), type_transaction varchar(100), etat_transaction varchar(100))');

		}

		

	}else{
		echo "La base de donnee existe deja";
	}

}


 ?>