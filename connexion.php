<!DOCTYPE html>
  <html>
    <head>
      
      <title>Connexion</title>

      <?php include("inc/header.php"); ?>

    </head>
    <body>
      <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading" id="titre">Accédez à la connexion</h2>
        <label for="inputEmail" type="text" name="email" class="sr-only input_field">Adresse E-Mail</label>
        <input id="inputEmail" class="form-control" placeholder="Adresse E-Mail" required="" autofocus="" type="email">
        <label for="inputPassword" type="password" name="email" class="sr-only input_field">Mot de Passe</label>
        <input id="inputPassword" class="form-control" placeholder="Mot de Passe" required="" type="password">
        <div class="checkbox">
          <label>
            <input value="remember-me" type="checkbox"> Se souvenir de moi ?
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      </form>

    </div>
    </body>

        <?php

          //Connexion à la base de données
          try{
              $bdd = new PDO('mysql:host=localhost;dbname=salon_de_chat;charset=utf8', 'root', '');
          }

          catch(Exception $e){
              die('Erreur : '.$e->getMessage());
          }

        ?>

  </html>

<!--   if(password_verify($_POST["password"],$ph)){
        echo "Vous allez être rediriger sur le chat en ligne";
      }
        else{
          echo "Veuillez réessayer le mot de passe crypté n'a pas été retrouver";
      } -->


2
3
4
  

