<!DOCTYPE html lang="fr">
	<html>
		<head>

			<title>MCG | Bienvenue sur l'accueil</title>

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

			<div class="container">
	    		<div class="row">
			      	<form class="form-signin">
				        <h2 class="form-signin-heading" id="titre">Connexion</h2>
				        	<label for="inputEmail" class="sr-only">Adresse E-Mail</label>
				        	<input id="inputEmail" class="form-control" placeholder="Adresse E-Mail" required="" autofocus="" type="email">

				        	<label for="inputPassword" class="sr-only">Mot de Passe</label>
				        	<input id="inputPassword" class="form-control" placeholder="Mot de Passe" required="" type="password">

				        <div class="checkbox">
				          	<label>
				            	<a href="inscription.php"> S'inscrire |</a>
				            	<a href="motdepasseoublie.php"> Mot de Passe Oublié</a><br>
				          	</label>
				        </div>

				        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
			      	</form>
				</div>
		    </div>
		</body>
	</html>

