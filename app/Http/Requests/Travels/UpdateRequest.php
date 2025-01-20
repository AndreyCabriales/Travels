<?php

namespace App\Http\Requests\Travels;

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
            'description' =>  "required|min:5|max:100",
            'imagen' => "required|min:5|max:1000",
            'origin_id' => "required",
            'destination_id' => "required",
            'travel_date' => "required|min:5|max:30"
        ];
    }
}
