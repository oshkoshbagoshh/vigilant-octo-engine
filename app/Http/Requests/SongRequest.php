<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'tags' => ['nullable'],
            'genre' => ['nullable'],
            'status' => ['nullable'],
            'image' => ['nullable'],
            'copyright' => ['nullable'],
            'release_date' => ['nullable', 'date'],
            'file_location' => ['required'],
            'genre_id' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
