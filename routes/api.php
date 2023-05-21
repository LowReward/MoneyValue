<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurrenciesController;
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
