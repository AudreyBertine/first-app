<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire de contact</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/inscription.css')}}">
  </head>
  <body>
    <header>
      <h1>formulaire d'inscription</h1>
      <nav>
        <ul>
          <li class="bt"><a href="acceuil.blade.php">Accueil</a></li>
          <li class="bt"><a href="#">Inscription</a></li>
          <li class="bt"><a href="connexion.blade.php">Connexion</a></li>
          <li class="bt"><a href="h2.blade.php"> Voyager</a></li>
        </ul>
      </nav>
    </header>
    <main>
        <form method="post" action="{{url('/client-store')}}">
            @csrf
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" >
          
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" >
          
            <label for="email">Numéro de téléphone :</label>
            <input type="text" id="email" name="num_tel" >
          
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" >
          
            <label for="confirm_password">Confirmer le mot de passe :</label>
            <input type="password" id="confirm_password" name="confirm_password" >
          
            <input type="submit" value="S'inscrire">
          </form>
    </main>
    <footer>
      <p><h2>contacter nous au :</h2>
        <div class="end">
         <ul>
             <li><a href="mailto: TravelAgency@gùail.com">TravelAgency@gmail.com </a></li><br>
             <li>+2376838884676</li>
         </ul>
         
        </div>
      <p>
    </footer>
  </body>
</html>