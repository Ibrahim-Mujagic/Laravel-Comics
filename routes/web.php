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
    
    $comicsCards = config('db.comicsCards');

    return view('home',compact('comicsCards'));
})->name('home');

Route::get('/Characters', function () {
    $comicsCards = config('db.comicsCards');
    return view('Characters',compact('comicsCards'));
})->name('Characters');

Route::get('/Movies', function () {
    return view('Movies');
})->name('Movies');

Route::get('/Tv', function () {
    return view('Tv');
})->name('Tv');

Route::get('/Games', function () {
    $comicsCards = config('db.comicsCards');

    return view('Games',compact('comicsCards'));
})->name('Games');

Route::get('/Collectibles', function () {
    return view('Collectibles');
})->name('Collectibles');

Route::get('/Fans', function () {
    return view('Fans');
})->name('Fans');

Route::get('/Videos', function () {
    return view('Videos');
})->name('Videos');

Route::get('/News', function () {
    return view('News');
})->name('News');

Route::get('/Shop', function () {
    return view('Shop');
})->name('Shop');



