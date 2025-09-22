<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
 
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');
Route::put('/posts/{id}/edit', [PostsController::class, 'update'])->name('posts.edit');
Route::delete('/posts/{id}/edit', [PostsController::class, 'destroy'])->name('posts.destroy');
Route::middleware('auth')->group(function () {
    Route::get('/posts/dashboard', [DashboardController::class, 'index'])->name('posts.dashboard'); 
}); 
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');

Route::resource('posts', PostsController::class);
Route::resource('posts', PostsController::class)
    ->only(['edit', 'destroy', 'update', 'create'])
    ->middleware('auth'); 


// Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
// Route::get('/posts/read/{id}', [PostsController::class, 'read'])->name('posts.read');
// Route::post('/posts/{post}', [PostsController::class, 'store']);

// Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');



Route::get('/', function () {
    return view('profile');
})->name('profile'); 

Route::get('/contacts', function () {
    return view('builds.contacts');
})->name('contacts'); 

Route::get('/calendar', function () {
    return view('builds.calendar');
})->name('calendar');

Route::get('/buttons', function () {
    return view('builds.buttons');
})->name('buttons');

Route::get('/widgets', function () {
    return view('builds.widgets');
})->name('widgets');



Route::get('/studio', function () {
    return view('studio');
})->name('studio');

Route::get('/production', function () {
    return view('builds.production-editor');
})->name('builds.production');

Route::get('/production-details', function () {
    return view('builds.production-details');
})->name('builds.production-details');

Route::get('/timeline', function () {
    return view('builds.timeline');
})->name('builds.timeline');

Route::get('/compose', function () {
    return view('builds.compose');
})->name('compose');

Route::get('/inbox', function () {
    return view('builds.inbox');
})->name('inbox');

Route::get('/read', function () {
    return view('builds.read');
})->name('read');

Route::get('/merch', function () {
    return view('builds.merch');
})->name('merch');

Route::get('/invoice', function () {
    return view('builds.invoice');
})->name('invoice');

Route::get('/invoice-print', function () {
    return view('builds.invoice-print');
})->name('invoice-print');



Route::get('/browser', function () {
    return view('builds.browser');
})->name('builds.browser');



Route::get('/starter', function () {
    return view('starter');
})->name('starter');