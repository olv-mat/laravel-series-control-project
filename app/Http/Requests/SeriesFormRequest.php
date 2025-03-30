<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            "name" => ["required", "min:3"],
            "seasons" => ["required"],
            "episodes" => ["required"],
            "cover" => ["image", "mimes:png,jpg,jpeg"]
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "The name field is required",
            "name.min" => "The name field must be at least :min characters",
            "seasons.required" =>"The seasons field is required",
            "episodes.required" =>"The episodes field is required",
        ];
    }
}
