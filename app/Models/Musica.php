<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $primaryKey='id';

   	protected $table='musicas';

    protected $fillable = ['id', 'nombre', 'artista', 'genero_id'];

    protected $hidden = ['created_at','updated_at'];

    //método para la relacion inversa de uno a muchos
    public function genero(){
        return $this->belongsTo('App\Models\Genero', 'genero_id');
    }
}
