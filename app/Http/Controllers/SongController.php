<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use App\Http\Resources\SongResource;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        return SongResource::collection(Song::all());
    }

    public function store(SongRequest $request)
    {
        return new SongResource(Song::create($request->validated()));
    }

    public function show(Song $song)
    {
        return new SongResource($song);
    }

    public function update(SongRequest $request, Song $song)
    {
        $song->update($request->validated());

        return new SongResource($song);
    }

    public function destroy(Song $song)
    {
        $song->delete();

        return response()->json();
    }
}
