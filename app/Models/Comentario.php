<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $primaryKey='id';

   	protected $table='comentarios';

    protected $fillable = ['comentario', 'comentable_id','comentable_type'];

    protected $hidden = ['created_at','updated_at'];

    //metodo polimorfico
    public function comentable(){
        return $this->morphTo();
    }
}
