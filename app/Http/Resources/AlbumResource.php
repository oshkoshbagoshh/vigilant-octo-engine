<?php

namespace App\Http\Resources;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Album */
class AlbumResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'cover_image' => $this->cover_image,
            'release_date' => $this->release_date,
            'description' => $this->description,
            'copyright' => $this->copyright,
            'price' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'song_id' => $this->song_id,

            'song' => new SongResource($this->whenLoaded('song')),
        ];
    }
}
