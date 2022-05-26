<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Companias;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompaniasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(){
        return[
            'nombre' => 'required',
            'logo' => 'dimensions:min_width=100,min_height=100'
        ];
    }

    public function messages(){
        return[
            'nombre.required' => 'El nombre es requerido',
            'logo.dimensions' => 'El minimo requerido del logo es de 100 x 100'
        ];
    }
}
