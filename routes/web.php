<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuoteController::class, 'quote'])->name('quote');

Route::get('/new', [QuoteController::class, 'new'])->name('quote.new');

Route::get('/fav', [QuoteController::class, 'fav'])->name('quote.fav');
Route::post('/fav', [QuoteController::class, 'fav']);
