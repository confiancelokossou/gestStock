<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\model\Fournisseur;
use Flashy;
class FournisseurController extends Controller
{
    public function index()
    {
        $fournisseur = Fournisseur::all();
        return view('fournisseur.index', compact('fournisseur'));
    }

    public function addFournisseur(Request $request)
    {
        $fournisseur = new Fournisseur;
        $fournisseur->nom = $request->input('nom');
        $fournisseur->adresse = $request->input('adresse');
        $fournisseur->ville = $request->input('ville');
        $fournisseur->pays = $request->input('pays');
        $fournisseur->adresseMail = $request->input('mail');
        $fournisseur->telephone = $request->input('telephone');
        $fournisseur->save();
        Flashy::info('Fournisseur ajouté avec succès');
        return redirect(route('fournisseur'));
    }


    public function editFournisseur(Request $request, $id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->nom = $request->input('nom');
        $fournisseur->adresse = $request->input('adresse');
        $fournisseur->ville = $request->input('ville');
        $fournisseur->pays = $request->input('pays');
        $fournisseur->adresseMail = $request->input('mail');
        $fournisseur->telephone = $request->input('telephone');
        $fournisseur->save();
        /*Flashy::mutedDark('Enregistrement modifié avec succès');
        return redirect(route('fournisseur'));*/
    }

    public function destroyFournisseur($id){
        $fournisseur= Fournisseur::find($id);
        $fournisseur->delete();
        return $fournisseur;
    }
}
