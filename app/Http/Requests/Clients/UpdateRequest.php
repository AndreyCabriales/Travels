<?php

namespace App\Http\Requests\Clients;

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
            'name' => "required|min:5|max:30",
            'last_name' => "required|min:5|max:30",
            'celphone' => "required|integer",
            'email' => "required|min:10|max:50",
            'gender' => "required|min:5|max:10",
            'nationality' => "required|min:5|max:20",
            'identify' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
