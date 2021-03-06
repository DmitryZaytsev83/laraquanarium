<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/photo', function () {
    return view('home.photo');
})->name('home.photo');

Route::get('/video', function () {
    return view('home.video');
})->name('home.video');

Route::get('/excursions', function () {
    return view('home.excursions');
})->name('home.excursions');

Route::get('/school', function () {
    return view('home.school');
})->name('home.school');

Route::get('/courses', function () {
    return view('home.courses');
})->name('home.courses');

Route::get('/events', function () {
    return view('home.events');
})->name('home.events');

Route::get('/about', function () {
    return view('home.about');
})->name('home.about');
