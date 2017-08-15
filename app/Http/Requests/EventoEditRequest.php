<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoEditRequest extends FormRequest
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
            'titulo'=>'required|max:255',
            'direccion'=>'required',
            'contenido'=>'required',
            'descripcion'=>'required|max:255',
            'hora_inicio'=>'required',
            'parroquias_id'=>'required',
            'categoria_id'=>'required',
            'precio'=>'required',
        ];
    }
}
