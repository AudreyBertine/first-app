<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="c2.css"> 
    </head>
    <body>
        <header>
            <div class="header">
                <div class="left">
                    <h4>REPUBLIQUE DU CAMEROUN</h4>
                    <i> Paix-Travail-Patrie</i>
                    <h4>MINISTERE DES TRANSPORTS</h4>
                    <h4 class="bold">AGENCE DE VOYAGE</h4>
                    <i>
                    <p font-size:2px;>Scolae Thesaurus Dschangensis Ibi Cordum</p>
                    <p>BP 101, Dschang (Cameroun)-Tel/Fax:(237)233 45 13 81</p>
                    <p>Website:<a href="travel-agency.org">travel-agency.org</a></p>
                    <p>E-mail: <a href="mailto:travel@agency.org">travel@agency.org</a></p>
                    </i>
                    </div>
                    <div class="logo"><img src="logo.png" alt="Logo de l'agence de voyage"></div>
                    <div class="right">
                        <p>REPUBIC OF CAMEROON</p>
                        <i>Peace-Work-Fatherland</i>
                        <h4>MINISTRY OF TRANSPORTATION</h4>
                        <h4>AGENCY TRAVEL</h4>
                        <i>
                        <p>BP 15 Dschang (Cameroun)</p>
                        <p>Tel/Fax:(237)233 45 13 81</p>
                        <p>E-mail: <a href="mailto:group.travel@agency.org">group.travel@agency.org</a></p>
                        </i>
                    </div>
                </div>
            </div>
        </header>
        <?php
            const numeroticket=123658;
            const numbus=2;
            const numeropayement='LMH0023';
            const numerosiege= 10;
            $name=$_POST['noms'];
            $surname=$_POST['prenoms'];
            $number=$_POST['numtel'];
            $depart=$_POST['villedepart'];
            $hours=$_POST['heuredepart'];
            $arrivee=$_POST['villearrivee'];
            $date=$_POST['date'];
            $nombreplace=$_POST['nombreplace'];
            echo "<div class=tout>";
            echo "<b>Numéro du ticket:</b>"." "."<span id=numt>"."N°".numeroticket."</span>".'<br/>';
            echo "<small>"."Ticket number"."</small>".'<br/>'.'<br/>';
            echo "<b>Numéro de payement:</b>"." "."<span>".numeropayement."</span>".'<br/>';
            echo "<small>"."Payement number"."</small>".'<br/>'.'<br/>';
            echo "<b>Nom(s):</b>"." "."<span>".$name."</span>".'<br/>';
            echo "<small>"."name's"."</small>".'<br/>'.'<br/>';
            echo "<b>Prénom(s):</b>"." "."<span>".$surname."</span>".'<br/>';
            echo "<small>"."surname's"."</small>".'<br/>'.'<br/>';
            echo "<b>Numéro de téléphone:</b>"." "."<span>".$number."</span>".'<br/>';
            echo "<small>"."Phone number"."</small>".'<br/>'.'<br/>';
            echo "<b>Ville de départ:</b>"." "."<span>".$depart."</span>".'<br/>';
            echo "<small>"."Departure city"."</small>".'<br/>'.'<br/>';
            echo "<b>Heure de départ:</b>"." "."<span>".$hours."</span>".'<br/>';
            echo "<small>"."Departure hour"."</small>".'<br/>'.'<br/>';
            echo "<b>Ville d'arrivée:</b>"." "."<span>".$arrivee."</span>".'<br/>';
            echo "<small>"."Arrival city"."</small>".'<br/>'.'<br/>';
            echo "<b>Date:</b>"." "."<span>".$date."</span>".'<br/>';
            echo "<small>"."Date"."</small>".'<br/>'.'<br/>';
            echo "<b>Numéro du bus:</b>"." "."<span>".numbus."</span>".'<br/>';
            echo "<small>"."Bus number"."</small>".'<br/>'.'<br/>';
            echo "<b>Nombre de place:</b>"." "."<span>".$nombreplace."</span>".'<br/>';
            echo "<small>"."Place number"."</small>".'<br/>'.'<br/>';
            echo "<b>Numéro du siège:</b>"." "."<span>".numerosiege."</span>".'<br/>';
            echo "<small>"."Seat number"."</small>".'<br/>'.'<br/>';
            $initmontant=5000;
            echo "<b>Montant:</b>"." "."<span id=mont>".$initmontant." "."FCFA"."</span>".'<br/>';
            echo "<small>"."Amount"."</small>";
        echo "</div>";
        ?>
    </body>
</html>
        
        