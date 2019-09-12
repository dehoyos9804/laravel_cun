<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $primaryKey='id';

   	protected $table='modulos';

    protected $fillable = ['id', 'nombre'];

    protected $hidden = ['created_at','updated_at'];

    //método para la relacion uno a muchos
    public function preguntas(){
        return $this->hasMany('App\Models\Pregunta');
    }

    //accessors
    public function getFullNameAttribute(){
        return "{$this->id} {$this->nombre}";
    }

    //accessors que me obtiene todas las preguntas 
    public function getListaPreguntaAttribute(){
        return $this->preguntas;
    }

    //mutator colocar en mayuscula los nombres de la clase
    public function setNameAttribute($value){
        $this->attributes['nombre'] = strtolower($value);
    }

    
}
