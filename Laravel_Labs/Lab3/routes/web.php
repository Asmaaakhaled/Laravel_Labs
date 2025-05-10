<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

// Resourceful routes for posts (covers index, create, store, show, edit, update, destroy)
Route::resource('posts', PostController::class);
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.view');

// Additional routes for restore and comments
Route::get('posts/restore/{id}', [PostController::class, 'restore'])->name('posts.restore');
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');