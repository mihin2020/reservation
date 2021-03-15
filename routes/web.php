<?php

use App\Http\Controllers\inscriptionController;
use Illuminate\Support\Facades\Route;

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



Route::get('/inscription', 'inscriptionController@formulaire');

Route::post('/inscription', 'inscriptionController@traitement');

Route::get('/connexion', 'connexionController@formulaire');

Route::post('/connexion', 'connexionController@traitement');

Route::get('/dashboard', 'dashboardController@acceuil');

Route::get('/deconnexion', 'dashboardController@deconnexion');

Route::view('/programmation', '/pages/programmation');
