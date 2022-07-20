<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $primaryKey ='producto_id';
    //  public $incrementing = false;
    public $timestamps = false;
   
  
    public function talla()
    {
        return $this->belongsTo(Tallas::class,'talla_id','talla_id');
  
    }
    
   public function categoria()
   {
       return $this->belongsTo(Categoria::class,'cat_id','cat_id');
   }
  
}
