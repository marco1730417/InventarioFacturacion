<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            
            'nombre'=> 'required|string|max:255',
            'ruc'=> 'required|string|unique:clients,ruc,'.$this->route('cliente')->id.'|max:13|min:10',
            'direccion'=> 'string|max:255',
            'telefono'=> 'string|unique:clients,telefono,'.$this->route('cliente')->id.'|max:9|min:9',
            'email'=> 'string|unique:clients,email,'.$this->route('cliente')->id.'|email',


        ];
    }
    public function messages(){
        return [
            'nombre.required'=>'Este campo es requerido',
            'nombre.string' =>'este campo debe ser string',
            'nombre.max '=>'solo permite 255',
          
           
            'ruc.required'=>'Este campo es requerido',
            'ruc.string' =>'este campo debe ser string',
            'ruc.max '=>'maximo debe ingresar 13 numeros',
            'ruc.min '=>'se requiere de 10 numeros',
            'ruc.unique '=>'Esta valor ya esta registrada',

            'direccion.max'=>'solo permite 255 caracteres',
            'direccion.string' =>'este campo debe ser string',
            
            'telefono.string' =>'este campo debe ser string',
            'telefono.max '=>'se requiere de 9 numeros',
            'telefono.min '=>'se requiere de 9 numeros',
            'telefono.unique '=>'Esta valor ya esta registrada',


            'email.string' =>'este campo debe ser string',
            'email.unique '=>'el correo ya esta registradp',
            'email.max '=>'solo se permite de 255 numeros',
            'email.email '=>'No es un correo electronico valido',
            


            


            
        ];
    }
}
