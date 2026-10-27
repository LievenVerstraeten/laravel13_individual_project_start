<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/walk-calculator', 'walkcalculator')->name('walkcalculator');
Route::view('/cocktail-creator', 'cocktailcreator')->name('cocktailcreator');
Route::view('/drink-history', 'drinkhistory')->name('drinkhistory');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
