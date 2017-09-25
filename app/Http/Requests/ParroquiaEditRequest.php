<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParroquiaEditRequest extends FormRequest
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
            'parroquia'=>'required|max:500',
            'fecha_post'=>'required',
            'id_zonas'=>'required',
            'contenido'=>'required',
            'traer'=>'required',
            'descripcion'=>'required|max:300',
                     'tipo_parroquia'=>'required',
        ];
    }
}
