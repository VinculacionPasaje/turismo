<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodosRequest extends FormRequest
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
            'titulo_atractivos'=>'required|max:500',
            'contenido_atractivos'=>'required',

            'titulo_hospedajes'=>'required|max:500',
            'contenido_hospedajes'=>'required',

            'titulo_alimentacion'=>'required|max:500',
            'contenido_alimentacion'=>'required',

            'titulo_diversion'=>'required|max:500',
            'contenido_diversion'=>'required',


            'titulo_actividades'=>'required|max:500',
            'contenido_actividades'=>'required',


            'titulo_gastronomia'=>'required|max:500',
            'contenido_gastronomia'=>'required',
            
            
        ];
    }
}
