<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/characters', [\App\Http\Controllers\CharacterController::class, 'index']);

Route::get('/characters/{character:title}', [\App\Http\Controllers\CharacterController::class, 'show']);


Route::get('/artifacts', [\App\Http\Controllers\ArtifactController::class, 'index']);

Route::get('/artifacts/{artifact:title}', [\App\Http\Controllers\ArtifactController::class, 'show']);

Route::get('/wishes', [\App\Http\Controllers\WishController::class, 'index']);

Route::get('events', [\App\Http\Controllers\EventController::class, 'index']);
