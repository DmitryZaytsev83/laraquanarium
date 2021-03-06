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

Route::get('/фото', function () {
    return view('home.photo');
})->name('home.photo');

Route::get('/видео', function () {
    return view('home.video');
})->name('home.video');

Route::get('/экскурсии', function () {
    return view('home.excursions');
})->name('home.excursions');

Route::get('/школа', function () {
    return view('home.school');
})->name('home.school');

Route::get('/курсы', function () {
    return view('home.courses');
})->name('home.courses');

Route::get('/мероприятия', function () {
    return view('home.events');
})->name('home.events');

Route::get('/о_нас', function () {
    return view('home.about');
})->name('home.about');
