<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\program;
use Illuminate\Support\Facades\DB;

class Display_ProgramController extends Controller
{
    public function programmation(){
        $programs = DB::table('programs')->get();
        return view('/pages/dashboard',['programs'=>$programs]);
    }

}
