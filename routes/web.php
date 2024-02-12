<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
route::post('/events', [EventController::class,'store']);
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::delete('/events/{id}', [EventController::class, 'destroy']);


