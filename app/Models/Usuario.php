<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey='id';

   	protected $table='usuarios';

    protected $fillable = ['nombres', 'apellidos', 'pais_id'];

    protected $hidden = ['created_at','updated_at'];

    //inversa uno a muchos Pais - Usuario
    public function pais(){
    	return $this->belongsTo('App\Models\Pais','pais_id');
    }

    //relacion uno a muchos Usuario - Publicacio
     public function publicaciones(){
    	return $this->hasMany('App\Models\Publicacion');
    }
}
