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
        <label for="inputEmail" class="sr-only">Adresse E-Mail</label>
        <input id="inputEmail" class="form-control" placeholder="Adresse E-Mail" required="" autofocus="" type="email">
        <label for="inputPassword" class="sr-only">Mot de Passe</label>
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
  </html>