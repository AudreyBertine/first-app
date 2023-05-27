<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    public function inscription(){
        return view("client.inscription");
       // return dd(Client::all());
    }

    public function accueil(){
        return view("accueil");
    }
    public function store(Request $_request){
        // affiche toutes les variables qui ont été envoyé dans ma requete
        //dd($_request->all());
        //dd($_request->post());
        $client = new Client;
        $client->noms = request('noms');
        $client->prenoms = request('prenoms');
        $client->numtel= request('numtel');
        $client->password= request('password');
        $client->save();
        //retourne la page sur laquelle la requete a été envoyé
        return redirect()->back();
    }
}
