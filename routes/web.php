<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleController;
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

/*  Переписываем route по умолчанию
    под свои нужды
*/

Route::get('/', [SimpleController::class, 'index']);
Route::post('/simplify', [SimpleController::class, 'create']);
