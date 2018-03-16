<?php
	session_start();

	// Connexion à la base de données
	try{
	    $bdd = new PDO('mysql:host=localhost;dbname=salon_de_chat;charset=utf8', 'root', '');
	    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(Exception $e){
	    die('Erreur : '.$e->getMessage());
	}

	$pseudo = $_SESSION['pseudo'];
	$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

	$reponse = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(:pseudo, :msg)');
	$reponse->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
	$reponse->bindParam(':msg', $message, PDO::PARAM_STR);

	if(! $reponse->execute()){
		echo 'ERREUR BDD';
		exit;
	}

	/*switch($pseudo){
			case 'matthieu' : 
				echo 'blabla';
				break;

			default :
	}*/

	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['message']   = $message;

	//Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

	    echo '<p><strong>'  . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
	

	// Redirection du visiteur vers la page du minichat
	header('Location: /minichat.php');

?>