<?php

namespace App\Http\Resources;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Tag */
class TagResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'meta' => $this->meta,
            'foo' => $this->foo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'song_id' => $this->song_id,

            'song' => new SongResource($this->whenLoaded('song')),
        ];
    }
}
