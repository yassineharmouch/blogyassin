<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable = [
    	'nom', 'prenom', 'matricule', 'module','image'
    ];
}
