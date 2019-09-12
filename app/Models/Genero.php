<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $primaryKey='id';

   	protected $table='generos';

    protected $fillable = ['id', 'nombre'];

    protected $hidden = ['created_at','updated_at'];

    //método para la relacion uno a muchos
    public function musicas(){
        return $this->hasMany('App\Models\Musica');
    }

}
