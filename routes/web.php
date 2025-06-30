<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'home');
    Route::prefix('/category')->group(function () {
        Route::get('/{category_id}/post/{post_id}', 'post');
        Route::get('/{id?}', 'category');
    });
    
});