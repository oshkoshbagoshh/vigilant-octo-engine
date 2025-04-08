<?php

namespace App\Http\Controllers;

use App\Models\MusicGenre;
use Illuminate\Http\Request;

class MusicGenreController extends Controller
{


    //
    public function index()
    {
    $genres = MusicGenre::all();
    return view('music_genres.index', compact('genres'));
    }



}
