<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorekeyboardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'switchType' => 'required|string|max:100',
            'caseType' => 'required|string|max:100',
            'pcbType' => 'required|string|max:100',
            'keyboardType' => 'required|string|max:100',
            'ergonomic' => 'required|boolean', // Should be a boolean value (true or false)
            'backlight' => 'required|string|max:100', // Assuming backlight is a string (can adjust to other types as needed)
            'keycapsbrand' => 'required|string|max:100',
            'keycapsmaterial' => 'required|string|max:100',
            'keycapsprocess' => 'required|string|max:100',
        ];
    }
}
