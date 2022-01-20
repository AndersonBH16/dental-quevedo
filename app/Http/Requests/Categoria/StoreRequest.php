<?php

namespace App\Http\Requests\Categoria;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules(){
        return [
            'nombre_categoria' => 'required|string|max:50',
            'descripcion' => 'required|string|max:250'
        ];
    }

    public function messages(){
        return [
            'nombre_categoria.required' => 'Este campo es requerido',
            'nombre_categoria.string' => 'El valor no es correcto',
            'nombre_categoria.max' => 'Sólo se permiten 50 caracteres',
            'descripcion.required' => 'Este campo es requerido',
            'descripcion.string' => 'El valor no es correcto',
            'descripcion.max' => 'Sólo se permiten 255 caracteres'
        ];
    }

}
