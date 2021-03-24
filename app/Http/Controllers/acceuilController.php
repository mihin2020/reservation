<?php

namespace App\Http\Controllers;

use App\program;
use Illuminate\Http\Request;

class acceuilController extends Controller
{
    public function acceuil (){
        return view('/pages/acceuil');
    }
}
