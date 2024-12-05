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
            'price' => ['required','numeric', 'min:0'],
            'ingredients' => ['required', 'min:3','max:500','string'],
            'visibility' => ['required', 'boolean'],
            'image' =>['nullable','image', 'max:250'],
            'restaurant_id' => ['required','numeric', 'integer', 'exists:restaurants,id'],
        ];
    }
    public function messages(){
        return[
            'name.required' => 'Il nome è un parametro obbligatorio',
            'name.alpha' => 'Il nome deve contenere solo caratteri',
            'name.min' => 'Il nome deve contenere minimo tre caratteri',
            'name.max' => 'Il nome deve contenere massimo tre caratteri',
            'description.required' => 'La descrizione è un parametro obbligatorio',
            'description.min' => 'La descrizione deve contenere minimo 10 caratteri',
            'description.max' => 'La descrizione puó contenere massimo 500 caratteri',
            'price.required' => 'Il prezzo è un parametro obbligatorio',
            'price.integer' => 'Il prezzo deve essere un numero',
            'price.min'=>'Il prezzo non può essere minore di 0',
            'ingredients.required' => 'Gli ingredienti è un parametro obbligatorio',
            'ingredients.min' => 'Gli ingredienti deve contenere minimo 3 caratteri',
            'ingredients.max' => 'Gli ingredienti puó contenere massimo 500 caratteri',
            'visibility.required' => 'La disponibilità è un parametro obbligatorio',
        ];
    }
}