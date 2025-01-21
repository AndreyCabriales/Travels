<?php

namespace App\Http\Requests\Origins;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'origin_hour' =>  "required|after_or_equal:today",
            'origin_city' => "required|min:5|max:40",
            'origin_state' => "required|min:5|max:40",
            'origin_country' => "required|min:5|max:40",
        ];
    }
}
