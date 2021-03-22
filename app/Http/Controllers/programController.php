<?php

namespace App\Http\Controllers;
use App\program;

use Illuminate\Http\Request;

class programController extends Controller
{
    public function formulaire(){

        return view('pages/programmation');
    }

    public function traitement(){

        request()->validate(
            [
                'jour'=> ['required'],
                'start_hour'=> ['required'],
                'end_hour'=> ['required'],
                'place'=> ['required','string'],
            ]
            );
            
        $program =  program::create([
            'jour' => request('jour'),
            'start_hour' => request('start_hour'),
            'end_hour' => request('end_hour'),
            'place' => request('place'),
           
        ]) ;
         return view('pages/programmation');
        }
       
}

