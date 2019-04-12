<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom', 'adresse', 'pays', 'ville', 'adresseMail', 'telephone'];
}
