<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login',[\App\Http\Controllers\Api\v1\AuthController::class,'login']);

Route::get('/movies',[\App\Http\Controllers\Api\v1\MovieController::class,'showList']);
Route::post('/movies/available-seats',[\App\Http\Controllers\Api\v1\MovieController::class,'availableSeats']);
Route::post('/movies/reservation',[\App\Http\Controllers\Api\v1\MovieController::class,'reservation'])->middleware('auth:sanctum');
Route::get('/statistics',[\App\Http\Controllers\Api\v1\StatisticController::class,'seats']);

