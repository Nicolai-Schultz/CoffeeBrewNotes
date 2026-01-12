<?php

use App\Http\Controllers\CoffeeNotesController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\MuffideciderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CoffeeNotesController::class, 'show']);
Route::get('/coffee-notes', [CoffeeNotesController::class, 'show']);
Route::view('/add-note', 'add-note');
Route::post('/add-note', [CoffeeNotesController::class, 'store']);
Route::delete('/delete-note/{id}', [CoffeeNotesController::class, 'destroy']);

// muffidecider routes
Route::get('muffi-decider', [MuffideciderController::class, 'roll']);
Route::post('muffi-decider/roll', [MuffideciderController::class, 'roll']);

// journal entry routes
Route::get('/journal-entry/add', [JournalController::class, 'show']);
Route::post('/journal-entry/add', [JournalController::class, 'store']);
