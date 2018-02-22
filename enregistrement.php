<?php
	session_start();

	// Connexion à la base de données
	try{
	    $bdd = new PDO('mysql:host=localhost;dbname=salon_de_chat;charset=utf8', 'root', '');
	}

	catch(Exception $e){
	    die('Erreur : '.$e->getMessage());
	}

	$pseudo = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

	if(strlen($pseudo) < 5) {
		echo "Pseudo trop petit";
		exit;
	}

	

	// Insertion du password2 à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO inscription (pseudo, email, password) VALUES(:pseudo, :email, :psw)');
	$req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
	$req->bindParam(':email', $email, PDO::PARAM_STR);
	$req->bindParam(':psw', $password, PDO::PARAM_STR);

	if(! $req->execute()){
		echo 'ERREUR BDD';
		exit;
	}

	/*
	switch($pseudo){
		case 'matthieu' : 
			echo 'blabla';
			break;

		default :
	}
	*/

	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['email']   = $email;
	$_SESSION['password'] = $password;



	// Redirection du visiteur vers la page du bienvenue
	header('Location: bienvenue.php');

?>