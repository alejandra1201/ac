<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;

  protected $fillable= ['tipo_promocion', 'descripcionpromocion', 'descuento','fechai','fechaf'];
  protected $guarded= [];

//Relacion uno a muchos (inversa)
public function categoria(){
    return $this ->belongsTo('App\Models\Categoria');

  }

  public function sitio(){
    return $this ->belongsTo('App\Models\Sitio');

  }
//relacion uno a muchos polimorfica
public function images(){
return $this->morphMany('App\Models\image', 'imageable');

}

}
