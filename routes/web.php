<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\CityController;
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
Route::get('/actor/{actor_id}',[ActorController::class,'index']);
Route::get('/cities/{country_id}',[CityController::class,'index']);


Route::get('/cities',[CityController::class,'index']);
Route::get('/actor',[ActorController::class,'index']);
