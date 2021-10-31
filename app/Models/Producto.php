<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'descripcion', 'unidades',
        'iva', 'PrecioVenta1', 'PrecioVenta2',
        'PrecioVenta3', 'PrecioInventario', 'Utilidad',
        'Margen'
        
        
    ];

}
