<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            "name" => "nullable|string",
            "surname" => "nullable|string",
            "email" => "nullable|string",
            "to" => "nullable|integer",
            "from" => "nullable|integer",
            "description" => "nullable|string",
            "is_married" => "nullable|string",
        ];
    }

    public function messages()
    {
        return [
            "name.string" => "its should be a string",
            "surname.string" => "its should be a string",
            "email.string" => "its should be a string",
            "to.integer" => "its should be a integer",
            "from.integer" => "its should be a integer",
            "description.string" => "its should be a string",
        ];
    }
}
