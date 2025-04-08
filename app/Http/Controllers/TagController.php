<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TagController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Tag::class);

        return TagResource::collection(Tag::all());
    }

    public function store(TagRequest $request)
    {
        $this->authorize('create', Tag::class);

        return new TagResource(Tag::create($request->validated()));
    }

    public function show(Tag $tag)
    {
        $this->authorize('view', $tag);

        return new TagResource($tag);
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $this->authorize('update', $tag);

        $tag->update($request->validated());

        return new TagResource($tag);
    }

    public function destroy(Tag $tag)
    {
        $this->authorize('delete', $tag);

        $tag->delete();

        return response()->json();
    }
}
