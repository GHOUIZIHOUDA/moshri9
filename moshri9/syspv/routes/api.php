<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComposantController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\TypeprojetController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\ProjetHasComposantController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/





Route::resource('client',ClientController::class);
Route::resource('composant',ComposantController::class);
Route::resource('departement',DepartementController::class);
Route::resource('employe',EmployeController::class);
Route::resource('facture',FactureController::class);
Route::resource('projet',ProjetController::class);
Route::resource('secteur',SecteurController::class);
Route::resource('status',StatusController::class);
Route::apiResource('temoignage',TemoignageController::class);
Route::resource('typeprojet',TypeprojetController::class);
Route::resource('ville',VilleController::class);
Route::resource('projet/composant',ProjetHasComposantController::class);





