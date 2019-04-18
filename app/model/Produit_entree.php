<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Produit_entree extends Model
{
    protected $fillable = ['entree_id', 'produit_id', 'quantite_entree', 'montant', 'prix_achat_unitaire'];

    public function entree()
    {
    	return $this->belongsTo('App\model\Entree');
    }

    public function produit()
    {
    	return $this->belongsTo('App\model\Produit');
    }
}
