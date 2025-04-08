<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Http\Resources\GenreResource;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        return GenreResource::collection(Genre::all());
    }

    public function store(GenreRequest $request)
    {
        return new GenreResource(Genre::create($request->validated()));
    }

    public function show(Genre $genre)
    {
        return new GenreResource($genre);
    }

    public function update(GenreRequest $request, Genre $genre)
    {
        $genre->update($request->validated());

        return new GenreResource($genre);
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return response()->json();
    }
}
