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

// Route pour la connexion
Route::post('login', [AuthController::class, 'login'])
    ->name('login');


// Route pour récupérer la liste des devises (accessible à tous)
Route::get('/currencies', [CurrenciesController::class, 'index']);

// Routes pour l'administration des devises (requiert une authentification via Sanctum)
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/admin/currencies', [CurrenciesController::class, 'adminindex']);
    Route::post('/admin/currencies', [CurrenciesController::class, 'store']);
    Route::put('/admin/currencies/{currency}', [CurrenciesController::class, 'update']);
    Route::delete('/admin/currencies/{currency}', [CurrenciesController::class, 'destroy']);
});



// Route pour récupérer la liste des paires de conversion (accessible à tous)
Route::get('/pairs', [PairsController::class, 'index']);

// Routes pour l'administration des paires de conversion (requiert une authentification via Sanctum)
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/admin/pairs', [PairsController::class, 'adminindex']);
    Route::post('/admin/pairs', [PairsController::class, 'store']);
    Route::put('/admin/pairs/{pair}', [PairsController::class, 'update']);
    Route::delete('/admin/pairs/{pair}', [PairsController::class, 'destroy']);
});

// Route pour effectuer une conversion de paire
Route::post('/conversion', [ConversionPaircontroller::class, 'convert']);

// Route pour vérifier le statut du serveur
Route::get('/status', [ConversionPaircontroller::class, 'status']);
