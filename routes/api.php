<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/***
 *
 *      API STUFF
 *
 *
 *
 */


// /api/songs/{id}/

// /api/tags/{id}/

// /api/MusicGenre/{id}/

