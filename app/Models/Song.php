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
    ];

    protected $dates = ['released_at'];

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

    // A song can belong to one genre
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }



}
