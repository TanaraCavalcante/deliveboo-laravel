<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlateRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3','max:255'],
            'description' => ['required','min:10', 'max:500','string'],
            'price' => ['required','decimal:2'],
            'ingredients' => ['required', 'min:3','max:500','string'],
            'visibility' => ['required', 'boolean'],
            'image' =>['nullable','url', 'max:250'],
            'restaurant_id' => ['nullable', 'numeric', 'integer', 'exist:restaurants,id']
        ];
    }
}
