<?php

namespace App\Http\Resources;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Song */
class SongResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'tags' => $this->tags,
            'genre' => $this->genre,
            'status' => $this->status,
            'image' => $this->image,
            'copyright' => $this->copyright,
            'release_date' => $this->release_date,
            'file_location' => $this->file_location,
            'genre_id' => $this->genre_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
