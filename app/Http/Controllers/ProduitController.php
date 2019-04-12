<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Categorie;
use App\model\Produit;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    public function index(){
        $categorie = Categorie::all();
        $stMin = DB::select('select * from produits where stockMin >= quantiteDisp');
        $produit = Produit::with('Categorie')->get();
        return view('produit.index', compact('produit', 'categorie', 'stMin'));
    }

    public function addProduit(Request $request){
        if ($request->input('nvCategorie')){
            $categorie = new Categorie;
            $categorie->libelle = $request->input('nvCategorie');
            $categorie->save();

            $cat = Categorie::all(['id']);
             $cat = $cat->last()->getAttributes();
             $categorie_id = $cat['id'];

             $valeurStock = ((int)$request->input('addQte') * (int)$request->input('addPrix'));

             $produit = new Produit();
             $produit->libelle = $request->input('addLibelle');
             $produit->quantiteDisp = $request->input('addQte');
             $produit->Prix = $request->input('addPrix');
             $produit->valeurStock = $valeurStock;
             $produit->stockMin = $request->input('addStockMinimal');
             $produit->seuilAlerte = $request->input('addSeuilAlerte');
             $produit->categorie_id = $categorie_id;

             $produit->save();
        }else{
            $valeurStock = ((int)$request->input('addQte') * (int)$request->input('addPrix'));

            $produit = new Produit();
             $produit->libelle = $request->input('addLibelle');
             $produit->quantiteDisp = $request->input('addQte');
             $produit->Prix = $request->input('addPrix');
             $produit->valeurStock = $valeurStock;
             $produit->stockMin = $request->input('addStockMinimal');
             $produit->seuilAlerte = $request->input('addSeuilAlerte');
             $produit->categorie_id = $request->input('categorie');
             $produit->save();
        }

    }


    public function editProduit(Request $request, $id){
        $valeurStock = ((int)$request->input('editQte') * (int)$request->input('editPrix'));
        $produit = Produit::find($id);
        $produit->libelle = $request->input('editLibelle');
        $produit->quantiteDisp = $request->input('editQte');
        $produit->Prix = $request->input('editPrix');
        $produit->valeurStock = $valeurStock;
        $produit->stockMin = $request->input('editStockMinimal');
        $produit->seuilAlerte = $request->input('editSeuilAlerte');
        $produit->categorie_id = $request->input('categorie');
        $produit->save();
    }

    public function destroyProduit($id){
        $produit = Produit::find($id);
        $produit->delete();
    }
}
