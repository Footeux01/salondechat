<!DOCTYPE html lang="fr">
	<html>
		<head>

			<title>MCG | Bienvenue sur l'accueil</title>

			<script type="text/javascript" src="./js/date_heure.js"></script>

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
				<h1 id="youyou">Bienvenue sur le Messenger Chat General by MCG</h1>
					<span id="date_heure"></span>
            		<script> window.onload = date_heure('date_heure');</script>

            	<div id="espace">
					<p id="espace_heure">Vous vous sentez seule ? Vous cherchez de la compagnie ? <br> Vous vous trouvez au bon endroit car <a href="accueil">"Messenger Chat General"</a> rassemble une communauté de personne qui cherche à se divertir</p>
				    <a class="myButton" href="connexion.php"> Déjà un inscrit ? Connectez-vous ! </a><br>
	            	<p> Pas de compte ? <a href="inscription.php">Cliquez-ici</a> pour vous inscrire </p><br>
	            	<p> Mot de Passe Oublié ? Suivez ce <a href="motdepasseoublie.php">lien</a> pour pouvoir le récupérer </p><br>
	            </div>
		    </div>
		</body>
	</html>

