<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    protected $primaryKey= "carrito_id";
    public $table="carrito";
    public $timestamps = false;
    public function producto()
    {
        return $this->belongsTo(Producto::class,'producto_id','producto_id');
  
    }
    public function User()
    {
        return $this->belongsTo(User::class,'usu_id','usu_id');
  
    }
    
}
