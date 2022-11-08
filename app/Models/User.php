<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    //use HasRoles;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    // protected $guarded= ['image_user' ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //relacion uno a muchos
    public function sitio(){
    return $this->hasMany('App\Models\Sitio');
    }

    public function comentarios (){
        return $this->hasMany('App\Models\Comentario');
    }

//relacion uno a muchos polimorfica
public function imageable(){
    return $this->morphTO();
    
    }
//relacion uno a muchos
public function sitios(){
    return $this->belongsToMany('App\Models\Sitio');
    
    }




}
