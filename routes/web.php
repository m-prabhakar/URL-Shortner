<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\ShortUrlController;

Route::get('/', [ShortUrlController::class, 'index']);
Route::post('/shorten', [ShortUrlController::class, 'store']);
Route::get('/{code}', [ShortUrlController::class, 'redirect']);
