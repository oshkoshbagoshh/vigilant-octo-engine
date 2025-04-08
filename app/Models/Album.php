<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_image',
        'release_date',
        'description',
        'copyright',
        'price',
        'song_id',
    ];

    public function song(): HasMany
    {
        return $this->HasMany(Song::class);
    }

    protected function casts(): array
    {
        return [
            'release_date' => 'date',
        ];
    }
}
