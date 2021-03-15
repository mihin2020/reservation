<?php

namespace App\Http\Controllers;

use App\utilisateur;

class inscriptionController extends Controller
{
    public function formulaire(){

        return view('pages/inscription');
    }

    public function traitement(){

        request()->validate(
            [
                'nom'=> ['required','string'],
                'prenom'=> ['required','string'],
                'role'=> ['required','string'],
                'email'=> ['required','email'],
                'password'=> ['required','confirmed','min:3','max:6'],
                'password_confirmation'=> ['required'],
            ]
            );
            
        $utilisateur =  utilisateur::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'role' => request('role'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'password_confirmation' => bcrypt(request('password_confirmation')),
        ]) ;
       
        return view ('pages/success');

    }
}
