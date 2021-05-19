<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Users;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'admin'], function() {
        Route::get('/dashboard' , function() {
            return view('dashboard');
        })->name('dashboard');
    });
    Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
    Route::post('/user/create', [UserController::class, 'index'])->name('admin.user.create');

    Route::group(['middleware' => 'teacher'], function() {
        
    });

    Route::group(['middleware' => 'officer'], function() {
        
    });
});
