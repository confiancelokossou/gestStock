<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $fillable = ['nom', 'adresse', 'pays', 'ville', 'adresseMail', 'telephone'];

}
