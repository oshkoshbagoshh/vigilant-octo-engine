<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'cover_image' => ['nullable'],
            'release_date' => ['nullable', 'date'],
            'description' => ['nullable'],
            'copyright' => ['nullable'],
            'price' => ['nullable', 'numeric'],
            'song_id' => ['required', 'exists:songs'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
