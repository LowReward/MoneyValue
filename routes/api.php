<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurrenciesController;
use App\Http\Controllers\PairsController;
use App\Http\Controllers\ConversionPairController;
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

Route::post('login', [AuthController::class, 'login'])
    ->name('login');


Route::get('/currencies', [CurrenciesController::class, 'index']);
// Sanctum sera utilisé plus tard pour la redirection au login si pas de token
//Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/currencies', [CurrenciesController::class, 'store']);
    Route::put('/currencies/{currency}', [CurrenciesController::class, 'update']);
    Route::delete('/currencies/{currency}', [CurrenciesController::class, 'destroy']);
//});

Route::get('/pairs', [PairsController::class, 'index']);
// Sanctum sera utilisé plus tard pour la redirection au login si pas de token
//Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/pairs', [PairsController::class, 'store']);
    Route::put('/pairs/{pair}', [PairsController::class, 'update']);
    Route::delete('/pairs/{pair}', [PairsController::class, 'destroy']);
//});


Route::post('/conversion', [ConversionPaircontroller::class, 'convert']);
