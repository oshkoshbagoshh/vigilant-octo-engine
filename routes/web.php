<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MusicGenreController;

// welcome is for not signed in users
// if they are a registered user, then they will be redirected a different home page where they can view tracks etc
//
// for now I just want to set up the admin panel for CRUD purposes  to manage songs , tags, genres, images, etc


Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/songs', function () {
 return view('songs.index');
});


Route::get('/music-genres', [MusicGenreController::class, 'index']);
