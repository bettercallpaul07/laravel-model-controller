<?php

use Illuminate\Support\Facades\Route;

//importiamo il Controller per la gestione della rotta dell'index
use App\Http\Controllers\Guest\MainController as GuestController;

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

//utilizziamo il controller per gestire la rotta dell'index
Route::get(
    '/',
    [GuestController::class, "index"]
);
