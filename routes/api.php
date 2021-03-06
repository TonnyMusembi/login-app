<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyAPI;
//use App\Http\Controllers\CompanyNameController;

use App\Http\Controllers\Api\CompanyController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get( 'data',[ DummyAPI::class,'getData']);
//Route::get( 'data',[CompanyNameController::class,]);
Route::resource('Company', App\Http\Controllers\CompanyNameController::class);

Route::apiResource('companies', CompanyController::class);

