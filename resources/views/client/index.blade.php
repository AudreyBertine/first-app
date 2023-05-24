<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{url('/client-store')}}" method="POST">
    <!-- protège le formulaire contre les mauvaises intrusions, -->
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom"> <br>
    <label for="prenom" >Prénom:</label>
    <input type="text" name="prenom" id="prenom"> <br>
    <label for="numtel">Numéro de téléphone:</label>
    <input type="tel" name="numerotelephone" id="numtel"> <br>
    <label for="passw">Mot de passe:</label>
    <input type="password" name="password" id="passw"> <br>
    <input type="submit" name ="" value="Envoyer">

</form>
</body>
</html>