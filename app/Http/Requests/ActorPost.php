<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActorPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de actor es obligatorio',
           
            'nombre.min' => 'El nombre de actor es demasiado corto (al menos 5 caracteres)'
           
        ];
    }
}
