<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $primaryKey='id';

   	protected $table='preguntas';

    protected $fillable = ['id', 'pregunta', 'opciones_respuesta', 'modulo_id'];

    protected $hidden = ['created_at','updated_at'];

    //método para la relacion inversa de uno a muchos
    public function modulo(){
        return $this->belongsTo('App\Models\Modulo', 'modulo_id');
    }

    //casting json a array
    protected $casts = [
        'opciones_respuesta' => 'array',
    ];
}
