<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $primaryKey='id';

   	protected $table='paises';

    protected $fillable = ['nombre'];

    protected $hidden = ['created_at','updated_at'];

    //relacion uno a muchos
    public function usuarios(){
    	return $this->hasMany('App\Models\Usuario');
    }
    
    //relacion con Through
    public function publicaciones(){
        return $this->hasManyThrough('App\Models\Publicacion', 'App\Models\Usuario');
    }
}
