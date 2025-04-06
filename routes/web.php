<?php

use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;

Route::middleware('guest')->group(function () {
    Route::controller(RegisterUserController::class)->group(function () {
        Route::get('/register', 'create');
        Route::post('/register', 'store');
    });
    Route::controller(SessionController::class)->group(function () {
        Route::get('/login', 'create')->name('login');
        Route::post('/login', 'store');
 
    });
});
Route::controller(JobController::class)->group(function () {
    Route::get('/', 'index');

});
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);


Route::controller(SessionController::class)->group(function () {
 
    Route::delete('/login' , 'destroy')->middleware('auth');
});


Route::controller(JobController::class)->group(function () {
    Route::get('/jobs/create', 'create')->middleware('auth');
    Route::post('/jobs/store', 'store');
});
