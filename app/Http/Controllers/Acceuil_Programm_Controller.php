<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\program;

class Acceuil_Programm_Controller extends Controller
        {
                public function acceuil(){
                $programs = DB::table('programs')->get();
                return view('/pages/acceuil',['programs'=>$programs]);
        }
}