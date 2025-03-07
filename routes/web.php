<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/Evenementen', function () {
    return view('pages.Evenementen');
})->name('Evenementen');

Route::get('/wordlid', function () {
    return view('pages.wordlid');
})->name('pages.wordlid');

Route::get('/diensten', function () {

    return view('pages.diensten');
})->name('diensten');
