<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NoticeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/notice/new', [NoticeController::class, 'create'])->name('notice.create.index');
    Route::post('/notice/create', [NoticeController::class, 'store'])->name('notice.create');
    Route::get('/notices', [NoticeController::class, 'index'])->name('notice.index');
    Route::get('/notice/edit/{notice}', [NoticeController::class, 'edit'])->name('notice.edit');
    Route::post('/notice/update/{notice}', [NoticeController::class, 'update'])->name('notice.update');
    Route::post('/notice/destroy/{notice}', [NoticeController::class, 'destroy'])->name('notice.destroy');

    Route::group(['middleware' => 'admin'], function() {
        Route::get('/dashboard/admin' , function() {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/user/new', [UserController::class, 'create'])->name('admin.user.create.index');
        Route::post('/user/create', [UserController::class, 'store'])->name('admin.user.create');
        Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
        Route::post('/users/sort', [UserController::class, 'sort'])->name('admin.user.sort');
        Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/user/update/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::post('/user/destroy/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');

    });

    Route::group(['middleware' => 'teacher'], function() {
        Route::get('/dashboard/teacher' , function() {
            return view('teacher.dashboard');
        })->name('teacher.dashboard');

        Route::get('/article/new', [ArticleController::class, 'create'])->name('teacher.article.create.index');
        Route::post('/article/create', [ArticleController::class, 'store'])->name('teacher.article.create');
        Route::get('/articles', [ArticleController::class, 'index'])->name('teacher.article.index');
        Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('teacher.article.edit');
        Route::post('/article/update/{article}', [ArticleController::class, 'update'])->name('teacher.article.update');
        Route::post('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('teacher.article.destroy');

    });

    Route::group(['middleware' => 'officer'], function() {
        Route::get('/dashboard/officer' , function() {
            return view('officer.dashboard');
        })->name('officer.dashboard');

    });
});
