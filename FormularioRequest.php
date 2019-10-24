<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
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

                                            //VALIDACIONES FORMULARIOS

            'pnombre' => 'min:4|max:120|required|alpha',//PRIMER NOMBRE: MINIMO 4, MAXIMO 120, REQUERIDO, SOLO LETRAS

            'snombre' => 'min:4|max:120|required|alpha',//SEGUNDO NOMBRE: MINIMO 4, MAXIMO 120, REQUERIDO, SOLO LETRAS

            'nom_usuario' => 'min:4|max:120|required|alpha',//NOMBRE DE USUARIO: MINIMO 4, MAXIMO 120, REQUERIDO, SOLO LETRAS

            'ciudad' => 'min:4|max:120|required|alpha',//CIUDAD: MINIMO 4, MAXIMO 120, REQUERIDO, SOLO LETRAS

            'estado' => 'min:4|max:120|required|alpha',//ESTADO: MINIMO 4, MAXIMO 120, REQUERIDO, SOLO LETRAS

            'sexo' => 'min:1|max:2|required|numeric',//SEXO: MINIMO 1, MAXIMO 2, REQUERIDO, SOLO NUMEROS

            'status' => 'min:1|max:1|required|alpha'//STATUS: MINIMO 1, MAXIMO 1, REQUERIDO, SOLO LETRAS
            
        ];
    }
}
