<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserDetailsController;
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

Route::get('/', [DefaultController::class ,'index']);
Route::get('/about' ,'App\Http\Controllers\DefaultController@about');
Route::get('/login' ,[LoginController::class,'addnames']);

Route::get('/logins' ,[LoginController::class,'showlogins']);
Route::post('/save',[UserDetailsController::class ,'save']);

