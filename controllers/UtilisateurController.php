 <?php
session_start();
require "models/utilisateur.php";

class utilisateur{

public function enregistrement(){
	$utilisateur = new utilisateurmodel();

	$id = "";
	$nom= "";
	$prenom= "";
	$login= "";
	$mdp= "";
	$telephone= "";
    $email="";
	$role="";
	$photo="";
	$etat="";
	$matricule="";
	$message="";
	

	// ajouter
	if(isset($_POST['btn_ajouter'])){
		/*
		move_uploaded_file($_FILES['sai_photo']['tmp_name'] , "upload/".$_POST['sai_matricule'].$_FILES['sai_photo']['name']);
		*/

		$utilisateur->nom = $_POST['sai_nom'];
		$utilisateur->prenom = $_POST['sai_prenom'];
		$utilisateur->login = $_POST['sai_login'];
		$utilisateur->mdp = $_POST['sai_mdp'];
		$utilisateur->telephone = $_POST['sai_telephone'];
		$utilisateur->email = $_POST['sai_email'];
		$utilisateur->role = $_POST['sai_role'];
		if(!empty($_FILES['sai_photo']['name'])){
         $utilisateur->photo = file_get_contents($_FILES['sai_photo']['tmp_name']);
		}else{
         $utilisateur->photo = "";
		}
		
		$utilisateur->etat = $_POST['sai_etat'];
		$utilisateur->matricule = $_POST['sai_matricule'];

		$sol = $utilisateur->AjouterUtilisateur();
		if(!empty($sol)){
			$message = "<h3 class='tile-title' style='color:green'> Ajout effectuee avec succes</h3>";
		}else{
			$message = "<h3 class='tile-title' style='color:red'> Echec lors de l'ajout</h3>";
		}

	}


	include "views/utilisateur/enregistrement-utilisateur.php";
}


public function liste(){

	$utilisateur = new utilisateurmodel();

	$sol = $utilisateur->ListeUtilisateur();


include "views/utilisateur/liste-utilisateur.php";
}


public function dashboard(){
/*
	$utilisateur = new utilisateurmodel();

	$sol = $utilisateur->ListeUtilisateur();

*/
include "views/utilisateur/tableau-bord.php";
}

public function deconnexion(){
session_destroy();
header("location:http://localhost/banque/search/utilisateur/connexion");

include "views/utilisateur/tableau-bord.php";
}



public function profil(){

	$utilisateur = new utilisateurmodel();
	$id = "";
	$nom= "";
	$prenom= "";
	$login= "";
	$mdp= "";
	$telephone= "";
    $email="";
	$role="";
	$photo="";
	$etat="";
	$matricule="";
	//$message="";

     $sol = $utilisateur->profilUtilisateur();
     if(!empty($sol))
     {
        $id = $sol[0]['id'];
        $nom = $sol[0]['nom'];
        $prenom = $sol[0]['prenom'];
        $login = $sol[0]['login'];
        $mdp = $sol[0]['mdp'];
        $telephone = $sol[0]['telephone'];
        $email = $sol[0]['email'];
        $role = $sol[0]['role'];
        $photo = $sol[0]['photo'];
        $etat = $sol[0]['etat'];
        $matricule = $sol[0]['matricule'];
        //$photo = $sol[0]['photo'];
     }


include "views/utilisateur/profil-utilisateur.php";
}

public function connexion(){

		$utilisateur = new utilisateurmodel();

		//mode de connexion

		if(isset($_POST['btn_connexion'])){

        $utilisateur->login = $_POST['sai_login'];
		$utilisateur->mdp = $_POST['sai_mdp'];
		// appel de la fonction
		$sol = $utilisateur->connexion();
		// variables session
		if(!empty($sol)){
		$_SESSION['login'] = $sol[0]['login'];
		$_SESSION['mdp'] = $sol[0]['mdp'];
		$_SESSION['nom'] = $sol[0]['nom'];
		$_SESSION['prenom'] = $sol[0]['prenom'];
		$_SESSION['role'] = $sol[0]['role'];
		$_SESSION['telephone'] = $sol[0]['telephone'];
		$_SESSION['id'] = $sol[0]['id'];
		$_SESSION['photo'] = $sol[0]['photo'];
		$_SESSION['etat'] = $sol[0]['etat'];
		$_SESSION['matricule'] = $sol[0]['matricule'];

		if($_SESSION['role']=="Membre"){
header("location:http://localhost/banque/search/utilisateur/enregistrement");
		}

		if($_SESSION['role']=="administrateur"){
header("location:http://localhost/banque/search/utilisateur/dashboard");
		}

		
	}else{
		echo "Mot de passe ou login incorrectes";
	}
          }

		

		     include 'views/utilisateur/connexion.php';

	}


}

 ?> 