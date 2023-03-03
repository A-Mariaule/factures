<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;

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

//home
Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);

// routes factures
Route::get('/factures', [FactureController::class, 'index'])->name('Factures.index');

Route::get('/facture/create', [FactureController::class, 'create']);

Route::get('/facture/show/{post:id}', [FactureController::class, 'show']);

Route::get('/facture/edit/{id}', [FactureController::class, 'edit']);

Route::patch('/facture/edit/{post:id}', [FactureController::class, 'update']);

Route::post('/facture/create', [FactureController::class, 'store']);

Route::delete('/facture/destroy/{id}', [FactureController::class, 'destroy']);


// Routes clients

Route::get('/clients', [ClientController::class, 'index'])->name('Clients.index');

Route::get('/client/create', [ClientController::class, 'create']);

Route::get('/client/show/{post:id}', [CLientController::class, 'show']);

Route::get('/client/edit/{id}', [ClientController::class, 'edit']);

Route::patch('/client/edit/{post:id}', [ClientController::class, 'update']);

Route::post('/client/create', [ClientController::class, 'store']);

Route::delete('/client/destroy/{id}', [ClientController::class, 'destroy']);
