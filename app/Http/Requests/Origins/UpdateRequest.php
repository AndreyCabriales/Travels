<?php

namespace App\Http\Requests\Origins;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'origin_hour' =>  "required|integer",
            'origin_city' => "required|min:5|max:40",
            'origin_state' => "required|min:5|max:40",
            'origin_country' => "required|min:5|max:40",
        ];
    }
}
