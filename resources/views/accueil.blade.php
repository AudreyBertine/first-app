<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>
    <link rel="stylesheet" href="{{ asset('css/accueil.css')}}">
</head>
<body>
    <header id="head">
       <div class="bv">
        <h1><em>Bienvenue sur notre site web</em></h1>
       </div>
        <div class="logo">
            <img src="logoPlan de travail 1.png" alt="firstimage">
        </div>
       <div class="list">
        <nav class="menunav">
            <ul>
                <li class="btn"><a href="">Accueil</a></li>
                <li class="btn"><a href="{{asset('client')}}">Inscription</a></li>
                <li class="btn"><a href="{{asset('connexion')}}">Connexion</a></li>
                <li class="btn"><a href="{{asset ('voyager')}}">Voyager</a></li>
            </ul>
        </nav>
       </div>
      </header>
        <div class=" back">
            
        <div class="fond">
            <main>
                <section>
                    <h2>Nos services </h2>
                      <ul>
                          <li>Vente de billets en ligne</li>
                          <li>Réservation des billet en ligne</li>
                      </ul>
                </section>
            </main>
        </div>
        <img src="bus3.jpg" alt="fondimg">
        </div>
      <footer>
              <section>
                  <p><h2>Contacter nous au :</h2>
                   <div class="end">
                    <ul>
                        <li><a href="mailto: TravelAgency@gùail.com">TravelAgency@gmail.com </a></li><br>
                        <li><a href=""> <img src="im1.png" alt="" class="im"></a></li><br>
                        <li><a href=""> <img src="im2.png" alt="" class="im"></a></li><br>
                        <li><a href=""> <img src="im3.jpeg" alt="" class="im"></a></li><br>
                        <li>(+237) 6838884676</li>
                    </ul>
                  
                   </div>
                    </p>
                    
              </section>
          
      </footer>
    
    </body>
</html>