<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParroquiaRequest extends FormRequest
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
            'path'=>'required|file|mimes:jpeg,bmp,png|max:10240',
        ];
    }
}
