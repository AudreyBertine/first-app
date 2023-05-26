<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    public function index(){
        return view("client.index");
       // return dd(Client::all());
    }
    public function store(Request $_request){
        // affiche toutes les variables qui ont été envoyé dans ma requete
        //dd($_request->all());
        $client = new Client;
        $client->noms = request('noms');
        $client->prenoms = request('prenoms');
        $client->numerotelephones= request('numerotelephones');
        $client->passwords= request('passwords');
        $client->save();
        //retourne la page sur laquelle la requete a été envoyé
        return redirect()->back();
    }
}
