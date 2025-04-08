<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required|string|max:255'],
            'artist' => ['required|string|max:255'],
            'description' => ['required|max:255'],
            'image_url' => ['nullable|url'],
            'audio_url' => ['nullable|url'],
            'released_at' => ['nullable', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
