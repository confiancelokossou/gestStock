<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Entree;
use App\model\Produit_entree;
use App\model\Fournisseur;
use App\model\Produit;

class CommandeController extends Controller
{
    public function index(){
        $commande = Entree::with('Fournisseur')->get();
        $fournisseur = Fournisseur::all();
        $produit = Produit::all();
        return view('entree.index', compact('commande', 'fournisseur', 'produit'));
    }
}
