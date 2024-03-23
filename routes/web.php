<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuoteController::class, 'quote'])->name('quote');

Route::get('/new', [QuoteController::class, 'new'])->name('quote.new');

Route::get('/addFav', [QuoteController::class, 'addFav'])->name('quote.addFav');
Route::get('/fav', [QuoteController::class, 'fav'])->name('quote.fav');
Route::get('/delFav/{index}', [QuoteController::class, 'delFav'])->name('quote.delFav');

