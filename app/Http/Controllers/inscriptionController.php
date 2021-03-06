<?php

namespace App\Http\Controllers;

use App\Mail\Register;
use App\Notifications\RegisteredUser;
use App\utilisateur;
use Illuminate\Support\Facades\Mail;




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
                'email'=> ['required','email'],
                'password'=> ['required','confirmed','min:3','max:6'],
                'password_confirmation'=> ['required'],
            ]
            );
            
    $utilisateur =  utilisateur::create([
                'nom' => request('nom'),
                'prenom' => request('prenom'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
                'password_confirmation' => bcrypt(request('password_confirmation')),
                'confirmation_token' =>bcrypt('confirmation_token'),
        ]) ;

                 Mail::to($utilisateur)->send(new Register($utilisateur));
                 return view ('pages/success');

    }

    
}
