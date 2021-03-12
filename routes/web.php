<?php

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

Route::get('connexion', function () {
    return view('pages/connexion');
});

Route::get('/inscription', function () {
    return view('pages/inscription');
});
Route::post('/inscription', function () {
    $utilisateur = new App\utilisateur() ;
    $utilisateur->nom = request('nom');
    $utilisateur->prenom = request('prenom');
    $utilisateur->role = request('role');
    $utilisateur->email = request('email');
    $utilisateur->password = bcrypt(request('password'));
    $utilisateur->confirm_password = bcrypt(request('confirm_password'));
    $utilisateur->save();
    
    return ('le formulaire a ete bien recu ou bien'.' '.request('email'));
    return ('formulaire bien recu');
});

