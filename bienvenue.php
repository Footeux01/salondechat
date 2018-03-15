<?php
	session_start();
?>

<!DOCTYPE html>
	<html>
		<head>
		
        	<title>MCG | Page d'accueil</title><br>

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
		    </div><br>

			<div class="alert alert-success" role="alert">
                <p>Bienvenue !</p>

			    <p>
			    	Salut, Tu es bien connecté(e)
			    	<?php echo $_SESSION['pseudo']; ?>.<br><br>  

			    	Voici ton e-mail de connexion : 
			    	<?php echo $_SESSION['email']; ?>.<br>  

			    	Le mot de passe que vous avez saisi a bien été enregistrer.<br>   

			    	Pour avoir accès au chat --> <a href="/minichat.php">cliquez ici</a> 
			    	<a><img border="0" src="http://www.gifszone.com/content/smile/miscellaneous/smile_105.gif"></a>

			    </p>
            </div>
		</body>
	</html>