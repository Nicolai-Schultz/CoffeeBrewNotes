<?php

use App\Http\Controllers\CoffeeNotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CoffeeNotesController::class, 'show']);
Route::get('/coffee-notes', [CoffeeNotesController::class, 'show']);
Route::view('/add-note', 'add-note');
Route::post('/add-note', [CoffeeNotesController::class, 'store']);
Route::delete('/delete-note/{id}', [CoffeeNotesController::class, 'destroy']);
Route::get('muffi-decider', [CoffeeNotesController::class, 'roll']);
Route::post('muffi-decider/roll', [CoffeeNotesController::class, 'roll']);
