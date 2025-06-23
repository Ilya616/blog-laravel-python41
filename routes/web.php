<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/category/{id?}', 'category');
});