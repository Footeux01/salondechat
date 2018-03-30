<?php
    session_start();

    // Evalué à vrai car $var est vide
    if(empty($_SESSION['pseudo']) || empty($_SESSION['email']) || empty($_SESSION['password'])) {
        echo 'Vous n\'êtes pas connecté';
             // echo $_SESSION['pseudo'];
             // echo $_SESSION['email'];
             // echo $_SESSION['password'];
        header('Location: connexion.php');
        exit;
    }

    $pseudo = $_SESSION['pseudo'] ;
    $email = $_SESSION['email'] ;
    $password = $_SESSION['password'] ;

?>

<!DOCTYPE html>
        <html>
            <head>
                <title>MCG | Discutez librement</title>

                <?php include("inc/header.php"); ?>
            </head>

                <style> 
                    form{
                        text-align:center;
                    }
                </style>

            <body>

                    <?php include("inc/deconnexion.php"); ?>

                    <script type="text/javascript" src="./js/message.js"></script>

                    <!-- <button type="button" id="actualisation" class="btn btn-outline-dark">Actualisation</button> -->

                <form action="inc/minichat_post.php" method="post">

                    <h1 id="minichat">Discutez librement 
                        <a><img border="0" src="http://www.gifszone.com/content/smile/miscellaneous/smile_105.gif"></a>
                    </h1>

                    <p id="pseudo">
                        <label for="pseudo">Envoyez votre message </label>  
                        <?php echo $_SESSION['pseudo']; ?> <br />


                    <div class="chatonline">

                        <?php

                            // Connexion à la base de données
                            include("inc/bdd.php");


                            // Récupération des messages
                            $reponse = $bdd->query('SELECT created_at, pseudo, message FROM minichat');

                            // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

                            while ($donnees = $reponse->fetch()){

                                '<p id="messages"> ' .' <strong>' . htmlspecialchars($donnees['pseudo']) . ' : </strong><br> ' . htmlspecialchars($donnees['message']) . '</p>'

                            }
                                $reponse->closeCursor();

                        ?>   

                    </div>  
 
                        <input type="text" placeholder="Message à envoyer :" name="message" id="message" />

                        <input type="submit" class="btn btn-outline-warning" value="Envoyer" />
                     </p>
                </form>

            </body>

        </html>