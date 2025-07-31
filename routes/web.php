<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\CheckName;
use App\Http\Middleware\CheckSurname;
use App\Http\Middleware\Test;
use Illuminate\Support\Facades\Route;


Route::controller(AdminController::class)->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::middleware(['auth'])->group(function () {
            Route::get('/', 'index')->name('dashboard');
            Route::get('/profile', 'profile')->name('profile');
            Route::post('/profile-load', 'profileLoad')->name('profileLoad');
            Route::get('/delete-avatar', 'deleteAvatar')->name('delete-avatar');
        });
        

        Route::get('/auth', 'auth')->name('login');
        Route::post('/auth', 'authRequest');
        Route::get('/registration', 'registration');
        Route::post('/registration', 'registrationReqest')->name('registrationReqest');
        Route::get('/logout', 'logout')->name('admin-logout');
    });
});

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'home');
    Route::prefix('/category')->group(function () {
        Route::get('/{category_id}/post/{post_id}', 'post');
        Route::get('/{id?}', 'category');
    });

    // Route::get('/test', 'test')->middleware([CheckName::class, CheckSurname::class]);;
    Route::post('/comment-request-form', 'commentRequestForm');
});

// Route::get('/test/{name?}', function(){
//     dd("work");
// })->middleware([Test::class.":{name}"]);




// создать акшен в контроллере, если успешно переданы и имя и фамилия, то вывести их
// первый мидлеваре проверяет наличие имени
// второй фамилию
// в каждом мидлеваре выводить сообщение об ошибке чето не так: пример "нет имени"


Route::controller(ErrorController::class)->group(function(){
    Route::get('/404', 'error404');
});
