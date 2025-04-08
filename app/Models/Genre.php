<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'song_id',
    ];

    public function songs(): HasMany
    {
        return $this->HasMany(Song::class);
    }
}
