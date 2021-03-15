<?php

namespace App\Http\Controllers;

use App\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
   public function acceuil(){
        /*var_dump(auth()->guest());

        if(auth()->guest()){
            return redirect('/connexion')->withErrors([

                'email'=>"Merci de bien vouloir vous connecter dabord.",
            ]);
        }*/
        return view('/pages/dashboard');
    }
    public function deconnexion(){
        Auth::logout();
        return redirect('/connexion');
    }
}
