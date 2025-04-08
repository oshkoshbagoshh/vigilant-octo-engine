<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'description' => ['nullable'],
            'song_id' => ['required', 'exists:songs'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
