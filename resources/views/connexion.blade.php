<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="{{asset('css/connexionstyle.css')}}">
    <link rel="stylesheet" href="awesome/css/all.css">
  </head>
  <body>
    <header>
      <h1>Formulaire de connexion </h1>
      <nav>
        <ul>
          <li class="bt"><a href="{{asset('accueil')}}">Accueil</a></li>
          <li class="bt"><a href="{{asset('client')}}">Inscription</a></li>
          <li class="bt"><a href="#">Connexion</a></li>
          <li class="bt"><a href="{{asset('voyager')}}"> Voyager</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <form action="">
        <label for="nom">Nom(s) :</label>
        <input type="text" id="nom" name="noms" required>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation"></i>
        <br/>
        <br/>
        <br/>
        <label for="prenom">Prénom(s) :</label>
        <input type="text" id="prenom" name="prenoms" required>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation"></i>
        <br/>
        <br/>
        <br/>
        <label for="password">Mot de passe :</label>
        <input type="text" id="email" required>
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation"></i>
        <br/>
        <br/>
        <br/>
        <div class="submit">
          <button><i class="fas fa-user-plus"></i> Envoyer </button>
        </div> 
      </form>
    </main>
    <footer>
      <p><h2>Contactez nous au :</h2>
        <div class="end">
          <ul>
            <li><a href="mailto: travelagency@gùail.com">travelagency@gmail.com </a></li><br>
            <li>(+237) 6838884676</li>
          </ul>
        </div>
      </p>
    </footer>
  </body>
</html>