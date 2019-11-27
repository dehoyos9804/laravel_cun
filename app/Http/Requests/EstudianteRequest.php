<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteRequest extends FormRequest
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
            'identificacion'=>'required|integer',
            'nombres'=>'required|alpha',
            'apellidos'=>'required|alpha',
            'correo'=>'required|email:rfc',
            'telefono'=>'required|integer'
        ];
    }

    public function attributes(){
        return [
            'identificacion'=>'Numero de identidad',
            'nombres'=>'Nombre Estudiante',
            'apellidos'=>'Apellidos Estudiante',
            'correo'=>'Correo Electronico',
            'telefono'=>'Telefono Estudiante'
        ];
    }

    public function messages(){
        return [
            'required'=>'El :attribute no debe estar vacio',
            'integer'=>'El :attribute solo acepta numeros',
            'alpha'=>'El :attribute solo debe contener letras',
            'email'=> 'El :attribute debe contener @mail.com'
        ];
    }
}
