<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes([
    "register" => false
]);

Route::get('/', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController');
});

Route::resource('indicateurs', 'IndicateurController')->middleware('auth');
Route::resource('sites', 'SiteController')->middleware('auth');
Route::resource('locaux', 'LocalController')->middleware('auth');
Route::resource('equipements', 'EquipementController');
Route::resource('famille_equipements', 'FamilleEquipementController')->middleware('auth');
Route::resource('calendriers_scolaire', 'CalendrierScolaireController')->middleware('auth');
Route::resource('fermetures', 'FermetureController')->middleware('auth');
Route::resource('taux_disponibilites', 'TauxDisponibiliteController')->middleware('auth');
Route::resource('niveaux_retenues', 'NiveauRetenueController')->middleware('auth');
Route::resource('temps_retablissements', 'TempRetablissementController')->middleware('auth');
Route::resource('reactivites', 'ReactiviteController')->middleware('auth');
Route::resource('periodicites', 'PeriodiciteController')->middleware('auth');
Route::resource('periodes', 'PeriodeController')->middleware('auth');
Route::resource('operations', 'OperationController')->middleware('auth');
Route::resource('valeurs_indicateurs', 'ValeurIndicateurController')->middleware('auth');
