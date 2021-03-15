<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        auth()->logout();
        return redirect('/connexion');
    }
}
