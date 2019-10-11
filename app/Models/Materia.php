<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $primaryKey='id';

   	protected $table='materias';

    protected $fillable = ['nombre'];

    protected $hidden = ['created_at','updated_at'];

    //relacion muchos a muchos
    public function estudiantes(){
        return $this->belongsToMany('App\Models\Estudiante');
    }
}
