<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactureController;

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

Route::get('/factures', [FactureController::class, 'index'])->name('factures.index');

Route::get('/facture/create', [FactureController::class, 'create']);

Route::get('/facture/show/{post:id}', [FactureController::class, 'show']);

Route::get('/facture/edit/{id}', [FactureController::class, 'edit']);

Route::patch('/facture/edit/{post:id}', [FactureController::class, 'update']);

Route::post('/facture/create', [FactureController::class, 'store']);

Route::delete('/facture/destroy/{id}', [FactureController::class, 'destroy']);
