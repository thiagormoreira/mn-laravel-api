<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/', function () {
    return response()->json(['message' => 'MN Laravel Api!']);
});

Route::get('/users', [UserController::class,'index']);
Route::get('/users/{id}', [UserController::class,'show']);
Route::put('/users/{id}', [UserController::class,'update']);
Route::delete('/users/{id}', [UserController::class,'delete']);
Route::post('/users', [UserController::class,'store']);

Route::get('/addresses', [AddressController::class,'index']);

Route::get('/cities', [CityController::class,'index']);

Route::get('/states', [StateController::class,'index']);

