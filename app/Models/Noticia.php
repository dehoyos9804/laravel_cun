<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $primaryKey='id';

   	protected $table='noticias';

    protected $fillable = ['titulo', 'contenido'];

    protected $hidden = ['created_at','updated_at'];

    //inversa para el metodo polimorfico
    public function comentarios(){
        return $this->morphMany('App\Models\Comentario','comentable');
    }
}
