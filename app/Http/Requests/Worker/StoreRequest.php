<?php

namespace App\Http\Requests\Worker;

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
            "name" => "required|string",
            "surname" => "required|string",
            "email" => "required|email",
            "age" => "nullable|integer",
            "description" => "nullable|string",
            "is_married" => "nullable|string",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "pls write text here",
            "name.string" => "its should be a string",
            "surname.required" => "pls write text here",
            "surname.string" => "its should be a string",
            "email.required" => "pls write text here",
            "email.email" => "its should be a email",
            "description.string" => "its should be a string",
            "age.integer" => "its should be a integer",
        ];
    }
}
