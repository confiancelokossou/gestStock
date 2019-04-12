<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['libelle'];

    public function produit()
    {
    	return $this->hasMany('App\model\Produit');
    }
}
