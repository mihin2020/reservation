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

    public function traitement(Request $request){

       request()->validate([
            'email'=> ['required','email'],
            'password'=> ['required','min:8'],
        ]);
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }
        
    }
       
}
