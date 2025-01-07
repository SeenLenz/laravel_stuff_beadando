<?php

use App\Http\Controllers\KeyboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/keyboards');
Route::resource('keyboards', KeyboardController::class);
