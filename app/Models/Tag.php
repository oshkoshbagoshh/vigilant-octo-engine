<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'meta',
        'foo',
        'song_id',
    ];

    public function song(): BelongsTo
    {
        return $this->belongsTo(Song::class);
    }
}
