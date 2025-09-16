<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('verify.login');
})->name('login');

Route::get('/register', function () {
    return view('verify.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('verify.forgot-password');
})->name('forgot-password');

Route::get('/recover-password', function () {
    return view('verify.recover-password');
})->name('recover-password');



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