<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Models\Notice;
use App\Models\Article;
use App\Models\User;
use App\Models\Photo;

// Route::get('/linkstorage', function () {
//     Artisan::call('storage:link');
// });

Route::get('/', function () {
    $notices = Notice::orderBy('created_at', 'desc')->get();
    $articles = Article::orderBy('year', 'desc')->take(10)->get();
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('welcome', compact('notices', 'articles', 'photos'));
})->name('welcome');
Route::get('/notices/all', [NoticeController::class, 'show_all'])->name('frontend.notice.all');
Route::get('/notices/details/{notice}', [NoticeController::class, 'show'])->name('frontend.notice.details');
Route::get('/contact-us', function () {
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.contact', compact('photos'));
})->name('frontend.contact');

Route::post('/message/store', [MessageController::class, 'store'])->name('frontend.message.store');
Route::get('/reload-captcha', [MessageController::class, 'reloadCaptcha'])->name('frontend.captcha.reload');

Route::get('/article/all', [ArticleController::class, 'show_all'])->name('frontend.article.all');
Route::get('/article/details/{article}', [ArticleController::class, 'details'])->name('frontend.article.details');

Route::get('/people/faculty-member/active', function () {
    $users = User::where('type', 'teacher')->where('status', 'active')->orderBy('position', 'ASC')->get();
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.people.teacher.active', compact('users', 'photos'));
})->name('frontend.people.teacher.active');
Route::get('/people/faculty-member/on-leave', function () {
    $users = User::where('type', 'teacher')->where('status', 'on_leave')->orderBy('position', 'ASC')->get();
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.people.teacher.onleave', compact('users', 'photos'));
})->name('frontend.people.teacher.onleave');
Route::get('/people/officer', function () {
    $users = User::where('type', 'officer')->where('status', 'active')->orderBy('position', 'ASC')->get();
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.people.officer.index', compact('users', 'photos'));
})->name('frontend.people.officer');
Route::get('/people/staff', function () {
    $users = User::where('type', 'staff')->where('status', 'active')->orderBy('position', 'ASC')->get();
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.people.staff.index', compact('users', 'photos'));
})->name('frontend.people.staff');
Route::get('/people/faculty-member/profile/{user}', [UserController::class, 'profile'])->name('frontend.teacher.profile');

Route::get('/downloads/download/{download}', [DownloadController::class, 'download'])->name('download');
Route::get('/downloads/all', [DownloadController::class, 'show_all'])->name('frontend.download.all');

Route::get('/gallery', [AlbumController::class, 'gallery'])->name('frontend.gallery.all');

Route::get('/history', function () {
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.history', compact('photos'));
})->name('frontend.history');

Route::get('/mission-and-vision', function () {
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.mission-and-vision', compact('photos'));
})->name('frontend.mission-and-vision');

Route::get('/message-from-the-chairman', function () {
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.message-from-the-chairman', compact('photos'));
})->name('frontend.message-from-the-chairman');

Route::get('/programs/undergraduate', function () {
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.program.undergraduate', compact('photos'));
})->name('frontend.program.undergraduate');

Route::get('/programs/graduate', function () {
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.program.graduate', compact('photos'));
})->name('frontend.program.graduate');

Route::get('/facilities', function () {
    $photos = Photo::orderBy('created_at', 'desc')->take(8)->get();
    return view('frontend.facilities', compact('photos'));
})->name('frontend.facilities');


//Middleware
Route::group(['middleware' => 'auth'], function () {

    Route::get('/notice/new', [NoticeController::class, 'create'])->name('notice.create.index');
    Route::post('/notice/create', [NoticeController::class, 'store'])->name('notice.create');
    Route::get('/notices', [NoticeController::class, 'index'])->name('notice.index');
    Route::get('/notice/edit/{notice}', [NoticeController::class, 'edit'])->name('notice.edit');
    Route::post('/notice/update/{notice}', [NoticeController::class, 'update'])->name('notice.update');
    Route::post('/notice/destroy/{notice}', [NoticeController::class, 'destroy'])->name('notice.destroy');
    Route::get('/notice/download/{notice}', [NoticeController::class, 'download'])->name('notice.download');

    Route::get('/download/new', [DownloadController::class, 'create'])->name('download.create.index');
    Route::post('/download/create', [DownloadController::class, 'store'])->name('download.create');
    Route::get('/download/files', [DownloadController::class, 'index'])->name('download.index');
    Route::get('/download/edit/{download}', [DownloadController::class, 'edit'])->name('download.edit');
    Route::post('/download/update/{download}', [DownloadController::class, 'update'])->name('download.update');
    Route::post('/download/destroy/{download}', [DownloadController::class, 'destroy'])->name('download.destroy');

    Route::get('/album/new', [AlbumController::class, 'create'])->name('album.create.index');
    Route::post('/album/create', [AlbumController::class, 'store'])->name('album.create');
    Route::get('/albums', [AlbumController::class, 'index'])->name('album.index');
    Route::get('/album/edit/{album}', [AlbumController::class, 'edit'])->name('album.edit');
    Route::post('/album/update/{album}', [AlbumController::class, 'update'])->name('album.update');
    Route::post('/album/destroy/{album}', [AlbumController::class, 'destroy'])->name('album.destroy');

    Route::post('/photo/destroy/{photo}', [PhotoController::class, 'destroy'])->name('photo.destroy');

    Route::get('/messages', [MessageController::class, 'index'])->name('message.index');


    Route::group(['middleware' => 'admin'], function () {
        Route::get('/dashboard/admin', function () {
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

    Route::group(['middleware' => 'teacher'], function () {
        Route::get('/dashboard/teacher', function () {
            return view('teacher.dashboard');
        })->name('teacher.dashboard');

        Route::get('/article/new', [ArticleController::class, 'create'])->name('teacher.article.create.index');
        Route::post('/article/create', [ArticleController::class, 'store'])->name('teacher.article.create');
        Route::get('/articles', [ArticleController::class, 'index'])->name('teacher.article.index');
        Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('teacher.article.edit');
        Route::post('/article/update/{article}', [ArticleController::class, 'update'])->name('teacher.article.update');
        Route::post('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('teacher.article.destroy');
    });

    Route::group(['middleware' => 'officer'], function () {
        Route::get('/dashboard/officer', function () {
            return view('officer.dashboard');
        })->name('officer.dashboard');
    });
});
Route::post('/register', [UserController::class, 'register']);

