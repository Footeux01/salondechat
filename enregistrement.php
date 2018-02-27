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
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	$password1 = filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING);

	if(strlen($pseudo) < 8){
		echo "Pseudo trop petit";
		exit;
	}

	if(strlen($password) < 8){
		echo "Mot de Passe trop petit";
		exit;
	}

	if($password != $password1){
		echo "Les deux mots de passes tapés ne sont pas identiques !";
		exit;
	}

	//Regex Pseudo
	if (isset($_POST['pseudo'])){
	    $_POST['pseudo'] != htmlspecialchars($_POST['pseudo']);
		//$pseudo = htmlspecialchars($_POST['pseudo']);
		if(preg_match("/^([A-Z]|[a-z]|[0-9]|[_])+$/", $pseudo) == 1){
	        echo 'Le' . $_POST['pseudo'] . ' n\'est pas valide, recommencez !';
	    }
	}

	//Regex Mot de Passe
	if (isset($_POST['password'])){
	    $_POST['pseudo'] = htmlspecialchars($_POST['password']);
		//$pseudo = htmlspecialchars($_POST['pseudo']);
		if(preg_match("/^([A-Z]|[a-z]|[0-9])+$/", $password) == 1){
		    echo 'Le ' . $_POST['password'] . 'est bien écrit avec : Seul les caractères alpha-numérique et le _ sont acceptés';
		}
		else
	    {
	        echo 'Le' . $_POST['password'] . ' n\'est pas valide, recommencez !';
	    }
	}

	if (isset($_POST['password1'])){
	    $_POST['pseudo'] = htmlspecialchars($_POST['password1']);
		//$pseudo = htmlspecialchars($_POST['pseudo']);
		if(preg_match("/^([A-Z]|[a-z]|[0-9])+$/", $password1) == 1){
		    echo 'Le ' . $_POST['password1'] . 'est bien écrit avec : Seul les caractères alpha-numérique et le _ sont acceptés';
		}
		else
	    {
	        echo 'Le' . $_POST['password1'] . ' n\'est pas valide, recommencez !';
	    }
	}
	

	//Regex E-mail
	if (isset($_POST['email'])){
	    $_POST['email'] = htmlspecialchars($_POST['email']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

	    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])){
	        echo 'L\'adresse ' . $_POST['email'] . ' est <strong>valide</strong> !';
	    }
	    else
	    {
	        echo 'L\'adresse ' . $_POST['email'] . ' n\'est pas valide, recommencez !';
	    }
	}

	
	//Insertion Function mailJetable

    $domaines= array('pjjkp.com', 'ephemail.com', 'ephemail.org', 'ephemail.net', 'jetable.org', 'jetable.net', 'jetable.com', 'yopmail.com', 'haltospam.com', 'tempinbox.com', 'brefemail.com', '0-mail.com', 'link2mail.net', 'mailexpire.com', 'kasmail.com', 'spambox.info', 'mytrashmail.com', 'mailinator.com', 'dontreg.com', 'maileater.com', 'brefemail.com', 'yopmail.com', '0-mail.com', 'brefemail.com', 'ephemail.net', 'guerrillamail.com', 'guerrillamail.info', 'haltospam.com', 'iximail.com', 'jetable.net', 'jetable.org', 'kasmail.com', 'klassmaster.com', 'kleemail.com', 'link2mail.net', 'mailin8r.com', 'mailinator.com', 'mailinator.net', 'mailinator2.com', 'myamail.com', 'mytrashmail.com', 'nyms.net', 'shortmail.net', 'sogetthis.com', 'spambox.us', 'spamday.com', 'Spamfr.com', 'spamgourmet.com', 'spammotel.com', 'tempinbox.com', 'yopmail.com', 'yopmail.fr', 'guerrillamail.org', 'temporaryinbox.com', 'spamcorptastic.com', 'filzmail.com', 'lifebyfood.com', 'tempemail.net', 'spamfree24.org', 'spamfree24.com', 'spamfree24.net', 'spamfree24.de', 'spamfree24.eu', 'spamfree24.info', 'spamherelots.com', 'thisisnotmyrealemail.com', 'slopsbox.com', 'trashmail.net', 'myamail.com', 'tyldd.com', 'safetymail.info', 'brefmail.com', 'bofthew.com', 'trash-mail.com');

	    list($d_email,$domain) = explode('@',$email);

	 //   return in_array($domain,$domains);

	    if (in_array($domain,$domaines)) {
			echo "Utilisation d'E-Mail frauduleux interdit !";
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