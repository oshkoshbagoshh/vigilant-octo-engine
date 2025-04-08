<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'tags',
        'genre',
        'status',
        'image',
        'copyright',
        'release_date',
        'file_location',
    ];

    protected function casts(): array
    {
        return [
            'release_date' => 'date',
        ];
    }

    // relationships


//    TODO:
    // One Song belongs to one user
    public function user() {
        return $this->belongsTo(User::class);


    }


    // one song can have many tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // One user can have many songs
    /**
     * One User can have many Songs.
     */

}
