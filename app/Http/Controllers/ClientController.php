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
        $client->nom = request('nom');
        $client->prenom = request('prenom');
        $client->numtel= request('numerotelephone');
        $client->password= request('password');
        $client->save();

        return redirect()->back();
    }
}
