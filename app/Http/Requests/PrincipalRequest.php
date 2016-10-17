<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrincipalRequest extends FormRequest
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
            'title' =>'min:8|max:60|required|unique:principales',
            'descripcion'=> 'min:20|max:80|required',
            'contenido' => 'min:60|required',
            'expiracion' => 'required',
            'imagen_id' => 'required',
            
            //
        ];
    }
}
