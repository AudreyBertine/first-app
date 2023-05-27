<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', function () {
      return view('about');
});
//affiche notre page d'accueil
Route::get('/accueil', function(){
    return view('accueil');
});

//afficher notre page inscription
Route::get('/client', [ClientController::class,"inscription"]);
// enregistre un client dans bd
Route::post('/client-store', [ClientController::class,"store"]);
//afficher notre page voyager
Route::get('voyager',[ReservationController::class,"voyager"]);


Route::post('voyager-reserve', [ReservationController::class,"reserve"]);

Route::get('/about', function () {
    return view('about');
});



Route::get('/voyager', function(){
    return view('voyager');
});
