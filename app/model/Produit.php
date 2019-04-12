<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['libelle', 'quantiteDisp', 'Prix', 'valeurStock', 'stockMin', 'seuilAlerte', 'categorie_id'];

    public function categorie()
    {
    	return $this->belongsTo('App\model\Categorie', 'categorie_id');
    }
}
