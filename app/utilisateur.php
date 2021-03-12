<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'role','email','password','confirm_password'
    ];
}
