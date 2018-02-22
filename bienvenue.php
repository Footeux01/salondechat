<?php
	session_start();

	$pseudo = $_SESSION['pseudo'] ;
	$email = $_SESSION['email'] ;
	$password = $_SESSION['password'] ;

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

			<div class="alert alert-success">
                <p>Bienvenue !</p>

			    <p>
			    	Salut, Tu es bien connecté(e)
			    	<?php echo $_SESSION['pseudo']; ?>.<br><br>  

			    	Voici ton e-mail de connexion : 
			    	<?php echo $_SESSION['email']; ?>.<br>  

			    	Ceci <?php echo $_SESSION['password']; ?> est le mot de passe que vous avez saisi et enregistré.<br>   

			    	Pour continuer cliquez <a href="minichat.php">ici</a> 
			    	<a><img border="0" src="http://www.gifszone.com/content/smile/miscellaneous/smile_105.gif"></a>

			    </p>
            </div>
		</body>
	</html>