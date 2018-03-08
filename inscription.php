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
								<input type="text" name="pseudo" placeholder="Votre Pseudo :" class="form-control" required="">
								<input type="email" name="email" placeholder="Votre E-mail :" class="form-control" required="">
								<input type="password" name="password" placeholder="Votre Mot de Passe :" class="form-control" required="">
								<input type="password" name="password1" placeholder="Veuillez Retaper Votre Mot de Passe :" class="form-control" required="">

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

		</body>
	</html>