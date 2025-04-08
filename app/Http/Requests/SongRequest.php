<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'artist' => ['required'],
            'description' => ['required'],
            'image_url' => ['nullable'],
            'audio_url' => ['nullable'],
            'released_at' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
