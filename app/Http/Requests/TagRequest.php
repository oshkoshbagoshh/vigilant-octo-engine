<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'description' => ['required'],
            'meta' => ['nullable'],
            'foo' => ['nullable'],
            'song_id' => ['required', 'exists:songs'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
