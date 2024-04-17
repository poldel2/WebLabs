<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContantController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InterestsController;
use App\Http\Controllers\PhotoalbumController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\UploadGuestBookController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MyBlogController;
use App\Http\Controllers\UploadBlogController;

Route::get('/', function () {
    return view('main');
});

Route::get('/main', [MainController::class, 'action_index'])->name('main');

Route::get('/main', [MainController::class, 'action_index'])->name('main');

Route::get('/about', [AboutController::class, 'action_index'])->name('about');

Route::get('/contact', [ContantController::class, 'action_index'])->name('contact');

Route::get('/history', [HistoryController::class, 'action_index'])->name('history');

Route::get('/interests', [InterestsController::class, 'action_index'])->name('interests');

Route::get('/photoAlbum', [PhotoalbumController::class, 'action_index'])->name('photoAlbum');

Route::get('/result', [ResultController::class, 'action_index'])->name('result');

Route::get('/study', [StudyController::class, 'action_index'])->name('study');

Route::get('/test', [TestController::class, 'action_index'])->name('test');

Route::get('/guestbook', [GuestBookController::class, 'action_index'])->name('guestbook');

Route::get('/uploadguestbook', [UploadGuestBookController::class, 'action_index'])->name('uploadguestbook');

Route::get('/uploadblog', [UploadBlogController::class, 'action_index'])->name('uploadblog');

Route::get('/blog', [BlogController::class, 'action_index'])->name('blog');

//Route::get('/myblog/page?}', [MyBlogController::class, 'action_index']);

Route::get('/myblog', [MyBlogController::class, 'action_index'])->name('myblog');

Route::get('/myblog/{id}', [MyBlogController::class, 'show'])->name('myblog');

Route::post('/blog', [BlogController::class, 'store'])->name('blog.post');

Route::post('/uploadguestbook', [UploadGuestBookController::class, 'uploadFile'])->name('uploadguestbook.post');

Route::post('/uploadblog', [UploadBlogController::class, 'uploadFile'])->name('uploadblog.post');

Route::post('/contact', [ContantController::class, 'submitForm'])->name('contact.post');

Route::post('/test', [TestController::class, 'handleFormSubmission']);

Route::post('/guestbook', [GuestBookController::class, 'store'])->name('guestbook.post');