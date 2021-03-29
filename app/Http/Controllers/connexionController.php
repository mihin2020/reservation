<?php

namespace App\Http\Controllers;

use App\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class connexionController extends Controller
{
    use AuthenticatesUsers;

    public function formulaire(){
        return view('pages/connexion');
    }

    public function traitement(Request $request){

            request()->validate([
            'email'=> ['required','email'],
            'password'=> ['required','min:3','max:6'],
        ]);
    /**
     * Handle an authentication attempt.
     *
     *  @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    
       $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)&& $request->email=='admi@gmail.com') {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }elseif(Auth::attempt($credentials)&& $request->email !=='admi@gmail.com'){
            return redirect()->intended('/acceuil');
        }else{
            return redirect()->intended('/inscription');
        }
        
       
    }/*
    public function redirectTo (Request $request,$utilisateur)
    {
        if ($utilisateur->role=='admi'){
            return redirect('/pages/dashboard'));
            
        }
        else { 
            return redirect(route('/pages/acceuil'));
        }
    }/*
    public function redirectTo(){
        if (Auth::utilisateur()->role->pluck('nom')->contains('admi')){
            return '/pages/dashboard';
        
        }elseif(Auth::utilisateur()->role->pluck('nom')->contains('apprenant'))
            return '/pages/acceuil';
        
    }*/
       
}
