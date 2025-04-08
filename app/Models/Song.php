<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'description',
        'image_url',
        'audio_url',
        'released_at',
    ];

    protected function casts(): array
    {
        return [
            'released_at' => 'date',
        ];
    }

    // A song belongs to one user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
