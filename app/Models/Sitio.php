<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitio extends Model
{
    use HasFactory;

    protected $fillable= ['nombre_sitio', 'direccion', 'municipio', 'Contacto',  'descripcion','rutas','sitio_web'];
    protected $guarded= [];

    public function comentario (){
        return $this->hasMany('App\Models\Comentario');
    }
    public function servicio (){
        return $this->hasMany('App\Models\Servicio');
    }
    public function tipo_sitio (){
        return $this->hasMany('App\Models\Tipo Sitio');
    }
    public function reserva (){
        return $this->hasMany('App\Models\Reserva');
    }
   //relacion uno a muchos polimorfica
   public function images(){
    return $this->morphMany('App\Models\Image', 'imageable');
    
    }
     //relacion uno a muchos
    public function users(){
    return $this->belongsToMany('App\Models\User');
    
    }
    public function  categoria(){
        return $this ->belongsTo('App\Models\Categoria');
    
      }


}
