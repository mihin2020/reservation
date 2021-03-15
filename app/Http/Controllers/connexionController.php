<?php

namespace App\Http\Controllers;

use App\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class connexionController extends Controller
{
    public function formulaire(){
        return view('pages/connexion');
    }

    public function traitement(){

        request()->validate([
            'email'=> ['required','email'],
            'password'=> ['required','confirmed','min:8'],
        ]);

       $resultat = auth() ->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);
        
        if($resultat){

            return redirect('/pages/dashboard');
        }
        
            return back()->withInput()->withErrors([
                'email'=> 'Vos identifiants sont incorrects',
            ]);
    }
       
}
