<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $primaryKey='id';

   	protected $table='peliculas';

    protected $fillable = ['titulo', 'formato'];

    protected $hidden = ['created_at','updated_at'];

    //inversa para el metodo polimorfico
    public function comentarios(){
        return $this->morphMany('App\Models\Comentario','comentable');
    }
}
