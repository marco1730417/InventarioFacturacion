<?php

namespace App\Http\Requests\Producto;

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
    public function rules()
    {
        return [
            'nombre'=> 'required|string|max:255',
            'codigo'=> 'required|string|unique:productos|max:10',
            'descripcion'=> 'required|string|max:100',
            'unidades'=> 'required|double',
            'iva'=> 'required|double',
            'PrecioVenta1'=> 'required|double',
            'PrecioVenta2'=> 'double',
            'PrecioVenta3'=> 'double',
            'PrecioInventario'=> 'double',
            'Utilidad'=> 'double',
            'Margen'=> 'double',
        ];
    }
    public function messages(){
        return [
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'Este campo debe ser string',
            'nombre.max'=>'Este campo es no debe superar los 255 caracteres',
         
         
            'codigo.required'=>'Este campo es requerido',
            'codigo.string' =>'este campo debe ser entero',
            'codigo.max '=>'este campo debe ser menor a 4',
            'codigo.unique '=>'Esta valor ya esta registrada',


            'descripcion.required'=>'Este campo es requerido',
            'descripcion.string' =>'este campo debe ser string',
            'descripcion.max '=>'este campo debe ser menor a 100',

            'unidades.required'=>'Este campo es requerido',
            'unidades.double' =>'este campo debe ser double',

            
            'iva.required'=>'Este campo es requerido',
            'iva.double' =>'este campo debe ser double',

            'PrecioVenta1.required'=>'Este campo es requerido',
            'PrecioVenta1.double' =>'este campo debe ser double',

            
        ];
    }
}
