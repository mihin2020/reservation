<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function name(){

        $name = DB::table('utilisateurs')->get();
        return view('/pages/register_cour',['utilisateurs'=>$name]);

    }
}
