<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Http\Resources\AlbumResource;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        return AlbumResource::collection(Album::all());
    }

    public function store(AlbumRequest $request)
    {
        return new AlbumResource(Album::create($request->validated()));
    }

    public function show(Album $album)
    {
        return new AlbumResource($album);
    }

    public function update(AlbumRequest $request, Album $album)
    {
        $album->update($request->validated());

        return new AlbumResource($album);
    }

    public function destroy(Album $album)
    {
        $album->delete();

        return response()->json();
    }
}
