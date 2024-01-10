<?php

use App\Http\Controllers\Inscriptioncontroller;
use App\Http\Controllers\RoomsController;
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


//CRUD SALLES
Route::get('/salles',[RoomsController::class, 'index']);
   


Route::get('/inscription', [Inscriptioncontroller::class, 'inscription']);
Route::post('/inscription', [Inscriptioncontroller::class, 'create']);

Route::get('/salle/nouvelle', [RoomsController::class, 'create']);
Route::post('/salle/nouvelle', [RoomsController::class, 'store']);

