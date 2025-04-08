<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use App\Http\Resources\SongResource;
use App\Models\Song;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SongController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Song::class);

        return SongResource::collection(Song::all());
    }

    public function store(SongRequest $request)
    {
        $this->authorize('create', Song::class);

        return new SongResource(Song::create($request->validated()));
    }

    public function show(Song $song)
    {
        $this->authorize('view', $song);

        return new SongResource($song);
    }

    public function update(SongRequest $request, Song $song)
    {
        $this->authorize('update', $song);

        $song->update($request->validated());

        return new SongResource($song);
    }

    public function destroy(Song $song)
    {
        $this->authorize('delete', $song);

        $song->delete();

        return response()->json();
    }
}
