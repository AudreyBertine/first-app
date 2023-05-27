<!DOCTYPE html>
<html lang="fr">
    <head> 
        <meta charset="utf-8">
        <link rel="stylesheet" href="c1.css">
        <title> VEUILLEZ REMPLIE CE FORMULAIRE </title>
        <link rel="stylesheet" href="voyager style.css">
    </head>
    <body>
        <header>
            <h1>formulaire de payement de billets</h1>
            <nav>
              <ul>
                <li class="bt"><a href="acceuil.blade.php">Accueil</a></li>
                <li class="bt"><a href="inscription.blade.php">Inscription</a></li>
                <li class="bt"><a href="connexion.blade.php">Connexion</a></li>
                <li class="bt"><a href=""> Voyager</a></li>
              </ul>
            </nav>
          </header>
           <div class="formulaire">
            <main>
            <form method="post" action="/voyager">
                @scrf
                <div class="titre">
                    <div class="tete">
                        <div class="entete">
                            <p> <strong> Formulaire de payement du billet de voyage </strong> </p>
                            <small><em> Travel ticket payment form </em></small>
                            <br/>
                        </div>
                        <div class="remplir">
                            <div class="name">
                                <label   for="noms"> Nom(s): </label>
                            <input type="text" name="noms" id="noms" min="10" max="40" placeholder="FOMO KAMGANG" focus="focus" required="required">
                            <br/>
                            <small><em> Traveler Name </em></small>
                            </div>
                            <br/>
                            <div class="surname">
                                <label for="prenoms"> Prénom(s): </label>
                                <input type="text" name="prenoms" id="prenoms" min="10" max="40" placeholder="VIDAL VALDIMY" focus="focus" required="required">
                                <br/>
                                <small><em> Traveler surname </em></small>
                            </div>
                            <br>
                            <div class="phone">
                                <label for="numero de telephone"> Numéro de téléphone: </label>
                                <input type="text" name="numtel" id="numtel" placeholder="(+237) 658775620" focus="focus" required="required">
                                <br/>
                                <small><em> Phone number </em></small>
                            </div>
                        </div>
                        <br>
                        <div class="info">
                            <div class="depart">
                                <label for="ville de depart"> Ville de départ: </label>
                                <select name="villedepart" id="villedepart">
                                    <optgroup label="Région de l'Ouest">
                                        <option value="Bafoussam"> Bafoussam </option>
                                        <option value="Dschang"> Dschang </option>
                                    </optgroup>
                                    <optgroup label="Région du Centre">
                                        <option value="Biyemassi"> Biyemassi </option>
                                        <option value="Eleveur"> Eleveur </option>
                                        <option value="Tongolo"> Tongolo </option>
                                        <option value="Terminus"> Terminus </option>
                                    </optgroup>
                                    <optgroup label="Région du Littoral">
                                        <option value="Nkonsamba"> Nkonsamba </option>
                                        <option value="Loum"> Loum </option>
                                        <option value="Bonabéri"> Bonabéri </option>
                                        <option value="Village"> Village </option>
                                        <option value="Bépanda"> Bépenda </option>
                                        <option value="Brazaville"> Brazaville </option>
                                        <option value="PK14"> PK14 </option>
                                        <option value="PK31"> PK31 </option>
                                    </optgroup>
                                </select>
                            </div>
                            <small><em> Departure city </em></small>
                            <br/><br/>
                            <div class="hours">
                                <label for="Heure de depart"> Heure de départ: </label>
                                <select name="heuredepart" id="heuredepart">
                                    <option> 08H00 </option>
                                    <option> 15H00 </option>
                                    <option> 21H00 </option>
                                </select>
                            </div>
                            <br/>
                            <div class="arrivee">
                                <label for="ville d'arrivee"> Ville d'arrivée: </label>
                                <select name="villearrivee" id="villearrivee">
                                    <optgroup label="Région de l'Ouest">
                                        <option value="Bafoussam"> Bafoussam </option>
                                        <option value="Dschang"> Dschang </option>
                                    </optgroup>
                                    <optgroup label="Région du Centre">
                                        <option value="Biyemassi"> Biyemassi </option>
                                        <option value="Eleveur"> Eleveur </option>
                                        <option value="Tongolo"> Tongolo </option>
                                        <option value="Terminus"> Terminus </option>
                                    </optgroup>
                                    <optgroup label="Région du Littoral">
                                        <option value="Nkonsamba"> Nkonsamba </option>
                                        <option value="Loum"> Loum </option>
                                        <option value="Bonabéri"> Bonabéri </option>
                                        <option value="Village"> Village </option>
                                        <option value="Bépanda"> Bépenda </option>
                                        <option value="Brazaville"> Brazaville </option>
                                        <option value="PK14"> PK14 </option>
                                        <option value="PK31"> PK31 </option>
                                    </optgroup>
                                </select>
                            </div>
                            <small><em> Arrival city </em></small>
                        </div><br/>
                        <div class="date">
                            <label for="date"> Date: </label>
                            <input type="date" name="date" id="date">
                        </div>
                        <small><em> Date </em></small>
                        <br/><br/>
                        <div class="Nombre de place">
                            <label for="Nombre de place"> Nombre de place: </label>
                            <input type="text" name="nombreplace" id="nombreplace" value="1" minlength="1" maxlength="1">
                            <br/>
                            <small><em> Place number </em></small>
                        </div>
                    </div>
                    <a href=""><img  id="image1" src="imagesite/orange.jpeg"></a>
                    <a href=""><img id="image2" src="imagesite/mtn.jpeg"></a>
                    <a href=""><img id="image3" src="imagesite/combank.png"></a>
                    <a href=""><img class="image" src="imagesite/express.png"></a>
                    <a href=""><img class="image"id="image5" src="imagesite/express E.png"></a>
                    <br/>
                    <div class="submit">
                        <input type="submit" value="Envoyer">
                    </div>
                </div>
        </main>
        <footer>
            <p><h2>contacter nous au :</h2>
                <div class="end">
                 <ul>
                     <li><a href="mailto: TravelAgency@gùail.com">TravelAgency@gmail.com </a></li><br>
                     <li>+2376838884676</li>
                 </ul>
                 <a href="head">aller vers le haut</a>
                </div>
            <p>
    </footer>
        </form>
           </div>
    </body>
</html>