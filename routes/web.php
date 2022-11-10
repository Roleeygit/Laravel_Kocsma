<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KocsmaController;

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

Route::get('/uj-ital', [KocsmaController::class, 'ujital']);
Route::post('/veglegesit-ital', [KocsmaController::class, 'veglegesitital']);
Route::get('/kocsmaadat', [KocsmaController::class, 'kocsmaadat']);
