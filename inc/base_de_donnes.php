<?php

	// Connexion à la base de données
	try{
	    $bdd = new PDO('mysql:host=localhost;dbname=salon_de_chat;charset=utf8', 'root', '');
	}

	catch(Exception $e){
	    die('Erreur : '.$e->getMessage());
	}

?>


<?php
	/* Connexion à une base ODBC avec l'invocation de pilote */
	// $bdd = ('mysql:host=localhost;dbname=salon_de_chat;charset=utf8', 'root', '');
	// $email = 'email';
	// $password = 'password';

	// try {
	//     $bdd = new PDO($bdd, $email, $password);
	// } catch (PDOException $e) {
	//     echo 'Connexion échouée : ' . $e->getMessage();
	// }


	do{
		if(! isset($_POST['email'], $_POST['password']))
			break;
		
		$reponse = $bdd->prepare("SELECT * FROM inscription WHERE email = ? ");
		$reponse->bindParam( $_POST['email'], PDO::PARAM_STR);
		$reponse->execute();

		if($reponse->rowCount() == 0){
			echo 'ERREUR : Ce pseudo n\'existe pas';
			break;
		}                                                                        

		$user_bdd = $reponse->fetch(PDO::FETCH_ASSOC);
		$pseudo = $user_bdd['pseudo'];
		$email = $user_bdd['email'];
		$ph = $user_bdd['password'];
		
		if (! password_verify($_POST['password'], $ph)) {
			echo 'Le mot de passe est invalide.';
			break;
		}
	}while(false);

	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['email']   = $email;
	$_SESSION['password'] = $ph;

	// Redirection du visiteur vers la page du bienvenue
	header('Location: /minichat.php');
?>
