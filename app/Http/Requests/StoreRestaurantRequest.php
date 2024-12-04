<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            //inserire regole validazione
            'user_id' => ['required'],
            'name' => ['required', 'min:3', 'max:70', 'string'],
            'piva' => ['required', 'digits:11'],
            'piva' => ['required', 'string', 'numeric', 'digits:11', 'alpha_dash'],
            'address' => ['required', 'string', 'min:4', 'max:30' ]
        ];
    }
}