<?php
    session_start();
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
                <form action="minichat_post.php" method="post">

                    <h1 id="minichat">Discutez librement <a><img border="0" src="http://www.gifszone.com/content/smile/miscellaneous/smile_105.gif"></a></h1>

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
        }

        catch(Exception $e)

        {
            die('Erreur : '.$e->getMessage());
        }


        // Récupération des 10 derniers messages
        $reponse = $bdd->query('SELECT pseudo, message FROM mini_chat');

        // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

        while ($donnees = $reponse->fetch())
        {
            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
        }

        $reponse->closeCursor();

        ?>

            </body>

        </html>