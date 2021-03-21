<?php

use App\Http\Controllers\inscriptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Mail;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



    Route::get('/test', function () {
        $programs = DB ::table('programs')->get();
        return view('/pages/test',compact('programs'));
      
    });
    



Route::get('/inscription', 'inscriptionController@formulaire');

Route::post('/inscription', 'inscriptionController@traitement');

Route::get('/connexion', 'connexionController@formulaire');

Route::post('/connexion', 'connexionController@traitement');

Route::get('/dashboard', 'dashboardController@acceuil');

Route::get('/deconnexion', 'dashboardController@deconnexion');

Route::get('/programmation', 'programController@formulaire');

Route::post('/program', 'programController@traitement');

//Route::get('/send-email', [MailController::class,'sendMail']);


//Route::get('/test', [Display_ProgramController::class, 'programmation']);

Route::get('/home', 'HomeController@index')->name('home');
