<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Client;
use Flashy;
class ClientController extends Controller
{

    public function index()
    {
        $client = Client::all();
        return view('client.index', \compact('client'));
    }

    public function addClient(Request $request){
        $client = new Client;
        $client->nom = $request->input('nom');
        $client->adresse = $request->input('adresse');
        $client->ville = $request->input('ville');
        $client->pays = $request->input('pays');
        $client->adresseMail = $request->input('mail');
        $client->telephone = $request->input('telephone');
        $client->save();


    }

    public function editClient(Request $request, $id){
        $client = Client::find($id);
        $client->nom = $request->input('nomClient');
        $client->adresse = $request->input('adresseClient');
        $client->ville = $request->input('villeClient');
        $client->pays = $request->input('pays');
        $client->adresseMail = $request->input('mailClient');
        $client->telephone = $request->input('telephoneClient');
        $client->save();
    }

    public function destroyClient($id){
        $client = Client::find($id);
        $client->delete();
    }
}
