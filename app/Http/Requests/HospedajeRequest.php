<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospedajeRequest extends FormRequest
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
    public function rules()
    {
        return [
            'titulo'=>'required|max:500',
            'estrellas'=>'required',
            'descripcion'=>'required|max:255',
            'direccion'=>'required',
            'telefono'=>'required',
            'fecha_post'=>'required',
            'id_categorias'=>'required',
            'id_parroquias'=>'required',
            'contenido'=>'required',
            'path'=>'required|file|mimes:jpeg,bmp,png|max:10240',
        ];
    }
}
