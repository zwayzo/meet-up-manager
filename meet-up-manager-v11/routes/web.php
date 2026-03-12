<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReservationController::class, 'index']);
Route::get('/rooms/{room}', [ReservationController::class, 'create']);
Route::post('/rooms/{room}', [ReservationController::class, 'store']);
Route::get('/rooms/{room}/reservations', [ReservationController::class, 'reservations']);