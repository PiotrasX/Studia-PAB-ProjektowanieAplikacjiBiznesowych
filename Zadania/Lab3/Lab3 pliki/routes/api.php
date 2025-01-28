<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;

Route::apiResource('hotels', HotelController::class);
Route::apiResource('hotels.rooms', RoomController::class)->shallow();

# https://laravel.com/docs/11.x/controllers#restful-nested-resources
