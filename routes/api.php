<?php

use App\Http\Controllers\MoveController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TrainerController;
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
/**
 * @OA\PathItem(path="/api")
 */

Route::apiResources([
    'pokemons' => PokemonController::class,
    'moves' => MoveController::class,
    'trainers' => TrainerController::class,
]);

Route::controller(MoveController::class)->group(function () {
    Route::prefix('moves')->group(function () {
        Route::get('/{move}/pokemons', 'sameMove');
    });
});

Route::controller(PokemonController::class)->group(function () {
    Route::prefix('pokemons')->group(function () {
        Route::get('/{pokemon}/moves', 'moves');
    });
});