<!DOCTYPE html lang="fr">
	<html>
		<head>
		
        	<title>MCG | Inscription Online</title>

        	<?php include("inc/header.php"); ?>

		</head>

		<body>
			<div class="container-fluid">
		        <nav class="navbar  navbar-header ">
			        <div class="navbar-left">
			            <a href="accueil.php"> 
			            	<img src="img/logoblanc.png" class="img-rounded navbar-left" alt="Propulsé par MCG Multimedia SAS" width="8%">
			            </a>
			        </div>
		        </nav>
		    </div>

			<h1 id="titre">Inscription</h1><br>
				<div class="container">
		    		<div class="row">
				      	<form method="post" action="enregistrement.php">
					        <h2 class="form-signin-heading" id="titre">S'inscrire</h2>
					        	<label>Pseudo :</label>
								<input type="text" name="pseudo" class="form-control" required="">
								
								<label>E-mail :</label>
								<input type="email" name="email" class="form-control" required="">

								<label>Mot de Passe :</label>
								<input type="password" name="password" class="form-control" required="">

								<label>Retaper Mot de Passe :</label>
								<input type="password" name="password1" class="form-control" required="">

					        <button type="submit" action="enregistrement">Envoyer !</button>

					        <!-- <button
								class="g-recaptcha"
								data-sitekey="6LcJpkgUAAAAADoixNCegE_mGmJafPc6V3PGPGYF"
								data-callback="YourOnSubmitFn">
							Envoyer !
							</button> -->
				      	</form>
					</div>
			    </div>

			<?php

				//Connexion à la base de données
				try{
				    $bdd = new PDO('mysql:host=localhost;dbname=salon_de_chat;charset=utf8', 'root', '');
				}

				catch(Exception $e){
				    die('Erreur : '.$e->getMessage());
				}


				//Récupération des 10 derniers messages
				$reponse = $bdd->query('SELECT pseudo, email, password, password2, message FROM inscription');

				$reponse->closeCursor();

					header('Location: accueil.php');
			?>

		</body>
	</html>