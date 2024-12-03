<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePlateRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3','max:255',
            Rule::unique('plates')->ignore($this->plate)
            ],
            'description' => ['required','min:10', 'max:500','string'],
            'price' => ['required','decimal:2'],
            'ingredients' => ['required', 'min:3','max:500','string'],
            'visibility' => ['required', 'integer'], /* da rivedere */
            'image' =>['nullable', 'image', 'max:250'],/* controllare se url invece di image */
            'restaurant_id' => ['required', 'numeric', 'integer', 'exist:restaurants,id']
        ];
    }
}
