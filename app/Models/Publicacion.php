<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $primaryKey='id';

   	protected $table='publicaciones';

    protected $fillable = ['titulo', 'usuario_id'];

    protected $hidden = ['created_at','updated_at'];

    //inversa uno a muchos Usuario - Publicacion
    public function usuario(){
    	return $this->belongsTo('App\Models\Usuario','usuario_id');
    }
}
