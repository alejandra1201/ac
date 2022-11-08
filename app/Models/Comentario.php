<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'tipo_comentario','mensaje'];
    protected $guarded= ['idSitio','idUser'];

    
    //Relacion uno a muchos (inversa)
    public function user(){
      return $this ->belongsTo(User::class);
  
    }
  
    public function sitio(){
      return $this ->belongsTo(Sitio::class);
  
    }
  
  
    
}
