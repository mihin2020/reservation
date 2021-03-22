<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class register_courController extends Controller
{
    public function register(){
        return view('/pages/register_cour');
    }
}
