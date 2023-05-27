<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function voyager(){
        return view("voyager");
       // return dd(Client::all());
    }

    public function reserve(Request $_request){
        // affiche toutes les variables qui ont été envoyé dans ma requete
        //dd($_request->all());
        $Reservation = new Reservation;
        $Reservationt->villedepart = request('villedepart');
        $Reservation->heuredepart = request('heuredepart');
        $Reservation->villearrivee= request('villearrivee');
        $Reservation->date= request('date');
        $Reservation->save();
        //retourne la page sur laquelle la requete a été envoyé
        return redirect()->back();
    }
}
