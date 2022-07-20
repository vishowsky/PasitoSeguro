<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalle_ventas';
    public $timestamps = false;
    protected $primaryKey = 'dv_id';

    protected $fillable = [
        'venta_id',
        'producto_id',
        'dv_cantidad',
        'dv_subtotal',
    ];

}
