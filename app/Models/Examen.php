<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Examen extends Model 
{
   	protected $primaryKey='id';

   	protected $table='examenes';

    protected $fillable = ['preguntas', 'materia', 'profesor', 'estudiante_id'];

    protected $hidden = ['created_at','updated_at'];

    public function estudiante(){
    	return $this->belongsTo('App\Models\Estudiante','estudiante_id');
    }
    
}