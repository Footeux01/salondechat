<?php
    session_start();

    // Evalué à vrai car $var est vide
    if(empty($_SESSION['pseudo']) || empty($_SESSION['email']) || empty($_SESSION['password'])) {
        echo 'Vous n\'avez pas renseigner tout les champs de connexion';
            echo $_SESSION['pseudo'];
            echo $_SESSION['email'];
            echo $_SESSION['password'];
        // header('Location: connexion.php');
        exit;
    }

    $pseudo = $_SESSION['pseudo'] ;
    $email = $_SESSION['email'] ;
    $password = $_SESSION['password'] ;

?>

<!DOCTYPE html>
        <html>
            <head>
                <title>Mini-chat</title>

                <?php include("inc/header.php"); ?>
            </head>

                <style> 
                    form{
                        text-align:center;
                    }
                </style>

            <body>

                    <?php include("inc/deconnexion.php"); ?>

                <form action="minichat_post.php" method="post">

                    <h1 id="minichat">Discutez librement 
                        <a><img border="0" src="http://www.gifszone.com/content/smile/miscellaneous/smile_105.gif"></a>
                    </h1>

                    <p id="pseudo">
                        <label for="pseudo">Envoyé votre message </label>  
                        <?php echo $_SESSION['pseudo']; ?> <br />

                        <label for="message">Message à poster :</label>   
                        <input type="text" name="message" id="message" /><br />


                        <input type="submit" value="Envoyer" />
                     </p>
                </form>

                <?php

                // Connexion à la base de données
                try
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=salon_de_chat;charset=utf8', 'root', '');
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }

                catch(Exception $e)

                {
                    die('Erreur : '.$e->getMessage());
                }


                // Récupération des 10 derniers messages
                $reponse = $bdd->query('SELECT pseudo, message FROM minichat');

                // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

                while ($donnees = $reponse->fetch())
                {
                    echo '<p id="messages"><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
                }

                $reponse->closeCursor();

                ?>

            </body>

        </html>