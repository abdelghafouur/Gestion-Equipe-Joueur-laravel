<?php

use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| All
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::controller(AuthenticateController::class)->group(function () {
    Route::get('/login', 'index')->name('accueil');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::resource('equipes', EquipeController::class);
    Route::resource('joueurs', JoueurController::class);
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::controller(SearchController::class)->prefix('search')->group(function () {
        Route::get('/liga', 'searchLiga')->name('searchLiga');
        Route::get('/equipeChampionnat', 'searchEquipeChampionnat')->name('searchEquipeChampionnat');
        Route::get('/searchJoueurEtEquipe', 'searchJoueurEtEquipe')->name('searchJoueurEtEquipe');
        Route::get('searchJoueurParEquipe', 'searchEquipe')->name('searchEquipe');
        Route::post('searchJoueurParEquipe', 'searchJoueurParEquipe')->name('searchJoueurParEquipe');
        Route::match(['GET', 'POST'], 'searchChampionnat', 'searchChampionnat')->name('searchChampionnat');
    });
});
