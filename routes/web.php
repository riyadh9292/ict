<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => 'auth'], function() {
    
    Route::group(['middleware' => 'admin'], function() {
        Route::get('/dashboard/admin' , function() {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/user/new', [UserController::class, 'create'])->name('admin.user.create.index');
        Route::post('/user/create', [UserController::class, 'store'])->name('admin.user.create');
        Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
        Route::post('/users/sort', [UserController::class, 'sort'])->name('admin.user.sort');
    });

    Route::group(['middleware' => 'teacher'], function() {
        Route::get('/dashboard/teacher' , function() {
            return view('teacher.dashboard');
        })->name('teacher.dashboard');
        Route::get('/article/new', [ArticleController::class, 'create'])->name('admin.article.create.index');
        Route::post('/article/create', [ArticleController::class, 'store'])->name('admin.article.create');
        Route::get('/articles', [ArticleController::class, 'index'])->name('admin.article.index');
    });

    Route::group(['middleware' => 'officer'], function() {
        Route::get('/dashboard/officer' , function() {
            return view('officer.dashboard');
        })->name('officer.dashboard');
    });
});
