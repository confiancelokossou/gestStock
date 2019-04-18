<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    protected $fillable = ['libelle','fournisseur_id', 'date_entree'];

    public function fournisseur()
    {
    	return $this->belongsTo('App\model\Fournisseur');
    }
}
