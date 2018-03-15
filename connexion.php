<?php
  session_start();
  //include("inc/base_de_donnes.php");
?>

<!DOCTYPE html>
  <html>
    <head>
      
      <title>Connexion</title>

      <?php include("inc/header.php"); ?>

    </head>
    <body>
      <div class="container">

      <form method="post" action="/inc/base_de_donnes.php" class="form-signin">
        <h2 class="form-signin-heading" id="titre">Accédez à la connexion</h2>
        <label for="email" type="text" class="sr-only input_field">Adresse E-Mail</label>
        <input id="email" class="form-control"  name="email" placeholder="Adresse E-Mail" required="" autofocus="" type="email">
        <label for="password" type="password" class="sr-only input_field">Mot de Passe</label>
        <input id="password" class="form-control" name="password" placeholder="Mot de Passe" required="" type="password">
        <div class="checkbox">
          <!-- <label>
            <input value="remember-me" type="checkbox"> Se souvenir de moi ?
          </label> -->
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      </form>

    </div>
    </body>

  </html>

<!--  if(password_verify($_POST["password"],$ph)){
        echo "Vous allez être rediriger sur le chat en ligne";
      }
        else{
          echo "Veuillez réessayer le mot de passe crypté n'a pas été retrouver";
      } -->

