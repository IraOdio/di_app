<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/app',[\App\Http\Controllers\AppController::class,'app']);

Route::get('/sprint',[\App\Sprint\Controllers\SprintController::class,'planningSprint']);

Route::get('/product',[\App\Products\Controllers\ProductController::class,'index']);

Route::get('/game',[\App\Game\Controllers\GameController::class,'index']);
