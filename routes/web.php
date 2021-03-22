<?php

use App\Http\Controllers\inscriptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Mail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Display_ProgramController;
use App\Http\Controllers\register_courController;
use App\Http\Controllers\acceuilController;
use App\Http\Controllers\DisplayController;


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


/*
    Route::get('/test', function () {
        $programs = DB ::table('programs')->get();
        return view('/pages/test',compact('programs'));
      
    });
    */

Route::get('/register_cour', 'register_courController@register');

Route::get('/inscription', 'inscriptionController@formulaire');

Route::post('/inscription', 'inscriptionController@traitement');

Route::get('/connexion', 'connexionController@formulaire');

Route::post('/connexion', 'connexionController@traitement');

Route::get('/dashboard', 'dashboardController@acceuil');

Route::get('/deconnexion', 'dashboardController@deconnexion');

Route::get('/programmation', 'programController@formulaire');

Route::post('/program', 'programController@traitement');

Route::get('/dashboard', [Display_ProgramController::class, 'programmation']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/acceuil', 'acceuilController@acceuil');

Route::get('/register_cour', 'DisplayController@name');

/*Route::groupe(['middleware'=>['auth','admin'],'prefix'=>'admin'],function(){
    Route::get('/acceuil','acceuilController@acceuil')->name('/pages/acceuil');
});*/

/*Route::groupe(['middleware'=>['auth','apprenant'],'prefix'=>'apprenant'],function(){
    Route::get('/dashboard','dashboardController@acceuil')->name('/pages/dashboard');
});*/