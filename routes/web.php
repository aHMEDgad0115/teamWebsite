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
    return view('index');
})->name('index');

Route::get('/about', function () {  return view('about');  })->name('about');

Route::get('/committe', function () {  return view('committe');  })->name('committe');

Route::get('/contact', function () {  return view('contact');  })->name('contact');

Route::get('/events', function () {  return view('events');  })->name('events');

Route::get('/exhipition', function () {  return view('exhipition');  })->name('exhipition');

Route::get('/exhipitionPage', function () {  return view('exhipitionPage');  })->name('exhipitionPage');

Route::get('/speaker', function () {  return view('speaker');  })->name('speaker');

Route::get('/sponsers', function () {  return view('sponsers');  })->name('sponsers');

Route::get('/workshop', function () {  return view('workshop');  })->name('workshop');

Route::get('/Workshops', function () {  return view('Workshops');  })->name('Workshops');
