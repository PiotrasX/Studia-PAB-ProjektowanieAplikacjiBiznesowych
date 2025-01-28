<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorController;

Route::apiResource('movies', MovieController::class);
Route::apiResource('actors', ActorController::class);

Route::get('movies/{movie}/actors', [MovieController::class, 'getMovieCast']);
Route::put('movies/{movie}/actors', [MovieController::class, 'setMovieCast']);
Route::put('movies/{movie}/actors/{actor}', [MovieController::class, 'addActorToMovieCast']);
Route::delete('movies/{movie}/actors/{actor}', [MovieController::class, 'removeActorFromMovieCast']);
