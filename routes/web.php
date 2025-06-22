<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//star game
Route::get('/', [MainController::class, 'startGame'])->name('start_game');
Route::post('/', [MainController::class, 'prepareGame'])->name('prepare_game');

//in game
Route::get('/game', [MainController::class, 'game'])->name('game');