<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ValidateController extends Controller
{
    public function validation($id){
        DB::update('update utilisateurs set statut = \'actif\' where id =?' , [$id]);
        return ('yeah le code marche');
    }

    public function suppression($id){
        DB::delete('delete from utilisateurs where id =?' , [$id]);
        return ('yeah le code marche');
    }
}
