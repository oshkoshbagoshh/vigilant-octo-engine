<?php

namespace App\Http\Resources;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Genre */
class GenreResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'song_id' => $this->song_id,

            'song' => new SongResource($this->whenLoaded('song')),
        ];
    }
}
