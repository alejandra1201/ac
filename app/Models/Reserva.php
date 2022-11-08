<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable= ['estado', 'correo','fechaReserva','contacto','descripcionReserva'];
    protected $guarded= ['idCategoria','idSitio'];

    protected $attributes = [
      'correo'=>'jaja@gmail.com'
      ];
     //Relacion uno a muchos (inversa)

  public function sitio(){
    return $this ->belongsTo('App\Models\Sitio');

  }
}
